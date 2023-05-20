<?php 
$fullname = $_POST['fullName'];
$gender = $_POST['gender'];
$email = $_POST['email'];


$conn = new mysqli('localhost','root','','student_data');
if($conn->connect_error){
  echo "$conn->connect_error";
  die("Connection Failed : ". $conn->connect_error);
} else {
  $sql = $conn->prepare("insert into registration(fullName,gender, email, ) values($fullname, $gender, $email)");
  $sql->bind_param("sss", $fullName, $gender, $email);
  $exe = $sql->execute();
  echo $exe;
  echo "Registration successfully...";
  $sql->close();
  $conn->close();
}
?>