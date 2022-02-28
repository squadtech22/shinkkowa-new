<?php
$servername = "localhost";
$username = "shinkyowa";
$password = "h6Wlb@{RKqz(";
$dbname = "shinkyowa";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];

$sql = "SELECT * from vehicle where id = '$id'";
$result = $conn->query($sql);
$vehicle = $result->fetch_assoc();
$sql = "SELECT * from vehicle_details where vehicleid = ".$vehicle['id']."";
$result = $conn->query($sql);
$detail = $result->fetch_assoc();

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $offer = $_POST['offer'];
    $country = $_POST['country'];
    $carname = $_POST['carname'];
    $vehicleid = $_POST['vehicleid'];
    
    $to = "info@shinkyowaint.com, mannanbhatti@hotmail.com";
    $subject = "Car Offer for $carname";
    
    $message = "
    <html>
        <head>
            <title>Car Offer for $carname</title>
        </head>
        <body>
            <h3 style='color: #50B2FC'>
                Chasis No: $carchasis
                <br><br>
            </h3>
            
            <h1>Personal Details: <br></h1>
            
            <h3>Name: $name <br></h3>
            <h3>Email: $email <br></h3>
            <h3>Phone: $phone <br></h3>
            <h3>Offer: $offer <br></h3>
            <h3>Country: $country <br></h3>
        </body>
    </html>
    ";
    
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    
    if(mail($to, $subject, $message, $headers)) {
        echo "<script> alert('Offer sent successfully.'); </script>";
    }
    
    $sql = "INSERT INTO offers(vehicleid, name, email, phone, offer, country) VALUES ('$vehicleid', '$name', '$email', '$phone', '$offer', '$country')";
    $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Car Detail</title>
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
            <li class="category1599"> <a style="cursor: not-allowed; pointer-events: none;">New Car</a> <span>&rsaquo; </span> </li>
            <li class="category1600"> <a style="cursor: not-allowed; pointer-events: none;"><?php echo $vehicle['make'] ?></a> <span>&rsaquo; </span> </li>
            <li class="category1601"> <strong style="cursor: not-allowed; pointer-events: none;"><?php echo $vehicle['model'] ?></strong> </li>
            </ul>
          </div>
          <!--col-xs-12--> 
        </div>
        <!--row--> 
      </div>
      <!--container--> 
    </div>
    <div class="page-title">
      <h2>PRODUCT Detail</h2>
    </div>
  </div>
  
  <!-- BEGIN Main Container -->
  <div class="main-container col1-layout wow bounceInUp animated">
    <div class="main">
      <div class="col-main"> 
        <!-- Endif Next Previous Product -->
        <div class="product-view wow bounceInUp animated" itemscope="" itemtype="http://schema.org/Product" itemid="#product_base">
          <div id="messages_product_view"></div>
          <!--product-next-prev-->
          <div class="product-essential container-fluid" style="max-width: 1500px;">
            <div class="row">
              <?php
              $sql = "SELECT * from images where vehicleid = ".$vehicle['id']."";
              $result = $conn->query($sql);
              $row = $result->fetch_assoc();
              $source = $row['image'];
              ?>
              <form action="#" method="post" id="product_addtocart_form">
                <!--End For version 1, 2, 6 --> 
                <!-- For version 3 -->
                <div class="product-img-box col-lg-7 col-sm-7 col-xs-12">
                  <div class="new-label new-top-left">Hot</div>
                  <div class="sale-label sale-top-left">-15%</div>
                  <div id="product-image" class="product-image">
                    <div class="owl-carousel product-full">
                        <?php
                        mysqli_data_seek($result,0);
                        while($row = $result->fetch_assoc()) {
                        $source = $row['image'];
                        ?>
                        <img class="item" src="upload/<?php echo $source; ?>" alt="product-image"/>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="more-views">
                        <div class="slider-items-products">
                          <div id="gallery_01" class="product-flexslider hidden-buttons product-img-thumb">
                            <div class="owl-carousel slider-items slider-width-col4 block-content">
                              <?php
                              mysqli_data_seek($result,0);
                              while($row = $result->fetch_assoc()) {
                              $source = $row['image'];
                              ?>
                              <div class="more-views-items"> <a href="#" data-image="upload/<?php echo $source; ?>" data-zoom-image="upload/<?php echo $source; ?>"> <img style="height: 100px" id="product-zoom0"  src="upload/<?php echo $source; ?>" alt="product-image"/> </a></div>
                              <?php
                              }
                              ?>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                  <!-- end: more-images --> 
                   <div class="toll-free"><a href="tel:+819023791308"><i class="fa fa-phone"></i> +81 90-2379-1308 </a></div>
                  <div class="ask-question"><a href="#" onClick="ShowMe();"><i class="fa fa-question"></i>Make Your Offer</a></div>
                </div>
                <!--End For version 1,2,6--> 
                <!-- For version 3 -->
                <div class="product-shop col-lg-5 col-sm-5 col-xs-12">
                  <div class="brand"><?php echo $vehicle['make'] ?></div>
                    <div class="product-name">
                      <h1><?php echo $vehicle['make']; echo ' '; echo $vehicle['model']; echo ' '; echo $vehicle['year']; ?></h1>
                    </div>
                  <div class="ratings">
                    <div class="rating-box">
                      <div style="width:60%" class="rating"></div>
                    </div>
                    <p class="rating-links"> <a href="#">1 Review</a> <span class="separator">|</span> <a href="#">Add Your Review</a> </p>
                  </div>
                  <div class="price-block">
                    <div class="price-box">
                     
                      <p class="special-price"> <span class="price-label">Special Price</span> <span id="product-price-48" class="price"> Fob(Japan): <?php echo $vehicle['pricefob']; ?></span> </p>
                      
                    </div>
                  </div>
                 <?php
                 $sql = "SELECT * from stock_country where vehicleid = ".$vehicle['id']."";
                 $result = $conn->query($sql);
                 $stock = $result->fetch_assoc();
                 ?>
                  <div class="spec-row" id="summarySpecs">
                  <h2>Specifications</h2>
                  <h4 style="display: inline-block; margin-left: 50px; font-weight: bold;">Stock Id: <?php echo $stock['stockid']; ?></h4>
                  
                     <table width="100%">
                      <tbody>
                       <tr>
                          <td class="label-spec"> Make <span class="coln">:</span></td>
                          <td class="value-spec"> <?php echo $vehicle['make']; ?> </td>
                        </tr>
                        <tr>
                          <td class="label-spec"> Model <span class="coln">:</span></td>
                          <td class="value-spec"> <?php echo $vehicle['model']; ?> </td>
                        </tr>
                        <tr class='odd'>
                          <td class="label-spec"> Year <span class="coln">:</span></td>
                          <td class="value-spec"> <?php echo $vehicle['year']; ?> </td>
                        </tr>
                        <tr class='odd'>
                          <td class="label-spec"> Chassis No <span class="coln">:</span></td>
                          <td class="value-spec"> <?php echo $vehicle['chasisno']; ?> </td>
                        </tr>
                         <tr>
                          <td class="label-spec"> Engine CC <span class="coln">:</span></td>
                          <td class="value-spec"> <?php echo $detail['carcc']; ?> </td>
                        </tr>
                        <tr>
                          <td class="label-spec"> Fuel Type <span class="coln">:</span></td>
                          <td class="value-spec"> <?php echo $detail['fueltype']; ?> </td>
                        </tr>
                        <tr class='odd'>
                          <td class="label-spec"> Transmission <span class="coln">:</span></td>
                          <td class="value-spec"> <?php echo $detail['transmission']; ?> </td>
                        </tr>
                        <tr class='odd'>
                          <td class="label-spec"> Color <span class="coln">:</span></td>
                          <td class="value-spec"> <?php echo $vehicle['color']; ?> </td>
                        </tr>
                        <tr>
                          <td class="label-spec"> Vehicle Type <span class="coln">:</span></td>
                          <td class="value-spec"> <?php echo $detail['vehicletype']; ?> </td>
                        </tr>
                        <tr>
                          <td class="label-spec"> Milage <span class="coln">:</span></td>
                          <td class="value-spec"> <?php echo $vehicle['milage']; ?> </td>
                        </tr>
                        <tr class='odd'>
                          <td class="label-spec"> Steering <span class="coln">:</span></td>
                          <td class="value-spec"> <?php echo $vehicle['steering']; ?> </td>
                        </tr>
                        <tr class='odd'>
                          <td class="label-spec"> Drive <span class="coln">:</span></td>
                          <td class="value-spec"> <?php echo $vehicle['drive4w']; ?> </td>
                        </tr>
                        <tr>
                          <td class="label-spec"> Grade <span class="coln">:</span></td>
                          <td class="value-spec"> <?php echo $vehicle['grade']; ?> </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- <div class="email-addto-box">
                    <ul class="add-to-links">
                      <li> <a class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a></li>
                      <li><a class="link-compare" href="compare.html"><span>Add to Compare</span></a></li>
                    </ul>
                    <p class="email-friend"><a href="#" class=""><span>Email to a Friend</span></a></p>
                  </div> -->
                  <div class="social">
                    <ul class="link">
                      <li class="fb"><a href="#"></a></li>
                      <li class="tw"><a href="#"></a></li>
                      <li class="googleplus"><a href="#"></a></li>
                      <li class="rss"><a href="#"></a></li>
                      <li class="pintrest"><a href="#"></a></li>
                      <li class="linkedin"><a href="#"></a></li>
                      <li class="youtube"><a href="#"></a></li>
                    </ul>
                  </div>
                  <ul class="shipping-pro">
                    <li>Engine Power: <?php echo $detail['carcc'] ?></li>
                    <li>Transmission: <?php echo $detail['transmission'] ?></li>
                    <li>Fuel Type: <?php echo $detail['fueltype'] ?></li>
                  </ul>
                </div>
                <!--product-shop--> 
                <!--Detail page static block for version 3-->
              </form>
            </div>
          </div>
          <!--product-essential-->
          <div class="product-collateral container">
            <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
              <li class="active"> <a href="#product_tabs_description" data-toggle="tab"> Vehicle Overview </a> </li>
             <li> <a href="#product_tabs_custom" data-toggle="tab">Accessories</a> </li>
            </ul>
            <div id="productTabContent" class="tab-content">
              <div class="tab-pane fade in active" id="product_tabs_description">
                <div class="std">
                  <p><span style="font-weight: bold;">Commnets: </span><?php echo $detail['comments']; ?></p>
                </div>
              </div>
              <div class="tab-pane fade" id="product_tabs_tags">
                <div class="spec-row" id="summarySpecs">
                    <table width="100%">
                      <tbody>
                        <td class="label-spec"> Mileage <span class="coln">:</span></td>
                          <td class="value-spec"> <?php echo $vehicle['milage']; ?> </td>
                        </tr>
                        <tr>
                          <td class="label-spec"> Engine Displ. <span class="coln">:</span></td>
                          <td class="value-spec"> <?php echo $detail['carcc']; ?> </td>
                        </tr>
                        <tr class="odd">
                          <td class="label-spec"> Transmission <span class="coln">:</span></td>
                          <td class="value-spec"> <?php echo $detail['transmission']; ?> </td>
                        </tr>
                        <tr class="odd">
                          <td class="label-spec"> Fuel Type <span class="coln">:</span></td>
                          <td class="value-spec"> <?php echo $detail['fueltype']; ?> </td>
                        </tr>
                        <tr>
                          <td class="label-spec"> Model <span class="coln">:</span></td>
                          <td class="value-spec"> <?php echo $vehicle['year']; ?> </td>
                        </tr>
                        <tr>
                          <td class="label-spec"> Power Windows <span class="coln">:</span></td>
                          <td class="value-spec"> <?php echo $detail['powerwindows']; ?> </td>
                        </tr>
                        <tr class="odd">
                          <td class="label-spec"> Airbags <span class="coln">:</span></td>
                          <td class="value-spec"> <?php echo $detail['airbags']; ?> </td>
                        </tr>
                         <tr class="odd">
                          <td class="label-spec"> ABS <span class="coln">:</span></td>
                          <td class="value-spec"> <?php echo $detail['abs']; ?> </td>
                        </tr>
                        <tr>
                          <td class="label-spec"> Central Locking <span class="coln">:</span></td>
                          <td class="value-spec"> <?php echo $detail['centrallocking']; ?> </td>
                        </tr>
                        <tr>
                          <td class="label-spec"> Power Stearing <span class="coln">:</span></td>
                          <td class="value-spec"> <?php echo $detail['powerstearing']; ?> </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
              </div>
              <div class="tab-pane fade" id="reviews_tabs">
                <div class="woocommerce-Reviews">
                  <div>
                    <h2 class="woocommerce-Reviews-title">2 reviews for <span>Bacca Bucci Men's Running Shoes</span></h2>
                    <ol class="commentlist">
                      <li class="comment">
                        <div> <img alt="" src="images/member1.png" class="avatar avatar-60 photo">
                          <div class="comment-text">
                            <div class="ratings">
                              <div class="rating-box">
                                <div style="width:100%" class="rating"></div>
                              </div>
                            </div>
                            <p class="meta"> <strong>John Doe</strong> <span>–</span> April 19, 2018 </p>
                            <div class="description">
                              <p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla quis lorem ut libero malesuada feugiat. Proin eget tortor risus. Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                              <p>Donec sollicitudin molestie malesuada. Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</p>
                            </div>
                          </div>
                        </div>
                      </li>
                      <!-- #comment-## -->
                      <li class="comment">
                        <div> <img alt="" src="images/member2.png" class="avatar avatar-60 photo">
                          <div class="comment-text">
                            <div class="ratings">
                              <div class="rating-box">
                                <div style="width:100%" class="rating"></div>
                              </div>
                            </div>
                            <p class="meta"> <strong>Stephen Smith</strong> <span>–</span> June 02, 2018 </p>
                            <div class="description">
                              <p>Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                          </div>
                        </div>
                      </li>
                      <!-- #comment-## -->
                    </ol>
                  </div>
                  <div>
                    <div>
                      <div class="comment-respond"> <span class="comment-reply-title">Add a review </span>
                        <form action="#" method="post" class="comment-form" novalidate>
                          <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
                          <div class="comment-form-rating">
                            <label id="rating">Your rating</label>
                            <p class="stars"> <span> <a class="star-1" href="#">1</a> <a class="star-2" href="#">2</a> <a class="star-3" href="#">3</a> <a class="star-4" href="#">4</a> <a class="star-5" href="#">5</a> </span> </p>
                          </div>
                          <p class="comment-form-comment">
                            <label>Your review <span class="required">*</span></label>
                            <textarea id="comment" name="comment" cols="45" rows="8" required></textarea>
                          </p>
                          <p class="comment-form-author">
                            <label for="author">Name <span class="required">*</span></label>
                            <input id="author" name="author" type="text" value="" size="30" required>
                          </p>
                          <p class="comment-form-email">
                            <label for="email">Email <span class="required">*</span></label>
                            <input id="email" name="email" type="email" value="" size="30" required>
                          </p>
                          <p class="form-submit">
                            <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                          </p>
                        </form>
                      </div>
                      <!-- #respond --> 
                    </div>
                  </div>
                  <div class="clear"></div>
                </div>
              </div>
              <div class="tab-pane fade" id="product_tabs_custom">
                <div class="spec-row" id="summarySpecs">
                    <table width="100%">
                      <tbody>
                        <tr>
                          <td class="label-spec"> P/s <span class="coln">:</span></td>
                          <?php
                          $ps = $detail['powerstearing'];
                          if($ps == "yes" || $ps == "Yes") {
                          ?>
                          <td class="value-spec"> <i class="fa fa-check-circle"></i> </td>
                          <?php
                          }
                          ?>
                          <?php
                          if($ps == "no" || $ps == "No" || $ps == "") {
                          ?>
                          <td class="value-spec"> <i class="fa fa-check-circle" style="color: #D7DBDD;"></i> </td>
                          <?php
                          }
                          ?>
                        </tr>
                        <tr>
                          <td class="label-spec"> P/w <span class="coln">:</span></td>
                          <?php
                          $ps = $detail['powerwindows'];
                          if($ps == "yes" || $ps == "Yes") {
                          ?>
                          <td class="value-spec"> <i class="fa fa-check-circle"></i> </td>
                          <?php
                          }
                          ?>
                          <?php
                          if($ps == "no" || $ps == "No" || $ps == "") {
                          ?>
                          <td class="value-spec"> <i class="fa fa-check-circle" style="color: #D7DBDD;"></i> </td>
                          <?php
                          }
                          ?>
                        </tr>
                        <tr class="odd">
                          <td class="label-spec"> Airbags <span class="coln">:</span></td>
                          <?php
                          $ps = $detail['airbags'];
                          if($ps == "yes" || $ps == "Yes") {
                          ?>
                          <td class="value-spec"> <i class="fa fa-check-circle"></i> </td>
                          <?php
                          }
                          ?>
                          <?php
                          if($ps == "no" || $ps == "No" || $ps == "") {
                          ?>
                          <td class="value-spec"> <i class="fa fa-check-circle" style="color: #D7DBDD;"></i> </td>
                          <?php
                          }
                          ?>
                        </tr>
                        <tr class="odd">
                          <td class="label-spec"> Abs <span class="coln">:</span></td>
                          <?php
                          $ps = $detail['abs'];
                          if($ps == "yes" || $ps == "Yes") {
                          ?>
                          <td class="value-spec"> <i class="fa fa-check-circle"></i> </td>
                          <?php
                          }
                          ?>
                          <?php
                          if($ps == "no" || $ps == "No" || $ps == "") {
                          ?>
                          <td class="value-spec"> <i class="fa fa-check-circle" style="color: #D7DBDD;"></i> </td>
                          <?php
                          }
                          ?>
                        </tr>
                        <tr>
                          <td class="label-spec"> A/w <span class="coln">:</span></td>
                          <?php
                          $ps = $detail['autowing'];
                          if($ps == "yes" || $ps == "Yes") {
                          ?>
                          <td class="value-spec"> <i class="fa fa-check-circle"></i> </td>
                          <?php
                          }
                          ?>
                          <?php
                          if($ps == "no" || $ps == "No" || $ps == "") {
                          ?>
                          <td class="value-spec"> <i class="fa fa-check-circle" style="color: #D7DBDD;"></i> </td>
                          <?php
                          }
                          ?>
                        </tr>
                        <tr>
                          <td class="label-spec"> S/r <span class="coln">:</span></td>
                          <?php
                          $ps = $detail['sunroof'];
                          if($ps == "yes" || $ps == "Yes") {
                          ?>
                          <td class="value-spec"> <i class="fa fa-check-circle"></i> </td>
                          <?php
                          }
                          ?>
                          <?php
                          if($ps == "no" || $ps == "No" || $ps == "") {
                          ?>
                          <td class="value-spec"> <i class="fa fa-check-circle" style="color: #D7DBDD;"></i> </td>
                          <?php
                          }
                          ?>
                        </tr>
                        <tr class="odd">
                          <td class="label-spec"> Tv nev <span class="coln">:</span></td>
                          <?php
                          $ps = $detail['tvnev'];
                          if($ps == "yes" || $ps == "Yes") {
                          ?>
                          <td class="value-spec"> <i class="fa fa-check-circle"></i> </td>
                          <?php
                          }
                          ?>
                          <?php
                          if($ps == "no" || $ps == "No" || $ps == "") {
                          ?>
                          <td class="value-spec"> <i class="fa fa-check-circle" style="color: #D7DBDD;"></i> </td>
                          <?php
                          }
                          ?>
                        </tr>
                         <tr class="odd">
                          <td class="label-spec"> Cool box <span class="coln">:</span></td>
                          <?php
                          $ps = $detail['coolbox'];
                          if($ps == "yes" || $ps == "Yes") {
                          ?>
                          <td class="value-spec"> <i class="fa fa-check-circle"></i> </td>
                          <?php
                          }
                          ?>
                          <?php
                          if($ps == "no" || $ps == "No" || $ps == "") {
                          ?>
                          <td class="value-spec"> <i class="fa fa-check-circle" style="color: #D7DBDD;"></i> </td>
                          <?php
                          }
                          ?>
                        </tr>
                        <tr>
                          <td class="label-spec"> Power back door <span class="coln">:</span></td>
                          <?php
                          $ps = $detail['powerbackdoor'];
                          if($ps == "yes" || $ps == "Yes") {
                          ?>
                          <td class="value-spec"> <i class="fa fa-check-circle"></i> </td>
                          <?php
                          }
                          ?>
                          <?php
                          if($ps == "no" || $ps == "No" || $ps == "") {
                          ?>
                          <td class="value-spec"> <i class="fa fa-check-circle" style="color: #D7DBDD;"></i> </td>
                          <?php
                          }
                          ?>
                        </tr>
                        <tr>
                          <td class="label-spec"> Leather seats <span class="coln">:</span></td>
                          <?php
                          $ps = $detail['leatherseats'];
                          if($ps == "yes" || $ps == "Yes") {
                          ?>
                          <td class="value-spec"> <i class="fa fa-check-circle"></i> </td>
                          <?php
                          }
                          ?>
                          <?php
                          if($ps == "no" || $ps == "No" || $ps == "") {
                          ?>
                          <td class="value-spec"> <i class="fa fa-check-circle" style="color: #D7DBDD;"></i> </td>
                          <?php
                          }
                          ?>
                      </tbody>
                    </table>
                  </div>
              </div>
              <div class="tab-pane fade" id="product_tabs_custom1">
                <div class="product-tabs-content-inner clearfix">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis convallis, arcu nec aliquam consequat, purus felis vehicula felis, a dapibus enim lorem nec augue.</p>
                </div>
              </div>
            </div>
          </div>
          
          <!--product-collateral-->
          <div class="box-additional">
            <!-- BEGIN RELATED PRODUCTS -->
            <div class="related-pro container">
              <div class="slider-items-products">
                <div class="new_title center">
                  <h2>Related Products</h2>
                </div>
                <div id="related-slider" class="product-flexslider hidden-buttons">
                  <div class="owl-carousel slider-items slider-width-col4 products-grid">
            
                    <?php
                    $sql = "SELECT * from vehicle as v join vehicle_details as s where v.id = s.vehicleid";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                    $sql = "SELECT * from images where vehicleid = ".$row['id']."";
                    $img = $conn->query($sql);
                    $src = $img->fetch_assoc();
                    $source = $src['image'];
                    ?>
                    <!-- Item -->
                    <div class="item" style="margin-top: 0px !important; height: auto;">
                      <div class="item-inner">
                        <div class="item-img">
                          <div class="item-img-info"><a href="accessories-detail.php?id=<?php echo $row['id']; ?>" title="Retis lapen casen" class="product-image"><img style="height: 200px" src="upload/<?php echo $source; ?>" alt="Retis lapen casen"></a>
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
            </div>
            <!-- end related product -->
            
          </div>
          <!-- end related product -->
        </div>
        <!--box-additional-->
        <!--product-view-->
      </div>
    </div>
    <!--col-main-->
  </div>
  <!--main-container-->
</div>
<!--col1-layout--> 

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

<div class="popup2" style="display: none;">
<div class="ask-question-block">
<h3>Make Your Offer</h3>
<div class="form-inner"><img src="images/close-icon.png" alt="close" class="x" onClick="HideMe1();">
<form method="post">
<?php 
    $carname = $vehicle['make']." ".$vehicle['model']." ".$vehicle['year'];
    $vehicleid = $vehicle['id'];
?>
<input type="hidden" name="carname" value="<?php echo $carname; ?>">
<input type="hidden" name="vehicleid" value="<?php echo $vehicleid; ?>">
<div class="form-block"><label>Name</label>
<input name="name" type="text" required>
</div>
<div class="form-block"><label>Email</label>
<input name="email" type="text" required>
</div>
<div class="form-block"><label>Phone</label>
<input name="phone" type="text" required>
</div>
<div class="form-block"><label>Country</label>
<input name="country" type="text" required>
</div>
<div class="form-block"><label>Your Offer</label>
<input name="offer" type="text" required>
</div>
<div class="form-block">
 <button type="submit" title="submit" class="button" name="submit"><span>Submit</span></button>
 </form>
</div>
</div>
</div>
</div>

<div class="popup3" style="display: none;">
<div class="ask-question-block">
<h3>Finance Calculator</h3>
<div class="form-inner"><img src="images/close-icon.png" alt="close" class="x" onClick="HideMe2();">
<div class="form-block"><label>Vehicle Price ($)</label>
<input name="" type="text" value="87,000">
</div>
<div class="form-block"><label>Down Payment</label>
<input name="" type="text"  value="25,000">
</div>
<div class="form-block"><label>Interest Rate</label>
<input name="" type="text"  value="13%">
</div>
<div class="form-block"><label>Period in Years</label>
<input name="" type="text"  value="3 years">
</div>
<div class="form-block">
 <button type="submit" title="submit" class="button"><span>Calculate</span></button>
</div>
</div>
</div>
</div>

<div id="fade"></div>

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
<script src="js/cloud-zoom.js"></script> 
<script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script> 
<script type="text/javascript">
    function HideMe()
    {
        jQuery('.popup1').hide();
        jQuery('#fade').hide();
	
		
    }
	function ShowMe()
    {
        jQuery('.popup2').show();
        jQuery('#fade').show();
		
    }
		function ShowMe1()
    {
        jQuery('.popup3').show();
        jQuery('#fade').show();
		
    }
	function HideMe1()
    {
        jQuery('.popup2').hide();
        jQuery('#fade').hide();

		
    }
	
	function HideMe2()
    {
        jQuery('.popup3').hide();
        jQuery('#fade').hide();

		
    }
    setInterval(function()
    {
    	var element = document.getElementById('flex-next-btn');
        element.click();
    	
    }, 2000);
</script>

</body>
</html>
