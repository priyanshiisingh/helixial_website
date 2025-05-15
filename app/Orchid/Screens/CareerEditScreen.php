<?php

namespace App\Orchid\Screens;

use App\Models\Career;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class CareerEditScreen extends Screen
{

    public $career;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Career $career): iterable
    {
        return [
            'career' => $career
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->career->exists ? 'Edit career' : 'Creating a new career';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Create career')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->career->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->career->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->career->exists),
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
                Input::make('career.title')
                    ->title('Title')
                    ->placeholder('Attractive but mysterious title')
                    ->help('Specify a short descriptive name for this career.'),
                Quill::make('career.description')
                    ->title('Description')
                    ->help('Specify a description for this career.'),
                Select::make('career.active')
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
        $careerData = $request->get('career');

        $career = Career::updateOrCreate(['id' => $this->career->id ?? null], $careerData);

        return redirect()->route('platform.careers');
    }

    public function remove()
    {
        $this->career->delete();

        Alert::info('You have successfully deleted the career.');

        return redirect()->route('platform.careers');
    }
}
