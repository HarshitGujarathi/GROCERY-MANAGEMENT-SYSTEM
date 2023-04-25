<?php
if(isset($_POST['login'])) {
$con= mysqli_connect('localhost','root','','project');
	$sql = mysqli_query($con,"SELECT * FROM signup WHERE username='". $_POST["username"] . "' AND
	password='" . $_POST["password"] . "' ");

	$num = mysqli_num_rows($sql);

	if($num > 0) {
		$row = mysqli_fetch_array($sql);
	    if($row)
         header("location:Home.html");
		exit();
	}
	else {
        echo"Invalid username and password";
      }
}