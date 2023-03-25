<?php 
    session_start();
    if(isset($_REQUEST['msg'])){
        if($_REQUEST['msg'] == 'error'){
            echo "Invalid username/password";
        }
    }
?>
<html lang="en">
<head>
    <title>Login Page</title>
</head>
<body>
        <form method="POST" action="../controllers/loginCheck.php" enctype="">
            Username: <input type="text" name="username" value="" /><br>
            Password: <input type="password" name="password" value="" /> <br>
            <input type="submit" name="submit" value="Submit" />
            <a href="signup.php" > Signup</a>
        </form>
</body>
</html>