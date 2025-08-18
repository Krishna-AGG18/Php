<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice</title>
</head>
<body>
    <h1>Variable and constants in PHP</h1>
    <p>Php has dynamic variable declaration, hence no fixed datatype of unassigned variable.</p>
    <?php 
        $a = 10;
        $_b = 20;
        $c = $a + $_b;
        echo $a;
        echo $_b;
        echo "<br> Addition of ".$a." and".$_b." is $c";
        echo "<br> Inorder to concatenate the strings we use dot (.) operator";
        echo "<br> value of a is : ".$a ;
    ?>
</body>
</html>