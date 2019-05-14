<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

class DataTest extends TestCase
{
    /**
     * @dataProvider additionProvider
     * @dataProvider additionProviderTwo
     * @dataProvider additionProviderFile
     */
    public function testAdd($a, $b, $expected)
    {
        $this->assertEquals($expected, $a + $b);
    }

    public function additionProvider()
    {
        return [
            [0, 0, 0],
            [0, 1, 1],
            [12, 8, 20],
        ];
    }

    public function additionProviderTwo()
    {
        return [
            'one' => [0, 0, 0],
            'two' => [1, 2, 3],
        ];
    }

    public function additionProviderFile()
    {
        return new CsvFileIterator('../assets/data.csv');
    }
}
