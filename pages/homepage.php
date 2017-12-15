<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!--<link rel="stylesheet" href="css/styles.css?v=1.0">-->

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>


<h1>
    <?php
    //this how to print some data;
    //echo $data['site_name'];
    
    ?> </h1>

<!--<h1><a href="index.php?page=accounts&action=all">Show All Accounts</a></h1>-->
<!--<h1><a href="index.php?page=tasks&action=all">Show All Tasks</a></h1>-->

<center>
<form action="index.php?page=accounts&action=login" method="POST">

    <div class="container">
        <h5><b>Username</b></h5>
	<input type="text" placeholder="Enter Username" name="uname" required><br><br>
        
	<h5><b>Password</b></h5>
	<input type="password" placeholder="Enter Password" name="psw" required><br><br>
        
	<button type="submit" class="btn btn-primary">Login</button>

    </div>
</form>
<h3><a href="index.php?page=accounts&action=register">Register</a></h3>
<center>

<script src="js/scripts.js"></script>
</body>
</html>
