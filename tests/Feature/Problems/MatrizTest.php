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
        $response->assertSee('Generar');
        $response->assertSee('Regresar');
        $response->assertSeeTextInOrder([
            '3. Matriz',
            'Ingrese valores entre 1 y 9 en la matriz',
        ]);
    }

    public function testIcanSeeRouteGenerated(): void{  
        $myArray = [
            'one' => 1,
            'two' => 2,
            'three' => 9,
            'four' => 2,
            'five' => 5,
            'six' => 3,
            'seven' => 5,
            'eight' => 1,
            'nine' => 5,
        ];

        $response = $this->get(route('problems.matriz.generate', $myArray));

        $response->assertOk();
        $response->assertViewIs('problems.matriz');
        $response->assertViewHas('matriz');
    }
}
