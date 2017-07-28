<!DOCTYPE html>
<html>
<head>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<title></title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h1>Register here</h1>
<div id="container">
  <form action="registration.php">
    <label for="username">User-Name:</label>
    <input type="text" id="name" name="username" placeholder="Your name.." autocomplete="off">
    
    
    
    <label for="email">E-mail:</label>
    <input type="text" id="email" name="email" placeholder="example@gmail.com">
   	Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload" accept=".png,.jpg,.jpeg,.bmp">

    <label for="contact">Contact:</label>
    <input type="number" id="contact" name="contact">
    
   
    
    <button id="register-button">
    	<input type="submit" value="Click to Register"> 
    </button>
   <a href="login.php"> <button id="details-button">
    	Log-In
    </button></a>
   </form> 
	<!--    <input type="submit" id="register-button" value="Click to Register">
    <input type="submit" id="change-number" value="Click To add and Edit details">-->
  
</div>



<hr>

<script type="text/javascript" src="js/registration.js"></script>


</body>
</html>