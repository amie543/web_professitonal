<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>Hello World</h1><br>";
        echo date('m.d.y :h i s')
    ?>
    <p>
            <?php
                $now = time();
                $new_year = strtotime("2022-01-01");
                $diff = $new_year-$now;
                $day = floor($diff/3600/24);
                $hour =floor(( $diff - ($day*3600*24))/60/60);
                $min = floor(( $diff - ($day*3600*24) - ($hour*3600))/60);
                $sec = floor($diff - ($day*3600*24) - ($hour*3600) -($min*60));
                $check = ($day *3600*24)+($hour *3600)+($min*60)+$sec;
                echo ($diff); echo " <br>";
                echo ($check);
            ?>
            <?php echo $day ?> Days <?php echo $hour ?> : <?php echo $min ?> : <?php echo $sec ?> left to Happy New Year

    </p>
</body>
</html>