<?php 

    //$file = fopen('user.txt', 'r');
    // $data = fread($file, filesize('user.txt'));
    // echo $data;
    // fclose($file);
    //$data = fgets($file);
    //echo $data;
    // echo "<table border=1>
    //         <tr>
    //             <th>USERNAME</th>
    //             <th>PASSWORD</th>
    //             <th>EMAIL</th>
    //         </tr>";

    // while(!feof($file)){
    //     $data = fgets($file);
    //     $user = explode('|', $data);
    //     echo "<tr>
    //             <td>{$user[0]}</td>
    //             <td>{$user[1]}</td>
    //             <td>{$user[2]}</td>
    //         </tr>";
    // }
    //echo "</table>";

    // $file = fopen('user.txt', 'w');
    // $data = "xyz|1111|alamin@gmail.com";
    // fwrite($file, $data);
    // fclose($file);
    // echo "Done!";

    $file = fopen('user.txt', 'a');
    $data = "xyz|1111|alamin@gmail.com\r\n";
    fwrite($file, $data);
    fclose($file);
    echo "Done!";
?>