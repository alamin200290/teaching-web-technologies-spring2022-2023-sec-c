<?php 

    $con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');

    // if($con){
    //     echo "connected";
    // }else{
    //     echo "error";
    // }
    //$sql = "select * from users";
    //$result = mysqli_query($con, $sql);
    //print_r($result);

    // $user = mysqli_fetch_assoc($result);
    // $user1 = mysqli_fetch_assoc($result);
    // $user2 = mysqli_fetch_assoc($result);
    // print_r($user);
    // print_r($user1);
    // print_r($user2);

    // while($row = mysqli_fetch_assoc($result)){
    //     print_r($row);
    //     echo "<br>";
    // }

    $sql = "insert into users values('', 'xyz', '1234', 'xyz@aiub.edu')";
    $status = mysqli_query($con, $sql);
    if($status){
        echo "user added!";
    }else{
        echo "error ...";
    }
?>