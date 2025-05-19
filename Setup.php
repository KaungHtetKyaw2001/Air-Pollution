<?php 

$connect=mysqli_connect('localhost','root','','airpollutionDB');

$drop=mysqli_query($connect,'Drop table Feedback');
$drop=mysqli_query($connect,'Drop table Country');
$drop=mysqli_query($connect,'Drop table Frequent_Asked_Questions_and_Answers');
$drop=mysqli_query($connect,'Drop table UserRegister');
$drop=mysqli_query($connect,'Drop table Staff');




//--------------------------------------------------------------

$UserRegistercreate="Create table UserRegister
		( 
			UserID int Auto_Increment not null primary key,
			User_Full_Name varchar(200),
			Email text,
			Date_Of_Birth Date,
			Address text,
			Age int,
			Postcode int,
			UserName varchar(50),
			Password text,
			UserProfileImage text
		)";

$query=mysqli_query($connect,$UserRegistercreate);

if ($query) 
{
	echo "<p>User Table Saved</p>";
}
else
{
	mysqli_error($connect);
}

//---------------------------------------------

$InsertUser=mysqli_query($connect,"Insert into UserRegister Values(1,'Kaung Htet Kyaw','kaunghtetkyaw@gmail.com','2001/12/17','Kyauktada','17','1234','Kaungkaung','Kaung2001','UserImage/IMG_0232.jpg')");
$InsertUser=mysqli_query($connect,"Insert into UserRegister Values(2,'Aung Aung','aungaung@gmail.com','1998/10/9','latha','25','0138','AungAung','Aung1998','UserImage/IMG_0131.jpg')");
$InsertUser=mysqli_query($connect,"Insert into UserRegister Values(3,'Kyaw Thura','kyawthura@gmail.com','1996/11/11','Pazundaung','30','30068','KyawThura','Kyaw96','UserImage/IMG_0232.jpg')");
if ($InsertUser) 
{
	echo "<p>User Data Inserted</p>";
}
else
{
	echo mysqli_error($connect);
}
//----------------------------------------------

$Staffcreate="Create table Staff
		  ( 
		  	StaffID int Auto_Increment not null primary key,
		  	StaffName varchar(100),
		  	StaffEmail varchar(100),
		  	StaffPassword text,
		  	StaffProfileImage text
		  )";

$query2=mysqli_query($connect,$Staffcreate);

if ($query2) 
{
	echo "<p>Staff Table Saved</p>";
}
else
{
	echo mysqli_error($connect);
}

//---------------------------------------------
$StaffInsert=mysqli_query($connect,"INSERT into Staff values(1,'Ye Htet Naing','yeye@gmail.com','yehtetnaing001','StaffImage/IMG_4840.JPG')");
$StaffInsert=mysqli_query($connect,"INSERT into Staff values(2,'Sis Thway','sisthway@gmail.com','sisthway160','StaffImage/IMG_0248.JPG')");
$StaffInsert=mysqli_query($connect,"INSERT into Staff values(3,'Lev Abramovich Isakovich','Lev@gmail.com','Isakovich1978','StaffImage/IMG_0246.JPG')");
if ($StaffInsert) 
{
	echo "<p>Staff Data Inserted</p>";
}
else
{
	echo mysqli_error($connect);
}
//----------------------------------------------

//--------------------------------------------------------------

$Questionscreate="Create Table Frequent_Asked_Questions_and_Answers
		  (
		  	QuestionID int Auto_Increment not null primary key,
		  	Question text,
		  	QuestionDate Date,
		  	answer text,
		  	UserID int ,
		  	StaffID int 
		  	)";

$query3=mysqli_query($connect,$Questionscreate);

if ($query) 
{
	echo "<p>Frequent_Asked_Questions_and_Answers Table Saved</p>";
}
else
{
	echo mysqli_error($connect);
}

//---------------------------------------------
$QuestionsInsert=mysqli_query($connect,"INSERT into Frequent_Asked_Questions_and_Answers values(1,'Which country has the highest level of air pollution?','2013-6-12','China was the country which has the highest level of Air pollution in 2013','1','1')");
$QuestionsInsert=mysqli_query($connect,"INSERT into Frequent_Asked_Questions_and_Answers values(2,'Which factors cause the air pollutions?','2015-8-27','Well, various common causes of air pollutions are exhaust from factories and industries,mining operations, indoor air pollution, agricultural activities and so on.','1','1')");
$QuestionsInsert=mysqli_query($connect,"INSERT into Frequent_Asked_Questions_and_Answers values(3,'Can you tell Myanmar air pollution level?','2018-7-19','Myanmar air pollution level is PM 2.5 and ranking as 175.','2','2')");
$QuestionsInsert=mysqli_query($connect,"INSERT into Frequent_Asked_Questions_and_Answers values(4,'How can I register the User Account?','2019-8-11','You can register the user account by clicking Login button at the right top.','2','2')");
$QuestionsInsert=mysqli_query($connect,"INSERT into Frequent_Asked_Questions_and_Answers values(5,'How to protect from causing air prollution?','2019-9-13','The best way to protect air pollution is do not burn wood trash and anything.','3','3')");

if ($QuestionsInsert) 
{
	echo "<p>Questions and Answers Inserted</p>";
}
else
{
	echo mysqli_error($connect);
}
//---------------------------------------------

$CountryCreate="create Table Country
				(
				    CountryID int Auto_Increment not null primary key,
				    CountryName varchar(30),
				    Air_Pollution_Rate float,
				    Measured_Year int,
				    Description text,
				    CountryImage1 text,
				    CountryImage2 text,
				    CountryImage3 text,
				    StaffID int 
				)";
$query6=mysqli_query($connect,$CountryCreate);
if ($query6) 
{
	echo "<p>Country table Created</p>";
}
else
{
	echo mysqli_error($connect);
}
//-----------------------------------------
$CountryInsert=mysqli_query($connect,"INSERT INTO `country`(`CountryID`, `CountryName`, `Air_Pollution_Rate`, `Measured_Year`, `Description`, `CountryImage1`, `CountryImage2`, `CountryImage3`, `StaffID`) VALUES ('1','Afghanistan','93.45','2020','The exponential pollution index of Afghanistan is 168.83','CountryImage/Country(1)-1.jpg','CountryImage/Country(1)-2.jpg','CountryImage/Country(1)-3.jpg','1')");
$CountryInsert=mysqli_query($connect,"INSERT INTO `country`(`CountryID`, `CountryName`, `Air_Pollution_Rate`, `Measured_Year`, `Description`, `CountryImage1`, `CountryImage2`, `CountryImage3`, `StaffID`) VALUES ('2','Myanmar','92.54','2020','The exponential pollution index of Myanmar is 168.83','CountryImage/Country(2)-1.jpg','CountryImage/Country(2)-2.jpg','CountryImage/Country(2)-3.jpg','1')");
$CountryInsert=mysqli_query($connect,"INSERT INTO `country`(`CountryID`, `CountryName`, `Air_Pollution_Rate`, `Measured_Year`, `Description`, `CountryImage1`, `CountryImage2`, `CountryImage3`, `StaffID`) VALUES ('3','Mongolia','92.45','2020','The exponential pollution index of Mongolia is 170','CountryImage/Country(3)-1.jpg','CountryImage/Country(3)-2.jpg','CountryImage/Country(3)-3.jpg','2')");
$CountryInsert=mysqli_query($connect,"INSERT INTO `country`(`CountryID`, `CountryName`, `Air_Pollution_Rate`, `Measured_Year`, `Description`, `CountryImage1`, `CountryImage2`, `CountryImage3`, `StaffID`) VALUES ('4','Ghana','89.20','2020','The exponential pollution index of Ghana is 160','CountryImage/Country(4)-1.jpg','CountryImage/Country(4)-2.jpg','CountryImage/Country(4)-3.jpg','2')");
$CountryInsert=mysqli_query($connect,"INSERT INTO `country`(`CountryID`, `CountryName`, `Air_Pollution_Rate`, `Measured_Year`, `Description`, `CountryImage1`, `CountryImage2`, `CountryImage3`, `StaffID`) VALUES ('5','Lebanon','88.37','2020','The exponential pollution index of Lebanon is 157.80','CountryImage/Country(5)-1.jpg','CountryImage/Country(5)-2.jpg','CountryImage/Country(5)-3.jpg','3')");
if ($CountryInsert) 
{
	echo "<p>Country data inserted</p>";
}
else
{
	echo mysqli_error($connect);
}
//-----------------------------------------
$UserFeedbackCreate="create Table Feedback
				(
				     FeedbackID int not null Auto_Increment primary key,
				     FeedbackDate Date,
				     Comment varchar(255),
				     UserID int
				)";
$query7=mysqli_query($connect,$UserFeedbackCreate);
if ($query7) 
{
	echo "<p>Feedback table Created</p>";
}
else
{
	echo mysqli_error($connect);
}
//----------------------------------------
$FeedbackInsert=mysqli_query($connect,"INSERT INTO `feedback`(`FeedbackID`, `FeedbackDate`, `Comment`, `UserID`) VALUES ('1','2013/6/12','This website gives me many knowledges.','1')");
$FeedbackInsert=mysqli_query($connect,"INSERT INTO `feedback`(`FeedbackID`, `FeedbackDate`, `Comment`, `UserID`) VALUES ('2','2015/8/27','I think this website needs to show the index of pollution rate of England.','1')");
$FeedbackInsert=mysqli_query($connect,"INSERT INTO `feedback`(`FeedbackID`, `FeedbackDate`, `Comment`, `UserID`) VALUES ('3','2018/7/19','I appreciate to you that you can provide the information of about air pollution. Keep move on.','2')");
if ($FeedbackInsert) 
{
	echo "<p>Feedback inserted</p>";
}
else
{
	echo mysqli_error($connect);
}
 ?>