<?php

namespace AppBundle\Service;

use AppBundle\Service\IsArrayOfType;
use AppBundle\Service\AveragesCalculator;


class AverageMarkCalculator
{
    public function __construct() {}

    /*
     * Calculates average of an array of Mark objects.
     *  @property array marks An array of objects of class Mark
     */
    public function calculateMarkAverages(array $marks)
    {
        $avrgCalc = new AveragesCalculator();
        $avrgCalc->standardArrayChecks($marks);
        for($i = 0 ; $i < count($marks) ; $i++ ){
            if(!(is_a($marks[$i], 'AppBundle\Entity\Mark'))){
                throw new \InvalidArgumentException ('Not all members of array are of type Mark::class: ' . var_dump($marks));
            }
            if($marks[$i]->getMarkValue() < 1 || $marks[$i]->getMarkValue() > 6){
                throw new \InvalidArgumentException ('Not all array members are valued between 1 and 6: ' . var_dump($marks));
            }
        }

        $marksToInts = array();
        for($i = 0 ; $i < count($marks) ; $i++ ){
            $marksToInts[$i] = $marks[$i]->getMarkValue();
        }

        return $avrgCalc->calculateAverage($marksToInts);
    }
}