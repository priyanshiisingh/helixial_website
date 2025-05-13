<?php

namespace App\Orchid\Screens;

use App\Models\Blog;
use Illuminate\Http\Request;
use Orchid\Attachment\Models\Attachment;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class BlogEditScreen extends Screen
{
     public $blog;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Blog $blog): iterable
    {
        return [
            'blog' => $blog
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
         return $this->blog->exists ? 'Edit blog' : 'Creating a new blog';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Create blog')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->blog->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->blog->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->blog->exists),
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::rows([
                Input::make('blog.title')
                    ->title('Title')
                    ->placeholder('Attractive but mysterious title')
                    ->help('Specify a short descriptive name for this blog.'),
                Input::make('blog.author')
                    ->title('Author')
                    ->placeholder('Author name')
                    ->help('Specify a short descriptive name for this blog.'),
                Quill::make('blog.description')
                    ->title('Description')
                    ->help('Specify a description for this blog.'),
                Upload::make('blog.attachments')
                    ->title('blog Image')
                    ->maxFiles(1)
                    ->acceptedFiles('image/*')
                    ->value($this->blog->attachments),
                Select::make('blog.active')
                    ->title('Status')
                    ->options([
                        '0' => 'Inactive',
                        '1' => 'Active',
                    ])
                    ->placeholder('Select status'),


            ])
        ];
    }

    public function createOrUpdate(Request $request)
    {
        $blogData = $request->get('blog');

        $blog = Blog::updateOrCreate(['id' => $this->blog->id ?? null], $blogData);

        // Get the image IDs from the request
        $imageIds = $request->input('blog.image', []);

        // Filter out non-existing attachment IDs
        $existingAttachments = Attachment::whereIn('id', $imageIds)->pluck('id')->toArray();

        // Sync images properly (removes deleted images)
        $blog->attachments()->sync($existingAttachments);

        return redirect()->route('platform.blogs');
    }

    public function remove()
    {
        $this->blog->delete();

        Alert::info('You have successfully deleted the blog.');

        return redirect()->route('platform.blogs');
    }
}
