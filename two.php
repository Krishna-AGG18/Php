<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>

        <h1>This one is embedded in HTML</h1>

        <?php
        echo "Hello this is PHP code <br>";
        echo "To add html elements in PHP simply place them under quotes, of the echo statement though vscode allows under print also. <br>";

        print "<b>This is printed using print statement.</b>";

        echo "<br> Print has a return value and our echo doesn't have one and is faster than print statement"
        ?>

        <h1>Now outside of PHP code.</h1>
    </center>
</body>

</html>