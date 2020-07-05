<?php
include_once("config.php");
if(isset($_POST["submit"]))
{
	
	$name=$_POST['name'];
	$pass=$_POST['password'];
	$enpass=md5($pass);
	$phone=$_POST['phonenumber'];
	$bloodgroup=$_POST['bloodgroup'];
	$email=$_POST['email'];
	$livingdistrict=$_POST['livingdistrict'];
	$bloodamount=$_POST['bloodamount'];
	
$sql="INSERT INTO donorinfo(name,phonenumber,bloodgroup,email,address,bloodamount,password) values('$name','$phone','$bloodgroup','$email','$livingdistrict','$bloodamount','$enpass')";
	if(mysqli_query($con,$sql))
	{
		?>
		<script type="text/javascript">
				alert("Data is successfully added")
			</script> 
			<?php
			header ("refresh:0; url=donorinfo.php");
	}
	else
	{
		?>
		<script type="text/javascript">
				alert("Data is not successfully added")
			</script> 
			<?php
			header ("refresh:0; url=donorinfo.php");
	}

}
?>