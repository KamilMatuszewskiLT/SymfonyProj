<?php
/**
 * Created by PhpStorm.
 * User: Kamil Matuszewski
 * Date: 20.06.2018
 * Time: 08:47
 */

namespace AppBundle\Service;

use \AppBundle\Service\IsArrayOfType;


class AveragesCalculator
{
    public function __construct() {}

    /*
     * Calculates average of an array of integers.
     * @property array marks An array of integers
     */
    public static function calculateAverage(array $marks)
    {
        AveragesCalculator::standardArrayChecks($marks);
        if(!(IsArrayOfType::all($marks, 'is_int'))){
            throw new \InvalidArgumentException ('Not all mark values in array are of type int: ' . var_dump($marks));
        }
            $marks = array_filter($marks);
            $average = array_sum($marks)/count($marks);

        return $average;
    }
    public static function standardArrayChecks($args){
        if(!(is_array($args))){
            throw new \InvalidArgumentException ('Given parameter is not an array: ' . var_dump($args));
        }
        if(!(count($args) > 0)) {
            throw new \InvalidArgumentException ('Count of array given as method argument is < 0');
        }
        return true;
    }
}