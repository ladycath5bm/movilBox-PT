<?php 

namespace App\Actions;

class HistogramAction
{
    public function generate(array $array): array
    {
        $counts = array_count_values($array);
        $histogram = [];

        for ($i = 1; $i <= 5; $i++) {

            if(isset($counts[$i])) {
                $histogram = array_merge($histogram, [$counts[$i]]);
            }else {
                $histogram = array_merge($histogram, [0]);
            }
        }

        return $histogram;
    }
}
