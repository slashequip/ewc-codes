<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

/**
 * @property-read int $id
 * @property-read UuidInterface $uuid
 * @property-read string $chapter
 * @property-read string $chapter_title
 * @property-read string $sub_chapter
 * @property-read string $sub_chapter_title
 * @property-read string $code
 * @property-read string $code_description
 * @property-read bool $hazardous
 * @property-read string $full_code
 * @property-read float $density
 * @property-read Carbon $created_at
 * @property-read string $last_updated_at
 * @property-read Carbon $updated_at
 */
class EwcCode extends Model
{
    use HasFactory;
    use Searchable;

    protected $guarded = [];

    protected $casts = [
        'hazardous' => 'boolean',
        'created_at' => 'date:c',
        'updated_at' => 'date:c',
        'density' => 'float',
    ];

    protected $appends = [
        'full_code',
        'last_updated_at',
    ];

    protected $hidden = [
        'id', 'updated_at', 'created_at'
    ];

    public function getUuidAttribute(string $value): UuidInterface
    {
        return Uuid::fromString($value);
    }

    public function getChapterAttribute($value): string
    {
        return sprintf("%02d", $value);
    }

    public function getSubChapterAttribute($value): string
    {
        return sprintf("%02d", $value);
    }

    public function getCodeAttribute($value): string
    {
        return sprintf("%02d", $value);
    }

    public function getFullCodeAttribute(): string
    {
        return sprintf(
            "%s %s %s%s",
            $this->chapter,
            $this->sub_chapter,
            $this->code,
            $this->getHazardousText(),
        );
    }

    public function getLastUpdatedAtAttribute(): string
    {
        return $this->updated_at->toIso8601String();
    }

    private function getHazardousText(): string
    {
        return $this->hazardous ? '*' : '';
    }
    
    public function getScoutKey(): string
    {
        return $this->uuid->toString();
    }

    public function getScoutKeyName(): string
    {
        return 'uuid';
    }

    public function toSearchableArray(): array
    {
        $data = $this->toArray();

        // We don't want dates being searched.
        unset($data['last_updated_at']);

        // Exception for hazardous because we want to search the name.
        if ($data['hazardous']) {
            $data['hazardous'] = 'hardardous';
        } else {
            unset($data['hazardous']);
        }

        return $data;
    }
}
