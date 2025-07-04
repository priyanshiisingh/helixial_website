<?php

namespace App\Orchid\Screens;

use App\Models\BoardCategory;
use App\Models\CaseStudy;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class BoardCategoryEditScreen extends Screen
{
    public $boardCategory;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(BoardCategory $boardCategory): iterable
    {
        return [
            'boardCategory' => $boardCategory
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->boardCategory->exists ? 'Edit Case Study' : 'Creating a new Case Study';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Create case study')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->boardCategory->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->boardCategory->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->boardCategory->exists),
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
                Input::make('boardCategory.name')
                    ->title('Name')
                    ->placeholder('Attractive but mysterious anme')
                    ->help('Specify a short descriptive name for this case study.'),
                Select::make('boardCategory.active')
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
        $boardCategoryData = $request->get('boardCategory');

        $boardCategory = BoardCategory::updateOrCreate(['id' => $this->boardCategory->id ?? null], $boardCategoryData);

        return redirect()->route('platform.boardCategory');
    }

    public function remove()
    {
        $this->boardCategory->delete();

        Alert::info('You have successfully deleted the case study.');

        return redirect()->route('platform.boardCategory');
    }
}
