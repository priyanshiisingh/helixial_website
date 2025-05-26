<?php

namespace App\Orchid\Screens;

use App\Models\AdvisoryBoard;
use App\Models\Blog;
use App\Models\OutreachActivity;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

class OutreachActivityScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'outreachActivity' => OutreachActivity::latest()->get(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Outreach Activities';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
            return [
                Link::make('Add Activity')->route('platform.outreachActivity.create')
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
            Layout::table('outreachActivity', [
                TD::make('title', 'Title')->sort()->render(function (OutreachActivity $activity) {
                    return Link::make($activity->title)
                        ->route('platform.outreachActivity.edit', $activity);
                }),

                TD::make('Actions')
                ->alignRight()
                ->render(function (OutreachActivity $activity) {
                    return Button::make('Delete activity')
                        ->confirm('After deleting, the activity will be gone forever.')
                        ->method('delete', ['activity' => $activity->id]);
                }),
            ])
        ];
    }

    public function delete(OutreachActivity $activity)
    {
        $activity->delete();
    }
}
