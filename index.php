<?php
// Imports
require 'src/Kata/FizzBuzz.php';

use Kata\FizzBuzz;

// Execute
$run = new FizzBuzz();
$run->handle();

// Print results as array
print("RESULTS AS ARRAY:\r\n");
$run->printResultsAsArray();

print("\r\n");

// Print results values
print("RESULTS VALUES:\r\n");
$run->printResultsValues();

print("\r\n");