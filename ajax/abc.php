<?php 

    $username= $_POST['username'];
    sleep(4);
    if($username == ''){
        echo "null value";
    }else{
        echo "your name is: ".$username;
    }
?>