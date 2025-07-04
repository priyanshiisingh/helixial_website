<?php

namespace App\Traits;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Log;

trait RichEditor
{
    private $editorImagePath = "/images/editor-images/";

    public static function bootRichEditor()
    {
        static::saving(function ($model) {
            $richEditorFields = method_exists($model, 'getRichEditorFields')? $model->getRichEditorFields() : '';
            if ($richEditorFields) {
                foreach ($richEditorFields as $field) {
                    if ($model->{$field} != '' && $model->isDirty($field)) {
                        $oldFieldValue = $model->getOriginal($field);
                        $oldImageFiles = [];
                        if($oldFieldValue){
                           $oldImageFiles = $model->getImageFilesFromContent($oldFieldValue);
                        }
                        $model->{$field} = $model->makeBodyContent($model->{$field}, $oldImageFiles);
                    }else{
                        $model->{$field} = '';
                    }

                }
            }
        });

        static::deleting(function ($model) {
            $richEditorFields = method_exists($model, 'getRichEditorFields') ? $model->getRichEditorFields() : '';
            if ($richEditorFields) {
                foreach ($richEditorFields as $field) {
                    $imageFiles = $model->getImageFilesFromContent($model->getOriginal($field));
                    if(is_array(($imageFiles))){
                        foreach ($imageFiles as $imageFile) {
                            $filePath = public_path() . $model->editorImagePath . $imageFile;
                            if (file_exists($filePath)) {
                                unlink($filePath);
                            }
                        }
                    }
                }
            }
        });
    }

    private function getImageFilesFromContent($content)
    {
        if (!empty($content)) {
            libxml_use_internal_errors(true);
            $dom = new \DomDocument();
            $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $imageFiles = $dom->getElementsByTagName('img');

            $imageFilesArray = [];
            foreach ($imageFiles as $image) {
                $src = $image->getAttribute('src');
                $imageFilesArray[] = basename($src);
            }

            return $imageFilesArray;
        }
    }


    public function makeBodyContent($content,$oldImageFiles)
    {
        $dom = new \DomDocument();
        @$dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $imageFiles = $dom->getElementsByTagName('img');
        $newImageFiles = [];

        foreach ($imageFiles as $index => $image) {
            $src = $image->getAttribute('src');

            $parsedUrl = parse_url($src);
            if (isset($parsedUrl['scheme']) && in_array($parsedUrl['scheme'], ['http', 'https'])) {
                // If the image is an HTTP URL, don't modify the src attribute
                $newImageFiles[] = $src;
            } else {
                // Move the image to the permanent directory
                $destinationPath = $this->editorImagePath . basename($src);
                $sourcePath = public_path().$src;
                $permPath = public_path() . $destinationPath;
                if (file_exists($sourcePath)) {
                    rename(public_path().$src, $permPath);
                }

                $image->removeAttribute('src');
                $image->setAttribute('src',  $destinationPath);
                // Preserve existing classes and append a new class
                $existingClasses = $image->getAttribute('class');
                $image->setAttribute('class', $existingClasses);

                $existingalt = $image->getAttribute('alt');
                $image->setAttribute('alt', $existingalt);

                $newImageFiles[] = basename($destinationPath);
            }
        }

        $imageFilesToRemove = array_diff($oldImageFiles, $newImageFiles);
        foreach ($imageFilesToRemove as $imageFile) {
            $filePath = public_path() . $this->editorImagePath . $imageFile;
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }

        return $dom->saveHTML();
    }



}
