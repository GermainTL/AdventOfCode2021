<?php

namespace Day1\SecondPuzzle\Tests;

use Day1\SecondPuzzle\Solver;
use PHPUnit\Framework\TestCase;

class SolverTest extends TestCase
{
    /**
     * @dataProvider solveProvider
     */
    public function testSolve(string $inputFileName, int $expectedOutput)
    {
        $solution = new Solver();
        $actualOutput = $solution->solve($inputFileName);

        $this->assertEquals($expectedOutput,$actualOutput);
    }

    public function solveProvider()
    {
        yield 'Given example should return given answer' => [
            'file name' => 'sampleInput.txt',
            'expected output' => 5
        ];
        yield 'Given input should return the answer to puzzle' => [
            'file name' => 'input.txt',
            'expected output' => 1633
        ];
    }
}