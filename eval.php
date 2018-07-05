<?php


if(isset($_POST['submit']))
{
    $con = mysqli_connect("localhost","root","","reviewa");
    
    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    //check for valid user
    $email = $_POST["email"];
    $pass = $_POST["password"];
    //mysqli_query($con,"INSERT INTO users (name , email ,password,rollno) VALUES ('user2','user2@mail','pass2', 02)");
    $sql="SELECT * FROM users WHERE email='".$email."' AND password='".$pass."' ";
    $result=mysqli_query($con,$sql);
 
        if (mysqli_num_rows($result) == 0) { 
            include "top.php";
            echo'
            <div id="error" class="modal-content">

            <div class="modal-header" >
  
              <a href="index.php"><button type="button" class="close" >&times;</button></a>
  
              <h4 class="modal-title">ERROR!!</h4>
  
            </div>
  
            <div class="modal-body">
  
              <p>
                The mail id or the password is invalid 
              </p>
  
            </div>
  
  
  
          </div>
         

            ';
            include "bottom.php";
         } 
        //printf("invalid details");printf("invalid details");
        // Fetch one and one row
        else{
            $sql="SELECT name FROM users WHERE email='".$email."' AND password='".$pass."' ";
            $result=mysqli_query($con,$sql);
            $row=mysqli_fetch_row($result);   
            session_start();
            $_SESSION['name']= $row[0];
            header("Location: ./review.php");
        
        }
        
        mysqli_free_result($result);

}
else
{
   
    header("Location: ./index.php");
}

  