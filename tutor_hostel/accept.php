<?php
// include database connection file
include_once("database.php");

// Get id from URL to delete that user
$rollno = $_GET['rollno'];

// prepare and bind the SQL statement
$stmt = $conn->prepare("INSERT INTO security SELECT rollno FROM requestform WHERE rollno = ?");
$stmt->bind_param("s", $rollno);
$stmt->execute();

$stmt = $conn->prepare("UPDATE requestform SET status='accepted' WHERE rollno = ?");
$stmt->bind_param("s", $rollno);
$stmt->execute();

$stmt = $conn->prepare("INSERT INTO backup SELECT * FROM requestform WHERE rollno = ?");
$stmt->bind_param("s", $rollno);
$stmt->execute();

$stmt = $conn->prepare("DELETE FROM requestform WHERE rollno = ?");
$stmt->bind_param("s", $rollno);
$stmt->execute();

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:retrive.php");
?>