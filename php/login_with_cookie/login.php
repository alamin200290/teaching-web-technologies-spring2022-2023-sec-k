<?php 
    session_start();
    print_r($_SESSION);
?>
<html lang="en">
<head>
    <title>FORM Submision</title>
</head>
<body>
        <form method="POST" action="loginCheck.php" enctype="">
            Username: <input type="text" name="username" value="" /><br>
            Password: <input type="password" name="password" value="" /> <br>
            <input type="submit" name="submit" value="Submit" />
        </form>
</body>
</html>