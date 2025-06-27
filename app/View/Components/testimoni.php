<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class testimoni extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $name,
        public string $job,
        public string $text,
        public string $img,
        public ?string $className = '',
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.testimoni');
    }
}
