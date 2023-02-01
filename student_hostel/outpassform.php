

<!DOCTYPE html>
<html>
<head>
	<title>Gatepass form</title>
    <!-- <link rel = "stylesheet" type = "text/css" href = ".//">   -->
	<link rel="stylesheet" href="outpassform.css">
</head>
<?php include('history_header.php')  ?>
<body >
	<div class="mainy"> 
	<form action="insert2.php" method="post">
		<table>
		<tr>
			<td>
				Name:
			</td>
			<td>
				<input type="text" name="name" required>
			</td>
		</tr>
		<tr>
			<td>
				Registration Number:
			</td>
			<td>
				<input type="integer" name="rollno" required>
			</td>
		</tr>
		<tr>
			<td>
				Block:
			</td>
			<td>
				<select name="block" id="block">
					<option value="B1">B1</option>
					<option value="B2">B2</option>
					<option value="B3">B3</option>
					<option value="B4">B4</option>
					<option value="B5">B5</option>
					<option value="G1">G1</option>
					<option value="G2">G2</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				Room no:
			</td>
			<td>
				<input type="integer" name="roomno" required>
			</td>
		</tr>
		<tr>
			<td>
				Outpass type :
			</td>
			<td>
				<input type="radio" name="outpasstype" value="hometown" required>Home town &nbsp&nbsp
				<input type="radio" name="outpasstype" value="od" required>ON Duty &nbsp&nbsp
				<input type="radio" name="outpasstype" valeu="localouting" required>Local Outing &nbsp&nbsp
				<input type="radio" name="outpasstype" valeu="Other" required>Other
			</td>
		</tr>
		<tr>
			<td>Out date:</td>
			<td><input type="date" name="odate" required></td>
			<td>In date:</td>
			<td><input type="date" name="idate" required></td>
		</tr>
		<tr>
			<td>Out time:</td>
			<td><input type="time" name="otime" required></td>
			<td>In time:</td>
			<td><input type="time" name="itime" required></td>
		</tr>
		<tr>
			<td>place:</td>
			<td><input type="text" name="place" required>
				
			
		</tr colspan="4">
		<tr >
			<td><input class="btnn message" type="submit" name="Request" value="Request"></td>
		</tr>
		

		</table>

	</form>
	</div>


</body>
</html>