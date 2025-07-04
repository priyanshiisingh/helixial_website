<?php

namespace App\Orchid\Screens;

use App\Models\Testimonial;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

class TestimonialScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'testimonials' => Testimonial::latest()->get(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Testimonials';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
                Link::make('Add Testimonial')->route('platform.testimonial.create')
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
            Layout::table('testimonials', [
                TD::make('name', 'name')->sort()->render(function (Testimonial $testimonial) {
                    return Link::make($testimonial->name)
                        ->route('platform.testimonial.edit', $testimonial);
                }),

                TD::make('Actions')
                ->alignRight()
                ->render(function (Testimonial $testimonial) {
                    return Button::make('Delete testimonial')
                        ->confirm('After deleting, the testimonial will be gone forever.')
                        ->method('delete', ['testimonial' => $testimonial->id]);
                }),
            ])
        ];
    }
    public function delete(Testimonial $testimonial)
    {
        $testimonial->delete();
    }
}
