<?php 
	if(isset ($_POST['submit']))
   		{  
	include 'dbc.php';

	$name=mysqli_real_escape_string($conn,$_POST['name']);
	$reg=mysqli_real_escape_string($conn,$_POST['reg']);
	$size=mysqli_real_escape_string($conn,$_POST['size']);
	$ph=mysqli_real_escape_string($conn,$_POST['ph']);


		// error handlers

		//checking for empty fleids
		if( empty($name) || empty($reg) || empty($size) || empty($ph) )
		{
			header("Location: Tshirt.html?Field=empty");
			EXIT ();
		}
		else{


						$sql= "INSERT INTO tshirt (name,reg,size,ph) VALUES ('$name','$reg','$size','$ph')" ;
	                    mysqli_query($conn,$sql);

						 header ("Location: Tshirt.html");
			}	
			}
		

		else
		{
			header("Location: Tshirt.html?Select-a-Tshirt");
			 EXIT ();
		}



 ?>