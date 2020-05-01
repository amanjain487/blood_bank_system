<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title>Blood bank Management System</title>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
<?php include('Admin/function.php'); ?>

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
                    	<li><p style="font-size:18px;font-weight: bold;"><a href="contactus.php">Contact Us</a></li>
           		<li><p style="font-size:18px;font-weight: bold;"><a href="aboutus.php">About Us</a></li>
			<li><p style="font-size:18px;font-weight: bold;"><a href="admin/admimlogin.php">Admin</a></li>
           	 </ul>
	</div>
</div>



</br></br>
   
<div style=" min-height:350">
	<form method="post" enctype="multipart/form-data">
      	<table cellpadding="0" cellspacing="0" height="750" width="1100px" style="margin:auto"; >
  	<tr><td>
		<table cellpadding="0" cellspacing="0" width="800px" height="100px" style="margin:auto; border:0px" class="tableborder">
        	<tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="images/result.png" height="160px" width="200px" style="padding-top:20px" /></td></tr>
        	<tr><td >&nbsp;</td></tr> 
          
<?php
	$cn=makeconnection();
	$s="select * from registereddonors WHERE b_g='". $_REQUEST["bg"]."'";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	$n=0;
	while($data=mysqli_fetch_array($result))
	{
?>
  		<tr><td>
		<table cellpadding="0" cellspacing="0" width="700px" height="150px" style="margin:auto; border:none;" class="tableborder">
		<tr><td width="100px"  align="center" style="vertical-align:middle">
		<td width="500px" height="50px" style="vertical-align:top">
		<center> <table cellpadding="0" width="500px" height="150px" style="border:none">
           	<tr><td colspan="2">&nbsp;</td></tr>
                <tr><td><span class="title">Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td><td><?php echo $data[1]; ?></td><td align="left" width="50%"></td></tr>
                <tr><td><span class="title">Gender:</span></td><td><?php echo $data[2]; ?></td></tr>
		<tr><td><span class="title">Age:</span></td><td><?php echo $data[3]; ?></td></tr>
		<tr><td><span class="title">Email:</span></td><td><?php echo $data[6]; ?></td></tr>
                <tr><td><span class="title">Blood Group:</span></td><td><?php echo $data[5]; ?></td></tr>
		<tr><td colspan="2">&nbsp;</td></tr>
                </table></center> </br>
</td></tr></table></td></tr>

<?php              
   } 
?>
           
	</table></td></tr></table></form>
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
		




</body>
</html>