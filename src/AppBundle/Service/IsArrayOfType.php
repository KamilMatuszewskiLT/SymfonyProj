<?php
/**
 * Created by PhpStorm.
 * User: Kamil Matuszewski
 * Date: 20.06.2018
 * Time: 10:21
 */

namespace AppBundle\Service;


class IsArrayOfType
{
    /**
     * Tell whether all members of $array validate the $predicate.
     *
     * all(array(1, 2, 3),   'is_int'); -> true
     * all(array(1, 2, 'a'), 'is_int'); -> false
     */
    public static function all($array, $predicate) {
        return array_filter($array, $predicate) === $array;
    }

    /**
     * Tell whether any member of $array validates the $predicate.
     *
     * any(array(1, 'a', 'b'),   'is_int'); -> true
     * any(array('a', 'b', 'c'), 'is_int'); -> false
     */
    public static function any($array, $predicate) {
        return array_filter($array, $predicate) !== array();
    }
}