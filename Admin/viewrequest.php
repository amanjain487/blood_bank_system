<?php if(!isset($_SESSION)) {session_start();}  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title>BBMS-Admin</title>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
<?php
if($_SESSION['loginstatus']=="")
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
</div>
<div class="nav_bg">
	<div class="wrap">
		<ul class="nav">
			<li><p style="font-size:18px;font-weight: bold;"><a href="../index.php" target="_blank">Preview Website</a></li>
			<li  ><p style="font-size:18px;font-weight: bold;"><a href="avail.php">The Donors</a></li>            
			<li class="active"><p style="font-size:18px;font-weight: bold;"><a href="viewrequest.php">View Requests</a></li>
			<li><p style="font-size:18px;font-weight: bold;"><a href="query.php">User Queries</a></li>
			<li><p style="font-size:18px;font-weight: bold;"><a href="adminfun.php">Admin Functions</a></li>
             		<li><p style="font-size:18px;font-weight: bold;"><a href="logout.php">Log Out</a></li>
			<li><p style="font-size:18px;font-weight: bold;"><a href="superlog.php">Super Admin</a></li>	
		</ul>
	</div>
</div>
   
<?php include('function.php'); ?>
<div style=" min-height:350px; width:1000px; margin:auto; margin-top:50px; margin-bottom:50px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
     	<form method="post" enctype="multipart/form-data">
 		<table cellpadding="20" cellspacing="20" width="1000px" height="200px"  style="margin:auto" >
			<tr><td colspan="7" align="center"><img src="images/brequest.png" height="90px" /></td></tr>
			<tr><td>&nbsp;</td><td>&nbsp;</td></tr>   
 			<tr style="background-color:bisque" align="center" class="bold">&nbsp&nbsp&nbsp&nbsp    
			<td  align="center" style="color:red; font-family:Arial Black, Gadget, sans-serif"  >Blood Group</td><td  style="color:red; font-family:Arial Black, Gadget, sans-serif">Name</td><td align="center" style="color:red; font-family:Arial Black, Gadget, sans-serif; padding-left:10px">Gender</td><td align="center" style="color:red; font-family:Arial Black, Gadget, sans-serif;padding-left:25px">Age</td><td align="center" style="color:red; font-family:Arial Black, Gadget, sans-serif;padding-left:30px">Mobile No</td><td align="center" style="color:red; font-family:Arial Black, Gadget, sans-serif;padding-left:10px">Detail</td>
            		<td align="center" style="color:red; font-family:Arial Black, Gadget, sans-serif;padding-left:20px">Deadline(yyyy/mm/dd)</td>
    			<td></br></br></td>    </tr>

<?php
	$cn=mysqli_connect("localhost","root","","bloodbank");
	$s="select * from request";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		echo"<tr><td  style=' padding-left:10px'>$data[5]</td><td  style=' padding-left:40px'>$data[1]</td><td  style=' padding-left:20px'>$data[2]</td><td  style=' padding-left:30px'>$data[3]</td><td  style=' padding-left:50px'>$data[4]</td><td  style=' padding-left:50px'>$data[8]</td><td  style=' padding-left:60px'>$data[7]</br></br></td></tr>";
	}
	mysqli_close($cn);
?>
</table>
</form>
</div>
          
<div class="clear"></div>

<?php include('bottom.php'); ?>			
			
	
</body>
</html>