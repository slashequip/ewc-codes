<?php

it('limits API clients to 60 requests per minute', function () {
    for ($request = 0; $request < 60; $request++) {
        $this->get('/api/codes')->assertOk();
    }

    $this->get('/api/codes')
        ->assertStatus(429)
        ->assertHeader('X-RateLimit-Limit', '60')
        ->assertHeader('X-RateLimit-Remaining', '0');
});
