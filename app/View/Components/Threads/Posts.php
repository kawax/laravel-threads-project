<?php

namespace App\View\Components\Threads;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Revolution\Threads\Facades\Threads;

class Posts extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public array $posts = [])
    {
        $this->posts = Threads::token(session('threads_token'))->posts();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.threads.posts');
    }
}
