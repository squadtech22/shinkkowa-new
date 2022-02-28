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

  $priceChange = array(
    "isuzu forward 2005" => 15000,
    "isuzu forward 2005" => 14000,

  );
?>

<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

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

<title>Vehicle Listing</title>
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
</head>
<body>
<div id="page">
  <?php include("header.php"); ?>
  
<div class="page-heading" style="background-image: url(countries/Japan.jpg); opacity: 1; background-repeat: no-repeat; background-size: 100% 100%;">
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a href="index.php" title="Go to Home Page">Home</a> <span>&rsaquo; </span> </li>
            <?php if($stockType == "commercial") { ?>
            <li class="category1599"> <a href="#" title="">Commercial Vehicles</a> <span>&rsaquo; </span> </li>
            <?php } ?>
            <?php if($stockType == "domestic") { ?>
            <li class="category1599"> <a href="#" title="">Brand New Cars</a> <span>&rsaquo; </span> </li>
            <?php } ?>
          </ul>
        </div>
        <!--col-xs-12--> 
      </div>
      <!--row--> 
    </div>
    <!--container--> 
  </div>
  <div class="page-title">
    <h2>PRODUCT LISTING</h2>
  </div>
</div>

<!--breadcrumbs--> 
<!-- BEGIN Main Container col2-left -->
<section class="main-container col2-left-layout bounceInUp animated"> 
  <!-- For version 1, 2, 3, 8 --> 
  <!-- For version 1, 2, 3 -->
  <div class="container">
    <div class="row">
      <div class="col-main col-sm-9 col-sm-push-3 product-grid">
      <div class="pro-coloumn">
        <article class="col-main">
          <div class="toolbar">
            <div class="sorter">
              <div class="view-mode"><a href="grid1.php?id=<?php echo $stockType; ?>" title="List" class="button-grid">&nbsp;</a> <span title="list" class="button button-active button-list">&nbsp;</span> </div>
            </div>
            <div id="sort-by" style="display: none;">
              <label class="left">Sort By: </label>
              <ul>
                <li><a href="#">Position<span class="right-arrow"></span></a>
                  <ul>
                    <li><a href="#">Name</a></li>
                    <li><a href="#">Price</a></li>
                    <li><a href="#">Position</a></li>
                  </ul>
                </li>
              </ul>
              <a class="button-asc left" href="#" title="Set Descending Direction"><span class="top_arrow"></span></a> </div>
            <div class="pager">
              <div id="limiter" style="display: none;">
                <label>View: </label>
                <ul>
                  <li><a href="#">15<span class="right-arrow"></span></a>
                    <ul>
                      <li><a href="#">20</a></li>
                      <li><a href="#">30</a></li>
                      <li><a href="#">35</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="pages" style="display: none;">
                <label>Page:</label>
                <ul class="pagination">
                  <li><a href="#">&laquo;</a></li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="category-products">
        <ol class="products-list" id="products-list">
        <?php
            
            if($stockType == "commercial") {
                $sql = "SELECT * from vehicle as v join vehicle_details as d join stock_type as s where v.id = d.vehicleid and v.id = s.vehicleid and INSTR(s.type, '$stockType') > 0";
            } else {
                $sql = "SELECT * from vehicle as v join vehicle_details as d join stock_type as s where v.id = d.vehicleid and v.id = s.vehicleid and s.enabled = 1";
            }
            
            
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            $sql = "SELECT * from images where id = ".$row['id']."";
            $img = $conn->query($sql);
            $src = $img->fetch_assoc();
            $source = $src['image'];
            
        ?>
          <li class="item first">
            <div class="product-image"> <a href="accessories-detail.php?id=<?php echo $row['id']; ?>"> <img class="small-image" style="height: 200px;" src="upload/<?php echo $source; ?>"> </a> </div>
            <div class="product-shop">
              <h2 class="product-name"><a href="accessories-detail.php?id=<?php echo $row['id']; ?>"><?php echo $row['make']; echo ' '; echo $row['model']; echo ' '; echo $row['year']; ?></a></h2>
              <div class="ratings">
                <div class="rating-box">
                  <div style="width:50%" class="rating"></div>
                </div>
                <p class="rating-links"> <a href="#/review/product/list/id/167/category/35/">1 Review(s)</a> <span class="separator">|</span> <a href="#review-form">Add Your Review</a> </p>
              </div>
              <div class="desc std">
                  <ul class="shipping-pro">
                    <li>Engine Power: <?php echo $row['carcc'] ?></li>
                    <li>Transmission: <?php echo $row['transmission'] ?></li>
                    <li>Fuel Type: <?php echo $row['fueltype'] ?></li>
                  </ul>
                  <br><br>
                <a class="link-learn" title="" href="accessories-detail.php?id=<?php echo $row['chasisno']; ?>">Learn More</a> </p>
              </div>
              <div class="price-box">
                <p class="old-price"> <span class="price-label"></span> <span id="old-price-212" class="price"> <?php echo $row['pricefob']; ?> </span> </p>
                <!-- <p class="special-price"> <span class="price-label"></span> <span id="product-price-212" class="price"> <?php //echo  ?> </span> </p> -->
              </div>
              <div class="actions">
                <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="#"><span>Add to Compare</span></a> </span> </div>
            </div>
          </li>
          <?php
              }
            }
          ?>
        </ol>
          </div>
          <div class="toolbar bottom" style="display: none;">
            
            <div id="sort-by">
              <label class="left">Sort By: </label>
              <ul>
                <li><a href="#">Position<span class="right-arrow"></span></a>
                  <ul>
                    <li><a href="#">Name</a></li>
                    <li><a href="#">Price</a></li>
                    <li><a href="#">Position</a></li>
                  </ul>
                </li>
              </ul>
              <a class="button-asc left" href="#" title="Set Descending Direction"><span class="top_arrow"></span></a> </div>
            <div class="pager">
              <div id="limiter">
                <label>View: </label>
                <ul>
                  <li><a href="#">15<span class="right-arrow"></span></a>
                    <ul>
                      <li><a href="#">20</a></li>
                      <li><a href="#">30</a></li>
                      <li><a href="#">35</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="pages">
                <label>Page:</label>
                <ul class="pagination">
                  <li><a href="#">&laquo;</a></li>
                  <li class="active"><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li><a href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
          </div>
          
        </article>
        </div>
        <!--	///*///======    End article  ========= //*/// --> 
      </div>
      <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9 wow bounceInUp animated"> 
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
      
      </aside>
      <!--col-right sidebar--> 
    </div>
    <!--row--> 
  </div>
  <!--container--> 
</section>
<!--main-container col2-left-layout--> 

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

</body>
</html>
