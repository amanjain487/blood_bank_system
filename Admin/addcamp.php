<?php if(!isset($_SESSION)) {session_start();}  ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>BBMS-Admin</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
<?php
if($_SESSION['loginstatus']=="")
{
	header("location:admimlogin.php");
}
?>
<div style="background-color:#DFDFDF;">
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
			<li ><p style="font-size:18px;font-weight: bold;"><a href="query.php">User Queries</a></li>
			<li class="active"><p style="font-size:18px;font-weight: bold;"><a href="adminfun.php">Admin Functions</a></li>
             		<li><p style="font-size:18px;font-weight: bold;"><a href="logout.php">Log Out</a></li>
			<li><p style="font-size:18px;font-weight: bold;"><a href="superlog.php">Super Admin</a></li>	
		</ul>
	</div>
</div>

<br>
<div class="nav_bg" >
	<div class="wrap">
		<ul class="nav" >
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<li><p style="font-size:18px;font-weight: bold;"><a href="deldonor.php">Delete Donor</a></li>	
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<li><p style="font-size:18px;font-weight: bold;color:red"><a href="delreq.php">Delete Request</a></li> 
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<li  class="active"><p style="font-size:18px;font-weight: bold;"><a href="addcamp.php">Add Camp</a></li> 
           		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<li><p style="font-size:18px;font-weight: bold;"><a href="deletecamp.php">Delete Camp</a></li>
 			
           	 </ul>
	</div>
</div>
</div>
<center>
<div style="background-color:#E9CCBD;">     
<br /><br />

<?php include('function.php'); ?>

<form method="post" enctype="multipart/form-data">
	<table border="0" align="center" width="400" height="350px" class="shaddoww">
		<tr><td colspan="2" align="center" class="toptd" style="color:#b30000;font-size:35px;font-family:Arial Black, Gadget, sans-serif">Add Camp </td></tr>
		<tr><td colspan="2">&nbsp;</td></tr>
		<tr><td class="lefttd" style="font-size:20px;">Camp Name:</td><td><input type="text" name="t1" value="<?php if(isset($_POST["show"])){echo $_POST["t1"];} ?>" required="required" pattern="[a-zA-Z.1 _]{5,35}" title="please enter only character or numbers between 5 to 35 for camp title"/></td></tr>
		<tr><td class="lefttd" style="font-size:20px;">Organized By:</td><td><input type="text" name="t2" value="<?php if(isset($_POST["show"])){echo $_POST["t2"];} ?>" required="required" pattern="[a-zA-Z1 _]{5,35}" title="please enter only character or numbers between 5 to 35 for organizer name"/></td></tr>
		<tr><td class="lefttd" style="font-size:20px;">City: </td><td><input type="text" name="t3" value="<?php if(isset($_POST["show"])){echo $_POST["t3"];} ?>" required="required" pattern="[a-zA-Z.1 _]{5,35}" title="please enter only character or numbers between 5 to 35 for city"/></td></tr>
		<tr><td class="lefttd" style="font-size:20px;">State: </td><td><input type="text" name="t4" value="<?php if(isset($_POST["show"])){echo $_POST["t4"];} ?>" required="required" pattern="[a-zA-Z.1 _]{5,35}" title="please enter only character or numbers between 5 to 35 for state"/></td></tr>
		<tr><td class="lefttd" style="font-size:20px;">Detail:</td><td><textarea name="t5"></textarea></td></tr>
		<tr><td>&nbsp;</td><td><input type="submit" value="Add Camp" name="sbmt" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr>
	</table>
</form>
</center>
    
<?php
if(isset($_POST["sbmt"])) 
{
	$cn=makeconnection();
	$s="insert into camp(campname,organisedby,city,state,detail) values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"] . "','" . $_POST["t5"] ."')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Save');</script>";
}
?> 

<div class="ftr-bg">
	<div class="wrap">
		<div class="footer">
			<div class="f_nav">
			<ul>
				<li class="active"><p style="font-size:20px;"><a href="adminfun.php">Admin Functions</a></li>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp			
         			<li><p style="font-size:20px;"><a href="logout.php">Log Out</a></li>
        		</ul>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>


   
</body>
</html>