<?php
include "../connection/connection.php";
$con = connect();

if (isset($_POST["signup"])) {
    
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $sql = "INSERT INTO `sign_up`(`email`, `username`, `password`) 
            VALUES ('$email', '$username', '$password')";

    $insert = $con -> query($sql) or die ($con -> error);

    if ($insert === TRUE) {
        echo "New record created successfully";
        echo header("Location: ../index.php");
    }
    else {
        echo "Error: ";
    }
}

?>