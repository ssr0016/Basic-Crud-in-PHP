<?php

    $host = 'localhost';
    $user = 'root';
    $password = '123456';
    $database = 'basic_crud';

    $connection =mysqli_connect($host, $user, $password, $database);

    //Checking if connected in DB
    if(mysqli_connect_error()){
        echo "Error: Unable to connect to MySQL <br>";
        echo "Message: ".mysqli_connect()."<br>";
    }
    
    // else{
    //     echo "Successfully connected!";
    // }


?>