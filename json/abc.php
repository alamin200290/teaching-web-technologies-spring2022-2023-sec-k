<?php 

    $data= $_POST['data'];
    $user =json_decode($data);
    // print_r($user);
    //echo $user->email;

    $user = ['username'=> 'alamin', 'email'=> 'alamin@aiub.edu', 'password'=>'abc'];
    echo json_encode($user);

    // if($username == ''){
    //     echo "Null username!";
    // }else{
    //     echo "Your username is: ".$username;
    // }

?>