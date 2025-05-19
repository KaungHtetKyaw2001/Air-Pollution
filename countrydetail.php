<?php 
session_start();
$connect=mysqli_connect('localhost','root','','airpollutiondb');
include('Userheaderafterlogin.php');

	if(isset($_REQUEST['CID']))
	{
		$CountryID=$_REQUEST['CID'];
		$Country="SELECT * FROM country WHERE CountryID='$CountryID'";
		$result=mysqli_query($connect,$Country);
		$arr=mysqli_fetch_array($result);
	}
 ?>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<form action="" method="POST" enctype="multipart/form-data">
 	<table>
 		<tr>
 			<td><img src="<?php echo $arr['CountryImage1']; ?>" width="200" height="200"></td>
 			<td><img src="<?php echo $arr['CountryImage2']; ?>" width="200" height="200"></td>
 			<td><img src="<?php echo $arr['CountryImage3']; ?>" width="200" height="200"></td>
 		</tr>
 				<table>
 					<tr>
 						<td width="120pt">Country Name:</td>
 						<td><?php echo $arr['CountryName']; ?></td>
 					</tr>
					<tr>
 						<td width="120pt">Pollution Rate:</td>
 						<td><?php echo $arr['Air_Pollution_Rate']; ?>%</td>
					</tr>	
					<tr>
 						<td width="120pt">Description:</td>
 						<td><?php echo $arr['Description']; ?></td>
					</tr>
					<tr>
 						<td width="120pt">Year:  </td>
 						<td><?php echo $arr['Measured_Year']; ?></td>
					</tr>			
					<tr>
						<td></td>
						<td><button><a href="UserFeedback.php">Feedback</a></button></td>
					</tr>	
 				</table>
 	</table>
 	</form>	
 </body>
 </html>
 <?php 
 include('footer.php');
  ?>