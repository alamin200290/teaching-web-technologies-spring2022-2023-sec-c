<?php 
    $name = "alamin";
    $id = 12;
    $cgpa = 3.5;
    $student = [1, 'alamin', 3.6];
    //$student = array(1, 'alamin', 3.6);
    $student[1];
    $student =['id'=>1, 'name'=>'alamin', 'cgpa'=>2.4];
    $students = [
                    's1'=>['id'=>1, 'name'=>'alamin', 'cgpa'=>2.4],
                    's2'=>['id'=>2, 'name'=>'abc', 'cgpa'=>2.6],
                    's3'=>['id'=>3, 'name'=>'xyz', 'cgpa'=>2.5]
                ];
    $students['s3']['name'];

    $student['name'];
    //echo "hello world!\r\n";
    //print($name);

    function sum($a, $b){
        return $a+$b;
    }
    //echo sum(4,6);

    echo "<table border='1'>
                <tr>
                    <td>ID</td>
                    <td>NAME</td>
                    <td>CGPA</td>
                </tr>";

    // for($i=0; $i<10; $i++){
    //     $count = $i+1;
    //     echo "<tr>
    //                 <td>{$count}</td>
    //                 <td>alamin</td>
    //                 <td>alamin@aiub.edu</td>
    //         </tr>";
    // }

    foreach($students as $s){
        echo "<tr>
                <td>{$s['id']}</td>
                <td>{$s['name']}</td>
                <td>{$s['cgpa']}</td>
            </tr>";
    }
    echo "</table>";
?>

<h1>TEST </h1>


<table border="1">
    <tr>
        <td>ID</td>
        <td>NAME</td>
        <td>CGPA</td>
    </tr>

    <?php foreach($students as $s){ ?>
        
    <tr>
        <td><?php echo $s['id'] ?></td>
        <td><?php echo $s['name'] ?></td>
        <td><?php echo $s['cgpa'] ?></td>
    </tr>

    <?php } ?>

</table>