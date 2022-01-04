<?php

namespace App\Static;

use App\Models\Classification;
use App\Models\Enums\ClassificationType;
use App\Models\EwcCode;
use App\Static\Breadcrumbs\BreadcrumbBuilder;
use App\Static\Breadcrumbs\Crumb;

class ShowSubChapterPage
{
    public function __invoke(string $chapter, string $subChapter)
    {
        /** @var Classification $chapter */
        $chapter = Classification::query()
            ->whereType(ClassificationType::CHAPTER)
            ->whereIdentifier((int) ltrim($chapter, "0"))
            ->firstOrFail();

        /** @var Classification $subChapter */
        $subChapter = Classification::query()
            ->whereType(ClassificationType::SUB_CHAPTER)
            ->where('parent_id', $chapter->id)
            ->whereIdentifier((int) ltrim($subChapter, "0"))
            ->firstOrFail();

        $breadCrumbs = BreadcrumbBuilder::make()
            ->add(Crumb::make("Home", action(ShowLandingPage::class)))
            ->add(Crumb::make("Browse", action(ShowBrowsePage::class)))
            ->add(Crumb::make(sprintf('%02d - %s', $chapter->identifier, $chapter->title))->trimTo())
            ->add(Crumb::make(sprintf('%02d - %s', $subChapter->identifier, $subChapter->title))->trimTo(50));

        return view('sub-chapter', [
            'breadcrumbs' => $breadCrumbs,
            'chapter' => $chapter,
            'subChapter' => $subChapter,
            'codes' => EwcCode::query()
                ->where('chapter', $chapter->identifier)
                ->where('sub_chapter', $subChapter->identifier)
                ->get()
                ->sortBy(function (EwcCode $code) {
                    return (int) ltrim($code->code, '0');
                }),
        ]);
    }
}
