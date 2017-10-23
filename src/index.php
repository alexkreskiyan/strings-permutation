<?php

namespace permutation;

if ($argc != 3)
    die("Give 2 strings to compare");

include("Permutation.php");

print (Permutation::isPermutation($argv[1], $argv[2]) ? "true" : "false")."\n";