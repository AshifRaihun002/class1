
<html>
<head>
    <title>Home</title>
	<link href='css/style.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="js/register.js"></script>

</head>

<body>
 <body>

	<!-- Menu -->
	 <div class="logo_menu">
	    <div class="neon">
		    <img src="img/logo.png">
	    </div>
	
		<ul class="main-nav">
		    <li class="active"><a href="index.php">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="#contact">Contuct us</a></li>
			<li><a href="login.php">Post ad</a></li>
			<li><a href="login.php">Login</a></li>
			<li><a href="register.php">Register</a></li>
			
		</ul>
	</div>

			<br/><br/><br/><br/><br/><br/>
			<section>
		<div class="product_area">
				<div class="dark">
				
   
				<form action="register.php" method="post" name="myForm" onsubmit="return validateForm()" >    <!-- method can be set POST for hiding values in URL-->
					<h2>Sign up please</h2><br>
					<label>Name:</label>
					<br />
					<input class="input" type="text" name="name" value="" />
					<br />
					<label>User Name:</label><br />        
					<input class="input" type="text" name="usern" value="" />
					<br />
					<label>Email:</label><br />        
					<input class="input" type="text" name="email" value="" />
					<br />
					<label>Contact:</label><br />
					<input class="input" type="text" name="contact" value="" />
					<br />
					<label>Address:</label><br />
					<textarea rows="5" cols="25" name="address"></textarea>
					<br />
					<label>Password:</label><br />        
					<input class="input" type="Password" name="pasword" value="" />
					<br/>
					<input class="submit" type="submit" name="submit" value="Insert" />	

<?php
	//Establishing Connection with Server
	$connection = mysqli_connect("localhost", "root", "","ab");

	//Selecting Database from Server
	
	if(isset($_POST['submit'])){
   
	//Fetching variables of the form which travels in URL
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $usern=$_POST['usern'];
    $paswrd=md5($_POST['pasword']);
   
   
	$sql = "INSERT INTO regi(name, email,un,address, phone_no,pw) VALUES ('$name', '$email','$usern','$address','$contact', '$paswrd')";
$result = mysqli_query($connection,$sql);
echo $sql;
var_dump($result);
}
?>					
				</form>
			</div>
		</div>	
			

	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	           
</body>

	<footer class="footer">
		
	<ul>
		<li>
		<div>
			<img src="img/logo.png">	
		</div>
		<div>
			<font face="serif" size="4" color="skyblue">Follow us:</font>
			<a href="#" class="call"><i class="fa fa-facebook-f" style="font-size:30px;width:23px;background-color:black;color:white;padding-right: 15px"></i></a>
			<a href="#" class="call"><i class="fa fa-google" style="font-size:30px;background-color:black;color:white;padding-right: 12px"></i></a>
			<a href="#" class="call"><i class="fa fa-twitter" style="font-size:30px;background-color:black;color:white;padding-right: 9px"></i></a>

		</div>
       </li>
	   <li>
		<div class="contact">
			<h1><a name="contact"></a>Contact With Us</h1><br>
			<p>Phone No: 0175263939</p><br>
			<p>Email: abash.bd@gmail.com</p>

		</div>
       </li>
	   
	</ul>
		
	</footer>

</html>