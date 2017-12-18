<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body>
<center>
<a href="#">Home</a>
      
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    </div>
    <div class="col-sm-8 text-center"> 

<h3>Register</h3>
<form action="index.php?page=accounts&action=store" method="post" id="form1" class = "form-inline">
    <div class = "form-group" align="center">
    <label>First name-</label>
    <input type="text" class="form-control" name="fname" value="" required><br>
    </div><br><br>
    <div class = "form-group">
    <label>Last name-</label>
    <input type="text" class="form-control" name="lname" value="" required><br>
    </div><br><br>
    <div class = "form-group">
    <label>Email ID-</label>
    <input type="email" class="form-control" name="email" value=""><br>
    </div><br><br>
    <div class = "form-group">
    <label>Phone No-</label>
    <input type="text" class="form-control" name="phone" value=""><br>
    </div><br><br>
    <div class = "form-group">
    <label>Birthday-</label>
    <input type="text" class="form-control" name="birthday" value=""><br>
    </div><br><br>
    <div class = "form-group">
    <label>Gender-</label>
    <input type="text" class="form-control" name="gender" value=""><br>
    </div><br><br>
    <div class = "form-group">
    <label>Password-</label>
    <input type="password" class="form-control" name="password" value="" required><br>
    </div><br><br>
    <button type="submit" class="btn btn-primary" form="form1" value="Submit">Submit</button>
</form>

</div>
    <div class="col-sm-2 sidenav">
    </div>
  </div>
</div>
</center>
</body>
</html>