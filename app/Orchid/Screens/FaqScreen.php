<?php

namespace App\Orchid\Screens;

use App\Models\FAQ;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

class FaqScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'faqs' => FAQ::latest()->get(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Faqs';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Add FAQ')->route('platform.faq.create')
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
            Layout::table('faqs', [
                TD::make('question', 'Question')->sort()->render(function (FAQ $faq) {
                    return Link::make($faq->question)
                        ->route('platform.faq.edit', $faq);
                }),

                TD::make('Actions')
                ->alignRight()
                ->render(function (FAQ $faq) {
                    return Button::make('Delete faq')
                        ->confirm('After deleting, the faq will be gone forever.')
                        ->method('delete', ['faq' => $faq->id]);
                }),
            ])
        ];
    }

    public function delete(FAQ $faq)
    {
        $faq->delete();
    }
}
