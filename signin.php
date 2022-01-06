<?php
   $email = $_POST['email'];
   $password = $_POST['password'];
   
   //Database connection here
   $con = new mysqli("localhost","root","","ecommerce");
   if($con->connect_error) {
	   die("Failed to connect : " .$con->connect_error);
   }
   else{
	   $stmt = $con->prepare("select * from customers where email = ?");
	   $stmt->bind_param("s", $email);
	   $stmt->execute();
	   $stmt_result = $stmt->get_result();
	   if($stmt_result->num_rows > 0){
		   $data = $stmt_result->fetch_assoc();
		   if($data['password'] === $password){
			   echo "<script>alert('Login successfully');
                     window.location.href='INDEX.html'; 
	                 </script>";
		   }
		   else{
		     echo "<script>alert('Invalid Email or Password');
			  window.location.href='account.html'; 
			  </script>";
			 
	   }
	   }
   }
   
	  ?>
	  