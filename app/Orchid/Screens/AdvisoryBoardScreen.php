<?php

namespace App\Orchid\Screens;

use App\Models\AdvisoryBoard;
use App\Models\Blog;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

class AdvisoryBoardScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'boardmembers' => AdvisoryBoard::latest()->get(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Advisory Board';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
            return [
                Link::make('Add Board member')->route('platform.advisoryBoard.create')
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
            Layout::table('boardmembers', [
                TD::make('name', 'Name')->sort()->render(function (AdvisoryBoard $member) {
                    return Link::make($member->name)
                        ->route('platform.advisoryBoard.edit', $member);
                }),

                TD::make('Actions')
                ->alignRight()
                ->render(function (AdvisoryBoard $member) {
                    return Button::make('Delete member')
                        ->confirm('After deleting, the member will be gone forever.')
                        ->method('delete', ['member' => $member->id]);
                }),
            ])
        ];
    }

    public function delete(AdvisoryBoard $member)
    {
        $member->delete();
    }
}
