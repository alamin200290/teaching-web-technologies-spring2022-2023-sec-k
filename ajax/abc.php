<?php 

    $username= $_POST['username'];

    if($username == ''){
        echo "Null username!";
    }else{
        echo "Your username is: ".$username;
    }

?>