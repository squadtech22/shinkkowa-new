<?php

	session_start();
	if(!isset($_SESSION["user"])) {
		header("location: index.php");
	}

?>

<!DOCTYPE html>
<html>
    
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    	<title>admin</title>
    	<link rel="stylesheet" type="text/css" href="../stylesheet/bootstrap.min.css">
    </head>
    
    <style>
        
        form
        {
            margin: 50px 0px;
            border: 1px solid #D7DBDD;
            padding: 25px;
            border-radius: 5px;
        }
        
        form input
        {
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

        form input[type=radio] {
        	margin: 5px;
        	padding: 5px;
        	height: 20px;
        	width: 20px;	
        }
        
        form select
        {
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
            position: relative;
        }
        
        #top img
        {
            height: 50px;
            width: 300px;
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
        
    </style>
        
    <body>
        
        <?php
        
            $servername = "localhost";
            $username = "shinkyowa";
            $password = "h6Wlb@{RKqz(";
            $dbname = "shinkyowa";
            
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            if(isset($_POST['submit']))
            {
                $errors = (array) null;
                
                try {
                
                	$chasis = $_POST['chasisno'];
                	$Make = $_POST['make'];
                	$Model = $_POST['model'];
                	$Year = $_POST['year'];
                	$Milage = "" .$_POST['milage']. "km";
                	$Color = $_POST['color'];
                	$CoutryStock = $_POST['countrystock'];
                	$StockType = $_POST['stocktype'];
                	$PriceFob = $_POST['pricefob'];
                	$Enabled = $_POST['enabled'];
                	$Steering = $_POST['steering'];
                	$Drive4w = $_POST['drive4w'];
                	$Grade = $_POST['grade'];
                	$Availability = $_POST['availability'];
                
                	$sql = "INSERT INTO vehicle (chasisno, make, model, year, milage, color, countrystock, stocktype, pricefob, enabled, steering, drive4w, grade, availability)
                	VALUES ('$chasis', '$Make', '$Model', '$Year', '$Milage', '$Color', '$CoutryStock', '$StockType', '$PriceFob', '$Enabled', '$Steering', '$Drive4w', '$Grade', '$Availability')";
                	if (!$conn->query($sql)) {
                        throw new Exception($conn->error);
                    }
                    
                    $vehicleid = $conn->insert_id;
                
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
                
                	$sql = "INSERT INTO vehicle_details (vehicleid, carcc, transmission, airbags, centrallocking, fueltype, powerwindows, abs, sunroof, vehicletype, powerstearing, comments, tvnev, coolbox, powerbackdoor, leatherseats, autowing) VALUES ('$vehicleid', '$CarCC', '$Transmission', '$Airbags', '$CentralLocking', '$FuelType', '$PowerWindows', '$Abs', '$Sunroof', '$VehicleType', '$PowerStearing', '$Comments', '$TvNev', '$CoolBox', '$PowerBackDoor', '$LeatherSeats', '$AutoWing')";
                	if (!$conn->query($sql)) {
                        throw new Exception($conn->error);
                    }
                
                	$StockID = $_POST['stockid'];
                	$Country = $CoutryStock;
                	$EnabledCountry = $_POST['enabledcountry'];
                
                	$sql = "INSERT INTO stock_country (vehicleid, stockid, country, enabled) VALUES ('$vehicleid', '$StockID', '$Country', '$EnabledCountry')";
                	if (!$conn->query($sql)) {
                        throw new Exception($conn->error);
                    }
                
                	$Type = $_POST['type'];
                	$EnabledType = $_POST['enabledtype'];
                
                	$sql = "INSERT INTO stock_type (vehicleid, type, enabled) VALUES ('$vehicleid', '$Type', '$EnabledType')";
                	if (!$conn->query($sql)) {
                        throw new Exception($conn->error);
                    }
                	
                	$filename = $_FILES['thumbnail']['name'];
                	$ext = pathinfo($filename, PATHINFO_EXTENSION);
                	$filename = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1, 10);
                	$filename .= '.'.$ext;
                	
                    move_uploaded_file($_FILES['thumbnail']['tmp_name'], '../upload/'.$filename);
                	$sql= "INSERT INTO images(vehicleid, image) VALUES ('$vehicleid', '$filename')";
                	if (!$conn->query($sql)) {
                        throw new Exception($conn->error);
                    }
                
                	$countfiles = count($_FILES['file']['name']);
                
                	for($i=0;$i<$countfiles;$i++) {
                	    
                	    $filename = $_FILES['file']['name'][$i];
                    	$ext = pathinfo($filename, PATHINFO_EXTENSION);
                    	$filename = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1, 10);
                    	$filename .= '.'.$ext;
                    	
                    	move_uploaded_file($_FILES['file']['tmp_name'][$i],'../upload/'.$filename);
                        $sql= "INSERT INTO images(vehicleid, image) VALUES ('$vehicleid', '$filename')";
                        if (!$conn->query($sql)) {
                            throw new Exception($conn->error);
                        }
                        
                	}
            	
                }
                catch(Exception $e) {
                    array_push($errors, $e->getMessage());
                }
                
                if (empty($errors) && count($errors) < 1) {
    	            
    	            echo "<script> alert('New record created successfully.'); </script>";
                    echo "<script> window.location = 'retrieve.php'; </script>";
                    
    	        }
                
                $conn->close();
            	
            }
            
        ?>
        
        <div id="top">
            <img src="../images/logo.png">
            <div style="padding-bottom: 5px;">
            <a href="action.php">Home</a>
            </div>
        </div>
        
    	<form class="container" method="post" action="addrecord.php" enctype="multipart/form-data">
    	
    	    <?php 
    	    
    	        if (!empty($errors) && count($errors) > 0) {
    	            
    	            echo '<h5 class="text-danger">Error(s):</h5>';
    	            echo '<ul>';
    	                
    	                foreach($errors as $e) {
    	                    echo '<li class="text-danger">'. $e .'</li>';
    	                }
    	                
    	            echo '</ul><br>';
    	            
    	        }
    	    
    	    ?>
    	    
    	    <label>Chasis No: </label>
    		<input class="form-control" type="text" name="chasisno" placeholder="chasis no"><br>
    		
    	    <label>Make:</label>
    		<input class="form-control" type="text" name="make" placeholder="make"><br>
    		
    	    <label>Model:</label>
    		<input class="form-control" type="text" name="model" placeholder="model"><br>
    		
    	    <label>Year:</label>
    		<input class="form-control" type="text" name="year" placeholder="year"><br>
    		
    	    <label>Milage:</label>
    		<input class="form-control" type="text" name="milage" placeholder="milage"><br>
    		
    	    <label>Color:</label>
    		<input class="form-control" type="text" name="color" placeholder="color"><br>
    		
    	    <label>Country Stock:</label>
    		<select class="form-control" name="countrystock" type="text">
                <option value="Bahamas">Bahamas</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Canada">Canada</option>
                <option value="Chile">Chile</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Kenya">Kenya</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Mozambique">Mozambique</option>
                <option value="New-Zealand">New-Zealand</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Russia">Russia</option>
                <option value="South-Africa">South-Africa</option>
                <option value="Tanzania">Tanzania</option>
                <option value="Trinidad">Trinidad</option>
                <option value="Thailand">Thailand</option>
                <option value="Uganda">Uganda</option>
                <option value="UK">UK</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
            </select><br>
            
    	    <label>Stock Type: </label><br>
    		<input class="form-check-input" type="radio" name="stocktype" value="deals of the week" checked>Deals of the week
    		<input class="form-check-input" type="radio" name="stocktype" value="recently added" >Recently added
    		<input class="form-check-input" type="radio" name="stocktype" value="best seller cars">Best seller cars<br><br>
    		
    	    <label>Price Fob:</label>
    		<input class="form-control" type="text" name="pricefob" placeholder="price fob"><br>
    		
    	    <label>Steering:</label>
    		<input class="form-control" type="text" name="steering" placeholder="steering"><br>
    		
    	    <label>Drive:</label>
    		<input class="form-control" type="text" name="drive4w" placeholder="drive 4w"><br>
    		
    	    <label>Grade:</label>
    		<input class="form-control" type="text" name="grade" placeholder="grade"><br>
    		
    	    <label>Enabled:</label><br>
    		<input class="form-check-input" type="radio" name="enabled" value="1" checked>Yes
    		<input class="form-check-input" type="radio" name="enabled" value="0">No<br><br>
    		
    	    <label>Car CC:</label>
    		<input class="form-control" type="text" name="carcc" placeholder="car cc"><br>
    		
    	    <label>Transmission:</label>
    		<input class="form-control" type="text" name="transmission" placeholder="transmission"><br>
    		
    	    <label>Airbags:</label><br>
    		<input class="form-check-input" type="radio" name="airbags" value="yes" checked>Yes
    		<input class="form-check-input" type="radio" name="airbags" value="no">No<br><br>
    		
    	    <label>Central Locking:</label><br>
    		<input class="form-check-input" type="radio" name="centrallocking" value="yes" checked>Yes
    		<input class="form-check-input" type="radio" name="centrallocking" value="no">No<br><br>
    		
    	    <label>Fuel Type:</label>
    		<input class="form-control" type="text" name="fueltype" placeholder="fuel type"><br>
    		
    	    <label>Power Windows:</label><br>		
    		<input class="form-check-input" type="radio" name="powerwindows" value="yes" checked>Yes
    		<input class="form-check-input" type="radio" name="powerwindows" value="no">No<br><br>
    		
    	    <label>Abs:</label><br>
    		<input class="form-check-input" type="radio" name="abs" value="yes" checked>Yes
    		<input class="form-check-input" type="radio" name="abs" value="no">No<br><br>
    		
    	    <label>Sun Roof:</label><br>
    		<input class="form-check-input" type="radio" name="sunroof" value="yes" checked>Yes
    		<input class="form-check-input" type="radio" name="sunroof" value="no">No<br><br>
    		
    	    <label>Vehicle Type:</label>
    		<input class="form-control" type="text" name="vehicletype" placeholder="vehicle type"><br>

    	    <label>Power Stearing:</label><br>
    		<input class="form-check-input" type="radio" name="powerstearing" value="yes" checked>Yes
    		<input class="form-check-input" type="radio" name="powerstearing" value="no">No<br><br>
    		
    	    <label>Tv Nev:</label><br>
    		<input class="form-check-input" type="radio" name="tvnev" value="yes" checked>Yes
    		<input class="form-check-input" type="radio" name="tvnev" value="no">No<br><br>
    		
    	    <label>Cool Box:</label><br>
    		<input class="form-check-input" type="radio" name="coolbox" value="yes" checked>Yes
    		<input class="form-check-input" type="radio" name="coolbox" value="no">No<br><br>
    		
    	    <label>Power Back Door:</label><br>
    		<input class="form-check-input" type="radio" name="powerbackdoor" value="yes" checked>Yes
    		<input class="form-check-input" type="radio" name="powerbackdoor" value="no">No<br><br>
    		
    	    <label>leather Seats:</label><br>
    		<input class="form-check-input" type="radio" name="leatherseats" value="yes" checked>Yes
    		<input class="form-check-input" type="radio" name="leatherseats" value="no">No<br><br>
    		
    	    <label>autowing:</label><br>
    		<input class="form-check-input" type="radio" name="autowing" value="yes" checked>Yes
    		<input class="form-check-input" type="radio" name="autowing" value="no">No<br><br>
    		
    	    <label>Comments:</label>
    		<input class="form-control" type="text" name="comments" placeholder="comments"><br>
    		
    	    <label>Stock Id:</label>
    		<input class="form-control" type="text" name="stockid" placeholder="stock id"><br>
    		
    	    <label>Country Enable:</label><br>
    		<input class="form-check-input" type="radio" name="enabledcountry" value="1" checked>Yes
    		<input class="form-check-input" type="radio" name="enabledcountry" value="0">No<br><br>
    		
    	    <label>Car Type:</label><br>
    		<input class="form-check-input" type="radio" name="type" value="domestic" checked>Domestic
    		<input class="form-check-input" type="radio" name="type" value="commercial">Commercial<br><br>
    		
    	    <label>Condition: </label><br>
    		<input class="form-check-input" type="radio" name="enabledtype" value="1" checked>Brand new
    		<input class="form-check-input" type="radio" name="enabledtype" value="0">Used<br><br>
    		
    	    <label>Availability:</label>
    		<select class="form-control" name="availability" type="text">
                <option value="available">available</option>
                <option value="sold">sold</option>
                <option value="booked">booked</option>
                <option value="shipped">shipped</option>
            </select><br>
            
    	    <label>Thumbnail:</label>
        	<input class="form-control" type="file" name="thumbnail" id="file"><br>
        	
        	<label>Other Images:</label>
        	<input class="form-control" type="file" name="file[]" id="file" multiple><br>
        	
        	<input class="btn btn-primary" type="submit" name="submit" value="submit">
        	
    	</form>
    	
    </body>
</html>