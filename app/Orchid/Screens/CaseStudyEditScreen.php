<?php

namespace App\Orchid\Screens;

use App\Models\CaseStudy;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class CaseStudyEditScreen extends Screen
{
    public $caseStudy;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(CaseStudy $caseStudy): iterable
    {
        return [
            'caseStudy' => $caseStudy
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->caseStudy->exists ? 'Edit Case Study' : 'Creating a new Case Study';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Create case study')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->caseStudy->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->caseStudy->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->caseStudy->exists),
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
                Input::make('caseStudy.title')
                    ->title('Title')
                    ->placeholder('Attractive but mysterious title')
                    ->help('Specify a short descriptive name for this case study.'),
                Quill::make('caseStudy.description')
                    ->title('Description')
                    ->help('Specify a description for this case study.'),
                Select::make('caseStudy.active')
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
        $caseStudyData = $request->get('caseStudy');

        $caseStudy = CaseStudy::updateOrCreate(['id' => $this->caseStudy->id ?? null], $caseStudyData);

        return redirect()->route('platform.caseStudy');
    }

    public function remove()
    {
        $this->caseStudy->delete();

        Alert::info('You have successfully deleted the case study.');

        return redirect()->route('platform.caseStudy');
    }
}
