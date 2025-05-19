<?php 
 include('header.php');
 ?>
 <?php  
 $connect=mysqli_connect('localhost','root','','airpollutiondb');
include ('BrowsingFunction.php');
recordBrowse("http://localhost:70/DW-Assignment/History.php"); 
 	if (isset($_POST['btnRegister'])) 
 	{
 		$UserFullname=$_POST['txtfullname'];
 		$EmailAddress=$_POST['txtEmail'];
 		$DateOfBirth=$_POST['txtDOB'];
 		$Address=$_POST['txtAddress'];
 		$Age=$_POST['txtAge'];
 		$PostCode=$_POST['txtPost'];
 		$Username=$_POST['txtusername'];
 		$Password=md5($_POST['txtpassword']);
 		$UserImage=$_FILES['txtimage']['name'];
 		$Userimagefolder='UserImage/';
 		if ($UserImage) 
 		{
 			$filename=$Userimagefolder."_".$UserImage;
 			$ImageCopied=copy($_FILES['txtimage']['tmp_name'],$filename);
 		}
 			if (!$ImageCopied) 
 			{
 				exit("Unexpected Error Occured.Cannot Upload Image");
 			}
 			 	$UserInsert="INSERT INTO `userregister`(`User_Full_Name`,`Email`,`Date_Of_Birth`,`Address`,`Age`,`Postcode`,`UserName`,`Password`,`UserProfileImage`) VALUES ('$UserFullname','$EmailAddress','$DateOfBirth','$Address','$Age','$PostCode','$Username','$Password','$filename')";
 	$QueryRun=mysqli_query($connect,$UserInsert);
 	if ($QueryRun) 
 	{
 		echo "<script>alert('User Registered')</script>";
 		echo "<script>window.location='UserLogin.php'</script>";
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
	<title>User Register</title>
</head>
<body>
<form action='UserRegister.php' method='POST' enctype='multipart/form-data'>
<h1>User Register</h1><br><br>
	User Full Name
	<input type='text' placeholder='Please Enter Your name' name='txtfullname' required="" size='50px'></input><br><br>
	Email Address
	<input type='text' placeholder='Please Enter Your Email' name='txtEmail' required="" size='50px'></input><br><br>
	Date Of Birth
	<input type='Date' name='txtDOB' required="" size='150px'></input><br><br>
	Address
	<input type='Text' placeholder='Address' name='txtAddress' required="" size='50px'></input><br><br>
	Age
	<input type='text' placeholder='Age' name='txtAge' required size='50px'></input><br><br>
	PostCode
	<input type='text' placeholder='PostCode' name='txtPost' required="" size='50px'></input><br><br>
	Username
	<input type='text' placeholder='Please Enter Your Username' name='txtusername' required="" size='50px'></input><br><br>
	Password
	<input type='password' placeholder='Please Enter Password' name='txtpassword' required="" size='50px'></input><br><br>
	Image
	<input type='File' name='txtimage' required></input><br><br>
	<input type='submit' value='Register' name='btnRegister'></input>
</form>
</body>
</html>

<?php 
include ('footer.php');
 ?>