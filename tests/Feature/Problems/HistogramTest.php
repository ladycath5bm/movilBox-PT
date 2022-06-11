<?php

namespace Tests\Feature\Problems;

use Tests\TestCase;

class HistogramTest extends TestCase
{
    public function test(): void
    {
        $response = $this->get(route('problems.histogram'));

        $response->assertOk();
        $response->assertViewIs('problems.histogram');
        $response->assertSee('Generar');
        $response->assertSee('Regresar');
        $response->assertSeeTextInOrder([
            '2. Histograma',
            'Ingrese un arreglo, con valores entre 1 y 5',
            'Arreglo:',
        ]);
    }
}
