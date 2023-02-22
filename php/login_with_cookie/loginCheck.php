<?php 
    session_start();
    
    if(isset($_REQUEST['submit'])){
        //print_r($_GET);
        //echo "Test";
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        if($username == "" && $password == ""){
            echo "Null username/password";
        }else{
            if($username == $password){
                //$_SESSION['flag'] = "true";
                $_SESSION['username'] = $username;
                setcookie('flag', 'true', time()+300, '/');

                header('location: home.php');
                //echo "<a href='home.html'>Click here</a>";
            }else{
                echo "<h1>invalid user!</h1>";
            }
        }
    }else{
        echo "invalid request!";
    }
?>