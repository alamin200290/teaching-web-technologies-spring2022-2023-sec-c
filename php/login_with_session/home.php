<?php 
    session_start();
    if(isset($_SESSION['flag'])){
?>



<h1>Welcome home!</h1>
<a href="logout.php">Log out</a>


<?php
    }else{
        echo "invalid request, please login first...";
    }

?>

