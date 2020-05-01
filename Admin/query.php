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
			<li ><p style="font-size:18px;font-weight: bold;"><a href="viewrequest.php">View Requests</a></li>
			<li class="active"><p style="font-size:18px;font-weight: bold;"><a href="query.php">User Queries</a></li>
			<li><p style="font-size:18px;font-weight: bold;"><a href="adminfun.php">Admin Functions</a></li>
             		<li><p style="font-size:18px;font-weight: bold;"><a href="logout.php">Log Out</a></li>
			<li><p style="font-size:18px;font-weight: bold;"><a href="superlog.php">Super Admin</a></li>	
		</ul>
	</div>
</div>
   
<?php include('function.php'); ?>
<?php
	$cn=makeconnection();
	$s="select * from contacts";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	
	$n=0;
?>
<div style=" min-height:350">
	<form method="post" enctype="multipart/form-data">
      	<table cellpadding="0" cellspacing="0" height="750" width="1100px" style="margin:auto"; >
  	<tr><td>
		<table cellpadding="0" cellspacing="0" width="800px" height="100px" style="margin:auto; border:0px" class="tableborder">
        	<tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="images/query.png" height="160px" width="200px" style="padding-top:20px" />
<?php
if($r==0)
echo"</br></br></br><center>No queries found!";
?>
</td></tr>
        	<tr><td >&nbsp;</td></tr> 
          

<?php
	while($data=mysqli_fetch_array($result))
	{
?>
  		<tr><td>
		<table cellpadding="0" cellspacing="0" width="700px" height="150px" style="margin:auto; border:none;" class="tableborder">
		<tr><td width="100px"  align="center" style="vertical-align:middle">
		<td width="500px" height="50px" style="vertical-align:top">
		<center> <table cellpadding="0" width="500px" height="150px" style="border:none">
           	<tr><td colspan="2">&nbsp;</td></tr>
                <tr><td><span class="title" style='font-weight:bold;'>Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td><td><?php echo $data[0]; ?></td><td align="left" width="50%"></td></tr>
                <tr><td><span class="title"style='font-weight:bold;'>E-Mail:</span></td><td><?php echo $data[1]; ?></td></tr>
		<tr><td><span class="title"style='font-weight:bold;'>Mobile:</span></td><td><?php echo $data[2]; ?></td></tr>
                <tr><td><span class="title"style='font-weight:bold;'>Subject:</span></td><td><?php echo $data[3]; ?></td></tr>
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

<?php include('bottom.php'); ?>			
			
	
</body>
</html>