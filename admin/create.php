<?php
    include "../db_connection.php";
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        $sql = "INSERT INTO `users`(`id`, `role`, `email`, `password`) VALUES (NULL,'$role','$email','$password')";
        $result = mysqli_query($conn,$sql);
        if($result){
            header("location:home.php?msg=New record save successfully.");
        }
        else{
            echo "error!";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body> 
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:#00ff5573">PHP CRUD Users information</nav>
    <div class="container">
        <div class="text-center mb-3">
            <h3>Add new user</h3>
            <p class="text-muted">Complete the form below to add new user</p>
        </div>
        <div class="container d-flex justify-content-center">
            <form action="" method="POST">
                <div class="row">
                    <div class="col">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="form-label">Select User type:</label>
                        <select name="role" class="form-select mb-3" aria-label="Default select example">
                            <option selected value="user">User</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                </div>
                <button class="btn btn-success" type="submit" name="submit">Add</button>
                <a href="home.php" class="btn btn-danger">Cancel</a>
            </form>
        </div>

    </div>
</body>
</html>