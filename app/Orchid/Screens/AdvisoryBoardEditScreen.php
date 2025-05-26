<?php

namespace App\Orchid\Screens;

use App\Models\AdvisoryBoard;
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

class AdvisoryBoardEditScreen extends Screen
{
    public $advisoryBoard;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(AdvisoryBoard $advisoryBoard): iterable
    {
        return [
            'advisoryBoard' => $advisoryBoard
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->advisoryBoard->exists ? 'Edit member' : 'Creating a new member';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Create member')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->advisoryBoard->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->advisoryBoard->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->advisoryBoard->exists),
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
                Input::make('advisoryBoard.name')
                    ->title('Name')
                    ->placeholder('Attractive but mysterious name')
                    ->help('Specify a short descriptive name for this member.'),
                Quill::make('advisoryBoard.description')
                    ->title('Description')
                    ->help('Specify a description for this member.'),
                Upload::make('advisoryBoard.attachments')
                    ->title('Member Image')
                    ->maxFiles(1)
                    ->acceptedFiles('image/*')
                    ->value($this->advisoryBoard->attachments),
                Select::make('advisoryBoard.active')
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
        $advisoryBoardData = $request->get('advisoryBoard');

        $advisoryBoard = AdvisoryBoard::updateOrCreate(['id' => $this->advisoryBoard->id ?? null], $advisoryBoardData);

        // Get the image IDs from the request
        $imageIds = $request->input('advisoryBoard.attachments', []);

        // Filter out non-existing attachment IDs
        $existingAttachments = Attachment::whereIn('id', $imageIds)->pluck('id')->toArray();

        // Sync images properly (removes deleted images)
        $advisoryBoard->attachments()->sync($existingAttachments);

        return redirect()->route('platform.advisoryBoard');
    }

    public function remove()
    {
        $this->advisoryBoard->delete();

        Alert::info('You have successfully deleted the advisoryBoard.');

        return redirect()->route('platform.advisoryBoard');
    }
}
