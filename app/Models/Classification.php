<?php

namespace App\Models;

use App\Models\Builders\ClassificationBuilder;
use App\Models\Enums\ClassificationType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classification extends Model
{
    use HasFactory;

    protected $guarded = false;

    protected $casts = [
        'type' => ClassificationType::class,
    ];

    public function newEloquentBuilder($query): ClassificationBuilder
    {
        return new ClassificationBuilder($query);
    }

    public function parent()
    {
        return $this->belongsTo(Classification::class, 'parent_id', 'id');
    }

    public function children()
    {
        return $this->hasMany(Classification::class, 'parent_id', 'id');
    }

    public function formattedIdentifier(): string
    {
        return sprintf("%02d", $this->identifier);
    }
}
