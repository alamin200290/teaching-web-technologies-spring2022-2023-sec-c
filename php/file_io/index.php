<?php 
    //READ OPERATION

    //$file = fopen('user.txt', 'r');
    // $data = fread($file, filesize('user.txt'));    
    // echo $data;
    // fclose($file);
    //$data = fgets($file);
    //echo $data;
    // echo "<table border=1>
    //             <tr>
    //                 <td>USERNAME</td>
    //                 <td>PASSWORD</td>
    //                 <td>EMAIL</td>
    //             </tr>";

    // while(!feof($file)){
    //     $data = fgets($file);
    //     $user = explode('|', $data);
    //     //echo $user[2]."<br>";
    //     //print_r($user);
    //     //echo "<br>";
    //     echo    "<tr>
    //                 <td>{$user[0]}</td>
    //                 <td>{$user[1]}</td>
    //                 <td>{$user[2]}</td>
    //             </tr>";
    // }

    // echo "</table>";

    //WRITE OPERATION

    // $file = fopen('user.txt', 'w');
    // $data = "another test content...";
    // fwrite($file, $data);
    // echo "Done!";

    $file = fopen('user.txt', 'a');
    $data = "another test content...\r\n";
    fwrite($file, $data);
    echo "Done!";
?>