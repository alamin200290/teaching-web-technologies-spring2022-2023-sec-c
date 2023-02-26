<?php 
    session_start();
    if(isset($_COOKIE['flag'])){
?>



<h1>Welcome home! <?=$_SESSION['username']?> </h1>
<a href="logout.php">Log out</a>


<?php
    }else{
        echo "invalid request, please login first...";
    }

?>

