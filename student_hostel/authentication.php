<?php      
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
    //to prevent from mysqli injection  
    $stmt = $con->prepare("SELECT * FROM login WHERE username=? AND password=?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    $count = $result->num_rows;
          
    if($count == 1){  
        header("Location: outpassform.php");
    }  
    else{  
        header("Location: index.html");
    }     
?>

