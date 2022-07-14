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
    <title>Sign Up</title>
</head>
<body>
    

    <div class="container rounded shadow p-5 mt-5" style="max-width: 400px;">
        <h1 class="mb-3">Sign Up</h1>
        <form action="./Query/signup.php" method="post">
            <input type="text" class="form-control mb-3" name="username" placeholder="Username" required>
            <input type="email" class="form-control mb-3" name="email" placeholder="Email" required>
            <input type="password" class="form-control mb-3" name="password" placeholder="Password" required>
            <button type="submit" class="btn btn-secondary" name="signup">Sign Up</button>
            <p>Already have an account? <a href="index.php">Login Now</a></p>

        </form>
    </div>


</body>
</html>