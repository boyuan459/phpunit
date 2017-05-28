<?php
/**
 * Created by PhpStorm.
 * User: bo
 * Date: 28/05/17
 * Time: 3:20 PM
 */

namespace App;


class Palindrome
{
    public function palindrome($str)
    {
        if (empty($str)) return 'UNDETERMINED';

        $strarr = str_split(preg_replace("/[^A-Za-z0-9]/", "", strtolower($str)));
        $len = count($strarr);
        for($i=0;$i<$len/2;$i++) {
            if ($strarr[$i] !== $strarr[$len-1-$i]) {
                return 'FALSE';
            }
        }
        return 'TRUE';
    }
}