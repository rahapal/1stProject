<html>
<head>
    <title>Damauli Hospital</title>
    <link rel="stylesheet" type="text/css" href="../../css/style.css">   
</head>
    <body>
<?php 
$msg = $_GET['error']??"";

if($msg)
{
    ?>
    <script>
        alert("Wrong Username or Password.");
    </script>
    <?php
}
    ?>
        <h2>Damauli Hospital Patient List</h2>
    <div class="login-box">
    <img src="../../image/avatar.png" class="avatar">
        <h1>Log In</h1>
            <form action="./login.php" method="POST">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <form action="login.php">
           <input type="submit" name="submit" value="Login">
            </form>
            <a href="#">Forget Password</a>    
            </form>
        </div>

           
        </script>
    
    </body>
</html>
