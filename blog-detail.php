<?php

    $servername = "localhost";
    $username = "shinkyowa";
    $password = "h6Wlb@{RKqz(";
    $dbname = "shinkyowa";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    if(isset($_GET["id"])) {
        
        $id = $_GET["id"];
        $sql = "SELECT * from blogs where id = '$id'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        
    } else {
        
        $sql = "SELECT * from blogs";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        
        $_GET["id"] = $row["id"];
        
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $name = $_POST["user_name"];
        $email = $_POST["user_email"];
        $website = $_POST["user_website"];
        $comment = $_POST["comment"];
        $id = $_GET["id"];
        
        if($name == "" || $email == "" || $website == "" || $comment == "") {
            echo "<script> alert('All fields are required.') </script>";
        } else {
            
            $sql = "INSERT INTO blog_replies(blogid, name, email, website, comment) VALUES ('$id', '$name', '$email', '$website', '$comment')";
            if ($conn->query($sql) === TRUE) {
                echo "<script> alert('Reply saved successfully.') </script>";
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Blog Detail Page</title>
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
<div id="page" class="single-post">
  <?php include("header.php"); ?>
  
<div class="page-heading" style="background-image: url(countries/Japan.jpg); opacity: 1; background-repeat: no-repeat; background-size: 100% 100%;">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="page-title">
          <h2><?php echo $row["title"]; ?></h2>
        </div>
      </div>
      <!--col-xs-12--> 
    </div>
    <!--row--> 
  </div>
  <!--container--> 
</div>
  
<!-- BEGIN Main Container -->  
<div class="main-container col2-right-layout">
<div class="main container"> 
<div class="row">                          
<div class="col-left sidebar col-sm-3 blog-side">

<!--comments-wrapper-->
        
<div class="comments-form-wrapper comment-respond">
<h3>Leave A reply</h3>
<p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
<form class="comment-form" method="post" id="postComment" action="">
<div class="field">
  <label for="name">Name<em class="required">*</em></label>
  <input type="text" class="input-text" title="Name" value="" id="user" name="user_name" placeholder="Name">
</div>
<div class="field">
  <label for="email">Email<em class="required">*</em></label>
  <input type="text" class="input-text validate-email" title="Email" value="" id="email" name="user_email" placeholder="Email Address">
</div>
 <div class="field">
  <label for="email">Website<em class="required">*</em></label>
  <input type="text" class="input-text validate-email" title="Email" value="" id="email" name="user_website" placeholder="Website">
</div>
<div class="clear"></div>
<div class="field aw-blog-comment-area">
  <label for="comment">Comment<em class="required">*</em></label>
  <textarea rows="5" cols="50" class="input-text" title="Comment" id="comment" name="comment" placeholder="Comment"></textarea>
</div>
<div style="width:96%" class="button-set">
  <input type="hidden" value="1" name="blog_id">
  <button type="submit" class="bnt-comment"><span><span>Add Comment</span></span></button>
</div>
</form>
</div>

<!--comments-form-wrapper clearfix-->

</div>

<div class="col-main col-sm-9 main-blog" style="visibility: visible;">

<div id="main" class="blog-wrapper">

<div id="primary" class="site-content">
<div id="content" role="main">
<article id="post-29" class="blog_entry clearfix">
		
		<div class="entry-content">
			<div class="featured-thumb"><a href="#"><img src="blogs/<?php echo $row['image']; ?>" alt="blog-img4"></a></div>
        <header class="blog_entry-header clearfix">
            <div class="blog_entry-header-inner">
			    <h1 class="blog_entry-title"><?php echo $row['title']; ?></h1>
            </div> <!--blog_entry-header-inner-->
		</header> <!--blog_entry-header clearfix-->
         
        <div class="entry-content">
        <ul class="post-meta">
              <li><i class="fa fa-user"></i>posted by <a href="#">admin</a> </li>
              <li><i class="fa fa-comments"></i><a href="#">8 comments</a> </li>
              <li><i class="fa fa-clock-o"></i><?php echo $row['date']; ?></li>
            </ul>
        <div class="thm-post">
        <p style="white-space: pre-wrap;"><?php echo $row['details']; ?></p>
        </div>
            </div>
		   </div>
	    </article>
	    
    <div class="comment-content">
        <div class="comments-wrapper">
          <h3> Comments </h3>
            
        <?php
        $id = $_GET["id"];
        $sql = "SELECT * FROM blog_replies where blogid = '$id' order by id desc limit 2";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                
                $var = $row["date"];
                $date = explode(" ", $var);
        ?>
        
        <ol class="commentlist">
        <li class="comment">
        <div>
        <img alt="" src="images/member1.png" class="avatar avatar-60 photo">
        <div class="comment-text">
        <div class="ratings">
          <div class="rating-box">
            <div style="width:100%" class="rating"></div>
          </div>
        </div>
            
        <p class="meta">
        <strong><?php echo $row['name']; ?></strong> <span>???</span> <time><?php echo $date[0]; ?></time>
        </p>
        <div class="description"><p><?php echo $row['comment']; ?></p>
        </div>
        </div>
        </div>
        </li><!-- #comment-## -->
        </ol>
          <!--commentlist--> 
        </div>
        
        <?php 
          }
        }
	  ?>
        
      </div>
	  
</div>
</div>
</div> <!--#main wrapper grid_8-->



</div> <!--col-main col-sm-9-->
</div>    
</div><!--main-container-->
</div> <!--col2-layout-->

 
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