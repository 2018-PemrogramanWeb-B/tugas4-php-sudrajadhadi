<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    if(date("H") < 12){
        echo "selamat pagi";
    }
    elseif (date("H") <15){
        echo "selamat siang";
    }
    elseif (date("H")<18){
        echo "selamat sore";
    }
    else {
        echo "selamat malam";
    }
    ?>
</body>
</html>