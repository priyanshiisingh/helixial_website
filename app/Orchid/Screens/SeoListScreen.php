<?php
namespace App\Orchid\Screens;

use App\Models\Seo;
use Orchid\Screen\TD;
use Orchid\Screen\Screen;
use Orchid\Screen\Actions\Link;
use Orchid\Support\Facades\Layout;

class SeoListScreen extends Screen
{
    public function query(): iterable
    {
        return [
            'seos' => Seo::latest()->get()
        ];
    }

    public function name(): ?string
    {
        return 'SEO Manager';
    }

    public function commandBar(): iterable
    {
        return [
            Link::make('Add SEO')->icon('plus')->route('platform.seo.create')
        ];
    }

    public function layout(): iterable
    {
        return [
            Layout::table('seos', [
                TD::make('name'),
                TD::make('value')->width('70%'),
                TD::make(__('Actions'))
                    ->render(fn (Seo $seo) => Link::make('Edit')
                        ->route('platform.seo.edit', $seo->id)
                        ->icon('pencil')),
            ])
        ];
    }
}
