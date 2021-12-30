<?php

use App\Models\EwcCode;
use Ramsey\Uuid\Uuid;

it('can list all known codes', function () {
    // Given we have several codes
    $codeOne = EwcCode::factory()
        ->create([
            "uuid" => Uuid::uuid4()->toString(),
            "chapter" => "1",
            "chapter_title" => "Chapter One Title",
            "sub_chapter" => "1",
            "sub_chapter_title" => "Chapter One Sub Title",
            "code" => "1",
            "code_description" => "Code One Description",
            "density" => 0.1234,
            "hazardous" => true,
        ]);
    $codeTwo = EwcCode::factory()
        ->create([
            "uuid" => Uuid::uuid4()->toString(),
            "chapter" => "2",
            "chapter_title" => "Chapter Two Title",
            "sub_chapter" => "2",
            "sub_chapter_title" => "Chapter Two Sub Title",
            "code" => "2",
            "code_description" => "Code Two Description",
            "density" => 0.5678,
            "hazardous" => false,
        ]);

    // When we call the API
    $response = test()->get('/api/codes/');

    // Then we see a valid response
    $response->assertOk();

    // And we see the expected data
    $response->assertExactJson([
        [
            "uuid" => $codeOne->uuid->toString(),
            "full_code" => "01 01 01*",
            "chapter" => "01",
            "chapter_title" => "Chapter One Title",
            "sub_chapter" => "01",
            "sub_chapter_title" => "Chapter One Sub Title",
            "code" => "01",
            "code_description" => "Code One Description",
            "density" => 0.1234,
            "hazardous" => true,
            "last_updated_at" => $codeOne->updated_at->toIso8601String(),
        ],
        [
            "uuid" => $codeTwo->uuid->toString(),
            "full_code" => "02 02 02",
            "chapter" => "02",
            "chapter_title" => "Chapter Two Title",
            "sub_chapter" => "02",
            "sub_chapter_title" => "Chapter Two Sub Title",
            "code" => "02",
            "code_description" => "Code Two Description",
            "density" => 0.5678,
            "hazardous" => false,
            "last_updated_at" => $codeTwo->updated_at->toIso8601String(),
        ],
    ]);
});
