<?php

namespace Tests\Feature\TheX;

use App\Actions\GenerateXAction;
use Tests\TestCase;

class TheXTest extends TestCase
{
    public function testItCanSeeProblemTheX(): void
    {
        $response = $this->get(route('problems.thex'));

        $response->assertok();
        $response->assertViewIs('problems.thex');
        $response->assertSeeTextInOrder([
            '1. La X',
            'Ingrese una dimensión para construir la X',
            'Dimensión:',
        ]);
        $response->assertSee('Generar');
        $response->assertSee('Regresar');
    }

    public function testIcanSeeTheXGenerated(): void{
        
        $dim = 5;

        $response = $this->get(route('problems.thex.generated', ['dimention' => $dim]));

        $response->assertOk();
        $response->assertViewIs('problems.thex');
        $response->assertViewHas('arrayX');

        $collect = (new GenerateXAction())->generate($dim);
        $this->assertEquals($dim, sizeof($collect));
    }
}
