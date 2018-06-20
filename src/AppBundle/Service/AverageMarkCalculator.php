<?php
/**
 * Created by PhpStorm.
 * User: Kamil Matuszewski
 * Date: 20.06.2018
 * Time: 08:47
 */

namespace AppBundle\Service;

use \AppBundle\Service\IsArray;


class AverageMarkCalculator
{
    public function __construct() {}

    public function calculateAverage(array $marks)
    {
        if(!(count($marks) > 0)) {
            throw new \InvalidArgumentException ('Count of array given as method argument is < 0');
        }
        if(IsArray::all($marks, 'is_int')){
            throw new \InvalidArgumentException ('Not all values in array are of type int');
        }
            $marks = array_filter($marks);
            $average = array_sum($marks)/count($marks);

        return $average;
    }
}