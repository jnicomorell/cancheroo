<?php

namespace Tests\Feature;

use Tests\TestCase;

class ApiRoutesTest extends TestCase
{
    public function test_search_route_returns_success(): void
    {
        $response = $this->get('/api/search');
        $response->assertStatus(200);
    }
}
