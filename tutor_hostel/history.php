<?php
include_once 'database.php';
if (isset($_POST['search'])) {
  $fromDate = $_POST['fromDate'];
  $toDate = $_POST['toDate'];
  $regNo = $_POST['regNo'];
  if (empty($fromDate) && empty($toDate)) {
    $sql = "SELECT * FROM backup WHERE rollno = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $regNo);
  } else {
    $sql = "SELECT * FROM backup WHERE outdate BETWEEN ? AND ?";
    $params = array($fromDate, $toDate);
    $types = str_repeat("s", count($params));
    if (!empty($regNo)) {
      $sql .= " AND rollno = ?";
      $params[] = $regNo;
      $types .= "s";
    }
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, $types, ...$params);
  }
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
} else {
  $result = mysqli_query($conn, "SELECT * FROM backup");
}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style2.css">
  <title>Requests</title>
  <script>
    function printTableData() {
      const printWindow = window.open('', '_blank');
      printWindow.document.write('<html><head><title>Print Table</title></head><body>');
      printWindow.document.write('<table border="1">');
      printWindow.document.write(document.querySelector('table').innerHTML);
      printWindow.document.write('</table>');
      printWindow.document.write('</body></html>');
      printWindow.document.close();
      setTimeout(() => {
        printWindow.print();
      }, 500);
    }
  </script>
</head>
<?php include('history_header.php') ?>
<body>
  <div class="searchparent"> 
  <form method="post" class="searchform">
    <div class="from srch"> 
    <label for="fromDate">From:</label>
    <input type="date" name="fromDate" id="fromDate">
  </div>
  <div class="to srch"> 
    <label for="toDate">To:</label>
    <input type="date" name="toDate" id="toDate">
    </div>
    <div class="reginp srch">
    <label for="regNo">Registration Number:</label>
    <input type="text" name="regNo" id="regNo">
</div>
<br><br>
<div class="searchbtn srch"> 
    <input type="submit" name="search" value="Search" class="srchbtn btn1"> 
    <input type="button" value="Reset" onclick="window.location.href=window.location.href" class="srchbtn btn2">
    </div>  
  </form>
  </div>
  <div class="prntbtn"> 
  <button onclick="printTableData()" style="right: 10px;">Print</button>
  </div>
  <?php
  if (mysqli_num_rows($result) > 0) {
    ?>
    <table>
      <tr>
        <td>Name</td>
        <td>rollno</td>
        <td>block</td>
        <td>roomno</td>
        <td>outpasstype</td>
        <td>outdate</td>
        <td>indate</td>
        <td>outtime</td>
        <td>intime</td>
        <td>place</td>
        <td>status</td>
        <td>reason</td>
      </tr>
      <?php while ($row = mysqli_fetch_array($result)) { ?>
        <tr>
          <td><?php echo $row["name"]; ?></td>
          <td><?php echo $row["rollno"]; ?></td>
          <td><?php echo $row["block"]; ?></td>
          <td><?php echo $row["roomno"]; ?></td>
          <td><?php echo $row["outpasstype"]; ?></td>
          <td><?php echo $row["outdate"]; ?></td>
          <td><?php echo $row["indate"]; ?></td>
          <td><?php echo $row["outtime"]; ?></td>
          <td><?php echo $row["intime"]; ?></td>
          <td><?php echo $row["place"]; ?></td>
          <td><?php echo $row["status"]; ?></td>
          <td><?php echo $row["reason"]; ?></td>
        </tr>
      <?php } ?>
    </table>
  <?php
  } else {
    echo "No results found";
  }
  ?>
</body>
</html>