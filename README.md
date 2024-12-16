# PHP Pass by Reference Gotcha with Nested Arrays

This repository demonstrates an unexpected behavior of PHP's pass-by-reference mechanism when dealing with nested arrays.  Modifying a referenced array can unexpectedly alter the original array, even when the code appears to only modify the reference.

## The Problem

The `increment_array_values` function intends to increment each value within an array.  However, when used with nested arrays, the behavior is not intuitive and can lead to unexpected side-effects.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php`.
3. Observe the output.  Note that modifying `$arr4` also modifies `$arr3`, which is unexpected.

## Solution

The solution involves creating a copy of the array before passing it to the function. This can prevent unexpected changes to the original array.
See `bugSolution.php` for a demonstration.