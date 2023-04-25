 
<?php
    $con = mysqli_connect('localhost','root','','project');  
    if($con)
        echo"connection successful";
    $list =$_POST['list'];
    $num_sell = $_POST['num_sell'];
    $num_order = $_POST['num_order'];
    $num_needed = $_POST['num_needed'];
    $total_prod = $_POST['total_prod'];
    
   # $sql = "INSERT INTO  'signup'( `username`, `password`, `confirmpassword` `) VALUES ('$username','$password','$confirmpassword')";
   $sql="INSERT INTO stockinfo( `list`, `num_sell`, `num_order`, `num_needed`, `total_prod`) VALUES ('$list','$num_sell','$num_order','$num_needed','$total_prod')";
   $result = $con->query($sql);  
    if($result) 
        echo "$list Record successfully added to stock ";  
?>

 
