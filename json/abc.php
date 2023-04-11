<?php 

    $user = $_POST['user'];
    $data = json_decode($user);

    //print_r($data);

    //echo $data->email;

    // sleep(4);
    // if($username == ''){
    //     echo "null value";
    // }else{
    //     echo "your name is: ".$username;
    // }

    $user = ['username'=>'alamin', 'email'=>'alamin@aiub.edu', 'password'=>'1234'];
    $data = json_encode($user);
    echo $data;
?>