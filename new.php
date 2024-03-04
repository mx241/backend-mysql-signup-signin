<?php

$host="localhost";
$userh="root";
$passh="";
$DB="catf";


  $username = $_POST["user"];
  $password = $_POST["pass"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];

$conn= new mysqli($host , $userh , $passh , $DB);

// $sqlreq1= "CREATE TABLE IF NOT EXISTS LOGIN 
//(id int not null  AUTO_INCREMENT UNIQUE, username varchar(20), password varchar(30), email varchar(30) , phone int(20));";

// $conn->query($sqlreq1);


  $stm="INSERT INTO users VALUES ('$username' , '$password' , '$email' , '$phone');";

$conn->query($stm);

  echo "User registration successful!"; 


header("location: note.php")


?>

