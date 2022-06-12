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

    public function testIcanSeeHistogramGenerated(): void{
        
        $myArray = [
            'p_one' => 1,
            'p_two' => 1,
            'p_three' => 1,
            'p_four' => 1,
            'p_five' => 1,
            'p_six' => 1,
            'p_seven' => 1,
            'p_eight' => 1,
            'p_nine' => 1,
            'p_ten' => 1,
        ];

        $response = $this->get(route('problems.histogram.generate', $myArray));

        $response->assertOk();
        $response->assertViewIs('problems.histogram');
        $response->assertViewHas('histogram');
    }
}
