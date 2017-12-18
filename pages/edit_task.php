<!DOCTYPE html>
<html lang="en">
<head>
  <title>Delete Task</title>
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
    <h3> Confirm Task Details </h3>

<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1" class = "form-inline">

<div class = "form-group">
<label>ID-</label>
<input type="text" name="id" class="form-control" value="<?php echo $data->id;?>"readonly>
</div>
<br><br>

<div class = "form-group">
<label>Owner Email-</label>
<input type="text" name="owneremail" class="form-control" value="<?php echo $data->owneremail;?>"readonly><br>
</div>
<br><br>

<div class = "form-group">
<label>Owner ID-</label>
<input type="text" name="ownerid" class="form-control" value="<?php echo $data->ownerid;?>"readonly><br>
</div>
<br><br>

<div class = "form-group">
<label>Created Date-</label>
<input type="text" name="createddate" class="form-control" value="<?php echo $data->createddate;?>"readonly><br>
</div>
<br><br>

<div class = "form-group">
<label>Due Date-</label>
<input type="text" name="duedate" class="form-control" value="<?php echo $data->duedate;?>"readonly><br>
</div>
<br><br>

<div class = "form-group">
<label>Message-</label>
<input type="text" name="message" class="form-control" value="<?php echo $data->message;?>"readonly><br>
</div>
<br><br>

<div class = "form-group">
<label>Is Done-</label>
<input type="text" name="isdone" class="form-control" value="<?php echo $data->isdone;?>"readonly><br>
</div>
<br><br>

    <button type="submit" form="form1" class="btn btn-primary" value="delete">Delete</button>
</form>

</div>

<div class="col-sm-2 sidenav">
    </div>
  </div>
</div>

</center>

</body>
</html>