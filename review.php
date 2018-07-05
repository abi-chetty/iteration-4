<?php include"top.php";
session_start();
if(isset($_SESSION['name'])){
 
}
else {
  header("Location: ./index.php");
}
?>
    <div class="container container-fluid" >
    </br>
    </br>
<form action="reviewsubmit.php" method="post" class="form-horizontal">

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">User Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" value=<?php echo $_SESSION['name'];?> readonly>
    </div>
  </div>
  </br>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Functionality</label>
    <div class="col-sm-10">
    <input type="range" class="form-control" name="functionality" min="0" max="10" >
    </div>
  </div>
  </br>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Reliablity</label>
    <div class="col-sm-10">
    <input type="range" class="form-control" name="reliablity" min="0" max="10">
    </div>
  </div>
  </br>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Ease of use</label>
    <div class="col-sm-10">
    <input type="range" class="form-control" name="eou" min="0" max="10">
    </div>
  </div>
  </br>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Quality</label>
    <div class="col-sm-10">
    <input type="range"  class="form-control" name="quality" min="0" max="10">
    </div>
  </div>
  </br>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Feedback</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="feedback" placeholder="feedback" required>
    </div>
  </div>
  </br>
  </br>
    <div class="form-group">
    
            <button type="submit" class="btn btn-default" name="submit" style="margin : 0px 25%; width:5px;">Submit</button>
            
    </div>


</form>
    </div>
    <?php include"bottom.php";?>