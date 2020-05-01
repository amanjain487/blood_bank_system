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
			<li class="active"><p style="font-size:18px;font-weight: bold;"><a href="registration.php">Be a Donor</a></li> 
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

<div style="height:530px; width:700px; margin:auto; margin-top:10px; margin-bottom:10px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
	<form method="post" enctype="multipart/form-data">
	<table cellpadding="0" cellspacing="0" style="margin:auto; width:100%; " >
		<tr><td colspan="2"  align="center"><img src="Images/donor.png" width="300px" height="80px"  /></td></tr>
   		<tr><td colspan="2">&nbsp;</td></tr>
   		<tr><td  style=" padding-left:20px;" ><img src="Images/sidebanner.jpg" width="170px" class="shaddoww"/>&nbsp;</td>
                <td style="vertical-align:top;padding-top:20px;">
                <table cellpadding="0" cellspacing="0" style="width:100%; height:400px;">
			<tr><td class="lefttd">Donor Name :</td><td><input type="text" name="t1" required="required" pattern="[A-Za-z ]{4,15}" title="please enter only character  between 4 to 15 for donor name" /></td></tr>
			<tr><td class="lefttd">Gender :</td><td><input name="r1" type="radio" value="Male" >Male<input name="r1" type="radio" value="Female" >Female</td></tr>
			<tr><td class="lefttd">Age :</td><td><input type="number" name="t2" required="required" pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age" /></td></tr>
			<tr><td class="lefttd">Mobile No :</td><td><input type="text" name="t3" required="required" pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no." /></td></tr>
			<tr><td class="lefttd"> Blood Group :</td><td><select name="t4" required><option value="">Select</option>

<?php
$cn=makeconnection();
$s="select * from bloodgroup";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	while($data=mysqli_fetch_array($result))
	{	
		echo "<option value=$data[0]>$data[0]</option>";
	}
	mysqli_close($cn);

?>



				</select></td></tr>
			<tr><td class="lefttd">E-Mail :</td><td><input type="email" name="t5" required="required" /></td></tr>
			<tr><td class="lefttd">City :</td><td><input type="text" name="t8" required="required" /></td></tr>
			<tr><td>&nbsp;</td><td><input type="submit" value="Register" name="sbmt" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr></table>
		</td></tr>
		</table>
	</form>
</div>

          
<div class="clear"></div>
</br></br>

<div class="ftr-bg">
	<div class="wrap">
		<div class="footer">
			<div class="f_nav">
			<ul>
				<li><p style="font-size:20px;"><a href="index.php">Home</a></li>			
				<li  class="active"><p style="font-size:20px;"><a href="registration.php">Register As Donor</a></li>
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
	$cn=makeconnection();
	$s="insert into registereddonors(name,gender,age,mobile,b_g,email,city) values('" . $_POST["t1"] ."','" . $_POST["r1"] . "','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"] . "','" . $_POST["t5"] . "','" . $_POST["t8"] .  "')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	if($s>0)
		{
			echo "<script>alert('Error in Registration, Please Enter Valid Details.');</script>";
		}
		else
		{
			echo "<script>alert('Thank You for Registering.');</script>";
		}
}
?>

 
</body>
</html>