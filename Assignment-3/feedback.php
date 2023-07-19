<?php 
$_server = "localhost";
 $_username = "root";
 $password = "";
 $_databasse = "feedback";

 $conn = mysqli_connect($_server, $_username, $password, $_databasse);
  
 if ($conn->connect_error) {
  die("Error are occured");
} else {
  echo ("connection succesful");}


$name =$_REQUEST['name'];
$enroll =$_REQUEST['enroll'];
$email =$_REQUEST['email'];
$facultyname =$_REQUEST['facultyname'];
$feedback_write =$_REQUEST['feedback_write'];


$query = "INSERT INTO feedback(name,enroll,email,facultyname,feedback_write) VALUES('$name','$enroll','$email','$facultyname','$feedback_write')";
$result = $conn->multi_query($query);





?>