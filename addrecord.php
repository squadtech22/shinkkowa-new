<?php

session_start();
if(!isset($_SESSION["user"])) {
    header("location: login.php");
}

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
    $flag = 0;
    
	$Chasis = $_POST['chasisno'];
	$Make = $_POST['make'];
	$Model = $_POST['model'];
	$Year = $_POST['year'];
	$Milage = "" .$_POST['milage']. "km";
	$Color = $_POST['color'];
	$CoutryStock = $_POST['countrystock'];
	$StockType = $_POST['stocktype'];
	$PriceFob = $_POST['pricefob'];
	$Enabled = 0;
	$Steering = $_POST['steering'];
	$Drive4w = $_POST['drive4w'];
	$Grade = $_POST['grade'];

	$sql = "INSERT INTO vehicle (chasisno, make, model, year, milage, color, countrystock, stocktype, pricefob, enabled, steering, drive4w, grade)
	VALUES ('$Chasis', '$Make', '$Model', '$Year', '$Milage', '$Color', '$CoutryStock', '$StockType', '$PriceFob', '$Enabled', '$Steering', '$Drive4w', '$Grade')";
	$conn->query($sql);

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

	$sql = "INSERT INTO vehicle_details (chasisno, carcc, transmission, airbags, centrallocking, fueltype, powerwindows, abs, sunroof, vehicletype, powerstearing, comments, tvnev, coolbox, powerbackdoor, leatherseats, autowing) VALUES ('$Chasis', '$CarCC', '$Transmission', '$Airbags', '$CentralLocking', '$FuelType', '$PowerWindows', '$Abs', '$Sunroof', '$VehicleType', '$PowerStearing', '$Comments', '$TvNev', '$CoolBox', '$PowerBackDoor', '$LeatherSeats', '$AutoWing')";
	$conn->query($sql);

	$StockID = $_POST['stockid'];
	$Country = $CoutryStock;
	$EnabledCountry = 0;

	$sql = "INSERT INTO stock_country (chasisno, stockid, country, enabled) VALUES ('$Chasis', '$StockID', '$Country', '$EnabledCountry')";
	$conn->query($sql);

	$Type = $_POST['type'];
	$EnabledType = $_POST['enabledtype'];

	$sql = "INSERT INTO stock_type (chasisno, type, enabled) VALUES ('$Chasis', '$Type', '$EnabledType')";
	$conn->query($sql);
	
	$filename = $_FILES['thumbnail']['name'];
    move_uploaded_file($_FILES['thumbnail']['tmp_name'], 'upload/'.$filename);
	$sql= "INSERT INTO images(chasisno, image) VALUES ('$Chasis', '$filename')";
	$conn->query($sql);

	// Count total files
	$countfiles = count($_FILES['file']['name']);

	// Looping all files
	for($i=0;$i<$countfiles;$i++){
	$filename = $_FILES['file']['name'][$i];	

	// Upload file
	move_uploaded_file($_FILES['file']['tmp_name'][$i],'upload/'.$filename);
	$sql= "INSERT INTO images(chasisno, image) VALUES ('$Chasis', '$filename')";
	$conn->query($sql); 
    }

	$flag = 1;
	
	if ($flag == 1) {
		echo "<script> alert ('New record created successfully.'); </script>";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Sell Your Car</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Default Description">
<meta name="keywords" content="fashion, store, E-commerce">
<meta name="robots" content="*">
<link rel="icon" href="#" type="image/x-icon">
<link rel="shortcut icon" href="#" type="image/x-icon">

<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="stylesheet/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="stylesheet/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="stylesheet/bootstrap-select.css">
<link rel="stylesheet" type="text/css" href="stylesheet/revslider.css" >
<link rel="stylesheet" type="text/css" href="stylesheet/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="stylesheet/owl.theme.css">
<link rel="stylesheet" type="text/css" href="stylesheet/jquery.bxslider.css">
<link rel="stylesheet" type="text/css" href="stylesheet/jquery.mobile-menu.css">
<link rel="stylesheet" type="text/css" href="stylesheet/style.css" media="all">
<link rel="stylesheet" type="text/css" href="stylesheet/responsive.css" media="all">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Teko:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Saira+Condensed:300,400,500,600,700,800" rel="stylesheet">

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
            height: 40px;
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
    
</head>
<body>
<div id="page">
  <?php include("header.php"); ?>
  
  <!-- BEGIN Main Container -->  
          
       <div class="main-container col1-layout wow bounceInUp animated animated" style="visibility: visible;">     
              
	       <div class="main">                     
        <div class="account-login container">
  <!--page-title-->
  
  <div style="padding: 50px; text-align: right; background-color: #E5E7E9;">
      <h5>WELCOME! <strong><?php
      
        $email = $_SESSION["user"];
        $sql = "SELECT * from users where email = '$email'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        echo $row["firstname"] ." ". $row["lastname"];
        
      ?></strong></h5>
    <a href="session-destroy.php"><button type="button" class="btn btn-primary">Logout</button></a>    
  </div>
  
  <h1 style="text-align: center; font-size: 24px; font-weight: bold; display: block; padding: 25px; background-color: #50B2FC; color: white; margin-top: 0px !important;">Add Your Vehicle</h1>

        
    <form method="post" action="sign in.php" enctype="multipart/form-data">
	
	Chasis No:<br>
		<input type="text" name="chasisno" placeholder="chasis no"><br>
	Make:<br>
		<input type="text" name="make" placeholder="make"><br>
	Model:<br>
		<input type="text" name="model" placeholder="model"><br>
	Year:<br>
		<input type="text" name="year" placeholder="year"><br>
	Milage:<br>
		<input type="text" name="milage" placeholder="milage">km<br>
	Color:<br>
		<input type="text" name="color" placeholder="color"><br>
	Country Stock:<br>
		<select name="countrystock" type="text">
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
	Stock Type: <br><br>
		<input style="margin: 5px; padding: 5px; height: 20px; width: 20px;" type="radio" name="stocktype" value="deals of the week" checked>Deals of the week
		<input style="margin: 5px; padding: 5px; height: 20px; width: 20px;" type="radio" name="stocktype" value="recently added" >Recently added
		<input style="margin: 5px; padding: 5px; height: 20px; width: 20px;" type="radio" name="stocktype" value="best seller cars">Best seller cars<br><br>
	Price Fob:<br>
		<input type="text" name="pricefob" placeholder="price fob"><br>
	Steering:<br>
		<input type="text" name="steering" placeholder="steering"><br>
	Drive:<br>
		<input type="text" name="drive4w" placeholder="drive 4w"><br>
	Grade:<br>
		<input type="text" name="grade" placeholder="grade"><br>
	<!-- Enabled:<br><br>
		<input style="margin: 5px; padding: 5px; height: 20px; width: 20px;" type="radio" name="enabled" value="1" checked>Yes
		<input style="margin: 5px; padding: 5px; height: 20px; width: 20px;" type="radio" name="enabled" value="0">No<br><br> -->
	Car CC:<br>
		<input type="text" name="carcc" placeholder="car cc"><br>
	Transmission:<br>
		<input type="text" name="transmission" placeholder="transmission"><br>
	Airbags:<br><br>
		<input style="margin: 5px; padding: 5px; height: 20px; width: 20px;" type="radio" name="airbags" value="yes" checked>Yes
		<input style="margin: 5px; padding: 5px; height: 20px; width: 20px;" type="radio" name="airbags" value="no">No<br><br>
	Central Locking:<br><br>
		<input style="margin: 5px; padding: 5px; height: 20px; width: 20px;" type="radio" name="centrallocking" value="yes" checked>Yes
		<input style="margin: 5px; padding: 5px; height: 20px; width: 20px;" type="radio" name="centrallocking" value="no">No<br><br>
	Fuel Type:<br>
		<input type="text" name="fueltype" placeholder="fuel type"><br>
	Power Windows:<br><br>		
		<input style="margin: 5px; padding: 5px; height: 20px; width: 20px;" type="radio" name="powerwindows" value="yes" checked>Yes
		<input style="margin: 5px; padding: 5px; height: 20px; width: 20px;" type="radio" name="powerwindows" value="no">No<br><br>
	Abs:<br><br>
		<input style="margin: 5px; padding: 5px; height: 20px; width: 20px;" type="radio" name="abs" value="yes" checked>Yes
		<input style="margin: 5px; padding: 5px; height: 20px; width: 20px;" type="radio" name="abs" value="no">No<br><br>
	Sun Roof:<br><br>
		<input style="margin: 5px; padding: 5px; height: 20px; width: 20px;" type="radio" name="sunroof" value="yes" checked>Yes
		<input style="margin: 5px; padding: 5px; height: 20px; width: 20px;" type="radio" name="sunroof" value="no">No<br><br>
	Vehicle Type:<br>
		<input type="text" name="vehicletype" placeholder="vehicle type"><br>
	Power Stearing:<br><br>
		<input style="margin: 5px; padding: 5px; height: 20px; width: 20px;" type="radio" name="powerstearing" value="yes" checked>Yes
		<input style="margin: 5px; padding: 5px; height: 20px; width: 20px;" type="radio" name="powerstearing" value="no">No<br><br>
	Tv Nev:<br><br>
		<input style="margin: 5px; padding: 5px; height: 20px; width: 20px;" type="radio" name="tvnev" value="yes" checked>Yes
		<input style="margin: 5px; padding: 5px; height: 20px; width: 20px;" type="radio" name="tvnev" value="no">No<br><br>
	Cool Box:<br><br>
		<input style="margin: 5px; padding: 5px; height: 20px; width: 20px;" type="radio" name="coolbox" value="yes" checked>Yes
		<input style="margin: 5px; padding: 5px; height: 20px; width: 20px;" type="radio" name="coolbox" value="no">No<br><br>
	Power Back Door:<br><br>
		<input style="margin: 5px; padding: 5px; height: 20px; width: 20px;" type="radio" name="powerbackdoor" value="yes" checked>Yes
		<input style="margin: 5px; padding: 5px; height: 20px; width: 20px;" type="radio" name="powerbackdoor" value="no">No<br><br>
	leather Seats:<br><br>
		<input style="margin: 5px; padding: 5px; height: 20px; width: 20px;" type="radio" name="leatherseats" value="yes" checked>Yes
		<input style="margin: 5px; padding: 5px; height: 20px; width: 20px;" type="radio" name="leatherseats" value="no">No<br><br>
	autowing:<br><br>
		<input style="margin: 5px; padding: 5px; height: 20px; width: 20px;" type="radio" name="autowing" value="yes" checked>Yes
		<input style="margin: 5px; padding: 5px; height: 20px; width: 20px;" type="radio" name="autowing" value="no">No<br><br>
	Comments:<br>
		<input type="text" name="comments" placeholder="comments"><br>
	Stock Id:<br>
		<input type="text" name="stockid" placeholder="stock id"><br>
	<!-- Country Enable:<br><br>
		<input style="margin: 5px; padding: 5px; height: 20px; width: 20px;" type="radio" name="enabledcountry" value="1" checked>Yes
		<input style="margin: 5px; padding: 5px; height: 20px; width: 20px;" type="radio" name="enabledcountry" value="0">No<br><br> -->
	Car Type:<br><br>
		<input style="margin: 5px; padding: 5px; height: 20px; width: 20px;" type="radio" name="type" value="domestic" checked>Domestic
		<input style="margin: 5px; padding: 5px; height: 20px; width: 20px;" type="radio" name="type" value="commercial">Commercial<br><br>
	Condition: <br><br>
		<input style="margin: 5px; padding: 5px; height: 20px; width: 20px;" type="radio" name="enabledtype" value="1" checked>Brand new
		<input style="margin: 5px; padding: 5px; height: 20px; width: 20px;" type="radio" name="enabledtype" value="0">Used<br><br>
	Thumbnail:<br>
	<input type="file" name="thumbnail" id="file"><br>
	Other Images:<br>
	<input type="file" name="file[]" id="file" multiple><br>
	<input type="submit" name="submit" value="submit">
	</form>
   
            </div> <!--account-login-->
         
	       </div><!--main-container-->
          
          </div> <!--col1-layout-->
  
   <?php include("footer.php"); ?>
  <!-- End For version 1,2,3,4,6 -->
  
</div>
<!--page-->
<!-- Mobile Menu-->
<div id="mobile-menu">
  <ul>
    <!-- <li>
      <div class="mm-search">
        <form id="search1" name="search">
          <div class="input-group">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> </button>
            </div>
            <input type="text" class="form-control simple" placeholder="Search ..." name="srch-term" id="srch-term">
          </div>
        </form>
      </div>
    </li> -->
     <li class="active"> <a class="level-top" href="index.php"><span><img style="filter: brightness(0) invert(1); padding: 0px 5px 5px 5px;" src="images/home.png">Home</span></a></li>
                      <li class="level0 parent drop-menu"> <a class="level-top" href="showroom.php"><span><img style="filter: brightness(0) invert(1); padding: 0px 5px 5px 5px;" src="images/warehouse-with-boxes.png">Showroom</span></a>
                        <ul class="level1">
                          <li class="level1 first"><a href="showroom.php"><span>Japan</span></a></li>
                          <li class="level1 nav-10-2"> <a href="showroom.php"> <span>Mozambique</span> </a> </li>
                        </ul>
                      </li>
                      <li class="level0 parent drop-menu"> <a class="level-top" href="blog.html"><span><img style="filter: brightness(0) invert(1); padding: 0px 5px 5px 5px;" src="images/blog-comment-speech-bubble-symbol.png">Blog</span></a>
                        <ul class="level1">
                          <li class="level1 first"><a href="blog.html"><span>Blog List</span></a></li>
                          <li class="level1 nav-10-2"> <a href="blog-detail.html"> <span>Blog Detail</span> </a> </li>
                        </ul>
                      </li>
                      <li class="level0 parent drop-menu"> <a class="level-top" href="auction.php"><span><img style="filter: brightness(0) invert(1); padding: 0px 5px 5px 5px;" src="images/auction.png">Auction</span></a> 
                        <ul class="level1">
                          <li class="level1"> <a href="auction-services.php"> <span>Auction Services</span> </a> </li>
                          <li class="level1 nav-10-4"> <a href="auction-guide.php"> <span>Auction Guide</span> </a> </li>
                          <li class="level1 nav-10-4"> <a href="auction-schedule.php"> <span>Auction Schedule</span> </a> </li>
                        </ul>
                      </li>
                      <li class="level0 parent drop-menu"><a href="shipping.php"><span><img style="filter: brightness(0) invert(1); padding: 0px 5px 5px 5px;" src="images/customer.png">Services</span> </a>
                        <!--sub sub category-->
                        <ul class="level1">
                          <li class="level1"> <a href="shipping.php"> <span>Shipping</span> </a> </li>
                          <li class="level1 nav-10-4"> <a href="inspection services.php"> <span>Inspection Services</span> </a> </li>
                          <li class="level1 nav-10-4"> <a href="login.php"> <span>Sell Your Car</span> </a> </li>
                          <li class="level1 nav-10-4"> <a href="bank-information.php"> <span>My Account Details</span> </a> </li>
                        </ul>
                      </li>
                      <li class="level0 parent drop-menu"> <a class="level-top" href="about-us.php"><span><img style="filter: brightness(0) invert(1); padding: 0px 5px 5px 5px;" src="images/about-us.png">About Us</span></a>
                        <ul class="level1">
                          <li class="level1 first"><a href="contact-us.php"><span>Contact Us</span></a></li>
                          <li class="level1 nav-10-2"> <a href="company-profile.php"> <span>Company Profile</span> </a> </li>
                          <li class="level1 nav-10-2"> <a href="bank-information.php"> <span>Bank Information</span> </a> </li>
                          <li class="level1 nav-10-2"> <a href="about-us.php"> <span>Why Choose Us</span> </a> </li>
                        </ul>
                      </li>
                      <li class="level0 parent drop-menu"> <a class="level-top"><span><img style="filter: brightness(0) invert(1); padding: 0px 5px 5px 5px;" src="images/earth.png">Select Country</span></a>
                        <ul class="lang" style="height: 300px; overflow-y: scroll;">
                            <li><a style="color: black;" href="country.php?id=<?php echo "Bahamas"; ?>"> <img src="images/bahamas.png" alt="German"> <span>Bahamas</span> </a></li>
                            <li><a style="color: black;" href="country.php?id=<?php echo "Bangladesh"; ?>"> <img src="images/bangladesh.png" alt="German"> <span>Bangladesh</span> </a></li>
                            <li><a style="color: black;" href="country.php?id=<?php echo "Canada"; ?>"> <img src="images/canada.png" alt="German"> <span>Canada</span> </a></li>
                            <li><a style="color: black;" href="country.php?id=<?php echo "Chile"; ?>"> <img src="images/chile.png" alt="German"> <span>Chile</span> </a></li>
                            <li><a style="color: black;" href="country.php?id=<?php echo "Jamaica"; ?>"> <img src="images/jamaica.png" alt="German"> <span>Jamaica</span> </a></li>
                            <li><a style="color: black;" href="country.php?id=<?php echo "Kenya"; ?>"> <img src="images/kenya.png" alt="German"> <span>Kenya</span> </a></li>
                            <li><a style="color: black;" href="country.php?id=<?php echo "Malaysia"; ?>"> <img src="images/malaysia.png" alt="German"> <span>Malaysia</span> </a></li>
                            <li><a style="color: black;" href="country.php?id=<?php echo "Mozambique"; ?>"> <img src="images/mozambique.png" alt="German"> <span>Mozambique</span> </a></li>
                            <li><a style="color: black;" href="country.php?id=<?php echo "New-Zealand"; ?>"> <img src="images/new-zealand.png" alt="German"> <span>New Zealand</span> </a></li>
                            <li><a style="color: black;" href="country.php?id=<?php echo "Pakistan"; ?>"> <img src="images/pakistan.png" alt="German"> <span>Pakistan</span> </a></li>
                            <li><a style="color: black;" href="country.php?id=<?php echo "Russia"; ?>"> <img src="images/russia.png" alt="German"> <span>Russia</span> </a></li>
                            <li><a style="color: black;" href="country.php?id=<?php echo "South-Africa"; ?>"> <img src="images/south-africa.png" alt="German"> <span>South Africa</span> </a></li>
                            <li><a style="color: black;" href="country.php?id=<?php echo "Tanzania"; ?>"> <img src="images/tanzania.png" alt="German"> <span>Tanzania</span> </a></li>
                            <li><a style="color: black;" href="country.php?id=<?php echo "Trinidad"; ?>"> <img src="images/trinidad-and-tobago.png" alt="German"> <span>Trinidad</span> </a></li>
                            <li><a style="color: black;" href="country.php?id=<?php echo "Thailand"; ?>"> <img src="images/thailand.png" alt="German"> <span>Thailand</span> </a></li>
                            <li><a style="color: black;" href="country.php?id=<?php echo "Uganda"; ?>"> <img src="images/uganda.png" alt="German"> <span>Uganda</span> </a></li>
                            <li><a style="color: black;" href="country.php?id=<?php echo "UK"; ?>"> <img src="images/united-kingdom.png" alt="German"> <span>UK</span> </a></li>
                            <li><a style="color: black;" href="country.php?id=<?php echo "Zambia"; ?>"> <img src="images/zambia.png" alt="German"> <span>Zambia</span> </a></li>
                            <li><a style="color: black;" href="country.php?id=<?php echo "Zimbabwe"; ?>"> <img src="images/zimbabwe.png" alt="German"> <span>Zimbabwe</span> </a></li>
                          </ul>
                     </li>
                </ul>
            </div>
            
<!-- JavaScript --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/parallax.js"></script> 
<script type="text/javascript" src="js/revslider.js"></script> 
<script type="text/javascript" src="js/common.js"></script> 
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script> 
<script type="text/javascript" src="js/jquery.flexslider.js"></script> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script>


</body></html>