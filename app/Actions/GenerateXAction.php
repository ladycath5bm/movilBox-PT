<?php 

namespace App\Actions;

use Illuminate\Support\Collection;

class GenerateXAction 
{

    public function generate(int $dimention): Collection
    {
        $array = [];

        for ($i = 0; $i < $dimention; $i++) {
            $aux = '';

            for ($j = 0; $j < $dimention; $j++) {
                if ($i == $j || $j == $dimention - $i -1) {
                    $aux .= 'X';
                }else {
                    $aux .= '_';
                }
            }
            
            $array = array_merge($array, [$aux]);
        }

        return collect($array);
    }
}