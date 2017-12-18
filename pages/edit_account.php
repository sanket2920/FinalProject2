<!DOCTYPE html>
<html lang="en">
<head>
  <title>Task manager</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body text-align:center>
<center>
        <a href="index.php?page=accounts&action=back1">Home</a>
        <br><br>
      
        <form action="index.php?page=accounts&action=show" method="POST">
        <button type="submit" class="glyphicon glyphicon-user">Your Profile</button>
        </form>
        <br>
        
        <form action="index.php?page=accounts&action=logout" method="POST">
        <button type="submit" class="glyphicon glyphicon-log-out">Logout</button>
        </form>

<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    </div>
    <div class="col-sm-8 text-center"> 
    <h3> Edit Details </h3>

<form action="index.php?page=accounts&action=save&id=<?php echo $data->id; ?>" method="post" class = "form-inline">

    <div class = "form-group" align="center">
    <label>First name-</label>
    <input type="text" class="form-control" name="fname" value="<?php echo $data->fname; ?>">
    </div><br><br>
    
    <div class = "form-group" align="center">
    <label>Last name-</label>
    <input type="text" class="form-control" name="lname" value="<?php echo $data->lname; ?>">
    </div><br><br>
    
    <div class = "form-group" align="center">
    <label>Email-</label>
    <input type="text" class="form-control" name="email" value="<?php echo $data->email; ?>">
    </div><br><br>
    
    <div class = "form-group" align="center">
    <label>Phone-</label>
    <input type="text" class="form-control" name="phone" value="<?php echo $data->phone; ?>">
    </div><br><br>
    
    <div class = "form-group" align="center">
    <label>Birthday-</label>
    <input type="text" class="form-control" name="birthday" value="<?php echo $data->birthday; ?>">
    </div><br><br>
    
    <div class = "form-group" align="center">
    <label>Gender-</label>
    <input type="text" class="form-control" name="gender" value="<?php echo $data->gender; ?>">
    </div><br><br>
    <input type="submit" class="btn btn-primary" value="SAVE">
</form>

</div>

<div class="col-sm-2 sidenav">
    </div>
  </div>
</div>
</center>
</body>
</html>