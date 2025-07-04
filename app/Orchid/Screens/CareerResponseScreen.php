<?php

namespace App\Orchid\Screens;

use App\Models\Career;
use App\Models\CareerResponse;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

class CareerResponseScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'responses' => CareerResponse::latest()->get(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Career Responses';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::table('responses', [
                TD::make('name', 'Name'),
                TD::make('email', 'Email'),

                TD::make('job_title', 'Job Title'),


                TD::make('Actions')
                ->alignRight()
                ->render(function (CareerResponse $response) {
                    return Button::make('Delete response')
                        ->confirm('After deleting, the response will be gone forever.')
                        ->method('delete', ['response' => $response->id]);
                }),
            ])
        ];
    }

    public function delete(CareerResponse $response)
    {
        $response->delete();
    }
}
