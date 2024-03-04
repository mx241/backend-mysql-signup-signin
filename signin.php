<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){


    $host="localhost";
    $userh="root";
    $passh="";
    $DB="catf";
    
    
      $username = $_POST["user"];
      $password = $_POST["pass"];
     

      $conn= new mysqli($host , $userh , $passh , $DB);

    $query = "SELECT USERNAME, PASSWORD from users WHERE username='$username' AND password='$password'";

$res=$conn->query($query); }

if($res->num_rows == 1){

    echo "logged in";

    exit();
}

else{

  echo "there not exist";

exit();
}



?>