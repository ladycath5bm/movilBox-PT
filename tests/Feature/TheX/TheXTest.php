<?php

namespace Tests\Feature\TheX;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TheXTest extends TestCase
{
    public function testItCanSeeProblemTheX(): void
    {
        $response = $this->get(route('problems.thex'));

        $response->assertok();
        $response->assertViewIs('problems.thex');
    }
}
