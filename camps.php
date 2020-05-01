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
 			<li class="active"><p style="font-size:18px;font-weight: bold;"><a href="camps.php">Camps</a></li>
                    	<li><p style="font-size:18px;font-weight: bold;"><a href="contactus.php">Contact Us</a></li>
           		<li><p style="font-size:18px;font-weight: bold;"><a href="aboutus.php">About Us</a></li>
			<li><p style="font-size:18px;font-weight: bold;"><a href="admin/admimlogin.php">Admin</a></li>
           	 </ul>
	</div>
</div>



</br></br>


<div style="min-height:400px; width:1000px; margin:auto; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
	<div class="s_bg">
		<div class="wrap">
			<div class="main_cont">
     				<div class="main">
        				<div class="content">
    						<center> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     <img src="images/camps.png" height="80px" style="margin:auto"/></center>
            					<br/><br/>
            					<table cellpadding="0" cellspacing="0" width="1100px" align="center">

<?php
	$cn=makeconnection();
	$s="select * from camp";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	$n=0;
	while($data=mysqli_fetch_array($result))
	{
		if($n%2==0)
		{
		?>
    	<tr>
           
<?php

}?>
      	<td>
           	<table cellpadding="0" cellspacing="0" class="tableborder" width="500" style="border:none" align="center" >
    		<tr><td style="font-size:24px; font-weight:bold; text-shadow:1px 1px 6px browm; padding-left:50px; padding-top:10px; padding-bottom:10px; color:#925959"><?php echo $data[1]; ?></td></tr>
      		<tr><td align="center"> 
  		<tr><td class="title"  style="vertical-align:middle">Organised By:<?php echo $data[2]; ?></td><td align="left" width="50%"></td></tr>
         	<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
         	<tr><td class="title" style="vertical-align:middle">City:<?php echo $data[3]; ?></td></tr>
         	<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
          	<tr><td class="title" style="vertical-align:middle">State:<?php echo $data[4]; ?></td></tr>
         	<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
		</table>
	</td>
        
<?php
        if($n%2==1)
	 {
?>

        </tr>
        <tr><td colspan="2">&nbsp;</td></tr>
        <tr><td colspan="2">&nbsp;</td></tr>
        <tr><td colspan="2">&nbsp;</td></tr>


<?php
}
$n=$n+1;
}?>
    	
	</table>
     	</center>
	</div></div></div>
</div>

<div class="clear"></div>
</div></div>
</br></br>


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