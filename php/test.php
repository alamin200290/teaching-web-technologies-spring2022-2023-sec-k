<?php 

    $name = "alamin";
    $id = 12;
    $cgpa = 3.5;
    //$student = array(1, 'alamin', 3.6);
    $student = [1, 'alamin', 3.6];
    $student[2];
    $students = [
                    [1, 'alamin', 3.6],
                    [2, 'XYZ', 3.2],
                    [3, 'ABC', 3.3]
                ];
    $students[1][2];
    $student = ['id'=>1, 'name'=>'alamin', 'cgpa'=>3.6];
    $student['cgpa'];

    $students = [
        's1'=>['id'=>1, 'name'=>'alamin', 'cgpa'=>3.6],
        's2'=>['id'=>1, 'name'=>'alamin', 'cgpa'=>3.2],
        's3'=>['id'=>1, 'name'=>'alamin', 'cgpa'=>3.3]
    ];
    $students['s3']['id'];

    //echo "Hello PHP";
    //$abc = print ("Hello PHP");
    //echo $abc;
    //print_r($student);

    // if(){

    // }else{

    // }
    $student = ['id'=>1, 'name'=>'alamin', 'cgpa'=>3.6];
    // for($i=0; $i<10; $i++){
    //     //echo "Your name is:".$name."\r\n";
    //     echo "Your name is:{$name}\r\n";
    // }
    $students = [
        's1'=>['id'=>1, 'name'=>'alamin', 'cgpa'=>3.6],
        's2'=>['id'=>2, 'name'=>'alamin', 'cgpa'=>3.2],
        's3'=>['id'=>3, 'name'=>'alamin', 'cgpa'=>3.3],
        's4'=>['id'=>4, 'name'=>'alamin', 'cgpa'=>3.3],
        's5'=>['id'=>5, 'name'=>'alamin', 'cgpa'=>3.3],
        's6'=>['id'=>6, 'name'=>'alamin', 'cgpa'=>3.3],
        's7'=>['id'=>7, 'name'=>'alamin', 'cgpa'=>3.3]
    ];

    echo "<table border=1>
            <tr>
                <td>ID</td>
                <td>NAME</td>
                <td>CGPA</td>
            </tr>";

    foreach($students as $s){
        //echo $s."\r\n";
        //echo "<h1>".$s['id']."-".$s['name']."-".$s['cgpa']."</h1>";

        echo "<tr>
                <td>{$s['id']}</td>
                <td>{$s['name']}</td>
                <td>{$s['cgpa']}</td>
            </tr>";
    }

    echo "</table>";

    // function sum($a=0, $b=0){
    //     return $a+$b;
    // }
    // echo sum();

?>

<h1>Test </h1>


<table border="1">
    <tr>
        <td>ID</td>
        <td>NAME</td>
        <td>CGPA</td>
    </tr>
    <?php foreach($students as $s){ ?>
    
    <tr>
        <td><?php echo $s['id']; ?></td>
        <td><?php echo $s['name']; ?></td>
        <td><?php echo $s['cgpa']; ?></td>
    </tr>

    <?php } ?>
</table>

