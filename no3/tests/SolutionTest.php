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
        $this->assertEquals($this->solution->longestPalindrome('babad'), 'bab');
    }

    public function testLongestPalindrome2()
    {
        $this->assertEquals($this->solution->longestPalindrome('cbbd'), 'bb');
    }

    public function testLongestPalindrome3()
    {
        $this->assertEquals($this->solution->longestPalindrome('a'), 'a');
    }

    public function testLongestPalindrome4()
    {
        $this->assertEquals($this->solution->longestPalindrome('ac'), 'a');
    }

    public function testLongestPalindromeC1()
    {
        $this->assertEquals($this->solution->longestPalindrome('bbbbbb'), 'bbbbbb');
    }

}
