<?php

namespace permutation;

class Permutation {
    public static function isPermutation($a, $b) {
        if (!isset($a) || !isset($b) || !is_string($a) || !is_string($b))
            return false;

        //different length is unacceptable
        if (strlen($a) != strlen($b))
            return false;

        //create associative array fo chars' count
        $chars = array();
        for ($i = 0; $i < strlen($a); $i++) {
            if (array_key_exists($a[$i], $chars))
                $chars[$a[$i]]++;
            else
                $chars[$a[$i]] = 1;
            if (array_key_exists($b[$i], $chars))
                $chars[$b[$i]]--;
            else
                $chars[$b[$i]] = -1;
        }

        return count(array_filter($chars)) > 0 ? false : true;
    }
}