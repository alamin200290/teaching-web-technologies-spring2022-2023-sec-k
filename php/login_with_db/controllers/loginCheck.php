<?php 
    session_start();
    require_once '../models/userModel.php';

    if(isset($_REQUEST['submit'])){
        //print_r($_GET);
        //echo "Test";
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $flag = false;

        if($username == "" && $password == ""){
            echo "Null username/password";
        }else{

            $status = auth($username, $password);
            if($status){
                $_SESSION['username'] = $username;
                setcookie('flag', 'true', time()+300, '/');
                header('location: ../views/home.php');
            }else{
                //echo "<h1>invalid user!</h1>";
                header('location: ../views/login.php?msg=error');
            }
        }
    }else{
        echo "invalid request!";
    }
?>