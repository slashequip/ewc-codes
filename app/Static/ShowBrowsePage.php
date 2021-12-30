<?php

namespace App\Static;

use App\Models\Classification;
use App\Models\Enums\ClassificationType;
use App\Static\Breadcrumbs\BreadcrumbBuilder;
use App\Static\Breadcrumbs\Crumb;

class ShowBrowsePage
{
    public function __invoke()
    {
        $breadCrumbs = BreadcrumbBuilder::make()
            ->add(Crumb::make("Home", action(ShowLandingPage::class)))
            ->add(Crumb::make("Browse"));

        return view('browse', [
            'breadcrumbs' => $breadCrumbs,
            'chapters' => Classification::query()
                ->where('type', ClassificationType::CHAPTER)
                ->orderBy('identifier')
                ->get(),
        ]);
    }
}
