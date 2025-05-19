<?php 
include('header.php');

 ?>


<?php 
$connect=mysqli_connect('localhost','root','','airpollutiondb');
echo "<table width='100%'>";

$return=mysqli_query($connect,"Select * from Air_Pollution_Prevent_Products");
$count=mysqli_num_rows($return);

for ($i=0; $i < $count ; $i+=4) 
{ 
	echo "<tr>";
	$returns=mysqli_query($connect,"Select * from Air_Pollution_Prevent_Products limit $i,4");
	$counts=mysqli_num_rows($returns);

for ($a=0; $a < $counts ; $a++) 
{ 
	$array=mysqli_fetch_array($return);
	$img=$array[3];
	$name=$array[1];
	$description=$array[2];
	echo "<td>";

	echo "<img src='$img' width='100px' height='100px'><br>";
	echo "$name<br>";
	echo "$description<br>";
	echo "</td>";	
}
	echo "</tr>";	
}


echo "</table>";
 ?>
 <?php 
include('footer.php');
  ?>