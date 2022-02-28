<?php

    session_start();
    if(!isset($_SESSION["user"])) {
        header("location: index.php");
    }

?>

<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Update Record</title>
	<link rel="stylesheet" type="text/css" href="../stylesheet/bootstrap.min.css">
</head>
<style>
    form
    {
        margin-top: 50px;
        padding: 25px;
    }
    
    form input
    {
        margin: 20px;
        height: 40px;
        width: 300px;
        border: none;
        border-bottom: 1px solid #D6EAF8;
        transition: background-color 0.5s;
    }

    form input:focus
    {
        outline: none;
        color: black;
        border-radius: 5px;
        background-color: #D6EAF8;
    }
    
    form select
    {
        margin: 20px;
        height: 30px;
        width: 300px;
        border-radius: 8px;
    }
    
    #top
    {
        height: 120px;
        display: block;
        text-align: center;
        line-height: 150px;
        background-color: #50B2FC;
    }
    
    #top img
    {
        height: 50px;
        width: 300px;
        
    }
    
    form div a
    {
        display: block;
        background-color: red;
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
    }
</style>
<body>
    
<?php
$servername = "localhost";
$username = "shinkyowa";
$password = "h6Wlb@{RKqz(";
$dbname = "shinkyowa";

$conn = new mysqli($servername, $username, $password, $dbname);
$stockType = $_GET['id'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$vehicleid = $_GET['id'];

if(count($_POST)>0) {
    
    $id = $_POST['id'];
    
    $chasisno = $_POST['chasisno'];
	$Make = $_POST['make'];
	$Model = $_POST['model'];
	$Year = $_POST['year'];
	$Milage = $_POST['milage'];
	$Color = $_POST['color'];
	$CountryStock = $_POST['countrystock'];
	$StockType = $_POST['stocktype'];
	$PriceFob = $_POST['pricefob'];
	$Enabled = $_POST['enabled'];
	$Steering = $_POST['steering'];
	$Drive4w = $_POST['drive4w'];
	$Grade = $_POST['grade'];
	$Availability = $_POST['availability'];
	
	if($Enabled == "") {
	    
    	$sql = "UPDATE vehicle SET chasisno = '$chasisno', make = '$Make', model = '$Model', year = '$Year', milage = '$Milage', color = '$Color', countrystock = '$CountryStock', stocktype = '$StockType', pricefob = '$PriceFob', steering = '$Steering', drive4w = '$Drive4w', grade = '$Grade', availability = '$Availability' WHERE id = '$id'";
    	$conn->query($sql);
	
	}
	
	else { 

    	$sql = "UPDATE vehicle SET chasisno = '$chasisno', make = '$Make', model = '$Model', year = '$Year', milage = '$Milage', color = '$Color', countrystock = '$CountryStock', stocktype = '$StockType', pricefob = '$PriceFob', enabled = '$Enabled', steering = '$Steering', drive4w = '$Drive4w', grade = '$Grade',  availability = '$Availability' WHERE id = '$id'";
    	$conn->query($sql);
	
	}

	$CarCC = $_POST['carcc'];
	$Transmission = $_POST['transmission'];
	$Airbags = $_POST['airbags'];
	$CentralLocking = $_POST['centrallocking'];
	$FuelType = $_POST['fueltype'];
	$PowerWindows = $_POST['powerwindows'];
	$Abs = $_POST['abs'];
	$Sunroof = $_POST['sunroof'];
	$VehicleType = $_POST['vehicletype'];
	$PowerStearing = $_POST['powerstearing'];
	$Comments = $_POST['comments'];
	$TvNev = $_POST['tvnev'];
	$CoolBox = $_POST['coolbox'];
	$PowerBackDoor = $_POST['powerbackdoor'];
	$LeatherSeats = $_POST['leatherseats'];
	$AutoWing = $_POST['autowing'];

	$sql = "UPDATE vehicle_details SET carcc = '$CarCC', transmission = '$Transmission', airbags = '$Airbags', centrallocking = '$CentralLocking', fueltype = '$FuelType', powerwindows = '$PowerWindows', abs = '$Abs', sunroof = '$Sunroof', vehicletype = '$VehicleType', powerstearing = '$PowerStearing', comments = '$Comments', tvnev = '$TvNev', coolbox = '$CoolBox', powerbackdoor = '$PowerBackDoor', leatherseats = '$LeatherSeats', autowing = '$AutoWing' WHERE vehicleid = '$id'";
	$conn->query($sql);
	
	if ($conn->query($sql) === TRUE) {
		echo "<script> alert ('car details updated'); </script>";
		
		echo "<script>window.location = 'retrieve.php';</script>";
		
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

$sql = "SELECT * from vehicle as a join vehicle_details as b where a.id = b.vehicleid and a.id = '$vehicleid'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
?>
    
    <div id="top">
        <img src="../images/logo.png">
    </div>
    
<form method="post" action="update.php">
    
<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">

<div style="padding-bottom: 5px;">
<a href="retrieve.php">Cars List</a>
</div>

Chasis No:<br>
<input type="text" name="chasisno" class="txtField" value="<?php echo $row['chasisno']; ?>">
Make:<br>
<input type="text" name="make" class="txtField" value="<?php echo $row['make']; ?>">
<br>
Model:<br>
<input type="text" name="model" class="txtField" value="<?php echo $row['model']; ?>">
<br>
Year:<br>
<input type="text" name="year" class="txtField" value="<?php echo $row['year']; ?>">
<br>
Milage:<br>
<input type="text" name="milage" class="txtField" value="<?php echo $row['milage']; ?>">
<br>
Color:<br>
<input type="text" name="color" class="txtField" value="<?php echo $row['color']; ?>">
<br>
Country Stock:<br>
<input type="text" name="countrystock" class="txtField" value="<?php echo $row['countrystock']; ?>">
<br>
Stock Type:<br>
<input type="text" name="stocktype" class="txtField" value="<?php echo $row['stocktype']; ?>">
<br>
Price Fob:<br>
<input type="text" name="pricefob" class="txtField" value="<?php echo $row['pricefob']; ?>">
<br>
Steering:<br>
<input type="text" name="steering" class="txtField" value="<?php echo $row['steering']; ?>">
<br>
Drive 4w:<br>
<input type="text" name="drive4w" class="txtField" value="<?php echo $row['drive4w']; ?>">
<br>
Grade:<br>
<input type="text" name="grade" class="txtField" value="<?php echo $row['grade']; ?>">
<br>
Car CC:<br>
<input type="text" name="carcc" class="txtField" value="<?php echo $row['carcc']; ?>">
<br>
Transmission:<br>
<input type="text" name="transmission" class="txtField" value="<?php echo $row['transmission']; ?>">
<br>
Airbags:<br>
<input type="text" name="airbags" class="txtField" value="<?php echo $row['airbags']; ?>">
<br>
Central Locking:<br>
<input type="text" name="centrallocking" class="txtField" value="<?php echo $row['centrallocking']; ?>">
<br>
Fuel Type:<br>
<input type="text" name="fueltype" class="txtField" value="<?php echo $row['fueltype']; ?>">
<br>
Power Windows:<br>
<input type="text" name="powerwindows" class="txtField" value="<?php echo $row['powerwindows']; ?>">
<br>
Abs:<br>
<input type="text" name="abs" class="txtField" value="<?php echo $row['abs']; ?>">
<br>
Sunroof:<br>
<input type="text" name="sunroof" class="txtField" value="<?php echo $row['sunroof']; ?>">
<br>
Vehicle Type:<br>
<input type="text" name="vehicletype" class="txtField" value="<?php echo $row['vehicletype']; ?>">
<br>
Power Stearing:<br>
<input type="text" name="powerstearing" class="txtField" value="<?php echo $row['powerstearing']; ?>">
<br>
Tv Nev:<br>
<input type="text" name="tvnev" class="txtField" value="<?php echo $row['tvnev']; ?>">
<br>
Cool Box:<br>
<input type="text" name="coolbox" class="txtField" value="<?php echo $row['coolbox']; ?>">
<br>
Power Back Door:<br>
<input type="text" name="powerbackdoor" class="txtField" value="<?php echo $row['powerbackdoor']; ?>">
<br>
Leather Seats:<br>
<input type="text" name="leatherseats" class="txtField" value="<?php echo $row['leatherseats']; ?>">
<br>
Auto Wing:<br>
<input type="text" name="autowing" class="txtField" value="<?php echo $row['autowing']; ?>">
<br>
Availability:<br>
<select name="availability" type="text">
    <option value="<?php echo $row['availability']; ?>">select option</option>
    <option value="available">available</option>
    <option value="sold">sold</option>
    <option value="booked">booked</option>
    <option value="shipped">shipped</option>
</select><br>
Comments:<br>
<input type="text" name="comments" class="txtField" value="<?php echo $row['comments']; ?>">
<br>
Enabled:<br><br>
<input style="margin: 5px; padding: 5px; height: 20px; width: 20px;" type="radio" name="enabled" value="1">Yes
<input style="margin: 5px; padding: 5px; height: 20px; width: 20px;" type="radio" name="enabled" value="0">No<br><br>
		
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>