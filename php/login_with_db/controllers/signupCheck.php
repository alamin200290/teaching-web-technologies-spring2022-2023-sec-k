<?php 
    session_start();
    //include('db.php');
    //include_once('db.php');
    //require "db.php";
    require_once "../models/userModel.php";

    if(isset($_REQUEST['submit'])){
    
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $email = $_REQUEST['email'];

        if($username == "" && $password == "" && $email == ""){
            echo "Null username/password/email";
        }else{
            $user = ['username'=> $username, 'password'=> $password, 'email'=> $email];
            $status = addUser($user);
            if($status){
                header('location: ../views/login.php');
            }else{
                echo "DB error, try again";
            }
        }
    }else{
        echo "invalid request!";
    }
?>