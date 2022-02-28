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
    $email = $_POST['email'];
    $pass = $_POST['password'];
    
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    
    while($row = $result->fetch_assoc()) {
        if($email == $row['email'] && password_verify($pass, $row['password']))
        {
            session_start();
            $_SESSION["user"] = $row["email"];
            header('Location: addrecord.php');
            exit();
        }
    }
    echo "<script type='text/javascript'>alert('Wrong Credentials!')</script>";
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Login Page</title>
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
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
        <div class="page-title">
            <h2>Login or Create an Account</h2>
        </div>
        </div>
        <!--col-xs-12-->
      </div>
      <!--row-->
    </div>
    <!--container-->
  </div>
    
       
<!-- BEGIN Main Container -->  
          
       <div class="main-container col1-layout wow bounceInUp animated animated" style="visibility: visible;">     
              
	       <div class="main">                     
                            <div class="account-login container">
  <!--page-title-->

        <form action="login.php" method="post" id="login-form">
        <input name="form_key" type="hidden" value="EPYwQxF6xoWcjLUr">
        <fieldset class="col2-set">
            <div class="col-1 new-users"> 
                  <strong>New Customers</strong>    
                <div class="content">
                   
                    <p>By creating an account with our store, you will be able to sell your own cars on our website</p>
                     <div class="buttons-set">
                    <a href="register.php"><button type="button" title="Create an Account" class="button create-account" onClick=""><span><span>Create an Account</span></span></button></a>
                </div>
                </div>
            </div>
            <div class="col-2 registered-users">
             <strong>Registered Customers</strong>             
                <div class="content">
                    
                    <p>If you have an account with us, please log in.</p>
                    <ul class="form-list">
                        <li>
                             <label for="email">Email Address<em class="required">*</em></label>
                            <div class="input-box">
                                <input type="text" name="email" value="" id="email" class="input-text required-entry validate-email" title="Email Address">
                            </div>
                        </li>
                        <li>
                            <label for="pass">Password<em class="required">*</em></label>
                            <div class="input-box">
                                <input type="password" name="password" class="input-text required-entry validate-password" id="pass" title="Password">
                            </div>
                        </li>
                                                                    </ul>
                    <div class="remember-me-popup">
                    <div class="remember-me-popup-head" style="display:none">
                        <h3 id="text2">What's this?</h3>
                        <a href="#" class="remember-me-popup-close" onClick="showDiv()" title="Close">Close</a>
                    </div>
                    <div class="remember-me-popup-body" style="display:none">
                        <p id="text1">Checking "Remember Me" will let you access your shopping cart on this computer when you are logged out</p>
                        <div class="remember-me-popup-close-button a-right">
                            <a href="#" class="remember-me-popup-close button" title="Close" onClick="
                            showDiv()"><span>Close</span></a>
                        </div>
                    </div>
                </div>

                <p class="required">* Required Fields</p>



                     <div class="buttons-set">
                  
                    <button type="submit" class="button login" title="Login" name="submit" id="send2"><span>Login</span></button>

                      <a href="#" class="forgot-word">Forgot Your Password?</a>
                 </div> <!--buttons-set-->
                  </div> <!--content-->                               
                    </div> <!--col-2 registered-users-->
                    </fieldset> <!--col2-set-->
                    </form>
   
</div> <!--account-login-->
         
	       </div><!--main-container-->
          
          </div> <!--col1-layout-->
          

  
 
   
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