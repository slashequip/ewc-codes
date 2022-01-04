<?php

use App\Models\Classification;
use App\Models\Enums\ClassificationType;
use App\Models\EwcCode;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class SeedClassificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Chapters
        EwcCode::query()
            ->toBase()
            ->selectRaw("max(chapter) as chapter")
            ->selectRaw("max(chapter_title) as chapter_title")
            ->groupBy(['chapter'])
            ->get()
            ->each(function (object $chapter) {
                Classification::query()
                    ->create([
                        'uuid' => Uuid::uuid4()->toString(),
                        'type' => ClassificationType::CHAPTER,
                        'identifier' => (int) ltrim($chapter->chapter, "0"),
                        'title' => $chapter->chapter_title,
                    ]);
            });

        // Sub Chapters
        EwcCode::query()
            ->toBase()
            ->selectRaw("max(chapter) as chapter")
            ->selectRaw("max(sub_chapter) as sub_chapter")
            ->selectRaw("max(sub_chapter_title) as sub_chapter_title")
            ->groupBy(['chapter', 'sub_chapter'])
            ->get()
            ->each(function (object $chapter) {
                Classification::query()
                    ->create([
                        'uuid' => Uuid::uuid4()->toString(),
                        'parent_id' => Classification::query()
                            ->where('type', ClassificationType::CHAPTER)
                            ->where('identifier', (int) ltrim($chapter->chapter, "0"))
                            ->value('id'),
                        'type' => ClassificationType::SUB_CHAPTER,
                        'identifier' => (int) ltrim($chapter->sub_chapter, "0"),
                        'title' => $chapter->sub_chapter_title,
                    ]);
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('classifications')->truncate();
    }
}
