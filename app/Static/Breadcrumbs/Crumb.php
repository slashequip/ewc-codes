<?php

namespace App\Static\Breadcrumbs;

use App\Core\Shared\Makeable;

class Crumb
{
    use Makeable;

    public function __construct(
        public string $title,
        public ?string $url = null,
    ) {}
}
