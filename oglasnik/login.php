<?php
session_start();
if(isset($_SESSION["user"])){
    header("Location: dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
</head>
<body class="bg-light">
    <header>
        <div class="row bg-warning p-3">
            <div class="col" id="oglasnikLink">
                <a href="index.php">bookShelf</a> 
            </div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="text-md-end col border-end" id="loginLink">
                <a href="login.php">Login</a> 
            </div>
            <div class="text-md-start col" id="registerLink">
                <a href="registration.php">Register</a> 
            </div>
        </div>
    </header>
    <div class="container" id="registrationContainer">
        <?php
        if(isset($_POST["login"])){
            $email = $_POST["email"];
            $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result=mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if($user){
                if(password_verify($password, $user["password"])){
                    if($email == 'admin@admin.com'){
                        session_start();
                        $_SESSION["email"] = $email;
                        $_SESSION["user"] = "yes";
                        header("Location: dashboardAdmin.php");
                        die();
                    }else{
                        session_start();
                        $_SESSION["email"] = $email;
                        $_SESSION["user"] = "yes";
                        header("Location: dashboard.php");
                        die();
                    }
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Email does not match</div>";
            }
        }
        ?>
        <form action="login.php" method="post">
            <div class="form-group">
                <input type="email" placeholder="Enter email:" name="email" class="form-control">
            </div>
            <div class="form-group">
                <input type="password" placeholder="Enter password:" name="password" class="form-control">
            </div>
            <div class="form-btn">
                <input type="submit" value="Login" name="login" class="btn btn-primary">
            </div>
        </form>
        <div><p>Not registered yet?<a href="registration.php">Register here</a></p></div>
    </div>
</body>
</html>