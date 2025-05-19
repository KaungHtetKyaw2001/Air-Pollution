<?php 
session_start();
$connect=mysqli_connect('localhost','root','','airpollutiondb');
include ('BrowsingFunction.php');
recordBrowse("http://localhost:70/DW-Assignment/History.php"); 
include ('Userheaderafterlogin.php');
if (isset($_REQUEST['btnAsk']))
{
	$id=$_REQUEST['txtid'];
	$name=$_REQUEST['txtName'];
	$email=$_REQUEST['txtEmail'];
	$Ask=$_REQUEST['txtAsk'];
	$Date=$_REQUEST['txtdate'];
	$id=$_SESSION['id'];

}

if (isset($_POST['btnAsk'])) 
{
	$id=$_POST['txtid'];
	$Ask=$_POST['txtAsk'];
	$Date=$_POST['txtdate'];

	$insert= mysqli_query($connect,"INSERT INTO `frequent_asked_questions_and_answers` (`Question`,`QuestionDate`,`UserID`) VALUES ('$Ask','$Date','$id')");
	if($insert) 
	{
		echo "<script>window.alert('Question Submitted & Thz For the question!')</script>";
		echo "<script>window.location='Q&A.php'</script>";
	}
}


$select= mysqli_query($connect,"SELECT * FROM frequent_asked_questions_and_answers");
$count=mysqli_num_rows($select);

 ?>

 <form action="Q&A.php" method="post">
 	<input type="hidden" name="txtCName" value="<?php echo $id ?>"> 
 	<input type="hidden" name="txtCEmail" value="<?php echo $email ?>"> 
 	<input type="hidden" name="txtCDate" value="<?php echo $Date ?>"> 
 	<input type="hidden" name="txtCAsk"   value="<?php echo $Ask ?>"> 


 <?php 
for ($i=1; $i <=$count ; $i++) 
{ 
	$row=mysqli_fetch_array ($select);
	?>
	<h2>Frequently ask questions </h2>
	<div>
		<b>Question <?php echo $i ?>:</b>
		<?php echo $row ['Question'] ?>

	</div>
	<div>
		<b>Answer <?php echo $i ?>:</b>
		<?php echo $row ['answer'] ?>
	</div>
	<?php
}

  ?>

  <?php 

if (isset($_REQUEST['txtAsk'])) 
{
	echo '<input type="submit" name="btnsubmit" value="Ask Anyway">';
}
else
{
	
}

?>

</form>
<?php 
include('footer.php');
 ?>