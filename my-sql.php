<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'propertyserach';


$con = new mysqli($hostname, $username, $password, $database);

if($con == true){
  //  echo "passs";
}

else{
    echo "fail";
}



if($_POST["inset"]){




$fname = $_POST['fristname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];






$query = "INSERT INTO `user`(`fristname`, `lastname`, `email`) VALUES ('$fname', '$lname', '$email')";

$result = mysqli_query($con, $query);








}



?>

<!DOCTYPE HTML>

  <html lang="en">

     <title>Google</title>

    <body>


        <form action="" method="POST">

               <input type="text" placeholder="fristname" name="fristname">
               <input type="text" placeholder="lastname" name="lastname">
               <input type="text" placeholder="email" name="email">
               <input type="submit" value="Insert Data In My Sql" name="inset">


        </form>
    </body>



  </html>
















