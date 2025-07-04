<?php

namespace App\Orchid\Screens;

use App\Models\BoardCategory;
use App\Models\CaseStudy;
use Orchid\Screen\Actions\Button;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

class BoardCategoryScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'boardCategories' => BoardCategory::latest()->get(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Board Categories';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
         return [
        ModalToggle::make('Add Category')
            ->modal('categoryModal')
            ->method('create')
            ->icon('plus'),
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
            Layout::table('boardCategories', [
            TD::make('category.name', 'Name')->sort()->render(function (BoardCategory $boardCategory) {
                    return Link::make($boardCategory->name)
                        ->route('platform.boardCategory.edit', $boardCategory);
                }),
                        TD::make('Actions')
                ->alignRight()
                ->render(function (BoardCategory $boardCategory) {
                    return Button::make('Delete category')
                        ->confirm('After deleting, the board category will be gone forever.')
                        ->method('delete', ['boardCategory' => $boardCategory->id]);
                })
        ]),
                Layout::modal('categoryModal', Layout::rows([
                    Input::make('category.name')
                        ->title('Name')
                        ->placeholder('Enter category name')
                        ->help('The name of the category to be created.'),

                    Select::make('category.active')
                    ->title('Status')
                    ->options([
                        '0' => 'Inactive',
                        '1' => 'Active',
                    ])
                    ->placeholder('Select status'),
                ]))
                    ->title('Create category')
                    ->applyButton('Add category'),
            ];

    }

    public function delete(BoardCategory $boardCategory)
    {
        $boardCategory->delete();
    }

    public function create(Request $request)
{
    // Validate form data, save category to database, etc.
    $request->validate([
        'category.name' => 'required|max:255',
    ]);

    $category = new BoardCategory();
    $category->name = $request->input('category.name');
     $category->active = $request->input('category.active');
    $category->save();
}
}
