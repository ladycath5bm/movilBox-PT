<?php

namespace Tests\Feature\Problems;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SqlDepartmentTest extends TestCase
{
    public function testItCanSeeQuerySQL(): void
    {
        $response = $this->get(route('querys.departments'));

        $response->assertOk();
        $response->assertViewIs('querys.departments');
    }
}
