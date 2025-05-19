<?php 
session_start();
include('Userheaderafterlogin.php');
$connect=mysqli_connect('localhost','root','','airpollutiondb'); 
include ('BrowsingFunction.php');
recordBrowse("http://localhost:70/DW-Assignment/History.php"); 
if (!isset($_SESSION['id'])) 
	{
		echo "<script>alert('Please Login User Account.');</script>";
		echo "<script>window.location='userlogin.php';</script>";
	}
if (isset($_SESSION['id'])) 
{
		$userid=$_SESSION['id'];
		$UserSelect="Select * from UserRegister where UserID='$userid'";
		$query=mysqli_query($connect,$UserSelect);
		$return=mysqli_fetch_array($query);
		$UserFullName=$return['User_Full_Name'];
		$UserEmailAddress=$return['Email'];
		$UserDOB=$return['Date_Of_Birth'];
		$UserAddress=$return['Address'];
		$UserAge=$return['Age'];
		$UserPostCode=$return['Postcode'];
		$UserName=$return['UserName'];
		$Password=$return['Password'];
		$Image=$return['UserProfileImage'];

}
if (isset($_POST['btnUpdate'])) 
{
	$ID=$_POST['txtid'];
	$FullName=$_POST['txtfullname'];
	$EmailAddress=$_POST['txtEmail'];
	$DOB=$_POST['txtDOB'];
	$Address=$_POST['txtAddress'];
	$Age=$_POST['txtAge'];
	$PostCode=$_POST['txtPost'];
	$Username=$_POST['txtusername'];
	$Password=$_POST['txtpassword'];
	$ImageCopied=$_FILES['txtimage']['name'];
 		$Userimagefolder='UserImage/';
 		if($Image) 
 		{
 			$filename=$Userimagefolder."_".$ImageCopied;
 			$ImageCopied=copy($_FILES['txtimage']['tmp_name'],$filename);
 		}
 			if (!$ImageCopied) 
 			{
 				exit("Unexpected Error Occured.Cannot Upload Image");
 			}
 	$UserUpdate="UPDATE UserRegister
 				set User_Full_Name='$FullName',
 					Email='$EmailAddress',
 					Date_Of_Birth='$DOB',
 					Address='$Address',
 					Age='$Age',
 					PostCode='$PostCode',
 					UserName='$Username',
 					Password='$Password',
 					UserProfileImage='$filename'
 					where UserID='$ID'";
 	$UserUpdateQuery=mysqli_query($connect,$UserUpdate);
 	if ($UserUpdateQuery) 
 	{
 		echo "<script>alert('User Update Complete')</script>";
 		echo "<script>window.location='UserInformationUpdate.php'</script>";
 	}
 	else
 	{
 		echo "<script>alert('An error occurred during updating the user information. Please check your informations.')</script>";
 	}

}


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action='UserInformationUpdate.php' method='POST' enctype='multipart/form-data'>
<h1>User Profile Update</h1><br><br>
	<table>
		<input type='hidden' name='txtid' value='<?php echo $userid ?>'></input>

	<tr><td>User Full Name</td>
	<td><input type='text' name='txtfullname' required size='50px' value='<?php echo $UserFullName ?>'></input></td></tr>

	<tr><td>Email Address</td>
	<td><input type='text' placeholder='Please Enter Your Email' name='txtEmail' required size='50px' value='<?php echo $UserEmailAddress ?>'></input></td></tr>

	<tr><td>Date Of Birth</td>
	<td><input type='Date' name='txtDOB' required size='150px' value='<?php echo $UserDOB ?>'></input></td></tr>

	<tr><td>Address</td>
	<td><input type='Text' placeholder='Address' name='txtAddress' required size='50px' value='<?php echo $UserAddress ?>'></input></td></tr>

	<tr><td>Age</td>
	<td><input type='text' placeholder='Age' name='txtAge' required size='50px' value='<?php echo $UserAge ?>'></input></td></tr>

	<tr><td>PostCode</td>
	<td><input type='text' placeholder='PostCode' name='txtPost' required size='50px' value='<?php echo $UserPostCode ?>'></input></td></tr>

	<tr><td>Username</td>
	<td><input type='text' placeholder='Please Enter Your Username' name='txtusername' required size='50px' value='<?php echo $UserName ?>'></input></td></tr>

	<tr><td>Password</td>
	<td><input type='password' placeholder='Please Enter Password' name='txtpassword' required size='50px' value='<?php echo $Password ?>'></input></td></tr>

	<tr><td>Image</td>
	<td><input type='File' name='txtimage' value='<?php echo $Image ?>' required></input></td></tr>
	<tr><td><input type='submit' value='Update' name='btnUpdate'></input></td></tr>
	<tr><td><input type='reset' value='Clear' name='btnClear'></input></td></tr>
		<tr></tr>
	</table>
</form>
</body>
</html>
<?php 
include('footer.php');
 ?>