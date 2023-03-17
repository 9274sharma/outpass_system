<?php
// include database connection file
include_once("database.php");

// Get id from URL to delete that user
$rollno = $_GET['rollno'];
$reason = $_GET['reason'];

// Delete user row from table based on given id
// $resul = mysqli_query($conn, "UPDATE requestform SET status='declined' WHERE rollno='$rollno'");
$resul = mysqli_query($conn, "UPDATE requestform SET status='declined' WHERE rollno='$rollno'");
// $res = mysqli_query($conn, "INSERT INTO backup SELECT * FROM requestform WHERE rollno='$rollno'");
// $result = mysqli_query($conn, "DELETE FROM requestform WHERE rollno=$rollno");
$sql = "INSERT INTO backup (name, rollno, block, roomno, outpasstype, outdate, indate, outtime, intime, place,status, reason) SELECT name, rollno, block, roomno, outpasstype, outdate, indate, outtime, intime, place,status, '$reason' FROM requestform WHERE rollno = '$rollno'";
mysqli_query($conn, $sql);
$sql = "DELETE FROM requestform WHERE rollno = '$rollno'";
mysqli_query($conn, $sql);
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:retrive.php");
exit();
?>