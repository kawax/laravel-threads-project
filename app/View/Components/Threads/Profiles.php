<?php

namespace App\View\Components\Threads;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Revolution\Threads\Facades\Threads;

class Profiles extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public array $profiles = [])
    {
        $this->profiles = Threads::token(session('threads_token'))->profiles();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.threads.profiles');
    }
}
