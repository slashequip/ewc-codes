<?php

namespace App\Static;

use App\Models\Classification;
use App\Models\Enums\ClassificationType;
use App\Static\Breadcrumbs\BreadcrumbBuilder;
use App\Static\Breadcrumbs\Crumb;

class ShowChapterPage
{
    public function __invoke(string $chapter)
    {
        /** @var Classification $chapter */
        $chapter = Classification::query()
            ->whereType(ClassificationType::CHAPTER)
            ->whereIdentifier((int) ltrim($chapter, "0"))
            ->firstOrFail();

        $breadCrumbs = BreadcrumbBuilder::make()
            ->add(Crumb::make("Home", action(ShowLandingPage::class)))
            ->add(Crumb::make("Browse", action(ShowBrowsePage::class)))
            ->add(Crumb::make(sprintf('%02d', $chapter->identifier)));

        return view('chapter', [
            'breadcrumbs' => $breadCrumbs,
            'chapter' => $chapter,
            'children' => $chapter->children,
        ]);
    }
}
