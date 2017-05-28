<?php
/**
 * Created by PhpStorm.
 * User: bo
 * Date: 28/05/17
 * Time: 5:21 PM
 */

namespace App;


class AngularTM
{
    public function degrees($str)
    {
        $times = explode(':', $str);
        $hours = (int)$times[0] % 12;
        $minutes = $times[1];
        $seconds = array_key_exists(2, $times) ? $times[2] : 0;

        $hoursAng = $hours * 30 + ($minutes/60) * 30;
        $minutesAnug = $minutes * 6;

        $degrees = abs($minutesAnug - $hoursAng);
        return $degrees . ' degrees';
    }
}