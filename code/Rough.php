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
            align-items: center;
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
        .btn,.a1
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
	<h1>ROUGH CALCULATION</h1>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		 <fieldset>
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
					echo '<td> <select name="List" id="list" >
					<option> <label> Soap</label> </option>javascript:void(0);
					 <option value="soap">1.Santor</option>
					<option value="soap">a.Chandhan</option>
					<option value="">b.Neem</option>
					<option value="">2.Detol</option>
					<option value="">3. Lifeboy</option><
					<option value="">Dals</option>
					<option value="">1.Tur Dal</option>
					<option value="">2. Chana Dal</option>
					<option value="">3. Masur Dal</option>
					<option value=""> Oil</option>
					<option value=""> 1.Soya Oil</option>
					<option value=""> 2.Sheng Oil</option><br></select></td>';
					echo '<td><input type="text" name="quantity'.$i.'" /></td>';
					echo '<td><input type="text" name="field'.$i.'" /></td>';
					echo '</tr>';
				}
				 
			?>
		</table>
         <br><br>
		<center><input type="submit" name="submit" value="Calculate" class="submit" /></center>

        <br><br>
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
         
		#echo '<label>Total: </label>';
		echo '<center><label>Total: </label> <input type="text" name="total"class="totalamo" value="'.$total.'" />';
	}
	?>
    <center><button class="btn"><a class="a1" href="Home.html">BACK</a></button></center>

	<fieldset>
-/	</form>
</body>
</html>
 