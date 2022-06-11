<?php 

namespace App\Actions;

class HistogramAction
{
    public function generate(array $array): array
    {
        $histogram = array_count_values($array);
        
        return $histogram;
    }
}
