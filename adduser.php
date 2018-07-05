<?php


if(isset($_POST['submit'])){
    $con = mysqli_connect("localhost","root","","reviewa");
    
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
      $name = $_POST["name"];
      $email = $_POST["email"];
      $pass = $_POST["password"];
      //$rollno= $_POST["rollno"];
      $sql="SELECT * FROM users WHERE email='".$email."'";
      $result=mysqli_query($con,$sql);
   
          if (mysqli_num_rows($result) == 0) { 
            //results are empty
            //echo"added";

            mysqli_query($con,"INSERT INTO users (name , email ,password)
             VALUES ('".$name."','".$email."','".$pass."')");
            header("Location: ./index.php");
           } 
           else{

            include "top.php";
            echo'
            <div id="error" class="modal-content">

            <div class="modal-header" >
  
              <a href="index.php"><button type="button" class="close" >&times;</button></a>
  
              <h4 class="modal-title">ERROR!!</h4>
  
            </div>
  
            <div class="modal-body">
  
              <p>
                There is already a user with the current mail id and roll number
              </p>
  
            </div>
  
  
  
          </div>
         

            ';
            include "bottom.php";
               
           }
}


 