<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM requestform");
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <script src="https://kit.fontawesome.com/641337ab9c.js" crossorigin="anonymous"></script>
    <title>Requests</title>
  </head>
  <body>
    <?php include('history_header.php') ?>
    <div class="container">
        <?php if(mysqli_num_rows($result) > 0) { ?>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Roll No</th>
                        <th>Block</th>
                        <th>Room No</th>
                        <th>Outpass Type</th>
                        <th>Out Date</th>
                        <th>In Date</th>
                        <th>Out Time</th>
                        <th>In Time</th>
                        <th>Place</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_array($result)) { ?>
                        <tr>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['rollno']; ?></td>
                            <td><?php echo $row['block']; ?></td>
                            <td><?php echo $row['roomno']; ?></td>
                            <td><?php echo $row['outpasstype']; ?></td>
                            <td><?php echo $row['outdate']; ?></td>
                            <td><?php echo $row['indate']; ?></td>
                            <td><?php echo $row['outtime']; ?></td>
                            <td><?php echo $row['intime']; ?></td>
                            <td><?php echo $row['place']; ?></td>
                            <td>
                                <a class="acceptbtn" href="accept.php?rollno=<?php echo $row['rollno']; ?>">Accept</a> | 
                                <a class="declinebtn" onclick="showDeclineReason('<?php echo $row['rollno']; ?>')">Decline</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } else { ?>
            <p>No result found.</p>
        <?php } ?>
    </div>
    <div class="myModal" style="display:none;">
        <div id="resonPop" style="display:none;">
            <div class="close" onclick="hideDeclineReason()"><i class="fa-solid fa-xmark"></i></div><br>
            <label style="margin: 0px 16px;" for="reason">Write your reason:</label>
            <textarea name="reasonInput" id="reasonInput" placeholder="write the reason for declining the request"></textarea><br>
            <button class="submit" onclick="submitDeclineReason()">Submit</button>
        </div>
    </div>
    <script>
        function showDeclineReason(rollno) {
            var x = document.getElementById('resonPop');
            var y = document.querySelector('.myModal');
            x.style.display = "block";
            y.style.display = "block";
            document.getElementById('reasonInput').focus();
            document.getElementById('reasonInput').setAttribute('data-rollno', rollno);
        }
        function hideDeclineReason() {
            var x = document.getElementById('resonPop');
            var y = document.querySelector('.myModal');
            x.style.display = "none";
            y.style.display = "none";
            document.getElementById('reasonInput').value = "";
        }
        function submitDeclineReason() {
            var rollno = document.getElementById('reasonInput').getAttribute('data-rollno');
            var reason = document.getElementById('reasonInput').value;
            var link = "decline.php?rollno=" + rollno + "&reason=" + reason;
            window.location.href = link;
        }
    </script>
  </body>
</html>