<?php

//question one
    echo "<br> Question one <br>";
    function factorial($n){
        $result = 1;
        for($i = 2;$i < $n+1; $i++){
            if($i % 2 == 0)
                $result *= $i;
        }
        return $result;
    }

    echo factorial(5);

    //question two
    echo "<br> Question two";
    function multiply($n){
        for( $i = 1; $i < 11;$i++){
            $result = $n * $i;
            if($result % 4 == 0)
                continue;
            echo "<br> $n X $i = $result";
        }
    }
    multiply(10);

    // question three
    echo "<br> Question Three <br>";
    function rev($n){
        if($n < 0) 
            return "Negative Number";
        $temp = $n;
        $sum = 0;
        while($temp > 0){
            $rem = $temp % 10;
            $sum = $sum * 10 + $rem;
            $temp = (int)($temp/10);
        }
        return $sum;
    }
    echo rev(1234);

    //Question Four
    echo "<br> Question Four <br>";
    function oddDigits($n){
         if($n < 0) 
            return "Negative Number";
        $temp = $n;
        $sum = 0;
        $i = 0;
        while($temp > 0){
            $i++;
            if($i % 2 == 0){
                $temp = (int)($temp/10);
                continue;
            }
            $rem = $temp % 10;
            $sum +=  $rem;
            $temp = (int)($temp/10);
        }
        return $sum;
    }

    echo oddDigits(13233);

    //Question Five
    echo "<br> Question Five <br>";

    function isPrime($n) {
    if ($n < 2) return false;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) return false;
    }
    return true;
}

function printTriangle($rows) {
    $num = 1;
    for ($i = 1; $i <= $rows; $i++) {
        $count = 0;
        while ($count < $i) {
            if (!isPrime($num)) {
                echo $num . " ";
                $count++;
            }
            $num++;
        }
        echo "<br>";
    }
}

printTriangle(5);
