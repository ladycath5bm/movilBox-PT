<?php

namespace App\Actions;

class MatrizAction
{
    public function generate(array $data)
    {
        $matriz = [
            [
                $data['one'], $data['two'], $data['three'],
            ],
            [
                $data['four'], $data['five'], $data['six'],
            ],
            [
                $data['seven'], $data['eight'], $data['nine'],
            ]
        ];
        
        $sum = 27;

        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                for ($k = -1; $k <= 1; $k++) {
                    for ($l = -1; $l <= 1; $l++) {
                        if (($j + $k) >= 0 && ($j + $l) >= 0 && ($j + $k) < 3 && ($j + $l) < 3 && ($i + 1) < 2 && ($i + 2) < 3 && ($i + 1) >= 0 && ($i + 2) >= 0) {
                            $aux = $matriz[$j][$i] + $matriz[$j + $k][$i + 1] + $matriz[$j + $l][$i + 2];

                            if ($aux < $sum) {
                                $sum= $aux;
                                $elementos = [
                                    'suma' => $aux,
                                    'elementos' => [
                                        $matriz[$j][$i],
                                        $matriz[$j + $k][$i + 1],
                                        $matriz[$j + $l][$i + 2],
                                    ]
                                ];
                            }
                        } else {
                            continue;
                        }
                    }
                }
            }
        }
        return $elementos;
    }
}
