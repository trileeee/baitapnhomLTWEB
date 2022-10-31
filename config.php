<<<<<<< HEAD
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ltwebdatabase";

    //Create connection 
    $conn = mysqli_connect ($servername, $username, $password, $dbname);
    mysqli_set_charset($conn, 'UTF8');
    //Check connection
    if (!$conn) {
        die ("Connection failed: ". mysqli_connect_error());
    }  
   
    
?>
=======
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ltwebdatabase";

    //Create connection 
    $conn = mysqli_connect ($servername, $username, $password, $dbname);
    mysqli_set_charset($conn, 'UTF8');
    //Check connection
    if (!$conn) {
        die ("Connection failed: ". mysqli_connect_error());
    }  
else echo("Connection failed");
   
    
?>
>>>>>>> 71bdeb252dc59ff5f7f6d60236111603c385fe2d
