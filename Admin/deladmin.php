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
			<li><a href="viewadmin.php" style="font-size:18px">View Admin</a></li>
			<li class="active"><a href="deladmin.php" style="font-size:18px">Delete Admin</a></li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
             		<li><a href="logout.php" style="font-size:18px">Log Out</a></li>
		</ul>
	</div>
</div>
<center>
</br></br>

<?php include('function.php'); ?>

<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="delete from admin where adminname='"  . $_POST["s2"] ."'";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Admin Deleted Successfully.');</script>";
}
?>
       <form method="post">
		<table border="0" align="center" width="400" height="400px" class="shaddoww">
			<tr><td colspan="2" align="center" class="toptd" style="color:#b30000;font-size:35px;font-family:Arial Black, Gadget, sans-serif"></br>DELETE ADMIN</td></tr>
			<tr><td colspan="2">&nbsp;</td></tr>
			<tr><td class="lefttd" style="font-size:20px;">Select Admin Name</td><td><select name="s2" required><option value="">Select</option>
<?php
	$cn=makeconnection();
	$s="select * from admin";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		echo "<option value='$data[2]'>$data[2]</option>";
	}
	mysqli_close($cn);
?>
			</select>

<?php
if(isset($_POST["show"]))
{
	$cn=makeconnection();
	$s="select * from admin where adminname='" .$_POST["s2"] ."'";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	$data=mysqli_fetch_array($result);
	$username=$data[0];
	$pass=$data[1];
	$usertype=$data[2];
	mysqli_close($cn);
}
?>
			</td></tr>
			<tr><td>&nbsp;</td><td><input type="submit" value="Delete Admin" name="sbmt" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr>
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