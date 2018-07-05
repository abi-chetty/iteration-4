<?php include "top.php";?>

<div class="container-fluid" id="main">
    <div class="content">
      <div id="signin" class="boxes">
        If you are an existing user of  <strong>"The review system"</strong>   
        website please sign in with our user name and password to provide your review .
      </div>
      <div class="btns">
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">sign in</button>
      </div>
    </div>


    <div class="content">
      <div id="signup" class="boxes">
        If you are a new user please sign up for this website using your email id and student registeration number to use its featurse .
      </div>
      <div class="btns">
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">sign up</button>
      </div>

    </div>

    <!--button type="button" class="btn btn-default navbar-btn">Sign in</buttons-->



    <!-- Trigger the modal with a button -->




    <!-- Modal -->

    <div id="myModal" class="modal fade" role="dialog">

      <div class="modal-dialog">



        <!-- Modal content-->

        <div class="modal-content">

          <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h4 class="modal-title">Sign in Form</h4>

          </div>

          <div class="modal-body">

            <p>
              <?php include "signin.php";?>
            </p>

          </div>



        </div>



      </div>

    </div>



    <!--button type="button" class="btn btn-default navbar-btn">Sign up</button-->

    <!-- Trigger the modal with a button -->





    <!-- Modal -->

    <div id="myModal2" class="modal fade" role="dialog">

      <div class="modal-dialog">



        <!-- Modal content-->

        <div class="modal-content">

          <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h4 class="modal-title">Sign up Form</h4>

          </div>

          <div class="modal-body">

            <p>
              <?php include "signup.php" ?> </p>

          </div>

        </div>



      </div>

    </div>

  </div>



  <?php include "bottom.php";?>