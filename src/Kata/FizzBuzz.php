<?php

namespace Kata;

class FizzBuzz
{
    // Define constants for thresholds values
    const VALUE_FIZZ = 3;
    const VALUE_BUZZ = 5;

    // Define constants for thresholds labels
    const LABEL_FIZZ = 'Fizz';
    const LABEL_BUZZ = 'Buzz';

    // Define generic constants
    CONST ITEMS = 100;

    /**
     * Array of calculated results
     * 
     * @var array $results
     */
    private array $results = [];

    /**
     * Manage process
     * 
     * @return array
     */
    public function handle(): array
    {
        // Loop through items
        for ($i = 0; $i < self::ITEMS; $i++) {
            // Calculate output and store it into an array
            $this->results[$i] = $this->calculateOutput($i + 1);
        }

        return $this->results;
    }

    /**
     * Calculate output according to the provided position
     * 
     * @param int $position
     * @return string
     */
    public function calculateOutput($position) {
        if ($position % self::VALUE_FIZZ === 0 && $position % self::VALUE_BUZZ === 0) {
            return self::LABEL_FIZZ . self::LABEL_BUZZ;
        }
        if ($position % self::VALUE_BUZZ === 0) {
            return self::LABEL_BUZZ;
        }
        if ($position % self::VALUE_FIZZ === 0) {
            return self::LABEL_FIZZ;
        } 
        return $position;    
    }

    /**
     * Print results as array
     * 
     * @return void
     */
    public function printResultsAsArray() {
        if (!empty($this->results)) {
            print_r($this->results);
        } else {
            print_r("No data");
        }
    }

    /**
     * Print results values
     * 
     * @return void
     */
    public function printResultsValues() {
        if (!empty($this->results)) {
            foreach ($this->results as $value) {
                print($value . "\r\n");
            }
        } else {
            print_r("No data");
        }
    }
}
