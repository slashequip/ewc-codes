<?php

namespace App\Codes\Resources;

use App\Models\EwcCode;
use Illuminate\Http\Resources\Json\JsonResource;

class EwcCodeResource extends JsonResource
{
    /** @var EwcCode */
    public $resource;

    public function toArray($request): array
    {
        return [
            "uuid" => $this->resource->uuid,
            "chapter" => $this->resource->chapter,
            "chapter_title" => $this->resource->chapter_title,
            "sub_chapter" => $this->resource->sub_chapter,
            "sub_chapter_title" => $this->resource->sub_chapter_title,
            "code" => $this->resource->code,
            "code_description" => $this->resource->code_description,
            "hazardous" => $this->resource->hazardous,
            "density" => (float) $this->resource->density,
            "full_code" => $this->resource->full_code,
            "last_updated_at" => $this->resource->last_updated_at,
        ];
    }
}
