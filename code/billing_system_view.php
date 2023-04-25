  <?php 
    $con = mysqli_connect('localhost','root','','project');
    $sql = "SELECT * FROM billing";
    $result = $con->query($sql); ?>
<!DOCTYPE html>
<html><head><title>View Page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<style>
    td, th {
  border: 1px solid #777;
  padding: 0.5rem;
  text-align: center;
}

/* Collapse the borders of adjacent cells */
table {
  border-collapse: collapse;
  background-color: rgba(0,0, 0, 0.7);
   color:white;
}

/* Set a different background color for odd rows */
body{
    background-image: url('wallpaper.jpg');
    background-size: cover;
    background-repeat: no-repeat;
}

/* Set a smaller font size for the caption */
caption {
  font-size: 0.8rem;
}
fieldset
{
    background-color: rgba(0,0, 0, 0.3);
}
.submit,.btn,.a1,.btn1
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
<body>
    <div class="container">
       <center> <h2>Record details</h2></center>
<fieldset>
<table class="table">
    <thead>
        <tr>
            <th>Customer name</th>
            <th>Mobile No</th>
            <th>Total amount</th>
            <th>Timestamp</th>
             
          </tr>  </thead>
    <tbody> 
        <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {?>
                    <tr>
                    <td><?php echo $row['customername']; ?></td>
                    <td><?php echo $row['customerno']; ?></td>
                    <td><?php echo $row['Total']; ?></td> 
                    <td><?php echo $row['TIMESTAMP']; ?></td> 
                                         
            </tr>
            
     <?php }      
        }
        ?>      </tbody>
</table>
<center><button class="btn1"style="float: right=100;"><a class="a1" href="Billing_system.php">BACK</a></button></center>
</fieldset>
</div> 
</body></html>
