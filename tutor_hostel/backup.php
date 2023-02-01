<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM requestform");
$i=0;
while($row = mysqli_fetch_array($result)) {
$fetch = mysqli_fetch_array($result);
$name = $fetch['name'];
$rollno = $fetch['rollno'];
$block =  $fetch['block'];
$roomno = $fetch['roomno'];
$outpasstype= $fetch['outpasstype'];
$outdate = $fetch['outdate'];
$indate = $fetch['indate'];
$outtime = $fetch['outtime'];
$intime = $fetch['intime'];
$place = $fetch['place'];
$status = $fetch['status'];
$reason = $fetch['reason'];
    $sql = "INSERT INTO backup(name,rollno,block,roomno,outpasstype,outdate,indate,outtime,intime,place,status,reason)
     VALUES ('$name', '$rollno', '$block', '$roomno', '$outpasstype', '$outdate', '$indate', '$outtime',  '$intime', '$place','$status','$reason')";
   
     if (mysqli_query($conn, $sql)) {
        echo "New record created successfully !";


     } else {
        echo "Error: " . $sql . "
" . mysqli_error($conn);
     }
     mysqli_close($conn);   
     $i++;
}
?>
