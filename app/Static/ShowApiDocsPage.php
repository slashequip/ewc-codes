<?php

namespace App\Static;

use App\Models\EwcCode;
use App\Static\Breadcrumbs\BreadcrumbBuilder;
use App\Static\Breadcrumbs\Crumb;
use Lorisleiva\Actions\Concerns\AsController;

class ShowApiDocsPage
{
    use AsController;

    public function handle()
    {
        $breadCrumbs = BreadcrumbBuilder::make()
            ->add(Crumb::make("Home", action(ShowLandingPage::class)))
            ->add(Crumb::make("API Docs"));

        return view('docs', [
            'breadcrumbs' => $breadCrumbs,
            'code_count' => EwcCode::query()->count(),
            'codes' => EwcCode::query()
                ->take(2)
                ->inRandomOrder()
                ->get(),
        ]);
    }
}
