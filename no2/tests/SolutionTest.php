<?php

namespace no2\tests;

use no2\src\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{

    private $solution;

    public function setUp(): void
    {
        parent::setUp();
        $this->solution = new Solution();
    }

    public function testLengthOfLongestSubstring1()
    {
        $this->assertEquals(3, $this->solution->lengthOfLongestSubstring("abcabcbb"));
    }

    public function testLengthOfLongestSubstring2()
    {
        $this->assertEquals(1, $this->solution->lengthOfLongestSubstring("bbbbb"));
    }

    public function testLengthOfLongestSubstring3()
    {
        $this->assertEquals(3, $this->solution->lengthOfLongestSubstring("pwwkew"));
    }

    public function testLengthOfLongestSubstring4()
    {
        $this->assertEquals(0, $this->solution->lengthOfLongestSubstring(""));
    }

    public function testLengthOfLongestSubstring5()
    {
        $this->assertEquals(1, $this->solution->lengthOfLongestSubstring(" "));
    }

    public function testLengthOfLongestSubstring6()
    {
        $this->assertEquals(3, $this->solution->lengthOfLongestSubstring("dvdf"));
    }

    public function testLengthOfLongestSubstring7()
    {
        $this->assertEquals(5, $this->solution->lengthOfLongestSubstring("tmmzuxt"));
    }
}
