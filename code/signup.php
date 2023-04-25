 
<?php
    $con = mysqli_connect('localhost','root','','project');  
    if($con)
        echo"connection successful";
    $username =$_POST['username'];  
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
   # $sql = "INSERT INTO  'signup'( `username`, `password`, `confirmpassword` `) VALUES ('$username','$password','$confirmpassword')";
   $sql = "INSERT INTO `signup`(`username`, `password`, `confirmpassword`) VALUES ('$username','$password','$confirmpassword')";
   $result = $con->query($sql);  
    if($result) 
        echo "$username Record successfully added ";  
?>

 
