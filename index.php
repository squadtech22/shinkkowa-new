<?php
$servername = "localhost";
$username = "shinkyowa";
$password = "h6Wlb@{RKqz(";
$dbname = "shinkyowa";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>

<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Shinkyowa Home Page</title>
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
<link rel="stylesheet" type="text/css" href="stylesheet/revslider.css">
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
    .adds
    {
        -webkit-transition: box-shadow 0.5s; /* For Safari 3.1 to 6.0 */
        transition: box-shadow 0.5s;
    }
    
    .adds:hover
    {
        box-shadow: 2px 2px 2px 2px grey;
    }
    
    .heading
    {
      background-color: #E74C3C;
      -webkit-animation-name: example; /* Safari 4.0 - 8.0 */
      -webkit-animation-duration: 5s; /* Safari 4.0 - 8.0 */
      animation-name: example;
      animation-duration: 5s;
      animation-iteration-count: infinite;
    }
    
    /* Safari 4.0 - 8.0 */
    @-webkit-keyframes example {
      from {background-color: #E74C3C;}
      to {background-color: #3c90e7;}
    }
    
    /* Standard syntax */
    @keyframes example {
      from {background-color: #E74C3C;}
      to {background-color: #3c90e7;}
    }
    
    #top img {
        height: 320px;
    }
    
    .info {
        display: none !important;
    }
</style>

<script>
    function startTime() {
      var today = new Date();
      var h = today.getHours();
      var m = today.getMinutes();
      var s = today.getSeconds();
      m = checkTime(m);
      s = checkTime(s);
      document.getElementById('txt').innerHTML =
      "Time: " + h + ":" + m + ":" + s;
      var t = setTimeout(startTime, 500);
    }
    function checkTime(i) {
      if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
      return i;
    }
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
    $(document).ready(function(){
        $("#make").change(function(){
            var make = $("#make").val();
		    $.ajax({
					url: 'data.php',
					method: 'post',
					data: 'make=' + make
				}).done(function(models){
				   $('#models').empty();
			       $('#models').html(models);
			    });		
		    });
        
        $("#model").change(function(){
            var model = $("#model").val();
		    $.ajax({
					url: 'data.php',
					method: 'post',
					data: 'model=' + model
				}).done(function(years){
				   $('#years').empty();
			       $('#years').html(years);
			    });		
		    });
        
        $("#year").change(function(){
            var year = $("#year").val();
		    $.ajax({
					url: 'data.php',
					method: 'post',
					data: 'year=' + year
				}).done(function(colors){
				   $('#colors').empty();
			       $('#colors').html(colors);
			    });		
		    });
        
        $("#color").change(function(){
            var color = $("#color").val();
		    $.ajax({
					url: 'data.php',
					method: 'post',
					data: 'color=' + color
				}).done(function(countries){
				   $('#countries').empty();
			       $('#countries').html(countries);
			    });		
		    });
        });
        
</script>

</head>
<body onload="startTime()">
<div id="page">
    
  <header>
    <div class="container">
      <div class="row">
        <div id="header">
          <div class="header-container">
            <div class="header-logo"> <a href="index.php" title="Car HTML" class="logo">
              <div><img src="images/logo.png" alt="Car Store"></div>
              </a> </div>
            <div class="header__nav">
              <div class="header-banner">
                <div class="col-lg-6 col-xs-12 col-sm-6 col-md-6">
                  <div class="assetBlock" style="display: block;">
                      <div style="display: flex;">
                        <img src="images/clock.png">
                        <div style="margin-left: 5px;" id="txt"></div>      
                      </div>
                    <!-- <div style="height: 20px; overflow: hidden;" id="slideshow">
                      <p style="display: block;">Hot days! - <span>50%</span> Get ready for summer! </p>
                      <p style="display: none;">Save up to <span>40%</span> Hurry limited offer!</p>
                    </div> -->
                  </div>
                </div>
                <div class="col-lg-6 col-lg-6 col-xs-12 col-sm-6 col-md-6 call-us"><i class="fa fa-clock-o"></i> Mon - Fri : 09am to 06pm <i class="fa fa-phone"></i>+81 90-2379-1308</div>
              </div>
              <div class="fl-header-right">
                <div class="fl-links">
                  <div class="no-js"> <a title="" class="clicker"></a>
                    <div class="fl-nav-links">
                      <div class="language-currency">
                        <!--fl-language-->
                        <!-- END For version 1,2,3,4,6 -->
                        <!-- For version 1,2,3,4,6 -->
                        <!-- <div class="fl-currency">
                         <h3>Currency</h3>
                          <ul class="currencies_list">
                            <li><a href="#" title="EGP"> <strong>£</strong> Pound Sterling</a></li>
                            <li><a href="#" title="EUR"> <strong>€</strong> Euro</a></li>
                            <li><a href="#" title="USD"> <strong>$</strong> US Dollar</a></li>
                          </ul>
                        </div> -->
                        <!--fl-currency-->
                        <!-- END For version 1,2,3,4,6 -->
                      </div>
                       <h3>My Acount</h3>
                      <ul class="links">
                        <li><a href="login.php" title="My Account">Admin Login</a></li>
                        <li><a href="register.php" title="Register">Register</a></li>
                        </ul>
                    </div>
                  </div>
                </div>
                <!--links-->
              </div>
              <div class="fl-nav-menu">
                <nav>
                  <div class="mm-toggle-wrap">
                    <div class="mm-toggle"><i class="fa fa-bars"></i><span class="mm-label">Menu</span> </div>
                  </div>
                  <div class="nav-inner">
                    <!-- BEGIN NAV -->
                    <ul id="nav" class="hidden-xs">
                      <li class="active"> <a class="level-top" href="index.php"><span><img style="padding: 0px 5px 5px 5px;" src="images/home.png">Home</span></a></li>
                      <li class="level0 parent drop-menu"> <a class="level-top" href="showroom.php"><span><img style="padding: 0px 5px 5px 5px;" src="images/warehouse-with-boxes.png">Showroom</span></a>
                        <ul class="level1">
                          <li class="level1 first"><a href="country.php?id=<?php echo "Japan"; ?>"><span>Japan</span></a></li>
                          <li class="level1 nav-10-2"> <a href="country.php?id=<?php echo "Mozambique"; ?>"> <span>Mozambique</span> </a> </li>
                        </ul>
                      </li>
                      <li class="level0 parent drop-menu"> <a class="level-top" href="blog.php"><span><img style="padding: 0px 5px 5px 5px;" src="images/blog-comment-speech-bubble-symbol.png">Blog</span></a>
                        <ul class="level1">
                          <li class="level1 first"><a href="blog.php"><span>Blog List</span></a></li>
                          <li class="level1 nav-10-2"> <a href="blog-detail.php"> <span>Blog Detail</span> </a> </li>
                        </ul>
                      </li>
                      <li class="level0 parent drop-menu"> <a class="level-top" href="auction.php"><span><img style="padding: 0px 5px 5px 5px;" src="images/auction.png">Auction</span></a> 
                        <ul class="level1">
                          <li class="level1"> <a href="auction-services.php"> <span>Auction Services</span> </a> </li>
                          <li class="level1 nav-10-4"> <a href="auction-guide.php"> <span>Auction Guide</span> </a> </li>
                          <li class="level1 nav-10-4"> <a href="auction-schedule.php"> <span>Auction Schedule</span> </a> </li>
                        </ul>
                      </li>
                      <li class="level0 parent drop-menu"><a href="shipping.php"><span><img style="padding: 0px 5px 5px 5px;" src="images/customer.png">Services</span> </a>
                        <!--sub sub category-->
                        <ul class="level1">
                          <li class="level1"> <a href="shipping.php"> <span>Shipping</span> </a> </li>
                          <li class="level1 nav-10-4"> <a href="inspection services.php"> <span>Inspection Services</span> </a> </li>
                          <li class="level1 nav-10-4"> <a href="login.php"> <span>Sell Your Car</span> </a> </li>
                          <li class="level1 nav-10-4"> <a href="sales-terms.php"> <span>Sales and Terms</span> </a> </li>
                        </ul>
                      </li>
                      <li class="level0 parent drop-menu"> <a class="level-top" href="about-us.php"><span><img style="padding: 0px 5px 5px 5px;" src="images/about-us.png">About Us</span></a>
                        <ul class="level1">
                          <li class="level1 first"><a href="contact-us.php"><span>Contact Us</span></a></li>
                          <li class="level1 nav-10-2"> <a href="company-profile.php"> <span>Company Profile</span> </a> </li>
                          <li class="level1 nav-10-2"> <a href="bank-information.php"> <span>Bank Information</span> </a> </li>
                          <li class="level1 nav-10-2"> <a href="why-us.php"> <span>Why Choose Us</span> </a> </li>
                        </ul>
                      </li>
                      <li class="level0 parent drop-menu"> <a class="level-top"><span><img style="padding: 0px 5px 5px 5px;" src="images/earth.png">Select Country</span></a>
                        <ul class="lang" style="height: 300px; overflow-y: scroll;">
                            <li><a href="country.php?id=<?php echo "Bahamas"; ?>"> <img src="images/bahamas.png"> <span>Bahamas</span> </a></li>
                            <li><a href="country.php?id=<?php echo "Bangladesh"; ?>"> <img src="images/bangladesh.png"> <span>Bangladesh</span> </a></li>
                            <li><a href="country.php?id=<?php echo "Canada"; ?>"> <img src="images/canada.png"> <span>Canada</span> </a></li>
                            <li><a href="country.php?id=<?php echo "Chile"; ?>"> <img src="images/chile.png"> <span>Chile</span> </a></li>
                            <li><a href="country.php?id=<?php echo "Jamaica"; ?>"> <img src="images/jamaica.png"> <span>Jamaica</span> </a></li>
                            <li><a href="country.php?id=<?php echo "Kenya"; ?>"> <img src="images/kenya.png"> <span>Kenya</span> </a></li>
                            <li><a href="country.php?id=<?php echo "Malaysia"; ?>"> <img src="images/malaysia.png"> <span>Malaysia</span> </a></li>
                            <li><a href="country.php?id=<?php echo "Mozambique"; ?>"> <img src="images/mozambique.png"> <span>Mozambique</span> </a></li>
                            <li><a href="country.php?id=<?php echo "New-Zealand"; ?>"> <img src="images/new-zealand.png"> <span>New Zealand</span> </a></li>
                            <li><a href="country.php?id=<?php echo "Pakistan"; ?>"> <img src="images/pakistan.png"> <span>Pakistan</span> </a></li>
                            <li><a href="country.php?id=<?php echo "Russia"; ?>"> <img src="images/russia.png"> <span>Russia</span> </a></li>
                            <li><a href="country.php?id=<?php echo "South-Africa"; ?>"> <img src="images/south-africa.png"> <span>South Africa</span> </a></li>
                            <li><a href="country.php?id=<?php echo "Tanzania"; ?>"> <img src="images/tanzania.png"> <span>Tanzania</span> </a></li>
                            <li><a href="country.php?id=<?php echo "Trinidad"; ?>"> <img src="images/trinidad-and-tobago.png"> <span>Trinidad</span> </a></li>
                            <li><a href="country.php?id=<?php echo "Thailand"; ?>"> <img src="images/thailand.png"> <span>Thailand</span> </a></li>
                            <li><a href="country.php?id=<?php echo "Uganda"; ?>"> <img src="images/uganda.png"> <span>Uganda</span> </a></li>
                            <li><a href="country.php?id=<?php echo "UK"; ?>"> <img src="images/united-kingdom.png"> <span>UK</span> </a></li>
                            <li><a href="country.php?id=<?php echo "Zambia"; ?>"> <img src="images/zambia.png"> <span>Zambia</span> </a></li>
                            <li><a href="country.php?id=<?php echo "Zimbabwe"; ?>"> <img src="images/zimbabwe.png"> <span>Zimbabwe</span> </a></li>
                          </ul>
                      </li>
                    </ul>
                    <!--nav-->
                  </div>
                </nav>
              </div>
            </div>

            <!--row-->

          </div>
        </div>
      </div>
    </div>
  </header>
  <!--container-->

  <div class="content">
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="section-filter">
            <div class="b-filter__inner bg-grey">
              <h2>Find your right car</h2>
              <form class="b-filter" action="search.php" method="post">
                <div class="btn-group bootstrap-select" style="width: 100%;">
                  <input class="selectpicker" data-width="100%" tabindex="-98" name="make" list="makes" placeholder="select make" style="width: 100%;" id="make">
                    <datalist id="makes">
                    <?php
                    require 'data.php';
                    $makes = loadMakes();
                    foreach($makes as $make) {
                        echo "<option>".$make['make']."</option>";
                    }
                    ?>
                    </datalist>
                </div>
                <div class="btn-group bootstrap-select" style="width: 100%;">
                  <input class="selectpicker" data-width="100%" tabindex="-98" name="model" list="models" placeholder="select model" style="width: 100%;" id="model">
                    <datalist id="models">
                    </datalist>
                </div>
                <div class="btn-group bootstrap-select" style="width: 100%;">
                  <input class="selectpicker" data-width="100%" tabindex="-98" name="year" list="years" placeholder="select year" style="width: 100%;" id="year">
                    <datalist id="years">
                    </datalist>
                </div>
                <div class="btn-group bootstrap-select" style="width: 100%;">
                  <input class="selectpicker" data-width="100%" tabindex="-98" name="color" list="colors" placeholder="select color" style="width: 100%;" id="color">
                    <datalist id="colors">
                    </datalist>
                </div>
                <div class="btn-group bootstrap-select" style="width: 100%;">
                  <input class="selectpicker" data-width="100%" tabindex="-98" name="country" list="countries" placeholder="select country" style="width: 100%;" id="country">
                    <datalist id="countries">
                    </datalist>
                </div>
                <div class="ui-filter-slider">
                  <div class="sidebar-widget-body m-t-10">
                    <div class="price-range-holder"> <span class="min-max"> <span class="pull-left">$2000.00</span> <span class="pull-right">$80000.00</span> </span>
                      <input type="text" class="price-slider" value="" style="display:block" name="value">
                    </div>
                    <!-- /.price-range-holder -->
                  </div>
                </div>
                <div>
                  <div class="b-filter__btns">
                    <button class="btn btn-lg btn-primary">search vehicle</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- Slider -->
        <div class="home-slider5">
          <div id="thmg-slideshow" class="thmg-slideshow">
            <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container' >
              <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
                <ul>
                  <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slide-img4.jpg'><img src='images/slide-img4.jpg'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                    <div class="container">
                      <div class="content_slideshow">
                        <div class="row">
                          <div class="col-lg-3 col-sm-3 col-md-3 "> &nbsp; </div>
                          <div class="col-lg-9 col-sm-9 col-md-9">
                            <div class="info">
                              <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'><span></span> </div>
                              <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'><span style="font-weight:normal; display:block"></span> </div>
                              <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1450' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'></div>
                              <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='auction.php' class="buy-btn"></a> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slide-img2.jpg'><img src='images/slide-img2.jpg'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                    <div class="container">
                      <div class="content_slideshow">
                        <div class="row">
                          <div class="col-lg-3 col-sm-3 col-md-3">&nbsp;</div>
                          <div class="col-lg-9 col-sm-9 col-md-9">
                            <div class="info">
                              <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'><span></span> </div>
                              <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'><span style="font-weight:normal; display:block"></span>  </div>
                              <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1450' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'></div>
                              <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='auction.php' class="buy-btn"></a> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  
                  <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slide-img3.jpg'><img src='images/slide-img3.jpg'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                    <div class="container">
                      <div class="content_slideshow">
                        <div class="row">
                          <div class="col-lg-3 col-sm-3 col-md-3">&nbsp;</div>
                          <div class="col-lg-9 col-sm-9 col-md-9">
                            <div class="info">
                              <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'><span></span> </div>
                              <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'><span style="font-weight:normal; display:block"></span></div>
                              <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1450' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'></div>
                              <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='auction.php' class="buy-btn"></a> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  
                  <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slide-img1.jpg'><img src='images/slide-img1.jpg'  data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner"/>
                    <div class="container">
                      <div class="content_slideshow">
                        <div class="row">
                          <div class="col-lg-3 col-sm-3 col-md-3">&nbsp;</div>
                          <div class="col-lg-9 col-sm-9 col-md-9">
                            <div class="info">
                              <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'><span></span> </div>
                              <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'><span style="font-weight:normal; display:block"></span>  </div>
                              <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1450' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'></div>
                              <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='auction.php' class="buy-btn"></a> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  
                </ul>
                <div class="tp-bannertimer"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
     
    <div class="logo-brand container" style="padding-bottom: 0px !important;">
      <div class="brand-title" style="margin-bottom: 0px !important;">
        <h2 style="font-size: 18px !important; padding-top: 12px !important; padding-bottom: 12px !important; min-width: 200px !important;">Popular Brands</h2>
      </div>
      <div class="slider-items-products">
        <div id="brand-slider" class="product-flexslider hidden-buttons">
          <div class="owl-carousel slider-items slider-width-col6">
            <!-- Item -->
            <div class="item">
              <div class="logo-item"><a href="grid2.php?id=<?php echo "toyota"; ?>"><img src="images/brand1.png" alt="Image"></a></div>
            </div>
            <div class="item">
              <div class="logo-item"><a href="grid2.php?id=<?php echo "honda"; ?>"><img src="images/brand2.png" alt="Image"></a></div>
            </div>
            <!-- End Item -->
            <!-- Item -->
            <div class="item">
              <div class="logo-item"><a href="grid2.php?id=<?php echo "subaru"; ?>"><img src="images/brand3.png" alt="Image"></a></div>
            </div>
            <div class="item">
              <div class="logo-item"><a href="grid2.php?id=<?php echo "mitsubishi"; ?>"><img src="images/brand4.png" alt="Image"></a></div>
            </div>
            <!-- End Item -->
            <!-- Item -->
            <div class="item">
              <div class="logo-item"><a href="grid2.php?id=<?php echo "mazda"; ?>"><img src="images/brand5.png" alt="Image"></a></div>
            </div>
            <div class="item">
              <div class="logo-item"><a href="grid2.php?id=<?php echo "nissan"; ?>"><img src="images/brand6.png" alt="Image"></a></div>
            </div>
            <!-- End Item -->
            <!-- Item -->
            <div class="item">
              <div class="logo-item"><a href="grid2.php?id=<?php echo "suzuki"; ?>"><img src="images/brand7.png" alt="Image"></a></div>
            </div>
            <div class="item">
              <div class="logo-item"><a href="grid2.php?id=<?php echo "volkswagen"; ?>"><img src="images/brand8.png" alt="Image"></a></div>
            </div>
            <!-- End Item -->
            <!-- Item -->
            <div class="item">
              <div class="logo-item"><a href="grid2.php?id=<?php echo "mercedes"; ?>"><img src="images/brand9.png" alt="Image"></a></div>
            </div>
            <div class="item">
              <div class="logo-item"><a href="grid2.php?id=<?php echo "audi"; ?>"><img src="images/brand10.png" alt="Image"></a></div>
            </div>
            <!-- End Item -->
            <!-- Item -->
            <div class="item">
              <div class="logo-item"><a href="grid2.php?id=<?php echo "isuzu"; ?>"><img src="images/brand11.png" alt="Image"></a></div>
            </div>
            <div class="item">
              <div class="logo-item"><a href="grid2.php?id=<?php echo "bmw"; ?>"><img src="images/brand12.png" alt="Image"></a></div>
            </div>
            <!-- End Item -->

          </div>
        </div>
      </div>
    </div>
    
    <!-- best Pro Slider -->
    <section class="wow bounceInUp animated">
      <div class="best-pro slider-items-products container">
        <div class="new_title">
          <h2 class="heading" style="font-size: 18px !important; padding-top: 12px !important; padding-bottom: 12px !important; min-width: 200px !important;">Best Seller Cars</h2>
        </div>
        <div class="owl-buttons">
          <div class="owl-all">
            <a href="grid.php?id=<?php echo "best seller cars"; ?>"><button class="btn btn-lg btn-primary" style="margin-top: -18px;">view all</button></a>
          </div>
        </div>
        <div id="best-seller" class="product-flexslider hidden-buttons">
          <div class="owl-carousel slider-items slider-width-col4 products-grid">

            <?php
            $sql = "SELECT * from vehicle WHERE stocktype = 'best seller cars';";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            $sql = "SELECT * from images where vehicleid = ".$row['id']."";
            $img = $conn->query($sql);
            $src = $img->fetch_assoc();
            $source = $src['image'];
            error_reporting(0);

            ?>
            
            <!-- Item -->
            <div class="item" style="margin-top: 0px !important; height: auto;">
              <div class="item-inner">
                <div class="item-img">
                <div class="new-label new-top-left" style="background-color: <?php
                        if($row['availability'] == "available") {
                            echo "#58D68D";
                        } else if($row['availability'] == "sold") {
                            echo "#EC7063";
                        } else if($row['availability'] == "booked") {
                            echo "#5DADE2";
                        } else {
                            echo "#F4D03F";
                        }
                    ?>
                "><?php echo $row['availability']; ?></div>
                  <div class="item-img-info"><a href="accessories-detail.php?id=<?php echo $row['id']; ?>" title="Retis lapen casen" class="product-image"><img style="height: 150px" src="upload/<?php echo $source; ?>" alt="Retis lapen casen"></a>
                  </div>
                </div>
                <div class="item-info">
                  <div class="info-inner">
                    <div class="item-title"><a href="accessories-detail.php?id=<?php echo $row['id']; ?>" title="Retis lapen casen"><?php echo $row['make']; echo ' '; echo $row['model']; echo ' '; echo $row['year']; ?></a> </div>
                    <div class="item-content">
                      <div class="rating">
                        <div class="ratings">
                          <!-- <div class="rating-box">
                            <div class="rating" style="width:80%"></div>
                          </div> -->
                          <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                        </div>
                      </div>
                      <div class="item-price">
                        <div class="price-box"><span class="regular-price"><span class="price"><?php echo $row['pricefob']; ?></span> </span> </div>
                      </div>
                      <!-- <div class="other-info">
                        <div class="col-km"><i class="fa fa-tachometer"></i><?php echo $row['milage']; ?></div>
                        <div class="col-engine"><i class="fa fa-gear"></i><?php echo $row['transmission']; ?></div>
                        <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $row['year']; ?></div>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Item -->
            <?php
              }
            }
            ?>
            
          </div>
        </div>
      </div>
    </section>

    <!-- best Pro Slider -->
    <section class=" wow bounceInUp animated">
      <div class="best-pro slider-items-products container">
        <div class="new_title">
          <h2 class="heading" style="font-size: 18px !important; padding-top: 12px !important; padding-bottom: 12px !important; min-width: 200px !important;">Recently Added</h2>
        </div>
        <div class="owl-buttons">
          <div class="owl-all">
            <a href="grid.php?id=<?php echo "recently added"; ?>"><button class="btn btn-lg btn-primary" style="margin-top: -18px;">view all</button></a>
          </div>
        </div>
        <div id="best-seller" class="product-flexslider hidden-buttons">
          <div class="owl-carousel slider-items slider-width-col4 products-grid">

            <?php
            $sql = "SELECT * FROM `vehicle` WHERE stocktype = 'recently added';";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            $sql = "SELECT * from images where vehicleid = ".$row['id']."";
            $img = $conn->query($sql);
            $src = $img->fetch_assoc();
            $source = $src['image'];
            error_reporting(0);
            ?>
            
            <!-- Item -->
            <div class="item" style="margin-top: 0px !important; height: auto;">
              <div class="item-inner">
                <div class="item-img">
                <div class="new-label new-top-left" style="background-color: <?php
                        if($row['availability'] == "available") {
                            echo "#58D68D";
                        } else if($row['availability'] == "sold") {
                            echo "#EC7063";
                        } else if($row['availability'] == "booked") {
                            echo "#5DADE2";
                        } else {
                            echo "#F4D03F";
                        }
                    ?>
                "><?php echo $row['availability']; ?></div>
                  <div class="item-img-info"><a href="accessories-detail.php?id=<?php echo $row['id']; ?>" title="Retis lapen casen" class="product-image"><img style="height: 150px" src="upload/<?php echo $source; ?>" alt="Retis lapen casen"></a>
                  </div>
                </div>
                <div class="item-info">
                  <div class="info-inner">
                    <div class="item-title"><a href="accessories-detail.php?id=<?php echo $row['id']; ?>" title="Retis lapen casen"><?php echo $row['make']; echo ' '; echo $row['model']; echo ' '; echo $row['year']; ?></a> </div>
                    <div class="item-content">
                      <div class="rating">
                        <div class="ratings">
                          <!-- <div class="rating-box">
                            <div class="rating" style="width:80%"></div>
                          </div> -->
                          <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                        </div>
                      </div>
                      <div class="item-price">
                        <div class="price-box"><span class="regular-price"><span class="price"><?php echo $row['pricefob']; ?></span> </span> </div>
                      </div>
                      <!-- <div class="other-info">
                        <div class="col-km"><i class="fa fa-tachometer"></i><?php echo $row['milage']; ?></div>
                        <div class="col-engine"><i class="fa fa-gear"></i><?php echo $row['transmission']; ?></div>
                        <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $row['year']; ?></div>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Item -->
            <?php
              }
            }
            ?>
            
          </div>
        </div>
      </div>
    </section>
    
    <!-- best Pro Slider -->
    <section class="wow bounceInUp animated">
      <div class="best-pro slider-items-products container">
        <div class="new_title">
          <h2 class="heading" style="font-size: 18px !important; padding-top: 12px !important; padding-bottom: 12px !important; min-width: 200px !important;">Deals of the Week</h2>
        </div>
        <div class="owl-buttons">
          <div class="owl-all">
            <a href="grid.php?id=<?php echo "deals of the week"; ?>"><button class="btn btn-lg btn-primary" style="margin-top: -18px;">view all</button></a>
          </div>
        </div>
        <div id="best-seller" class="product-flexslider hidden-buttons">
          <div class="owl-carousel slider-items slider-width-col4 products-grid">
            
            <?php
            $sql = "SELECT * from vehicle WHERE stocktype = 'deals of the week';";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            $sql = "SELECT * from images where vehicleid = ".$row['id']."";
            $img = $conn->query($sql);
            $src = $img->fetch_assoc();
            $source = $src['image'];
            ?>
            <!-- SELECT * FROM `vehicle` as v JOIN `stock_type` as s WHERE v.id = s.vehicleid -->
            <!-- Item -->
            <div class="item" style="margin-top: 0px !important; height: auto;">
              <div class="item-inner">
                <div class="item-img">
                <div class="new-label new-top-left" style="background-color: <?php
                        if($row['availability'] == "available") {
                            echo "#58D68D";
                        } else if($row['availability'] == "sold") {
                            echo "#EC7063";
                        } else if($row['availability'] == "booked") {
                            echo "#5DADE2";
                        } else {
                            echo "#F4D03F";
                        }
                    ?>
                "><?php echo $row['availability']; ?></div>
                  <div class="item-img-info"><a href="accessories-detail.php?id=<?php echo $row['id']; ?>" title="Retis lapen casen" class="product-image"><img style="height: 150px" src="upload/<?php echo $source; ?>" alt="Retis lapen casen"></a>
                  </div>
                </div>
                <div class="item-info">
                  <div class="info-inner">
                    <div class="item-title"><a href="accessories-detail.php?id=<?php echo $row['id']; ?>" title="Retis lapen casen"><?php echo $row['make']; echo ' '; echo $row['model']; echo ' '; echo $row['year']; ?></a> </div>
                    <div class="item-content">
                      <div class="rating">
                        <div class="ratings">
                          <!--<div class="rating-box">
                            <div class="rating" style="width:80%"></div>
                          </div> -->
                          <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                        </div>
                      </div>
                      <div class="item-price">
                        <div class="price-box"><span class="regular-price"><span class="price"><?php echo $row['pricefob']; ?></span> </span> </div>
                      </div>
                      <!-- <div class="other-info">
                        <div class="col-km"><i class="fa fa-tachometer"></i><?php echo $row['milage']; ?></div>
                        <div class="col-engine"><i class="fa fa-gear"></i><?php echo $row['transmission']; ?></div>
                        <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $row['year']; ?></div>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Item -->
            <?php
              }
            }
            ?>
            
          </div>
        </div>
      </div>
    </section>

    <div id="top" style="margin-top: 50px !important;">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> <a href="grid1.php?id=<?php echo "commercial"; ?>" data-scroll-goto="1"> <img src="images/speakers.png" alt="promotion-banner1" style="height: 300px !important;"> </a> </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> <a href="grid1.php?id=<?php echo "domestic"; ?>" data-scroll-goto="2"> <img src="images/schedule.png" alt="promotion-banner2" style="height: 300px !important;"> </a> </div>
        </div>
      </div>
    </div>

  <!-- Home Lastest Blog Block -->
  <div class="latest-blog wow bounceInUp animated animated container">
    <!--exclude For version 6 -->
    <div class="blog-home-inner" style="padding-top: 0px !important; padding-bottom: 0px !important;">
      <div class="blog-title">
        <h2 style="font-size: 18px !important; padding-top: 12px !important; padding-bottom: 12px !important; min-width: 200px !important;">Latest Blog post</h2>
      </div>
      <!--For version 1,2,3,4,5,6,8 -->
      <div class="row">
          
          <?php
            $sql = "SELECT * FROM blogs order by id desc LIMIT 3";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    
                    $var = $row["date"];
                    $date = explode(" ", $var);
          ?>
          
        <div class="col-lg-4 col-md-4 col-xs-12 col-sm-4 blog-post">
          <div class="blog_inner">
            <div class="blog-img"> <a href="blog-detail.php?id=<?php echo $row['id']?>"> <img src="blogs/<?php echo $row['image']; ?>" alt="blog image"> </a> </div>
            <!--blog-img-->
            <div class="blog-info">
              <div class="post-date"> <span class="entry-date"> <?php echo $date[0]; ?></span> </div>
              <ul class="post-meta">
                <li><i class="fa fa-user"></i>Posted by <a href="#">admin</a> </li>
                <li><i class="fa fa-comments"></i><a href="#">4 comments</a> </li>
              </ul>
              <h3><a href="blog-detail.php?id=<?php echo $row['id']?>"><?php echo $row['title']; ?></a></h3>
            </div>
          </div>
          <!--blog_inner-->
        </div>
        <?php
            }
        }
        ?>
        
      </div>
    </div>
    <!--END For version 1,2,3,4,5,6,8 -->
    <!--exclude For version 6 -->
    <!--container-->
  </div>
  <!--Category slider Start-->
  <!-- <div class="top-cate">
    <div class="featured-pro container">
      <div>
        <div class="slider-items-products">
          <div class="new_title">
            <h2>browse by car type </h2>
          </div>
          <div id="top-categories" class="product-flexslider hidden-buttons">
            <div class="slider-items slider-width-col4 products-grid">
              <a href="grid3.php?id=<?php echo "sedan"; ?>"><div class="item">
                <div class="pro-img"><img src="images/car-type1.png" alt="Retis lapen casen">
                  <div class="pro-info">Sedans</div>
                </div>
              </div></a>
              <a href="grid3.php?id=<?php echo "truck"; ?>"><div class="item">
                <div class="pro-img"><img src="images/car-type2.png" alt="Retis lapen casen">
                  <div class="pro-info">Trucks</div>
                </div>
              </div></a>
              <a href="grid3.php?id=<?php echo "suv"; ?>"><div class="item">
                <div class="pro-img"><img src="images/car-type7.png" alt="Retis lapen casen">
                  <div class="pro-info">SUVS</div>
                </div>
              </div></a>
              <a href="grid3.php?id=<?php echo "convertible"; ?>"><div class="item">
                <div class="pro-img"><img src="images/car-type3.png" alt="Retis lapen casen">
                  <div class="pro-info">Convertibles</div>
                </div>
              </div></a>
              <a href="grid3.php?id=<?php echo "hybrid"; ?>"><div class="item">
                <div class="pro-img"><img src="images/car-type5.png" alt="Retis lapen casen">
                  <div class="pro-info">Hybrids</div>
                </div>
              </div></a>
              <a href="grid3.php?id=<?php echo "hatchback"; ?>"><div class="item">
                <div class="pro-img"><img src="images/car-type9.png" alt="Retis lapen casen">
                  <div class="pro-info">Hatchbacks</div>
                </div>
              </div></a>
              <a href="grid3.php?id=<?php echo "coupe"; ?>"><div class="item">
                <div class="pro-img"><img src="images/car-type6.png" alt="Retis lapen casen">
                  <div class="pro-info">Coupes</div>
                </div>
              </div></a>
              <a href="grid3.php?id=<?php echo "wagon"; ?>"><div class="item">
                <div class="pro-img"><img src="images/car-type8.png" alt="Retis lapen casen">
                  <div class="pro-info">Wagons</div>
                </div>
              </div></a>
              <a href="grid3.php?id=<?php echo "luxury"; ?>"><div class="item">
                <div class="pro-img"><img src="images/car-type10.png" alt="Retis lapen casen">
                  <div class="pro-info">Luxury</div>
                </div>
              </div></a>
              <a href="grid3.php?id=<?php echo "pickup"; ?>"><div class="item">
                <div class="pro-img"><img src="images/car-type12.png" alt="Retis lapen casen">
                  <div class="pro-info">Pickup</div>
                </div>
              </div></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <!--Category silder End-->
  
  <!-- <div class="container" style="padding: 0px 5px 5px 5px; margin-bottom: 15px;">
      <div class="row">
          <div class="col-lg-3">
              <img class="adds" src="adds/l1.jpeg" style="width: 100%; height: 250px; margin: 1px;">
          </div>
          <div class="col-lg-5">
              <img class="adds" src="adds/l2.jpeg" style="width: 100%; height: 250px; margin: 1px;">
          </div>
          <div class="col-lg-4">
              <img class="adds" src="adds/5.JPG" style="width: 100%; height: 250px; margin: 1px;">
          </div>
      </div>
  </div> -->
  
  <!--<div class="container" style="margin-bottom: 50px;">
        <div class="row">
            <div class="col-lg-6" style="padding: 5px 5px 5px 5px;">
                <a href="about-us.php"><img class="adds" src="adds/w4.jpeg" style="width: 100%; height: 150px;"></a>    
            </div>
            <div class="col-lg-6" style="padding: 5px 5px 5px 5px;">
                <a href="auction-services.php"><img class="adds" src="adds/w2.jpeg" style="width: 100%; height: 150px;">
            </div>
        </div>
    </div> -->
    
    <div class="container" style="margin-bottom: 50px;">
        <div class="row">
            <div class="col-lg-6" style="padding: 5px 5px 5px 5px;">
                <a href="auction.php"><img class="adds" src="adds/w3.jpeg" style="width: 100%; height: 150px;"></a>    
            </div>
            <div class="col-lg-6" style="padding: 5px 5px 5px 5px;">
                <a href="contact-us.php"><img class="adds" src="adds/w1.jpeg" style="width: 100%; height: 150px;"></a>
            </div>
        </div>
    </div>

  <!-- Logo Brand Block -->
  <div class="brand-logo wow bounceInUp animated">
    <div class="container">
      <div class="row">
        <div class="home-banner col-lg-2 hidden-md col-xs-12 hidden-sm"> </div>
        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
          <div class="testimonials-section" style="margin: 0px !important; padding: 0px !important;">
            <div class="offer-slider parallax parallax-2">
              <ul class="bxslider">
                <li>
                  <div class="avatar"><img style="height: 150px; width: 150px;" src="images/elon1.png" alt="Image"></div>
                  <div class="testimonials">Bought Shinkyowa Japan Cars for second time as so pleased with first experience. Again very helpful and recommend wholeheartedly.</div>
                  <div class="clients_author">Smith John <span>Happy Customer</span> </div>
                </li>
                <li>
                  <div class="avatar"><img style="height: 150px; width: 150px;" src="images/elon1.png" alt="Image"></div>
                  <div class="testimonials">Excellent car dealer. Reliable and trustworthy. Would not hesitate to buy again from here and will recommend to friends and family.</div>
                  <div class="clients_author">Sahara Anderson <span>Happy Customer</span> </div>
                </li>
                <li>
                  <div class="avatar"><img style="height: 150px; width: 150px;" src="images/elon1.png" alt="Image"></div>
                  <div class="testimonials">We would encourage anyone seeking to buy a used quality car to go to Shinkyowa Japan. We experienced excellent customer service and professionalism.</div>
                  <div class="clients_author">Stephen Smith <span>Happy Customer</span> </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


  <!-- For version 1,2,3,4,6 -->

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

    <div class="popup1" style="display: block;">
      <div class="newsletter-sign-box">
        <h3>Newsletter Sign up</h3>
         <img src="images/close-icon.png" alt="close" class="x" onClick="HideMe();">
        <div class="newsletter">
          <form method="post" id="popup-newsletter" name="popup-newsletter" class="email-form">
            <h4>sign up for our exclusive email list and be the first to hear of special offers.</h4>
            <div class="newsletter-form">
              <div class="input-box">
                <input type="text" name="email" id="newsletter2" title="Sign up for our newsletter" placeholder="Enter your email address" class="input-text required-entry validate-email">
                <button type="submit" title="Subscribe" class="button subscribe"><span>Subscribe</span></button>
              </div>
              <!--input-box-->
            </div>
            <!--newsletter-form-->
            <label class="subscribe-bottom">
              <input type="checkbox" name="notshowpopup" id="notshowpopup">
              Don’t show this popup again</label>
          </form>
        </div>
    <!--newsletter-->

    </div>
  <!--newsletter-sign-box-->
    </div>
    <div id="fade" style="display: block;"></div>

<!-- JavaScript -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-slider.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="js/parallax.js"></script>
<script type="text/javascript" src="js/revslider.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script>
<script src="js/countdown.js"></script>
<script>
        jQuery(document).ready(function(){
            jQuery('#rev_slider_4').show().revolution({
                dottedOverlay: 'none',
                delay: 5000,
                startwidth: 1170,
	            startheight:650,

                hideThumbs: 200,
                thumbWidth: 200,
                thumbHeight: 50,
                thumbAmount: 2,

                navigationType: 'thumb',
                navigationArrows: 'solo',
                navigationStyle: 'round',

                touchenabled: 'on',
                onHoverStop: 'on',

                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,

                spinner: 'spinner0',
                keyboardNavigation: 'off',

                navigationHAlign: 'center',
                navigationVAlign: 'bottom',
                navigationHOffset: 0,
                navigationVOffset: 20,

                soloArrowLeftHalign: 'left',
                soloArrowLeftValign: 'center',
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,

                soloArrowRightHalign: 'right',
                soloArrowRightValign: 'center',
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,

                shadow: 0,
                fullWidth: 'on',
                fullScreen: 'off',

                stopLoop: 'off',
                stopAfterLoops: -1,
                stopAtSlide: -1,

                shuffle: 'off',

                autoHeight: 'off',
                forceFullWidth: 'on',
                fullScreenAlignForce: 'off',
                minFullScreenHeight: 0,
                hideNavDelayOnMobile: 1500,

                hideThumbsOnMobile: 'off',
                hideBulletsOnMobile: 'off',
                hideArrowsOnMobile: 'off',
                hideThumbsUnderResolution: 0,

                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ''
            });
        });
        </script>
<script type="text/javascript">
    function HideMe()
    {
        jQuery('.popup1').hide();
        jQuery('#fade').hide();
    }
</script>
<script>
      var dthen1 = new Date("12/25/17 11:59:00 PM");
      start = "08/04/15 03:02:11 AM";
      start_date = Date.parse(start);
      var dnow1 = new Date(start_date);
      if (CountStepper > 0)
      ddiff = new Date((dnow1) - (dthen1));
      else
      ddiff = new Date((dthen1) - (dnow1));
      gsecs1 = Math.floor(ddiff.valueOf() / 1000);

      var iid1 = "countbox_1";
      CountBack_slider(gsecs1, "countbox_1", 1);
</script>
</body>
</html>