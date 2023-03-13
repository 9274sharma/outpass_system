<?php
// Include the file with the database connection details
require_once 'connectrform.php';

// Check if the form has been submitted
if(isset($_POST['Request']))
{    
     // Sanitize the user inputs to prevent SQL injection attacks
     $name = mysqli_real_escape_string($conn, $_POST['name']);
     $rollno = mysqli_real_escape_string($conn, $_POST['rollno']);
     $block = mysqli_real_escape_string($conn, $_POST['block']);
     $roomno = mysqli_real_escape_string($conn, $_POST['roomno']);
     $outpasstype = mysqli_real_escape_string($conn, $_POST['outpasstype']);
     $outdate = mysqli_real_escape_string($conn, $_POST['odate']);
     $indate = mysqli_real_escape_string($conn, $_POST['idate']);
     $outtime = mysqli_real_escape_string($conn, $_POST['otime']);
     $intime = mysqli_real_escape_string($conn, $_POST['itime']);
     $place = mysqli_real_escape_string($conn, $_POST['place']);

     // Prepare the SQL query with placeholders for the values
     $sql = "INSERT INTO requestform(name,rollno,block,roomno,outpasstype,outdate,indate,outtime,intime,place)
             VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
     
     // Use a prepared statement to execute the query with the sanitized values
     $stmt = mysqli_prepare($conn, $sql);
     mysqli_stmt_bind_param($stmt, "ssssssssss", $name, $rollno, $block, $roomno, $outpasstype, $outdate, $indate, $outtime, $intime, $place);
     
     // Execute the query and check for errors
     if (mysqli_stmt_execute($stmt)) {
        echo "Request submitted successfully!";
     } else {
        echo "Error: " . mysqli_error($conn);
     }
     
     // Close the prepared statement and the database connection
     mysqli_stmt_close($stmt);
     mysqli_close($conn);
}
?>
