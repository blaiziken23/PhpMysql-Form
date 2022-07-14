<?php
include "connection/connection.php";
$con = connect();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Log in</title>
</head>
<body>
    

    <div class="container rounded shadow p-5 mt-5" style="max-width: 400px;">
        <h1 class="mb-3">Log in</h1>
        <form action="./Query/login.php" method="post">
            <input type="text" class="form-control mb-3" name="username" placeholder="Username" required>
            <input type="password" class="form-control mb-3" name="password" placeholder="Password" required>
            <button type="submit" class="btn btn-secondary" name="login">Log in</button>
        </form>
        <p>Dont have an account? <a href="signup.php">Create Account</a></p>
    </div>


</body>
</html>