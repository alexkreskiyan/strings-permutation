<?php

namespace permutation;

use PHPUnit\Framework\TestCase;

final class PermutationTest extends TestCase
{
    public function testEmptyStringsAreNotPermutatable()
    {
        $this->assertFalse(Permutation::isPermutation(null, null));
        $this->assertFalse(Permutation::isPermutation(null, "a"));
        $this->assertFalse(Permutation::isPermutation("a", null));
    }

    public function testDifferentStringLengthsAreNotPermutable()
    {
        $this->assertFalse(Permutation::isPermutation("a", "aa"));
    }

    public function testNonAnagramsAreNotPermutable()
    {
        $this->assertFalse(Permutation::isPermutation("gainly", "trying"));
    }

    public function testAnagramsArePermutable()
    {
        $this->assertTrue(Permutation::isPermutation("gainly", "laying"));
    }
}