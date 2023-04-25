<!DOCTYPE html>
<html>
<head>
	<style>
		table {
			border-collapse: collapse;
			width: 70%;
			margin: auto;
		}

		th, td {
			text-align: left;
			padding: 8px;
			border-bottom: 1px solid #ddd;
		}
		form {
			width: 60%;
			margin: auto;
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
			box-sizing: border-box;
			color:whitesmoke;
		}

		input[type=text], input[type=email] {
			width: 50%;
			padding: 6px;
			margin-bottom: 10px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}

		input[type=submit] {
			background-color: #4CAF50;
			color: white;
			padding: 10px 02px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
		.submit
		{
			height: 50px;
			width: 150px;
			font-size: 18px;
			background-color: #4CAF50;
			color: white;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			align-items: center;
		}
		body
		{
			background-image: url('wallpaper.jpg');
			background-size: cover;
			background-repeat: no-repeat;
		}
		fieldset
		{
			background-color: rgba(0, 0, 0, 0.7);
		}
		h1
		{
			text-align: center;
			font-size: 40px;
		}
		 .btn ,.r1
		{
			height: 50px;
			width: 150px;
			font-size: 18px;
			background-color: #4CAF50;
			color: white;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			align-items: center;
		}
	</style>
</head>

<body>
	<h1> Billing system</h1>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		 <fieldset>
		 <label>Customer Name: </label><input type="text" name="customername" value="customername"/>
			<label>Customer Number: </label><input type="number" name="customerno" value="customerno"/>
	</tr>
		<table>
			
			<tr>

				<th>Field</th>
				<th>Quantity</th>
				<th>Value</th>
			</tr>
			<?php
				$num_fields = 5; // set the number of fields you want to add
				for ($i=1; $i<=$num_fields; $i++) {
					echo '<tr>';
					echo '<td><input type="text" name="product'.$i.'" /> ';
					echo '<td><input type="number" name="quantity'.$i.'" /></td>';
					echo '<td><input type="number" name="field'.$i.'" /></td>';
					echo '</tr>';
				}
				 
			?>
		</table>

		<center><input type="submit" name="submit" value="Calculate" class="submit" /></center>
		<?php
		if (isset($_POST['submit'])) {
			$total = 0;
			for ($i=1; $i<=$num_fields; $i++) {
				$field_val = $_POST['field'.$i];
				$quantity_val = $_POST['quantity'.$i];
				if (!empty($field_val) && !empty($quantity_val)) {
					$total += $field_val * $quantity_val;
				}
				 
		}
		$con = mysqli_connect('localhost','root','','project');$customername =$_POST['customername'];  
		$customerno =$_POST['customerno'];  
		$Total = $_POST['Total'];
	   # $sql = "INSERT INTO  'signup'( `username`, `password`, `confirmpassword` `) VALUES ('$username','$password','$confirmpassword')";
	   $sql =  "INSERT INTO billing(`customername`, `customerno`, `Total`) VALUES ('$customername','$customerno','$Total')";
	   $result = $con->query($sql);  
		#echo '<label>Total: </label>';
	   echo ' <center><label>Total: </label> <input type="text" name="Total" value="'.$total.'" /></center>';
	}
	?>
		<center><button class="btn"><a class="r1" href="billing_system_view.php">Billing View</a></button></center>
	</fieldset>
 
	</form>
</body>
</html>
