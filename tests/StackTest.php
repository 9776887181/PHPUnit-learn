<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function testPushAndPop()
    {
        $stack = [];
        $this->assertEquals(0, count($stack));

        array_push($stack, 'foo');
        $this->assertEquals(1, count($stack));
        $this->assertEquals('foo', $stack[count($stack) - 1]);

        $this->assertEquals('foo', array_pop($stack));
        $this->assertEquals(0, count($stack));
    }

    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);

        return $stack;
    }

    /**
     * @depends testEmpty
     */
    public function testPush(array $stack)
    {
        array_push($stack, 'abc');

        $this->assertEquals(1, count($stack));
        $this->assertEquals('abc', $stack[count($stack) - 1]);

        return $stack;
    }

    /**
     * @depends testPush
     */
    public function testPop(array $stack)
    {
        $this->assertEquals('abc', array_pop($stack));
        $this->assertEquals(0, count($stack));
    }
}
