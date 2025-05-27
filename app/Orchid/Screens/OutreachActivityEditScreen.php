<?php

namespace App\Orchid\Screens;

use App\Models\OutreachActivity;
use App\Models\Blog;
use App\Models\BoardCategory;
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

class OutreachActivityEditScreen extends Screen
{
    public $outreachActivity;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(OutreachActivity $outreachActivity): iterable
    {
        return [
            'outreachActivity' => $outreachActivity
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->outreachActivity->exists ? 'Edit activity' : 'Creating a new activity';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Create activity')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->outreachActivity->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->outreachActivity->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->outreachActivity->exists),
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
                Input::make('outreachActivity.title')
                    ->title('Title')
                    ->placeholder('Attractive but mysterious title')
                    ->help('Specify a short descriptive title for this activity.'),
                Quill::make('outreachActivity.description')
                    ->title('Description')
                    ->help('Specify a description for this activity.'),
                Upload::make('outreachActivity.attachments')
                    ->title('activity Image')
                    ->maxFiles(1)
                    ->acceptedFiles('image/*')
                    ->value($this->outreachActivity->attachments),
                Select::make('outreachActivity.active')
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
        $outreachActivityData = $request->get('outreachActivity');

        $outreachActivity = OutreachActivity::updateOrCreate(['id' => $this->outreachActivity->id ?? null], $outreachActivityData);

        // Get the image IDs from the request
        $imageIds = $request->input('outreachActivity.attachments', []);

        // Filter out non-existing attachment IDs
        $existingAttachments = Attachment::whereIn('id', $imageIds)->pluck('id')->toArray();

        // Sync images properly (removes deleted images)
        $outreachActivity->attachments()->sync($existingAttachments);

        return redirect()->route('platform.outreachActivity');
    }

    public function remove()
    {
        $this->outreachActivity->delete();

        Alert::info('You have successfully deleted the activity.');

        return redirect()->route('platform.outreachActivity');
    }
}
