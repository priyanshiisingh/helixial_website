<?php

namespace App\Orchid\Screens;

use App\Models\Contact;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

class MapDataScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Map Data';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
        ModalToggle::make('Add Task')
            ->modal('mapDataModal')
            ->method('edit')
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
            Layout::table('inquries', [
                TD::make('name', 'Name'),
                TD::make('email', 'Email'),
                TD::make('subject', 'Subject'),
                TD::make('phone', 'Phone'),
                TD::make('msg', 'Message'),
                TD::make('Actions')
                ->alignRight()
                ->render(function (Contact $inquiry) {
                    return Button::make('Delete inquiry')
                        ->confirm('After deleting, the inquiry will be gone forever.')
                        ->method('delete', ['inquiry' => $inquiry->id]);
                }),
            ])
        ];
    }
}
