<?php       
    include('connection.php');

$rollno = $_POST['rollno'];
$rollno = filter_var($rollno, FILTER_SANITIZE_STRING);

$sql = "SELECT * FROM security WHERE rollno = ?";
$stmt = mysqli_prepare($con, $sql);
mysqli_stmt_bind_param($stmt, "s", $rollno);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

$count = mysqli_num_rows($result);

if ($count == 1) {
    echo "<h1><center> Permitted </center></h1>";
    $sql = "DELETE FROM security WHERE rollno = ?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "s", $rollno);
    mysqli_stmt_execute($stmt);
} else {
    echo "<h1> Not permitted.</h1>";
}   
?>