<?php

	session_start();
	if(!isset($_SESSION["user"])) {
		header("location: index.php");
	}

?>

<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Select Action</title>
	<link rel="stylesheet" type="text/css" href="../stylesheet/bootstrap.min.css">
	<style>
		.main
		{
			padding: 50px;
		}

		.box
		{
			height: 200px;			
			background-color: #AED6F1;
			border: 5px solid white;
			border-radius: 20px;
			text-align: center;
			line-height: 200px;
			transition: background-color 0.5s;
			overflow: hidden;
		}

		.box img
		{
			display: inline-block;
		}

		.box p
		{
			display: inline-block;
			font-weight: bold;
			font-size: 18px;
			margin: 0px 5px 0px 5px;
		}

		#top
	    {
	        height: 120px;
	        display: block;
	        text-align: center;
	        line-height: 120px;
	        background-color: #50B2FC;
	        position: relative;
	    }
	    
	    #top img
	    {
	        height: 50px;
	        width: 300px;	        
	    }

	    .box:hover
	    {
	    	background-color: #D7DBDD;
	    }
	    
	    #top div a
        {
            display: block;
            background-color: #BDC3C7;
            width: 100px;
            text-decoration: none;
            color: white;
            border-radius: 4px;
            text-align: center;
            height: 35px;
            line-height: 35px;
            font-weight: bold;
            font-size: 16px;
            margin-bottom: 15px;
            position: absolute;
            top: 5px;
            right: 5px;
        }
        
        #top div a:hover
        {
            background-color: #A6ACAF;
        }
        
        .blog
        {
            text-align: center;
            margin-bottom: 50px;
        }
        
        .blog form
        {
            display: inline-block;
        }
        
        .blog form label
        {
            text-align: left;
        }
        
        .blog form input[type="text"]
        {
            width: 400px;
            height: 40px;
        }
        
        .blog form textarea
        {
            width: 400px;
        }
        
        .toggler
        {
            text-align: center;
        }
        
        button
        {
            border: none !important;
            outline: none !important;
            border-radius: 0px !important;
            display: inline-block;
            background-color: #eee !important;
            color: black !important;
            height: 40px;
            width: 200px;
        }
        
	</style>
</head>
<body>

	<div id="top">
        <img src="../images/logo.png">
        <div style="padding-bottom: 5px;">
        <a href="session-destroy.php">Logout</a>
        </div>
    </div>

	<div class="main">
		<div class="row">
			<a href="addrecord.php"><div class="col-lg-3 col-md-3 col-sm-3 box">
				<img src="../images/add.png">
				<p>Add records</p>
			</div></a>
			<a href="getresults.php"><div class="col-lg-3 col-md-3 col-sm-3 box">
				<img src="../images/search.png">
				<p>Search records</p>
			</div></a>
			<a href="retrieve.php"><div class="col-lg-3 col-md-3 col-sm-3 box">
				<img src="../images/update.png">
				<p>Update records</p>
			</div></a>
			<a href="retrieve.php"><div class="col-lg-3 col-md-3 col-sm-3 box">
				<img src="../images/delete.png">
				<p>Delete records</p>
			</div></a>
		</div>
	</div>
	
	<?php
	
	$servername = "localhost";
	$username = "shinkyowa";
	$password = "h6Wlb@{RKqz(";
	$dbname = "shinkyowa";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    if(isset($_POST["submit"])) {
        $title = $_POST["title"];
        $details = "<pre>".$_POST["details"]."</pre>";
        $details = strip_tags($details);
        
        $filename = $_FILES['thumbnail']['name'];
        move_uploaded_file($_FILES['thumbnail']['tmp_name'], '../blogs/'.$filename);
        
        $sql = "INSERT INTO blogs(title, details, image) VALUES('$title', '$details', '$filename')";
        if($conn->query($sql) === TRUE) {
            echo "<script> alert('Blog entered successfully.'); </script>";
        }
    }
    
    $conn->close();
	
	?>
	
	<div class="toggler">
	    <button type="button" class="btn btn-info" data-toggle="collapse" data-target=".blog">Enter Blog</button>    
	</div>
	
	<div class="blog collapse" id="demo">
	    <div class="jumbotron">
	        <h3>Enter Blogs Here</h3>
	    </div>
	    <form method="post" action="action.php" enctype="multipart/form-data">
	        
	       <div class="form-group">
            <label for="exampleInputTitle">Title: </label>
            <input type="text" class="form-control" id="exampleInputTitle" placeholder="Enter title" name="title">
          </div>
          
           <div class="form-group">
              <label for="details">Description: </label>
              <textarea class="form-control" rows="10" id="details" name="details"></textarea>
            </div>
            
            <div class="form-group">
              <label for="thumbnail">Thumbnail: </label>
              <input type="file" class="form-control" name="thumbnail" id="thumbnail">
            </div>
            
	       <input type="submit" name="submit" class="btn btn-secondary">
	    </form>
	</div>

<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>