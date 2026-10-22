<?php

it('allows API requests from other origins', function () {
    $this->withHeader('Origin', 'https://example.com')
        ->get('/api/codes')
        ->assertOk()
        ->assertHeader('Access-Control-Allow-Origin', '*');
});

it('responds to API CORS preflight requests', function () {
    $this->withHeaders([
        'Origin' => 'https://example.com',
        'Access-Control-Request-Method' => 'GET',
        'Access-Control-Request-Headers' => 'Accept',
    ])->options('/api/codes')
        ->assertNoContent()
        ->assertHeader('Access-Control-Allow-Origin', '*')
        ->assertHeader('Access-Control-Allow-Methods', 'GET');
});
