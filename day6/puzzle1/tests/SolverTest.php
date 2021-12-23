<?php

namespace Day6\Puzzle1\Tests;

use Day6\Puzzle1\Solver;
use PHPUnit\Framework\TestCase;

class SolverTest extends TestCase
{
    /**
     * @dataProvider solveProvider
     */
    public function testSolve(string $inputFilePath, int $expectedOutput)
    {
        $solver = new Solver($inputFilePath);
        $actualOutput = $solver->solve(80);

        $this->assertEquals($expectedOutput, $actualOutput);
    }

    public function solveProvider()
    {
        yield 'Given example should return given answer' => [
            'file path' => '/day6/inputs/sampleInput.txt',
            'expected answer' => 5934
        ];
        yield 'Given input should return answer' => [
            'file path' => '/day6/inputs/input.txt',
            'expected answer' => 371379
        ];
    }
}
