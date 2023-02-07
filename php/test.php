<?php 

    $name = "alamin";
    $id = 12;
    $cgpa = 3.5;
    $student = [1, 'alamin', 3.6];
    //$student = array(1, 'alamin', 3.6);
    $student[1];
    $student =['id'=>1, 'name'=>'alamin', 'cgpa'=>2.4];
    $student['name'];
    //echo "hello world!\r\n";
    //print($name);

    function sum($a, $b){
        return $a+$b;
    }
    //echo sum(4,6);

    for($i=0; $i<10; $i++){
        echo "print your name:".$name."\r\n";
    }
?>