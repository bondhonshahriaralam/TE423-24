<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>
<body>
    <form action="#" method="POST">
        Namn:
        <input name="namn" type="text">
        Lösenord:
        <input name="pass" type="password">
        DATUM:
        <input type="date" name="dat">

        <input name="skicka" type="submit" value="ÄR DET FREDAG?">
    </form>

    <?php
        if(isset($_POST['skicka'])){
            $namn = $_POST['namn'];
            $password = $_POST['pass'];
            $dat = $_POST['dat'];

            echo $namn . "<br>" . $password . "<br>" . $dat;
        }
    ?>
</body>
</html>
