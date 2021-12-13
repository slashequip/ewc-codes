<?php

namespace App\Static;

use Lorisleiva\Actions\Concerns\AsController;

class ShowLandingPage
{
    use AsController;

    public function handle()
    {
        return view('landing');
    }
}
