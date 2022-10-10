<?php

namespace Kata;

use PHPUnit\Framework\TestCase;
use Kata\FizzBuzz;

class FizzBuzzTest extends TestCase
{
    private $fizzBuzz;

    protected function setUp(): void
    {
        $this->fizzBuzz = new FizzBuzz();
    }

    public function testHandleIsArray(): void
    {
        $this->assertIsArray($this->fizzBuzz->handle());
    }

    public function testHandleArraySizeReturn100(): void
    {
        $this->assertCount(FizzBuzz::ITEMS, $this->fizzBuzz->handle());
    }

    public function testHandleArrayContainsFizzAtPosition3ReturnTrue(): void
    {
        $position = 3;
        $results = $this->fizzBuzz->handle();
        $this->assertTrue($results[$position - 1] === FizzBuzz::LABEL_FIZZ);
    }

    public function testCalculatePosition3ReturnFizz(): void
    {
        $this->assertEquals(FizzBuzz::LABEL_FIZZ, $this->fizzBuzz->calculateOutput(3));
    }

    public function testCalculatePosition5ReturnBuzz(): void
    {
        $this->assertEquals(FizzBuzz::LABEL_BUZZ, $this->fizzBuzz->calculateOutput(5));
    }

    public function testCalculatePosition15ReturnFizzBuzz(): void
    {
        $this->assertEquals(FizzBuzz::LABEL_FIZZ . FizzBuzz::LABEL_BUZZ, $this->fizzBuzz->calculateOutput(15));
    }
}
