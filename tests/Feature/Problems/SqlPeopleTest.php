<?php

namespace Tests\Feature\Problems;

use Tests\TestCase;

class SqlPeopleTest extends TestCase
{
    public function testItCanSeeQueryPeople(): void
    {
        $response = $this->get(route('querys.people'));

        $response->assertOk();
    }
}
