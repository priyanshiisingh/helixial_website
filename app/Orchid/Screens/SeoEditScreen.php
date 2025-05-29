<?php

namespace App\Orchid\Screens;

use App\Models\seo;
use Illuminate\Http\Request;
use Orchid\Attachment\Models\Attachment;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class SeoEditScreen extends Screen
{
    public $seo;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Seo $seo): iterable
    {
        return [
            'seo' => $seo
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->seo->exists ? 'Edit seo' : 'Creating a new seo';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Create seo')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->seo->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->seo->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->seo->exists),
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
                Input::make('seo.name')
                    ->title('Name')
                    ->required()
                    ->help('Specify a short descriptive name for this seo.'),
                TextArea::make('seo.value')
                    ->title('Value')
                    ->help('Specify a value for this seo.'),

            ])
        ];
    }

    public function createOrUpdate(Request $request)
    {
        $seoData = $request->get('seo');

        $seo = Seo::updateOrCreate(['id' => $this->seo->id ?? null], $seoData);

        return redirect()->route('platform.seo');
    }

    public function remove()
    {
        $this->seo->delete();

        Alert::info('You have successfully deleted the seo.');

        return redirect()->route('platform.seo');
    }
}
