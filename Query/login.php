<?php
session_start();

include "../connection/connection.php";
$con = connect();

if (isset($_POST["login"])) {
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $sql = " SELECT * FROM `sign_up` WHERE username = '$username' AND password = '$password' ";

    $user = $con -> query($sql);

    if ($user -> num_rows > 0) {
        while($rows = $user -> fetch_assoc()) {
            // echo "<script> alert('Congrats'); </script>";
            // echo header("Location: ../signup.php");
            $_SESSION["userlogin"] = $rows["username"];
            echo "Welcome" . " " . $_SESSION["userlogin"];
        }
    }
    else {
        echo "<script> alert('No record'); </script>";
        echo "<script> document.location=  '../index.php'; </script>";
    }
}
?>