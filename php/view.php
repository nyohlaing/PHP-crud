<?php
    include "../db_connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Document</title>
</head>
<body> 
    <nav class="navbar navbar-light justify-content-center fs-3 mb-3" style="background-color:#00ff5573">PHP CRUD Users information</nav>
    <div class="container">
        <h1>All user information</h1>
       
        <table class="table table-striped text-center">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM `users`";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <th><?php echo $row['id'] ?></th>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['role'] ?></td>
                </tr>
                <?php
                    } 
                ?>
                
            </tbody>
        </table>

        <a href="../index.php" class="btn btn-danger">BACK</a>
    </div>
</body>

    
