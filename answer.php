<?php 
$connect=mysqli_connect('localhost','root','','airpollutiondb');
 include ('Adminheaderafterlogin.php');
include ('BrowsingFunction.php');
recordBrowse("http://localhost:70/DW-Assignment/History.php"); 
if (isset($_REQUEST['QID']))
{
	$QID=$_REQUEST['QID'];
	$Answer="Select * from frequent_asked_questions_and_answers where QuestionID='$QID'";
	$run=mysqli_query($connect,$Answer);
	$ret=mysqli_fetch_array($run);
	$answer=$ret['answer'];
	$StaffID=$ret['StaffID'];
}
if (isset($_POST['btnsubmit']))
{
	$ans=$_POST['answer'];
	$Sid=$_POST['txtstaffid'];
	$id=$_POST['txtid'];
	$insert="UPDATE frequent_asked_questions_and_answers
			 SET answer='$ans',
			 	 StaffID='$Sid'
			 Where questionID='$id'";
	$run1=mysqli_query($connect,$insert);
	if($run1)
	{
		echo "<script>alert('Answer Successful')</script>";
		echo "<script>location='ViewQuestion.php'</script>";
	}}
 ?>

 <html>
 <head>
 	<title>Answer from Staff</title>
 </head>
 <body>
 <form action="" method="POST">
 	<h2>Answer back question</h2><br>
 	<input type="hidden" name="txtid" value="<?php echo $QID ?>">
 StaffID
 <input name='txtstaffid' value="<?php echo $StaffID ?>"></input><br><br>
 <label>Answer</label>
<textarea name="answer" required><?php echo $answer ?></textarea>
 <br><input type="submit" name="btnsubmit" value="Submit">
 </body>
 </html>

 <?php 
include ('footer.php');
  ?>