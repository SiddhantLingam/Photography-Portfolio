
<?php
	
	$con = mysqli_connect('127.0.0.1','root','');
	
	if(!$con)
	{
		echo 'Not Connected to server';
	}

	if(!mysqli_select_db($con,'portfolio'))
	{
		echo 'Database not selected';
	}
	$Name = $_POST['inputName'];
	$Email = $_POST['inputMail'];
	$Message = $_POST['inputMessage'];
	
	$sql = "INSERT INTO contact (name,email,message,time) VALUES ('$Name','$Email','$Message',NOW())";
	
	if(!mysqli_query($con,$sql))
	{
		echo 'Not Inserted';
	}
	else
	{
		echo '<script> alert("Thanks for Contacting"); </script>';
	}
	header("refresh:0; url=index.php");
	
?>