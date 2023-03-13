

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
			<td class="colh col1">
				Name:
			</td>
			<td class="coli col2">
				<input type="text" name="name" required>
			</td>
		</tr>
		<tr>
			<td class="colh col1">
				Registration Number:
			</td>
			<td class="coli col2">
				<input type="integer" name="rollno" required>
			</td>
		</tr>
		<tr>
			<td class="colh col1">
				Block:
			</td>
			<td class="coli col2">
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
			<td class="colh col1">
				Room no:
			</td>
			<td class="coli col2">
				<input type="integer" name="roomno" required>
			</td>
		</tr>
		<tr>
			<td class="colh col1">
				Outpass type :
			</td>
			<td colspan="3" class="coli col2 optionwrk">
				<input type="radio" name="outpasstype" value="hometown" required> Home town &nbsp&nbsp
				<input type="radio" name="outpasstype" value="od" required> ON Duty &nbsp&nbsp
				<input type="radio" name="outpasstype" value="localouting" required> Local Outing &nbsp&nbsp
				<input type="radio" name="outpasstype" value="Other" required> Other
			</td>
		</tr>
		<tr>
			<td class="colh col1">Out date:</td>
			<td class="coli col2"><input type="date" name="odate" required></td>
			<td class="colh col3">In date:</td>
			<td class="coli col4"><input type="date" name="idate" required></td>
		</tr>
		<tr>
			<td class="colh col1">Out time:</td>
			<td class="coli col2"><input type="time" name="otime" required></td>
			 
			<td class="colh col3">In time:</td>
			<td class="coli col4"><input type="time" name="itime" required></td>
 
		</tr>
		<tr>
			<td class="colh col1">place:</td>
			<td class="coli col2"><input type="text" name="place" required>
				
			
		</tr colspan="4">
		<tr >
			<td><input class="btnn message" type="submit" name="Request" value="Request"></td>
		</tr>
		

		</table>

	</form>
	</div>


</body>
</html>