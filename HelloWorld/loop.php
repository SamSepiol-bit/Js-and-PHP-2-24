<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //Reoetition in Php 
        $i = 1;
        while ($i <= 3) {
            $i++;
            echo "The Number is " . $i . "<br>";
        }
        // for loop
        for ($i = 0; $i < 4; $i++) {
            echo "$i <br>";
        }

        //Do While Loop
        $i = 1;
        do {
            echo "The Number is ".$i . "<br>";
            $i++;
        } while ($i < 4);
    ?>
</body>
</html>