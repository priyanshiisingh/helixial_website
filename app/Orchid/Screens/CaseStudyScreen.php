<?php

namespace App\Orchid\Screens;

use App\Models\CaseStudy;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

class CaseStudyScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'caseStudies' => CaseStudy::latest()->get(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Case Studies';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
         return [
                Link::make('Add Case Study')->route('platform.caseStudy.create')
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
            Layout::table('caseStudies', [
                TD::make('title', 'Title')->sort()->render(function (CaseStudy $caseStudy) {
                    return Link::make($caseStudy->title)
                        ->route('platform.caseStudy.edit', $caseStudy);
                }),

                TD::make('Actions')
                ->alignRight()
                ->render(function (CaseStudy $caseStudy) {
                    return Button::make('Delete case study')
                        ->confirm('After deleting, the caseStudy will be gone forever.')
                        ->method('delete', ['caseStudy' => $caseStudy->id]);
                }),
            ])
        ];
    }

    public function delete(CaseStudy $caseStudy)
    {
        $caseStudy->delete();
    }
}
