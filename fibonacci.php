<?php
    $f = 0;
    $s = 1;
    echo "$f <br> $s";
    while($s % 13 != 0){
        $next = $f + $s;
        $f = $s;
        $s = $next;
        echo "<h1>$next</h1>";
    }