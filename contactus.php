<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title>Blood bank Management System</title>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
<?php include('admin/function.php'); ?>

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

<div class="nav_bg" >
	<div class="wrap">
		<ul class="nav" >
			<li><p style="font-size:18px;font-weight: bold;"><a href="index.php">Home</a></li>	
			<li><p style="font-size:18px;font-weight: bold;"><a href="registration.php">Be a Donor</a></li> 
			<li><p style="font-size:18px;font-weight: bold;"><a href="sendreq.php">Request Blood</a></li> 
           		<li><p style="font-size:18px;font-weight: bold;"><a href="search.php">Search</a></li>
 			<li><p style="font-size:18px;font-weight: bold;"><a href="camps.php">Camps</a></li>
                    	<li  class="active"><p style="font-size:18px;font-weight: bold;"><a href="contactus.php">Contact Us</a></li>
           		<li><p style="font-size:18px;font-weight: bold;"><a href="aboutus.php">About Us</a></li>
			<li><p style="font-size:18px;font-weight: bold;"><a href="admin/admimlogin.php">Admin</a></li>
           	 </ul>
	</div>
</div>

</br></br>


<div style="height:530px; width:500px; margin:auto; margin-top:10px; margin-bottom:10px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
	<form method="post" enctype="multipart/form-data">
 		<table cellpadding="0" cellspacing="0" width="500px" height="480px" style="margin:auto" >
			<tr><td colspan="2" align="center"></br></br><img src="images/contact.png" height="90px" /></td></tr>
			<tr><td>&nbsp;</td><td>&nbsp;</td></tr>   
			<tr><td class="lefttd" align="center" > Name :</td><td><input type="text" name="t1"  required="required" pattern="[a-zA-Z _]{2,15}" title="please enter only character  between 2 to 15 for donor name" /></td></tr>
			<tr><td class="lefttd" align="center" >E-Mail :</td><td><input type="email" name="t2" required="required" /></td></tr>
			<tr><td class="lefttd" align="center" >Mobile No :</td><td><input type="text" name="t3"   pattern="[0-9]{10,12}" title="please enter only numbers between 10 to 12 for mobile no." /></td></tr>
			<tr><td class="lefttd" align="center" >Subject :</td><td><textarea name="t4"></textarea></td></tr>
			<tr><td>&nbsp;</td><td><input type="submit" value="Send Us" name="sbmt"></td></tr></table>
	

	</form>
</div>
 
</br></br>        
<div class="clear"></div>

<div class="ftr-bg">
	<div class="wrap">
		<div class="footer">
			<div class="f_nav">
			<ul>
				<li><p style="font-size:20px;"><a href="index.php">Home</a></li>			
				<li><p style="font-size:20px;"><a href="registration.php">Register As Donor</a></li>
				<li   class="active"><p style="font-size:20px;"><a href="contactus.php">Contact Us</a></li>
         			<li><p style="font-size:20px;"><a href="aboutus.php">About Us</a></li>
        		</ul>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>

<?php
if(isset($_POST["sbmt"])) 
{
	
	$cn=makeconnection();			
	$s="insert into contacts(name,email,mobile,subj) values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"]   ."')";
	$q=mysqli_query($cn,$s);
	mysqli_close($cn);
	if($q>0)
	{
		echo "<script>alert('Query Sent to Admin');</script>";
	}
	else
	{
		echo "<script>alert('Error in Sending Query');</script>";
	}
		
}	
?> 


</body>
</html>