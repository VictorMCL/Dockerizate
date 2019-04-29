<?php
    $host = 'mysql';
    $user = 'admin';
    $pass = '1234';

    $conn = mysqli_connect($host, $user, $pass);
    if (!$conn) {
        exit('Connection failed: '.mysqli_connect_error().PHP_EOL);
    }
    
    echo 'Successful database connection!'.PHP_EOL;
?>