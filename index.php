<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'propertyserach';


$con = new mysqli($hostname, $username, $password, $database);

if($con == true){
   // echo "Database is alredy connected";
}

else{
    echo "fail";
}

?>



<?php

if(isset($_POST['submit'])){

   $search = mysqli_real_escape_string($con, $_POST['s']);

    $sql = "SELECT * FROM user WHERE fristname LIKE '%$search%' OR lastname LIKE '%$search%' OR email LIKE '%$search%'";

}


?>







<!DOCTYPE HTML>

  <html lang="en">

     <title>Google</title>

     <head>
            <link rel="stylesheet" href="css/style.css">
     <style>

     .fixed_header tbody{
  display:block;
  width: 100%;
  overflow: auto;
  height: 100px;
}

.fixed_header thead tr {
   display: block;
}

.fixed_header thead {
  background: black;
  color:#fff;
}

.fixed_header th, .fixed_header td {
  padding: 5px;
  text-align: left;
  width: 200px;
}

     </style>
     </head>

    <body class="background">


        <form action="" method="POST" class="search-input">

               <input type="search" placeholder="search" name="s">

               <input type="submit" value="search" name="submit">


        </form>
            <style>

            .search-result-box{
                        background: #cfcfcf;
       border-radius: 6px;
    margin: 0px auto;
            }

            .Fullname{

            }

            .Fullname h1{
                     margin-top: 0px;
    background: #afafaf;
        border-radius: 6px;
    padding: 19px;
            }

            .Fullname h4{
                        padding: 25px;
    font-size: 25px;
    margin-top: 0px;
    padding-top: 0px;
            }

            </style>

                <?php

            if(isset($_POST['submit'])){

              $result = mysqli_query($con, $sql);

      $queryresult = mysqli_num_rows($result);

          echo "


           <div class='search-result-box'>

    <h1>  There are ".$queryresult. "Results found </h1>

        </div>   " ;







            }



            ?>

            <?php


            if(!empty($queryresult) > 0){

        while ($row = mysqli_fetch_assoc($result)){







       // echo '<br/>name&nbsp&nbsp'.$row["fristname"].'<br>lastname&nbsp&nbsp'.$row["lastname"].'<br>email&nbsp&nbsp'.$row["email"];


echo '


    <div class="search-result-box">

              <div class="Fullname">
                    <!--<h1> Rahul Sharma </h1>   -->
                    <h1>' .$row["fristname"] .$row["lastname"]. '</h1>

                   <!-- <h4>Email: <br/>rs7990046@gmail.com </h4> -->
                    <h4>Email:' .$row["email"]. '</h4>
              </div>
        </div>


';

        }



      }

            ?>






    </body>



  </html>
















