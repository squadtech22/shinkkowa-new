<?php

	$servername = "localhost";
    $username = "shinkyowa";
    $password = "h6Wlb@{RKqz(";
    $dbname = "shinkyowa";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {	
		
		$username = $_POST["username"];
		$password = $_POST["password"];

		$sql = "SELECT * FROM admin";
		$result = $conn->query($sql);
		while($row = $result->fetch_assoc()) {

	        if($username == $row['username'] && password_verify($password, $row['password']))
	        {
	            session_start();
				$_SESSION["user"] = 1;
				header("location: action.php");
	        }

	    }
	    echo "<script> alert('Wrong Credentials!'); </script>";
    	$conn->close();
	}

?>

<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Log-In Shinkyowa</title>
<!-- Include CSS File Here -->
<link rel="stylesheet" href="css/style.css"/>
<!-- Include JS File Here -->
<script src="js/login.js"></script>
</head>
<style>

    @import url(http://fonts.googleapis.com/css?family=Raleway);
    h2{
        background-color: #50B2FC;
        padding: 30px 35px;
        margin: -10px -50px;
        text-align:center;
        border-radius: 10px 10px 0 0;
    }
    hr{
        margin: 10px -50px;
        border: 0;
        border-top: 1px solid #ccc;
        margin-bottom: 40px;
    }
    div.container{
        width: auto;
        height: auto;
        display: inline-block;
        font-family: 'Raleway', sans-serif;
    }
    div.main{
        width: 300px;
        padding: 10px 50px 25px;
        border: 2px solid gray;
        border-radius: 10px;
        font-family: raleway;
        float:left;
        margin-top:50px;
    }
    input[type=text],input[type=password]{
        width: 100%;
        height: 40px;
        padding: 5px;
        margin-bottom: 25px;
        margin-top: 5px;
        border: 2px solid #ccc;
        color: #4f4f4f;
        font-size: 16px;
        border-radius: 5px;
    }
    label{
        color: #464646;
        text-shadow: 0 1px 0 #fff;
        font-size: 14px;
        font-weight: bold;
    }
    center{
        font-size:32px;
    }
    .position{
        text-align: center;
    }
    .note{
        color:red;
    }
    .valid{
        color:green;
    }
    .back{
        text-decoration: none;
        border: 1px solid rgb(0, 143, 255);
        background-color: rgb(0, 214, 255);
        padding: 3px 20px;
        border-radius: 2px;
        color: black;
    }
    input[type=button]{
        font-size: 16px;
        background: linear-gradient(#ffbc00 5%, #ffdd7f 100%);
        border: 1px solid #e5a900;
        color: #4E4D4B;
        font-weight: bold;
        cursor: pointer;
        width: 100%;
        border-radius: 5px;
        padding: 10px 0;
        outline:none;
    }
    input[type=button]:hover{
        background: linear-gradient(#ffdd7f 5%, #ffbc00 100%);
    }
    h2 img
    {
        height: 80px;
        width: 300px;
    }
    
</style>

<body>
<h2><img src="../images/logo.png"></h2>

<div class="position">
	<div class="container">
		<div class="main">
			<form id="myform" method="post">
				<label>User Name :</label>
				<input type="text" name="username" id="username"/>
				<label>Password :</label>
				<input type="password" name="password" id="password"/>
				<input type="button" value="Login" id="submitbtn" onclick="myfunction();" />
			</form>
		</div>
	</div>
</div>

<script>
	
	function myfunction() {
		document.getElementById("myform").submit();
	}

	var user = document.getElementById('username');
	var pass = document.getElementById('password');

	user.addEventListener("keyup", function(event) {
		if(event.keyCode === 13) {
			document.getElementById("myform").submit();
		}
	});

	pass.addEventListener("keyup", function(event) {
		if(event.keyCode === 13) {
			document.getElementById("myform").submit();
		}
	});

</script>

</body>
</html>