<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> SignUp Form</title>

</head> 
<body>





	<section>
	<div class="wrap">
		<div class="form_c">
					<h1>welcome!!!</h1>
						
				</div>
     <div class="sign">
	<form id="myform"  method="POST" >
		<h2>Create Your Account</h2>
		<input type ="text" id="name" name="fullname" placeholder="Your Name" minlength="5" max="12" required="name" /><br />
		<input type ="email" id="email" name="email" placeholder="Your Email" required="email" /><br />
         <br />
		 <input type ="text" id="uname" name="user_name" placeholder="User Name" minlength="5" max="6" required="uname" /><br />
         <input type ="password" id="pw1" name="password" placeholder="Password"  required="" /><br />
		<input type ="password" id="pw2" name="conformpassword" placeholder="Conform Password" required=""  />
		<br />
         <br />
         <input type="submit" id="submit" name="submit" value="submit" />
    </form>	
   
    </div>
</div>

</section>
</body>
</html>
