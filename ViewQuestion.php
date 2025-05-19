<?php 
$connect=mysqli_connect('localhost','root','','airpollutiondb');
$Question="Select * from frequent_asked_questions_and_answers";
$run=mysqli_query($connect,$Question);
$count=mysqli_num_rows($run);
include('Adminheader.php');
 ?>

 <html>
 <head>
 	<title>Frequent Asked questions and answers</title>
 </head>
 <body>
 	<form action="" method="POST">
 	<h1>Frequent Asked Questions and Answers</h1><br><br>
 <table width="100%" border="1"> 
 	<th>QuestionID</th>
 	<th>UserID</th>
 	<th>Question</th>
 	<th>Question Date</th>
 	<th>Answer</th>
 	<th>Action</th>
 	<th>
<?php
for ($i=0; $i <$count; $i++) 
	{ 
		$ret=mysqli_fetch_array($run);
	echo "<tr>";
	echo "<td>".$ret['QuestionID']."</td>";
	echo "<td>".$ret['UserID']."</td>";
	echo "<td>".$ret['Question']."</td>";
	echo "<td>".$ret['QuestionDate']."</td>";
	echo "<td>".$ret['answer']."</td>";
	echo "<td><a href='Answer.php?QID=".$ret['QuestionID']."'>Answer</a></td>";
	echo "</tr>";
	}



 ?>
 </table>
 </form>
 </body>
 </html>
 <?php 
include('footer.php');
  ?>