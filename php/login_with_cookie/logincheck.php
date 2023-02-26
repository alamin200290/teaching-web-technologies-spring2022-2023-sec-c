<?php 
    session_start();

    if(isset($_REQUEST['submit'])){
        
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        if($username == "" && $password == ""){
            echo "null data found...";
        }else{
            if($username == $password){
                //$_SESSION['flag'] = "true";
                $_SESSION['username'] = $username;
                setcookie('flag', 'true', time()+300, '/');

                header('location: home.php');
            }else{
                echo "invalid user";
            }
        }
    
    }else{
        //echo "invaid request, please login first!";
        //echo "<a href='index.html'>Go back to login page</a>";
        header('location: index.html');
    }

?>