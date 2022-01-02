<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ClassificationCard extends Component
{
    public function __construct(
        public string $identifier,
        public string $title,
        public string $subTitle,
        public ?string $url = null,
        public ?string $counterTitle = null,
        public ?int $counter = null,
    ) {}

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.classification-card');
    }
}
