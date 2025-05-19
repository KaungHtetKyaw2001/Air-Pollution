<?php 
session_start();
$connect=mysqli_connect('localhost','root','','airpollutiondb');
include ('BrowsingFunction.php');
recordBrowse("http://localhost:70/DW-Assignment/History.php"); 
include ('header.php');
if (isset($_SESSION['UserloginCount'])) 
{
	if ($_SESSION['UserloginCount'] >= 3) 
	{
		echo "<script> window.alert ('Your account has been temporarily locked. Please Try Again in 10 Minutes')</script>";
		echo "<script> window.location = 'LoginTimer.php'</script>";
	}
}
	elseif (!isset($_SESSION['UserloginCount']))
	{
		$_SESSION['UserloginCount']=0;
	}
	if (isset($_POST['btnLogin'])) 	
	{
		$UserName=$_POST['txtusername'];
		$UserPassword=md5($_POST['txtpassword']);

		$UserSelect="SELECT * from UserRegister where UserName='$UserName' and Password='$UserPassword'";
		$UserSelectQuery=mysqli_query($connect,$UserSelect);
		$LoginCount=mysqli_num_rows($UserSelectQuery);

		if ($LoginCount==1) 
		{
		 	$LoginReturn=mysqli_fetch_array($UserSelectQuery);

		$_SESSION['id']=$LoginReturn['UserID'];
		$_SESSION['name']=$LoginReturn['User_Full_Name'];
		$_SESSION['email']=$LoginReturn['Email'];

		echo "<script>alert('User Login Complete')</script>";
		unset($_SESSION['UserloginCount']);
		echo "<script>window.location='UserInformationUpdate.php'</script>";
		 } 
		 else
		 {
		$_SESSION['UserloginCount']++;
 		echo "<script> window.alert ('Invalid! Login Attempt:".$_SESSION['UserloginCount']."')</script>";
 		echo" <script>alert ('Invalid User') </script>";
		 }
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
</head>
<body>
<form action='UserLogin.php' method='POST'>
<h1>User Login</h1><br>
	UserName
	<input type="Text" name="txtusername" required></input><br><br>
	Password
	<input type="Password" name='txtpassword' required></input><br><br>
	<input type='Submit' name='btnLogin' value='Login'></input>

</form>
</body>
</html>

<?php 
include ('footer.php');
 ?>