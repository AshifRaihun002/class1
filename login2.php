<?php ?>
<html>
<head>
    <title>Home</title>
	<link href='css/style.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="js/login.js"></script>
</head>

<body>
 	<!-- Menu -->
	 <div class="logo_menu">
	    <div class="neon">
		    <img src="img/logo.png">
	    </div>
	
		<ul class="main-nav">
		    <li><a href="index.php">Home</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="#contact">Contuct us</a></li>
			<li><a href="post.php">Post ad</a></li>
			<li class="active"><a href="login.php">Login</a></li>
			
		</ul>
	</div>	
	      
			<br/><br/><br/><br/><br/><br/>
			
			
		<div class="product_area">
		<div class="dark_1">
            <h3 style="padding-right: 50px;">Login</h3>
            <form method="post" name="myForm" onsubmit="return validateForm()"  action="index.php">
              <div>
                <label>User Name</label><br>
                <input type="text" class="input" name="username" placeholder="User Name">
              </div>
              <div>
                <label>Password</label><br>
                <input type="Password" class="input" name="password" placeholder="Enter Password">
              </div>
              <br>
              <input class="submit" type="submit" name="submit"   value="Login" />	
              <input class="submit" type="submit" name="submit" value="Back" />	
              <br>
              <a href="register.html" style="text-decoration: none;color: black">Don't have a account?Register First</a>
            


          </form>
          </div>
		</div>	
			

	
	           
</body>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<!-- Bottom -->
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