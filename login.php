<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>
    <div class="container d-flex justify-content-center mt-5" style="min-height:10vh;">
        <form class=" border shadow p-3 rounded" action="php/check-login.php" method="POST" style="width:450px; background-color:white;">
        <h1 class="text-center p-3">LOGIN</h1>
        <?php if(isset($_GET['error'])) {?>
            <div class="alert alert-danger" role="alert">
            <?=$_GET['error']?>
            </div>
        <?php }?>
        
            <div class="mb-3">
                <label class="col-form-label">Email</label>
                    <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label class="col-form-label">Password</label>
                    <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3">
                <label class="col-form-label">Select User type:</label>
                <select name="role" class="form-select mb-3" aria-label="Default select example">
                    <option selected value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
           <button class="btn btn-primary" type="submit">Submit</button>
           <a href="index.php" class="btn btn-danger">Cancel</a>
        </form>
    </div>
</body>
</html>