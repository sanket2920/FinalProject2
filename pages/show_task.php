<!DOCTYPE html>
<html lang="en">
<head>
  <title>Show Task</title>
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
<form action="index.php?page=tasks&action=store&id=<?php echo $data->id; ?>" method="post" class = "form-inline" id="form1">
<div class = "form-group">
<label>ID-</label>
<input type="text" class="form-control" name="id" value="<?php echo $data->id;?>" readonly>
</div><br><br>

<div class = "form-group">
<label>Owner Email-</label>
<input type="text" class="form-control" name="owneremail" value="<?php echo $data->owneremail;?>">
</div><br><br>

<div class = "form-group">
<label>Owner ID-</label>
<input type="text" class="form-control" name="ownerid" value="<?php echo $data->ownerid;?>" readonly>
</div><br><br>

<div class = "form-group">
<label>Created Date-</label>
<input type="text" class="form-control" name="createddate" value="<?php echo $data->createddate;?>" readonly>
</div><br><br>

<div class = "form-group">
<label>Due Date-</label>
<input type="text" class="form-control" name="duedate" value="<?php echo $data->duedate;?>" readonly>
</div><br><br>

<div class = "form-group">
<label>Message-</label>
<input type="text" class="form-control" name="message" value="<?php echo $data->message;?>">
</div><br><br>

<div class = "form-group">
<label>Is Done-</label>
<input type="text" class="form-control" name="isdone" value="<?php echo $data->isdone;?>">
</div><br><br>

<button type="submit" class="btn btn-primary" form="form1" value="save">Save</button>
</form>
</div>

<div class="col-sm-2 sidenav">
    </div>
  </div>
</div>

</center>
</body>
</html>