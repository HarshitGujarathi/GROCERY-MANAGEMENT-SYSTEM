
<html>
 
<head>
  </head>
<style>
     form {
      max-width: 500px;
      margin: 0 auto;
      padding: 20px;
      background-color:rgba(0,0,0, 0.7);
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    body
    {
      color:whitesmoke;
      background-image: url('wallpaper.jpg');
      background-size: cover;
      background-repeat: no-repeat;
    }
    
    /* Style the form labels */
    label {
      display: block;
      margin-bottom: 10px;
    }
    
    /* Style the form inputs */
    input[type="number"],
    text {
      width: 40%;
      padding: 10px;
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
      h1
      {
        text-align: center;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      }
      .btn1 {
         
          margin-right: 100px;
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
	  label,input
	  {
		text-align:center;
		font-size: 30;
		 
	  }
	  input
	  {
		width: 500;
	  }
	  .container,.r1
	  {
		text-align: center;
		color:white;
		font-size: 25;
	  }
	  
  </style>

 

  <body>
		<form method="post" action="login.php">
		<fieldset>
				 
				 <label for="username" >
						Username</label>
					 
					 <input type="text" name="username"
							id="username" required>
				 
				 <label for="pwd"  >Password</label>
					 
					<input type="password"name="password" id="password" required><br><br>
			 
					<center><button type="submit" class="btn btn-primary col-md-6">	<input type="submit" name="login" value="Login" class="btn btn-primary col-md-6" ></button></center>
	
					<center>	<div class="container">
                    <p>New user connect us? <a href= "signup.html" class="r1">Register here</a>.</p>
                </div></center>
		 </fieldset>
	</form>
</body>
</html>

 


      
	 