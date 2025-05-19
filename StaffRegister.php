<?php
include('Adminheader.php');
include ('BrowsingFunction.php');
recordBrowse("http://localhost:70/DW-Assignment/History.php"); 
 ?>

 <?php 
 $connect=mysqli_connect('localhost','root','','airpollutiondb');

 	if (isset($_POST['btnregister'])) 
 	{
 		$Staffname=$_POST['txtStaffname'];
 		$Email=$_POST['txtEmail'];
 		$Password=md5($_POST['txtPassword']);

 		$Image=$_FILES['txtimage']['name'];
 		$imagefolder='StaffImage/';
 		if ($Image) 
 		{
 			$filename=$imagefolder."_".$Image;
 			$Copied=copy($_FILES['txtimage']['tmp_name'],$filename);
 			if (!$Copied) 
 			{
 				exit("Unexpected Error Occured.Cannot Upload Image");
 			}
 		}
 	$StaffInsert="INSERT INTO `staff`(`StaffName`, `StaffEmail`, `StaffPassword`, `StaffProfileImage`) VALUES ('$Staffname','$Email','$Password','$filename')";
 	$QueryRun=mysqli_query($connect,$StaffInsert);
 	if ($QueryRun) 
 	{
 		echo "<script>alert('Staff Registered')</script>";
 		echo "<script>window.location='StaffLogin.php'</script>";
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
	<title>Staff Register</title>
</head>
<body>
<form action='StaffRegister.php' method='POST' enctype='multipart/form-data'>
<h1>Staff Register</h1><br><br>
	Staff Name
	<input type='text' name='txtStaffname' required placeholder='Staff Name'></input><br><br>
	Email Address
	<input type='email' name='txtEmail' required placeholder='Email Address'></input><br><br>
	Password
	<input type='password' name='txtPassword' required></input><br><br>
	Image
	<input type='File' name='txtimage' required></input><br><br>
	<input type='submit' name='btnregister' value='Register'></input>
</form>
</body>
</html>
<?php 
include('footer.php');
 ?>