<?php

namespace Tests\Feature\Problems;

use Tests\TestCase;

class MatrizTest extends TestCase
{
    public function testItCanSeeMatrixView(): void
    {
        $response = $this->get(route('problems.matriz'));

        $response->assertOk();
        $response->assertViewIs('problems.matriz');
        $response->assertSeeTextInOrder([
            '3. Matriz',
            'Ingrese valores entre 1 y 9 en la matriz',
        ]);
    }
}
