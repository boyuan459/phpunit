<?php
/**
 * Created by PhpStorm.
 * User: bo
 * Date: 28/05/17
 * Time: 4:12 PM
 */

namespace App;


class Instagram
{
    public function same($arr)
    {
        $uniArr = array_unique($arr);
        return count($uniArr) == 1 ? true : false;
    }

    public function instagram($str)
    {
        if (empty($str)) return 'NOTAGRAM';

        $strarr = str_split(preg_replace("/[^A-Za-z]/", "", strtolower($str)));
        $len = count($strarr);
        $occur = array_fill(0, $len, 0);
        for($i=0;$i<$len-1;$i++) {
            for($j=$i+1;$j<$len;$j++) {
                if ($strarr[$i] === $strarr[$j]) {
                    $occur[$i]++;
                    $occur[$j]++;
                }
            }
        }

        if ($this->same($occur)) {
            if (current($occur) == 0) {
                return 'HETEROGRAM';
            } else {
                return 'ISOGRAM';
            }
        }
        return 'NOTAGRAM';
    }
}