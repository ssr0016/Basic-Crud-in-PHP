<?php
//create

    require('./database.php');

    if(isset($_POST['create'])){
        $username = $_POST['username'];
        $password = $_POST['password'];


        $queryCreate = "INSERT INTO accounts VALUES (null , '$username', '$password')";
        $sqlCreate = mysqli_query($connection, $queryCreate);

        echo '<script>alert("Succesfully created!")</script>';
        echo '<script>window.location.href = "/Basic Crud in PHP/index.php"</script>';
    }else{
        echo '<script>window.location.href = "/Basic Crud in PHP/index.php"</script>';
    }





?>