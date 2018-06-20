<?php
/**
 * Created by PhpStorm.
 * User: Kamil Matuszewski
 * Date: 20.06.2018
 * Time: 10:21
 */

namespace Tests\AppBundle\Service;


class IsArray
{
    /**
     * Tell whether all members of $array validate the $predicate.
     *
     * all(array(1, 2, 3),   'is_int'); -> true
     * all(array(1, 2, 'a'), 'is_int'); -> false
     */
    function all($array, $predicate) {
        return array_filter($array, $predicate) === $array;
    }

    /**
     * Tell whether any member of $array validates the $predicate.
     *
     * any(array(1, 'a', 'b'),   'is_int'); -> true
     * any(array('a', 'b', 'c'), 'is_int'); -> false
     */
    function any($array, $predicate) {
        return array_filter($array, $predicate) !== array();
    }
}