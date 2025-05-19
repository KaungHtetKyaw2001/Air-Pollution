 <?php 
session_start();
$connect=mysqli_connect('localhost','root','','airpollutiondb');
include ('BrowsingFunction.php');
recordBrowse("http://localhost:70/DW-Assignment/History.php"); 
include ('Adminheader.php');
if (isset($_SESSION['StaffloginCount'])) 
{
	if ($_SESSION['StaffloginCount'] >= 3) 
	{
		echo "<script> window.alert ('Your account has been temporarily locked. Please Try Again in 10 Minutes')</script>";
		echo "<script> window.location = 'LoginTimer.php'</script>";
	}
}
	elseif (!isset($_SESSION['StaffloginCount']))
	{
		$_SESSION['StaffloginCount'] = 0;
	}
	if (isset($_POST['btnStaffLogin'])) 	
	{
	 $StaffName=$_POST['txtStaffName'];
	 $StaffPassword=md5($_POST['txtpassword']);

		$StaffSelect="SELECT * from Staff where StaffName='$StaffName' and StaffPassword='$StaffPassword'";
		$StaffSelectQuery=mysqli_query($connect,$StaffSelect);
		$LoginCount=mysqli_num_rows($StaffSelectQuery);

		if ($LoginCount==1) 
		{
		 	$LoginReturn=mysqli_fetch_array($StaffSelectQuery);

		$_SESSION['id']=$LoginReturn['StaffID'];
		$_SESSION['name']=$LoginReturn['StaffName'];
		$_SESSION['email']=$LoginReturn['StaffEmail'];

		echo "<script>alert('Staff Login Complete')</script>";
		unset($_SESSION['StaffloginCount']);
		echo "<script>window.location='CountryRegister.php'</script>";
		 } 
		 else
		 {
		$_SESSION['StaffloginCount']++;
 		echo "<script> window.alert ('Invalid! Login Attempt:".$_SESSION['StaffloginCount']."')</script>";
 		echo" <script>alert ('Invalid Staff') </script>";
		 }
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Staff Login</h1><br><br><br>
<form action='StaffLogin.php' method='POST' enctype='multipart/form-data'>
	Staff Name
	<input type='text' name='txtStaffName' required placeholder='Staff Name'></input><br><br>
	Password
	<input type='password' name='txtpassword' required='Please Enter the Password' placeholder='Staff Password'></input><br><br>
	<input type='submit' name='btnStaffLogin' value='Login'></input>
</form>
</body>
</html>
<?php 
include('footer.php');
 ?>