<?php 
    session_start();
    
    if(isset($_REQUEST['submit'])){
    
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $email = $_REQUEST['email'];

        if($username == "" && $password == "" && $email == ""){
            echo "Null username/password/email";
        }else{
            $file = fopen('user.txt', 'a');
            $data = $username."|".$password."|".$email."\r\n";
            fwrite($file, $data);
            fclose($file);
            header('location: login.php');
        }
    }else{
        echo "invalid request!";
    }
?>