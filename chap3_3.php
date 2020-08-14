<?php

foreach(range(1, 100) as $int){
    if($int % 15 == 0){
        print("FizzBuzz ");
    }elseif($int % 5 == 0){
        print("Buzz ");
    }elseif($int % 3 == 0){
        print("Fizz ");
    }
    else{
        print($int . " ");
    }
}


/*
$num_3 =1;
$num_5 =1;

for($i = 1; $i <= 100; $i++){
    if($i/3 == $num_3 && $i/5 == $num_5){
        print("FizzBuzz ");
        $num_3 ++;
        $num_5 ++;
    }elseif($i/3 == $num_3){
        print("Fizz ");
        $num_3++;
    } elseif ($i/5 == $num_5) {
        print("Buzz ");
        $num_5++;
    }else{
        print($i . " ");
    }
}

*/