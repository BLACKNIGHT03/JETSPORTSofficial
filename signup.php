<?php
//INSERT THE DATA
require_once ('connection.php');
if(isset($_POST['signup']))
{	
       $name = $_POST['name'];
	   $contact = $_POST['contact'];
	   $email = $_POST['email'];
	   $password = $_POST['password'];
        
		  $user=mysqli_query($con,"SELECT * FROM customers WHERE email='$email' ");
		  $result=mysqli_num_rows($user);
		  if($result>0){
			  echo "<script>alert('Account Already Exist');
			   window.location.href='account.html'; 
	               </script>";
		  }else
		  {
       $sql = "INSERT INTO customers (name,contact,email,password)
	   VALUES ('$name','$contact','$email','$password')";

 if(mysqli_query($con, $sql))
 {
echo "<script>alert('Account created successfully');
      window.location.href='account.html'; 
	 </script>";	
 }else
 {
     echo "<script>alert('Account Already Exists');
           window.location.href='account.html'; 
	      </script>";
	 
 }
		  }
}
?>