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
			<li  class="active"><p style="font-size:18px;font-weight: bold;"><a href="sendreq.php">Request Blood</a></li> 
           		<li><p style="font-size:18px;font-weight: bold;"><a href="search.php">Search</a></li>
 			<li><p style="font-size:18px;font-weight: bold;"><a href="camps.php">Camps</a></li>
                    	<li><p style="font-size:18px;font-weight: bold;"><a href="contactus.php">Contact Us</a></li>
           		<li><p style="font-size:18px;font-weight: bold;"><a href="aboutus.php">About Us</a></li>
			<li><p style="font-size:18px;font-weight: bold;"><a href="admin/admimlogin.php">Admin</a></li>
           	 </ul>
	</div>
</div>

</br></br>


<div style="height:530px; width:500px; margin:auto; margin-top:10px; margin-bottom:10px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
	<form method="post" enctype="multipart/form-data">
	<table cellpadding="0" cellspacing="0" width="500px" height="480px" style="margin:auto" >
		<tr><td colspan="2" align="center"><img src="images/bloodreq.png" height="90px" /></td></tr>
		<tr><td>&nbsp;</td><td>&nbsp;</td></tr>   
		<tr><td class="lefttd" align="center"> Name :</td><td><input type="text" name="t1" required="required" pattern="[a-zA-Z _]{5,15}" title="please enter only character  between 5 to 15 for donor name" /></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td class="lefttd" align="center">Gender :</td><td><input name="r1" type="radio" value="Male" checked="checked">Male<input name="r1" type="radio" value="Female">Female</td></tr>
 		<tr><td>&nbsp;</td></tr>
		<tr><td class="lefttd" align="center">Age :</td><td><input type="number" name="t2" required="required" pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age" /></td></tr>
 		<tr><td>&nbsp;</td></tr>
		<tr><td class="lefttd" align="center">Mobile No :</td><td><input type="text" name="t3"  required="required" pattern="[0-9]{10,12}" title="please enter only numbers between 10 to 12 for mobile no." /></td></tr>
 		<tr><td>&nbsp;</td></tr>
		<tr><td class="lefttd" align="center">Select Blood Group :</td><td><select name="t4" required><option value="">Select</option>

<?php
$cn=makeconnection();
$s="select * from bloodgroup";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		echo "<option value=$data[0]>$data[0]</option>";
	}
	mysqli_close($cn);
?>

			</select></td></tr>
 		<tr><td>&nbsp;</td></tr>
		<tr><td class="lefttd" align="center">E-Mail :</td><td><input type="email" name="t5" required="required" /></td></tr>
 		<tr><td>&nbsp;</td></tr>
		<tr><td class="lefttd" align="center">Deadline :</td><td>
			<select name="month">
				<option value="1">JAN</option>
				<option value="2">FEB</option>
				<option value="1">MAR</option>
				<option value="1">APR</option>
				<option value="1">MAY</option>
				<option value="1">JUN</option>
				<option value="1">JUL</option>
				<option value="1">AUG</option>
				<option value="1">SEP</option>
				<option value="1">OCT</option>
				<option value="1">NOV</option>
				<option value="1">DEC</option>
			</select>
			<select name="day">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
			</select>
			<select name="year">
				<option value="2019">2019</option>
				<option value="2020">2020</option>
				<option value="2021">2021</option>
				<option value="2022">2022</option>
				<option value="2023">2023</option>
				<option value="2024">2024</option>
				<option value="2025">2025</option>
				
			</select></td></tr>
 		<tr><td>&nbsp;</td></tr>
		<tr><td class="lefttd" align="center">Detail :</td><td><textarea name="t7"></textarea></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>&nbsp;</td><td><input type="submit" value="Send Request" name="sbmt" style="border:0px; background:linear-gradient(#900,#D50000); width:100px; height:30px; border-radius:10px 1px 10px 1px; box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px; text-shadow:1px 1px 6px black; "></td></tr></table>
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
	$d=$_POST["year"]."/".$_POST["month"]."/".$_POST["day"];
	$s="insert into request(name,gender,age,mobile,bg,email,deadline,detail) values('" . $_POST["t1"] ."','" . $_POST["r1"] . "','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"] . "','" . $_POST["t5"] . "','" . $d .  "','" .  $_POST["t7"]  ."')";
	$q=mysqli_query($cn,$s);
	mysqli_close($cn);
	if($q>0)
	{
		echo "<script>alert('Blood Request Sent Successfully');</script>";
	}
	else
	{
		echo "<script>alert('Error in Request, Please provide Correct Details!');</script>";
	}
		
}	
?> 

</body>
</html>