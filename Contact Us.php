<?php 
session_start();
$connect=mysqli_connect('localhost','root','','airpollutiondb');
include ('BrowsingFunction.php');
include ('Userheaderafterlogin.php');
recordBrowse("http://localhost:70/DW-Assignment/History.php"); 
 ?>
<html>
<head>
	<title>Contact Us</title>
</head>
<body>
	<form action= "Q&A.php" method="post">
		<h2>Contact Us</h2><br>
		<h4>Ask your question here!</h4>
		<table>
		<tr> 
				<td>User ID</td>
			<td>
				<input type="text" name="txtid" required="" value="<?php echo $_SESSION['id'] ?>" readonly>
			</td>
			</tr>
			<tr> 
				<td>User Name</td>
			<td>
				<input type="text" name="txtName" required="" value="<?php echo $_SESSION['name'] ?>" readonly>
			</td>
			</tr>
			<tr> 
				<td>User Email</td>
			<td>
				<input type="email" name="txtEmail" value="<?php echo $_SESSION['email'] ?>" readonly>
			</td>
			</tr>

			<tr>
				<td>Question Date</td>
				<td><input type="text" name="txtdate" value="<?php echo date("Y/m/d") ?>" readonly></td>
			</tr>
			</tr>
			<tr> 
				<td>Ask</td>
			<td>
				<textarea name="txtAsk" required=""></textarea>
			</td>
			</tr>
		<tr>
			<td colspan="2">
				<input type="submit" name="btnAsk" value="Submit Question">
			</td>
		</tr>
		</table>
	</form>
</body>
</html>

<?php 
include('footer.php');
 ?>