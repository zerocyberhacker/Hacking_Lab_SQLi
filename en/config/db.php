<!--SET PHP CONFIG HERE: Junior Developer Note. - Tony Wong -->
<!--NOTE: database -> {url}/phpmyadmin.php -->
<?php
    /* Database credentials. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    $host="localhost";
    $user="root";
    $password="eT586249!";
    $db='home_engine';
    $conn=mysqli_connect($host,$user,$password,$db);
 
    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>
