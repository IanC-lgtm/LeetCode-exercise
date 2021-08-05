<?php

namespace no3\tests;

use no3\src\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{

    private $solution;

    public function setUp(): void
    {
        parent::setUp();
        $this->solution = new Solution();
    }

    public function testLongestPalindrome1()
    {
        // both are ok
        $this->assertEquals('aba', $this->solution->longestPalindrome('babad'));
    }

    public function testLongestPalindrome2()
    {
        $this->assertEquals('bb', $this->solution->longestPalindrome('cbbd'));
    }

    public function testLongestPalindrome3()
    {
        $this->assertEquals('a', $this->solution->longestPalindrome('a'));
    }

    public function testLongestPalindrome4()
    {
        $this->assertEquals('c', $this->solution->longestPalindrome('ac'));
    }

    public function testLongestPalindrome5()
    {
        $this->assertEquals("tattarrattat", $this->solution->longestPalindrome('tattarrattat'));
    }


    public function testLongestPalindromeC1()
    {
        $this->assertEquals('bbbbbb', $this->solution->longestPalindrome('bbbbbb'));
    }

    public function testLongestPalindromeC2()
    {
        $this->assertEquals('cccccc', $this->solution->longestPalindrome('abacccccc'));
    }

    public function testLongestPalindromeC3()
    {
        $this->assertEquals('bacab', $this->solution->longestPalindrome('bacab'));
    }


}
