<?php

namespace App\Core\Shared;

trait Makeable
{
    public static function make(...$args): static
    {
        return new static(...$args);
    }
}
