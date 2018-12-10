<?php
             
	$connection = mysqli_connect("localhost", "root", "","ab");

	//Selecting Database from Server
	
	if(isset($_POST['submit']))
	{
	//Fetching variables of the form which travels in URL
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['phn'];
    $address = $_POST['address'];
    $rent_price=$_POST['rnp'];
    $date=$_POST['av'];
  
    if($_FILES['image']['name'])
   	    {
   	    	$target_dir = "img/";
   	    	$target_file = $target_dir . basename($_FILES["image"]["name"]);
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file))
            {
                 $img = $target_file;
            }else{
            	 $img = "";
            }
   	    }

    $sql = "INSERT INTO `post`(`name`, `email`, `address`, `rent_price`, `date_a`, `phone_no`, `image`) VALUES ( '$name','$email','$address',
   	$rent_price,'$date','$contact', '$img')";
   
	// $sql = "INSERT INTO post(name,email,address,rent_price,date_a,phone_no,image) VALUES ('$name', '$email','$address',$rent_price,'$date','$contact', '$img')";
    $result = mysqli_query($connection,$sql);
    // var_dump($result);
}
?>		


<html>
<head>
    <title>Post Add</title>
	<link href='css/style.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
 	<script src="js/post.js"></script>

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
			<li class="active"><a href="post.php">Post ad</a></li>
			<li><a href="login.php">Login</a></li>			
		</ul>
	</div>
	<br/><br/><br/><br/><br/><br/><br/><br/>
		<div class="form_div">
		  
				<div class="title"><h2>House Details </h2></div>
            <form class="quote" accept="post.php" method="post" name="myForm" onsubmit="return validateForm()" enctype="multipart/form-data" >
              <div>
                <label>Name</label><br>
                <input type="text" name="name" placeholder="Name">
              </div>
              <div>
                <label>Email</label><br>
                <input type="email" name="email" placeholder="Emial Address">
              </div>
              <div>
                <label>Address</label><br>
               <textarea name="address" placeholder="Address"></textarea>
              </div>
              <div>
                <label>Rent Price</label><br>
                <input type="number" min="1500" max="100000"  name="rnp" placeholder="Price">
              </div>
              <div>
              	<div>
                <label>Available Date</label><br>
                <input type="Date" name="av" placeholder="Input Date">
              </div>
                <label>Phone No.</label><br>
                <input type="number" name="phn" placeholder="Phone number">
              </div>
              
              <div>
                <label>Upload Picture</label><br>
                <input type="file" name="image" accept="image/jpg,image/png,image/jpg" placeholder="Upload">
              </div>
              <input class="submit" type="submit" name="submit" value="Insert" />


			
	
          </form>
          </div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			
	

	           
</body>

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