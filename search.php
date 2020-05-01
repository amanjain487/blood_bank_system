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
           		<li  class="active"><p style="font-size:18px;font-weight: bold;"><a href="search.php">Search</a></li>
 			<li><p style="font-size:18px;font-weight: bold;"><a href="camps.php">Camps</a></li>
                    	<li><p style="font-size:18px;font-weight: bold;"><a href="contactus.php">Contact Us</a></li>
           		<li><p style="font-size:18px;font-weight: bold;"><a href="aboutus.php">About Us</a></li>
			<li><p style="font-size:18px;font-weight: bold;"><a href="admin/admimlogin.php">Admin</a></li>
           	 </ul>
	</div>
</div>



</br></br>
   
<div style="height:350px;">
	<form method="post" enctype="multipart/form-data">
   		<table cellpadding="0" cellspacing="0" width="500px" height="250px" class="tableborder" style="margin:auto; margin-top:100px;" >
         		<tr><td colspan="2">&nbsp;</td></tr>
        		<tr><td colspan="2" align="center"><img src="images/search.png" height="80px" /></td></tr>
        		<tr><td colspan="2">&nbsp;</td></tr>
        		<tr><td class="lefttd" style="padding-left:40px">Select Blood Group :</td><td><select name="s2" required><option value="">Select</option>
<?php
	$cn=makeconnection();
	$s="select * from bloodgroup";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		if(isset($_POST["show"])&& $data[0]==$_POST["s2"])
		{
			echo "<option value=$data[0] selected>$data[0]</option>";
		}
		else
		{
			echo "<option value=$data[0]>$data[0]</option>";
		}
	}
	mysqli_close($cn);
?>

				</select>

<?php
	if(isset($_POST["sbmt"]))
	{
		$cn=makeconnection();
		$s="select * from bloodgroup where bg='" .$_POST["s2"] ."'";
		$result=mysqli_query($cn,$s);
		$r=mysqli_num_rows($result);
		//echo $r;
		$data=mysqli_fetch_array($result);
		$b=$data[0];
		mysqli_close($cn);
	}
?>

			</td></tr>
 			<tr><td colspan="2">&nbsp;
            		</td></tr>
        		<tr><td colspan="2">&nbsp;</td></tr>
        		<tr><td>&nbsp;</td><td>       
			<tr><td>&nbsp;</td><td><input type="submit" value="Search" name="sbmt" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr>
			<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
          	</table>
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
if(isset($_POST["sbmt"]))
{
	//header("location:result.php?bg=".$_POST["s2"]);
	echo "<script>location.replace('result.php?bg=". $_POST["s2"] ."');</script>";
}
?>

</body>
</html>