<?php
    include "../db_connection.php";
    $id = $_GET['id'];
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        $sql = "UPDATE `users` SET `role`='$role',`email`='$email',`password`='$password' WHERE id=$id";
        $result = mysqli_query($conn,$sql);
        if($result){
            header("location:home.php?msg=Data Update successfully.");
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
            <h3>Editing of user information</h3>
            <p class="text-muted">Click update after any changing information</p>
        </div>

        <?php
            $sql = "SELECT * FROM `users` WHERE id = $id LIMIT 1";
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($result);
        ?>

        <div class="container d-flex justify-content-center">
            <form action="" method="POST">
                <div class="row">
                    <div class="col">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $row['email'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" value="<?php echo $row['password'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="form-label">Select User type:</label>
                        <select name="role" class="form-select mb-3" aria-label="Default select example">
                            <option selected>Please reselect new role</option>
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                </div>
                <button class="btn btn-success" type="submit" name="submit">Update</button>
                <a href="home.php" class="btn btn-danger">Cancel</a>
            </form>
        </div>

    </div>
</body>
</html>