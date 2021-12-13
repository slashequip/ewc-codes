<?php

namespace App\Codes\Actions;

use App\Codes\Resources\EwcCodeResource;
use App\Models\EwcCode;
use Lorisleiva\Actions\Concerns\AsController;

class ListCodes
{
    use AsController;

    public function handle()
    {
        $codes = EwcCode::query()
            ->get();

        return EwcCodeResource::collection($codes);
    }
}
