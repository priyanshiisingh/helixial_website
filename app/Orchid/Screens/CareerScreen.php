<?php

namespace App\Orchid\Screens;

use App\Models\Career;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

class CareerScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'careers' => Career::latest()->get(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Careers';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
                Link::make('Add Career')->route('platform.career.create')
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
            Layout::table('careers', [
                TD::make('title', 'Title')->sort()->render(function (Career $career) {
                    return Link::make($career->title)
                        ->route('platform.career.edit', $career);
                }),

                TD::make('Actions')
                ->alignRight()
                ->render(function (Career $career) {
                    return Button::make('Delete career')
                        ->confirm('After deleting, the career will be gone forever.')
                        ->method('delete', ['career' => $career->id]);
                }),
            ])
        ];
    }

    public function delete(Career $career)
    {
        $career->delete();
    }
}
