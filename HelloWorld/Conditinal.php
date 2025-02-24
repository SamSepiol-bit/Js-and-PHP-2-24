<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $no1 = 10;
    $no2 = 20;

    if ($no1 > $no2){
        echo "Number 1 is bigger than Number 2";
    }else{
        echo "Number 2 is bigger than Number 1";
    }

        // echo "<br /";
        //nested if
        $Marks = 70;
        if($Marks >= 80) {
            echo "First Class!<br>";
        } elseif ($Marks >= 65) {
            echo "Second Upper!<br>";
        }elseif ($Marks >= 50) {
            echo "Second lower!<br>";
        }else {
            echo "fail<br>";
        }
    ?>
    
</body>
</html>