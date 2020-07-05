<?php
include_once("config.php");
if(isset($_POST["submit"]))
{
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$pass=$_POST['password'];
	$enpass=md5($pass);
	$address=$_POST['Address'];
$sql="INSERT INTO registrationinfo(name,email,phone,password,address) values('$name','$email','$phone','$enpass','$address')";
	if(mysqli_query($con,$sql))
	{
		?>
		<script type="text/javascript">
				alert("Data is successfully added")
			</script> 
			<?php
			header ("refresh:0; url=registration.html");
	}
	else
	{
		?>
		<script type="text/javascript">
				alert("Data is not successfully added")
			</script> 
			<?php
			header ("refresh:0; url=registration.html");
	}

}
?>