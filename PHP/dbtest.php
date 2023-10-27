<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB</title>
</head>
<body>
    <?php
    $server_name = "localhost";
    $dbms_user = "root";
    $dbms_password = "";
    $db_name = "TE4";

    $dbms_connection = mysqli_connect($server_name, $dbms_user, $dbms_password, $db_name);

    // $sql_create_table_user ="CREATE TABLE kunder( personNR VARCHAR(11) PRIMARY KEY, förnamn VARCHAR(15),
    // efternamn VARCHAR(15),adress VARCHAR(15))";

    if(!$dbms_connection){
        echo "NO CONNECTION";
    }
    // mysqli_query($dbms_connection, $sql_create_table_user);

    // $sql_create_account = "CREATE TABLE Sparkonton(kontoNR INT PRIMARY KEY, saldo INT, personNR VARCHAR(11))";
    // mysqli_query($dbms_connection, $sql_create_account);

    // $sql_insert_userdata = 'INSERT INTO kunder(personNR, förnamn, efternamn,adress)
    // VALUES ("710101-1234", "Bo", "Ek","Malmö")';
    // mysqli_query($dbms_connection,$sql_insert_userdata);

    $get_userdata_from_tabel = "SELECT * FROM kunder";

    $user_data = mysqli_query($dbms_connection, $get_userdata_from_tabel);
    
    print_r($user_data);

    ?>
</body>
</html>