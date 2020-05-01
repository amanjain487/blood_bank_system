<?php if(!isset($_SESSION)) { session_start(); } ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title>Blood bank Management System</title>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
<?php include('function.php'); ?>

<div style="background-color:#E9CCBD;">

<div class="h_bg">
	<div class="wrap">
		<div class="header">
			<div class="logo">
				<h1><a href="index.php"><img src="images/logo.png" alt=""></a></h1>
			</div>
		</div>
	</div>
</div>
<div class="nav_bg">
	<div class="wrap">
		<ul class="nav">
			<li class="active"><a href="../index.php" style="font-size:18px;font-weight: bold;">Preview Website</a></li>	
        	</ul>
	</div>
</div>  
   
<div style="height:400px;">
     	<form method="post" enctype="multipart/form-data">
		<table cellpadding="0" cellspacing="0" width="600px" height="300px" class="tableborder" style="margin:auto; margin-top:100px;" >
     			<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
   			<tr><td colspan="2" align="center"><img src="images/adminlog.jpg"  width="480px" height="90px"></td></tr>
  			<tr><td colspan="2">&nbsp;</td></tr>  <tr><td colspan="2">&nbsp;</td></tr> 
                	<tr><td align="right"><img src="images/login1.png" width="200px" height="150px" /></td>
                    	<td style="vertical-align:top"><table cellpadding="0" cellspacing="0" height="200px">             
			<tr><td class="lefttd">User Name:</td><td><input type="text" name="t1" /></td></tr>
			<tr><td class="lefttd">Password:</td><td><input type="password"name="t2" /></td></tr>
			<tr><td>&nbsp;</td><td><input type="submit" value="Log In" name="sbmt" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr>
			<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
		</table>
		</td></tr></table>
	</form>
</div>

<div class="clear"></div>


<div class="ftr-bg">
	<div class="wrap">
		<div class="footer">
			<div class="f_nav">
			<ul>
				<li><p style="font-size:20px;"><a href="index.php">Home</a></li>			
				<li><p style="font-size:20px;"><a href="registration.php">Register As Donor</a></li>
				<li><p style="font-size:20px;"><a href="contactus.php">Contact Us</a></li>
         			<li><p style="font-size:20px;"><a href="aboutus.php">About Us</a></li>
        		</ul>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>


<?php
$_SESSION['loginstatus']="";
if(isset($_POST["sbmt"])) 
{
	
	$cn=makeconnection();			
	$s="select * from admin where username='" . $_POST["t1"] . "' and pwd='" .$_POST["t2"] . "'";
	$q=mysqli_query($cn,$s);
	$r=mysqli_num_rows($q);
	$data=mysqli_fetch_array($q);
	mysqli_close($cn);
	if($r>0)
	{
		$_SESSION["username"]=$_POST["t1"];
		$_SESSION["usertype"]=$data[2];
		$_SESSION['loginstatus']="yes";
		header("location:index.php");
	}
	else
	{
		echo "<script>alert('Invalid UserName Or Password');</script>";
	}
		
}	
?> 


</body>
</html>