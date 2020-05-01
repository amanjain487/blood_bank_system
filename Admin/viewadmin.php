<?php if(!isset($_SESSION)) {session_start();}  ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title>BBMS-Super Admin</title>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>

<?php
if($_SESSION["loginstatus"]=="")
{
	header("location:admimlogin.php");
}
?>
<div style="background-color:#E9CCBD;">
	<div class="h_bg">
		<div class="wrap">
			<div class="header">
				<div class="logo">
				<h1><img src="images/logo.png" alt=""></h1>
			</div>
		</div>
	</div>
<div class="nav_bg">
	<div class="wrap">
		<ul class="nav">
			<li><a href="../index.php" target="_blank" style="font-size:18px">Preview Website</a></li>
			<li><a href="addadmin.php" style="font-size:18px">Add Admin</a></li>
			<li  class="active"><a href="viewadmin.php" style="font-size:18px">View Admin</a></li>
			<li><a href="deladmin.php" style="font-size:18px">Delete Admin</a></li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
             		<li><a href="logout.php" style="font-size:18px">Log Out</a></li>
		</ul>
	</div>
</div>
<center>
</br></br>

<?php include('function.php'); ?>


<form method="post">
	<table border="0" align="center" width="400px" height="100px" class="shaddoww">
		<tr><td colspan="0" align="center" class="toptd" class="bold" style="color:#b30000;font-size:35px;font-family:Arial Black, Gadget, sans-serif">Admin List</br></br></td></tr>
		<tr><td align="center" style="padding-top:10px">
		<table border="1" align="center" width="80%" height="300px" >
			<tr><td style="color:#b30000;font-size:20px;font-family:Arial Black, Gadget, sans-serif">Admin Name</td><td align="center" style="color:#b30000;font-size:20px;font-family:Arial Black, Gadget, sans-serif">Username</td></tr>
			
<?php
	$cn=mysqli_connect("localhost","root","","bloodbank");
	$s="select * from admin";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		echo "<tr><td style='padding-left:10px'>$data[2]</td><td  style='padding-left:50px'>$data[0]</td></tr>";
	}
	mysqli_close($cn);
?>
			</td></tr>
		</table>
	</table>
</form>
       
</center>
<div class="ftr-bg">
	<div class="wrap">
		<div class="footer">
			<div class="f_nav">
			<ul>
				<li class="active"><p style="font-size:20px;"><a href="adminfun.php">Super Admin</a></li>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp			
         			<li><p style="font-size:20px;"><a href="logout.php">Log Out</a></li>
        		</ul>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
   
</body>
</html>