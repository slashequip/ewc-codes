<?php

use App\Models\EwcCode;
use Illuminate\Foundation\Mix;
use Illuminate\Support\HtmlString;

beforeEach(function () {
    $this->mock(Mix::class)
        ->shouldReceive('__invoke')
        ->andReturnUsing(fn ($path) => new HtmlString('/'.$path));
});

it('renders the landing page', function () {
    $this->get('/')
        ->assertOk()
        ->assertSee('Welcome to EWC Codes');
});

it('renders the API documentation with code examples', function () {
    $codes = EwcCode::factory(2)->create();

    $this->get('/docs')
        ->assertOk()
        ->assertSee('Get All 2 Waste Codes')
        ->assertSee($codes->first()->uuid->toString());
});
