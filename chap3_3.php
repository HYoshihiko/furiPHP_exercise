<?php

foreach (range(1, 100) as $int) {
    if ($int % 15 == 0) {
        print("FizzBuzz ");
    } elseif ($int % 5 == 0) {
        print("Buzz ");
    } elseif ($int % 3 == 0) {
        print("Fizz ");
    } else {
        print($int . " ");
    }
}

