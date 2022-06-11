<?php

namespace Tests\Feature\Main;

use Tests\TestCase;

class MainWindowIndexTest extends TestCase
{
    public function testItCanSeeIndex(): void
    {
        $response = $this->get(route('main.index'));

        $response->assertOk();
        $response->assertViewIs('main.index');
        $response->assertSeeTextInOrder([
            'Prueba BackEnd MovilBox',
            'Nombre Aspirante:',
            'Correo Aspirante:',
            'Celular Aspirante:',
            'Menú',
            'La x',
            'Histograma',
            'Matriz',
            'SQL departamentos',
            'SQL Json',
            'SQL trigger',
            'SQL Json',
        ]);
    }
}
