<?php

namespace App\Codes\Actions;

use App\Codes\Resources\EwcCodeResource;
use App\Models\EwcCode;
use Lorisleiva\Actions\Concerns\AsController;

class ShowCode
{
    use AsController;

    public function handle(string $uuid)
    {
        $code = EwcCode::query()
            ->where('uuid', $uuid)
            ->firstOrFail();

        return new EwcCodeResource($code);
    }
}
