<?php

namespace App\Static;

use App\Models\EwcCode;
use Lorisleiva\Actions\Concerns\AsController;

class ShowApiDocsPage
{
    use AsController;

    public function handle()
    {
        return view('docs', [
            'code_count' => EwcCode::query()->count(),
            'codes' => EwcCode::query()
                ->take(2)
                ->inRandomOrder()
                ->get(),
        ]);
    }
}
