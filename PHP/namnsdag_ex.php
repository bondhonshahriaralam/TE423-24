<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include</title>
</head>
<body>

    <?php
        include 'namnsdag.php';

        // print_r($namnsdag);


        // $dagnummer = date('z') + 1;

        // echo $namnsdag[$dagnummer][0] ."<br>";
        // echo $namnsdag[$dagnummer][1];

        foreach($namnsdag as $namn){
            foreach($namn as $n){
                echo $n . "<br>";
            }
        }
    ?>
</body>
</html>