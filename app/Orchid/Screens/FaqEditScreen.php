<?php

namespace App\Orchid\Screens;

use App\Models\FAQ;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class FaqEditScreen extends Screen
{
    public $faq;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(FAQ $faq): iterable
    {
        return [
            'faq' => $faq
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->faq->exists ? 'Edit FAQ' : 'Creating a new FAQ';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Create FAQ')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->faq->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->faq->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->faq->exists),
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
                TextArea::make('faq.question')
                    ->title('Question')
                    ->help('Specify a FAQ question'),
                TextArea::make('faq.answer')
                    ->title('Answer')
                    ->help('Specify a answer for this FAQ.'),
                Select::make('faq.active')
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
        $faqData = $request->get('faq');

        $faq = FAQ::updateOrCreate(['id' => $this->faq->id ?? null], $faqData);

        return redirect()->route('platform.faqs');
    }

    public function remove()
    {
        $this->faq->delete();

        Alert::info('You have successfully deleted the faq.');

        return redirect()->route('platform.faqs');
    }
}
