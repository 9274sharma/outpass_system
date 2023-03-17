<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "srec_hostel";;  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(!$con) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    } 
 
?>
