<!DOCTYPE html>
<html lang="en">
<head>
  <title>Show Account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>


<body text-align:center>
<center>

      
        <a href="index.php?page=accounts&action=back1">Home</a> <br><br>
      
      
      
      <div>
        <form action="index.php?page=accounts&action=show" method="POST">
        <button type="submit" class="glyphicon glyphicon-user">Your Profile</button>
        </form></div>
        <br><br>
        
        <div>
        <form action="index.php?page=accounts&action=logout" method="POST">
        <button type="submit" class="glyphicon glyphicon-log-out">Logout</button>
        </form></div>      
    </div>
  </div>
</nav>

<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    </div>
    <div class="col-sm-8 text-center"> 
    <h3> Details </h3>
<form action="index.php?page=accounts&action=edit&id=<?php echo $data->id; ?>" method="post" class = "form-inline">
    
    <div class = "form-group">
    <label>First name-</label>
    <input type="text" class="form-control" name="fname" value="<?php echo $data->fname; ?>"readonly>
    </div><br><br>

    <div class = "form-group" align="center">
    <label>Last  name-</label>
    <input type="text" class="form-control" name="lname" value="<?php echo $data->lname; ?>"readonly>
    </div><br><br>
    
    <div class = "form-group" align="center">
    <label>E-mail  ID-</label>
    <input type="text" class="form-control" name="email" value="<?php echo $data->email; ?>"readonly>
    </div><br><br>
    
    <div class = "form-group" align="center">
    <label>Phone No-</label>
    <input type="text" class="form-control" name="phone" value="<?php echo $data->phone; ?>"readonly>
    </div><br><br>
    
    <div class = "form-group" align="center">
    <label>Birthday-</label>
    <input type="text" class="form-control" name="birthday" value="<?php echo $data->birthday; ?>"readonly>
    </div><br><br>
    
    <div class = "form-group" align="center">
    <label>Gender-</label>
    <input type="text" class="form-control" name="gender" value="<?php echo $data->gender; ?>"readonly>
    </div>
    <br>
    <br>
    
    <input type="submit" class="btn btn-primary" value="Edit">
    <br>
    <br>
</form>


<form action="index.php?page=accounts&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" class="btn btn-primary" form="form1" value="delete">Delete</button>
</form>
</div>

<div class="col-sm-2 sidenav">
    </div>
  </div>
</div>

</center>

<script src="js/scripts.js"></script>
</body>
</html>