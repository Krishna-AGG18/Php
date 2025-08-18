<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataType</title>
</head>
<body>
    <h1>Data Type in PHP</h1>

    <?php 
        echo "We have multiple datatypes : scalar(integer, float, String,Boolean), (object and arays), (resources such as files and img && NULL)";

        $a= 10;
        $b= 23.25;
        $c = "Hello";
        $d = FALSE; //echo blank space
        $e = TRUE; // echo 1
        $f = array(1,2,3,4,5);
        $g = null;

        echo "<br> $a <br> $b <br> $c <br> $d <br> $e <br>";
        var_dump($f); //or print_r
        var_dump($g);
        // var_dump($a, $b, $c, $d, $e, $f, $g);

        // echo "<br>";

        // print_r([$a, $b, $c, $d, $e, $f, $g]);

    ?>

    <p>
        To declare object in Php we use new keyword <br>
        For printing array we use var_dump or print_r methods since echo prints strings only. <br>
        Every number which is not 0 is true in php.
    </p>
    <p>In order to define <mark>constant</mark> we use <mark>define()</mark> method in which <mark>('name without dollar', it's value)</mark> &amp; to print simple write its name after echo <mark> no $ symbol </mark>.</p>


    <?php 
        define('pi',3.14);
        echo "<br> this is constant value : ".pi;
    ?>
</body>
</html>