<?php

use App\Models\EwcCode;
use Ramsey\Uuid\Uuid;

it('returns a 404 when code does not exist', function () {
    // When we call the API for an unknown uuid
    $response = test()->get("/api/codes/" . Uuid::uuid4()->toString());

    // Then we see the expected response
    $response->assertStatus(404);
});

it('can list a known code', function () {
    // Given we have several codes
    $code = EwcCode::factory()
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

    // When we call the API
    $response = test()->get("/api/codes/{$code->uuid->toString()}");

    // Then we see the expected data
    $response->assertExactJson([
        "uuid" => $code->uuid->toString(),
        "full_code" => "01 01 01*",
        "chapter" => "01",
        "chapter_title" => "Chapter One Title",
        "sub_chapter" => "01",
        "sub_chapter_title" => "Chapter One Sub Title",
        "code" => "01",
        "code_description" => "Code One Description",
        "density" => 0.1234,
        "hazardous" => true,
        "last_updated_at" => $code->updated_at->toIso8601String(),
    ]);
});
