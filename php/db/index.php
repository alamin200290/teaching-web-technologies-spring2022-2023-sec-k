<?php 

    $con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
    $sql = "select * from users";
    $result = mysqli_query($con, $sql);
    //print_r($result);
    //$user = mysqli_fetch_assoc($result);
    //$user1 = mysqli_fetch_assoc($result);
    //print_r($user);
    //print_r($user1);
    //echo mysqli_num_rows($result);

    while($row = mysqli_fetch_assoc($result)){
        print_r($row);
        echo "<br>";
    }
?>