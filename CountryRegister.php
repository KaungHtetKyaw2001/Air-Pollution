<?php 
include('Adminheaderafterlogin.php');
$connect=mysqli_connect('localhost','root','','airpollutiondb');
if (isset($_POST['btnRegister'])) 
{
	$StaffID=$_POST['txtstaffid'];
	$CountryName=$_POST['txtcountryname'];
	$Airpollutionrate=$_POST['txtairpollutionrate'];
	$Measuredyear=$_POST['txtyear'];
	$Description=$_POST['txtdescription'];
	$Image1=$_FILES['txtimage1']['name'];
 		$imagefolder='CountryImage/';
 		if ($Image1) 
 		{
 			$filename1=$imagefolder."_".$Image1;
 			$Copied=copy($_FILES['txtimage1']['tmp_name'],$filename1);
 			if (!$Copied) 
 			{
 				exit("Unexpected Error Occured.Cannot Upload Image");
 			}
 		}
 	$Image2=$_FILES['txtimage2']['name'];
 		$imagefolder='CountryImage/';
 		if ($Image2) 
 		{
 			$filename2=$imagefolder."_".$Image2;
 			$Copied=copy($_FILES['txtimage2']['tmp_name'],$filename2);
 			if (!$Copied) 
 			{
 				exit("Unexpected Error Occured.Cannot Upload Image");
 			}
 		}
 		$Image3=$_FILES['txtimage3']['name'];
 		$imagefolder='CountryImage/';
 		if ($Image3) 
 		{
 			$filename3=$imagefolder."_".$Image3;
 			$Copied=copy($_FILES['txtimage3']['tmp_name'],$filename3);
 			if (!$Copied) 
 			{
 				exit("Unexpected Error Occured.Cannot Upload Image");
 			}
 		}
 		$CountryInsert="INSERT into `Country`(`StaffID`,`CountryName`,`Air_Pollution_Rate`,`Measured_Year`,`Description`,`CountryImage1`,`CountryImage2`,`CountryImage3`) Values('$StaffID','$CountryName','$Airpollutionrate','$Measuredyear','$Description','$filename1','$filename2','$filename3')";
 		$InsertRun=mysqli_query($connect,$CountryInsert);
 		if ($InsertRun) 
 		{
 			echo "<script>alert('Country Registered')</script>";
 		}
 		else
 		{
 			echo mysqli_error($connect);
 		}

 		
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Country Register</title>
</head>
<body>
<form action='CountryRegister.php' method='POST' enctype='multipart/form-data'>
<h1>Country Register</h1><br><br>

	StaffID
	<input type='text' name='txtstaffid' placeholder='Your staff ID' required></input><br><br>
	Country Name
	<input type='text' name='txtcountryname' placeholder='Country Name' required></input><br><br>
	Air pollution rate
	<input type='text' name='txtairpollutionrate' placeholder='Air pollution rate' required></input><br><br>
	Measured year
	<input type='text' name='txtyear' placeholder='year' required></input><br><br>
	Description
	<input type='text' name='txtdescription' placeholder='Description' required></input><br><br>
	Country Image 1
	<input type='file' name='txtimage1' required></input><br><br>
	Country Image 2
	<input type='file' name='txtimage2' required></input><br><br>
	Country Image 3
	<input type='file' name='txtimage3' required></input><br><br>
	<input type='submit' name='btnRegister' value='Register'></input>
</form>
</body>
</html>
<?php 
include('footer.php');
 ?>