<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>

</head>

<body>
<form action="adduser.php" method="post" class="form-horizontal" onsubmit="return check(this);">
 

  <div class="form-group">
    <label for="inputName3" class="col-sm-2 control-label" >Name</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" id="inputName3" placeholder="name" name="name" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name ="password"required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Confirm Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="password" name="pass2" required>
    </div>
  </div>
    <div class="form-group">
    
        <div class="modal-footer">            
            <button type="submit" class="mdbtn btn btn-default" name="submit">Sign up</button>
            <button type="button" class="mdbtn btn btn-default" data-dismiss="modal">Close</button>
        </div>
    
    </div>
</form>
</body>

<script type="text/javascript" language="JavaScript">
function check(theForm) {
    if (theForm.password.value != theForm.pass2.value)
    {
        alert('Those passwords don\'t match!');
        return false;
    } else {
        return true;
    }
}

</script> 

</html>
