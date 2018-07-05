<?php
session_start();


if(isset($_POST['submit'])){
    $con = mysqli_connect("localhost","root","","reviewa");
    
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
      else{
        $name = $_POST["name"];
        $functionality = $_POST["functionality"];
        $reliablity = $_POST["reliablity"];
        $eou= $_POST["eou"];
        $quality= $_POST["quality"];
        $feedback= $_POST["feedback"];
        echo $eou;
        mysqli_query($con,"INSERT INTO review (name , functionality ,reliablity,eou,quality,feedback)
         VALUES ('".$name."',$functionality,$reliablity,$eou,$quality,'".$feedback."')");      
      }
}
session_unset();
session_destroy();
header("Location: ./index.php");


 