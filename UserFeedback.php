<?php 
$connect=mysqli_connect('localhost','root','','airpollutiondb');
include('Userheaderafterlogin.php');
include ('BrowsingFunction.php');
recordBrowse("http://localhost:70/DW-Assignment/History.php");

if (isset($_POST['btnSendFeedback']))
{

	$Date=$_POST['txtfeedbackdate'];
	$Comment=$_POST['txtcomment'];
	$UserID=$_POST['txtUserID'];

	$FeedbackInsert="INSERT into `Feedback` (`FeedbackDate`,`Comment`,`UserID`) Values('$Date','$Comment','$UserID')";
	$InsertRun=mysqli_query($connect,$FeedbackInsert);
	if ($InsertRun) 
	{
		echo "<script>alert('Your feedback has been sucessfully sent. Thanks for commenting our website and we will get better our website')</script>";
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
	<title>User Feedback</title>
</head>
<body>
<form action='UserFeedback.php' method='POST'>
		<h1>User Feedback</h1><br>
		<h3>Please leave your feedback here!</h3><br><br>
		UserID
		<input type='text' name='txtUserID' required></input><br><br>
		Feedback Date
		<input type='Date' name='txtfeedbackdate' required></input><br><br>
		Comment
		<input type='Text' name='txtcomment' required></input><br><br>
		<input type='submit' name='btnSendFeedback' value='Send Feedback'></input>
</form>
</body>
</html>
<?php 
include('footer.php');
 ?>