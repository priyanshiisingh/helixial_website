<?php

namespace App\Orchid\Screens;

use App\Models\Blog;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Screen;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;

class BlogScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'blogs' => Blog::latest()->get(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Blogs';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
            return [
                Link::make('Add Blog')->route('platform.blog.create')
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
            Layout::table('blogs', [
                TD::make('title', 'Title')->sort()->render(function (Blog $blog) {
                    return Link::make($blog->title)
                        ->route('platform.blog.edit', $blog);
                }),

                TD::make('Actions')
                ->alignRight()
                ->render(function (Blog $blog) {
                    return Button::make('Delete blog')
                        ->confirm('After deleting, the blog will be gone forever.')
                        ->method('delete', ['blog' => $blog->id]);
                }),
            ])
        ];
    }

    public function delete(Blog $blog)
    {
        $blog->delete();
    }
}
