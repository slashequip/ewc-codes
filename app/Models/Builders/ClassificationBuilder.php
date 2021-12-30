<?php

namespace App\Models\Builders;

use App\Models\Enums\ClassificationType;
use Illuminate\Database\Eloquent\Builder;

class ClassificationBuilder extends Builder
{
    public function whereType(ClassificationType $type): static
    {
        return $this->where('type', $type->value);
    }

    public function whereIdentifier(int $identifier): static
    {
        return $this->where('identifier', $identifier);
    }
}
