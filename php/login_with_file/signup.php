<?php 
    session_start();
?>
<html lang="en">
<head>
    <title>Signup</title>
</head>
<body>
        <form method="POST" action="signupCheck.php" enctype="">
            Username: <input type="text" name="username" value="" /><br>
            Password: <input type="password" name="password" value="" /> <br>
            Email: <input type="email" name="email" value="" /> <br>
            <input type="submit" name="submit" value="Submit" />
        </form>
</body>
</html>