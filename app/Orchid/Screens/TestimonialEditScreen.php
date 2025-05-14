<?php

namespace App\Orchid\Screens;

use App\Models\Testimonial;
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

class TestimonialEditScreen extends Screen
{
    public $testimonial;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Testimonial $testimonial): iterable
    {
        return [
            'testimonial' => $testimonial
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->testimonial->exists ? 'Edit testimonial' : 'Creating a new testimonial';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Create testimonial')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->testimonial->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->testimonial->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->testimonial->exists),
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
                Input::make('testimonial.name')
                    ->title('Title')
                    ->help('Specify a short descriptive name for this testimonial.'),
                Input::make('testimonial.author')
                    ->title('Author')
                    ->placeholder('Author name')
                    ->help('Specify a short descriptive author name for this testimonial.'),
                Quill::make('testimonial.description')
                    ->title('Description')
                    ->help('Specify a description for this testimonial.'),
                Upload::make('testimonial.attachments')
                    ->title('Testimonial Image')
                    ->maxFiles(1)
                    ->acceptedFiles('image/*')
                    ->value($this->testimonial->attachments),
                Select::make('testimonial.active')
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
        $testimonialData = $request->get('testimonial');

        $testimonial = Testimonial::updateOrCreate(['id' => $this->testimonial->id ?? null], $testimonialData);

        // Get the image IDs from the request
        $imageIds = $request->input('testimonial.attachments', []);

        // Filter out non-existing attachment IDs
        $existingAttachments = Attachment::whereIn('id', $imageIds)->pluck('id')->toArray();

        // Sync images properly (removes deleted images)
        $testimonial->attachments()->sync($existingAttachments);

        return redirect()->route('platform.testimonials');
    }

    public function remove()
    {
        $this->testimonial->delete();

        Alert::info('You have successfully deleted the testimonial.');

        return redirect()->route('platform.testimonials');
    }
}
