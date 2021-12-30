<?php

namespace App\Static\Breadcrumbs;

use App\Core\Shared\Makeable;

class BreadcrumbBuilder
{
    use Makeable;

    private $crumbs = [];

    public function add(Crumb $crumb): static
    {
        $this->crumbs[] = $crumb;

        return $this;
    }

    public function all(): array
    {
        return $this->crumbs;
    }
}
