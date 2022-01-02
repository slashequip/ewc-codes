<?php

namespace App\Static\Breadcrumbs;

use App\Core\Shared\Makeable;

class Crumb
{
    use Makeable;

    private ?int $trim = null;

    public function __construct(
        public string $title,
        public ?string $url = null,
    ) {}

    public function getFullTitle()
    {
        return $this->title;
    }

    public function getTitle(): string
    {
        if ($this->trim && strlen($this->title) > $this->trim) {
            return substr($this->title, 0, $this->trim) . "...";
        }

        return $this->title;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function trimTo(int $length = 20): static
    {
        $this->trim = $length;

        return $this;
    }
}
