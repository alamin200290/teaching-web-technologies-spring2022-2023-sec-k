<?php 
    session_start();
    //print_r($_REQUEST);
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
        <form method="POST" action="loginCheck.php" enctype="">
            Username: <input type="text" name="username" value="" /><br>
            Password: <input type="password" name="password" value="" /> <br>
            <input type="submit" name="submit" value="Submit" />
        </form>
</body>
</html>