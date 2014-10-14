<?php

     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "support@crunchpress.net";
    $email_subject = "New Reservation Form Submission";
	$error_message = '';

     

     
    // validation
    if(
        !isset($_POST['select-service']) ||
        !isset($_POST['name']) ||
		!isset($_POST['last-name']) ||
		!isset($_POST['email']) ||
		!isset($_POST['phone']) ||
		!isset($_POST['date']) ||
		!isset($_POST['time']) ||
		!isset($_POST['gender']) ||
        !isset($_POST['req'])) {
			
			echo "Fields are filled";
			die();
    }
     
    $select_services = $_POST['select-service']; // required
	$name = $_POST['name']; // required
	$last_name = $_POST['last-name']; // required
	$email = $_POST['email']; // required
    $phone = $_POST['phone']; // required
	$date = $_POST['date']; // required
	$time = $_POST['time']; // required
	$gender = $_POST['gender']; // required
    $red = $_POST['req']; // required
     

 
$email_message = '<html><body>';
$email_message .= '<h1>Your Details Are Below</h1>';
$email_message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$email_message .= "<tr style='background: #eee;'><td><strong>Service Selected:</strong> </td><td>" . ($_POST['select-service']) . "</td></tr>";
$email_message .= "<tr><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
$email_message .= "<tr><td><strong>Last Name:</strong> </td><td>" . strip_tags($_POST['last-name']) . "</td></tr>";
$email_message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
$email_message .= "<tr><td><strong>Phone:</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
$email_message .= "<tr><td><strong>Date:</strong> </td><td>" . strip_tags($_POST['date']) . "</td></tr>";
$email_message.= "<tr><td><strong>Time</strong> </td><td>" . strip_tags($_POST['time']) . "</td></tr>";
$email_message .= "<tr><td><strong>Gender</strong> </td><td>" . strip_tags($_POST['gender']) . "</td></tr>";
$email_message .= "<tr><td><strong>Special Req</strong> </td><td>" . ($_POST['req']) . "</td></tr>";
$email_message .= "</table>";
$email_message .= "</body></html>";	






$headers = "From: " . $email . "\r\n";
$headers .= "Reply-To: ". $email . "\r\n";
$headers .= "CC: susan@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


@mail($email_to, $email_subject, $email_message, $headers); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Chrunch Press">
<meta name="author" content="Chrunch Press">
<meta name="description" content="Awesome Description Here">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="location, based, messaging, social, network, service, nearby, friends, community, neighborhood, local, events">
<title>Pageant Beauty Palace</title>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<![endif]-->
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.css" rel="stylesheet">
<!-- Add custom CSS here -->
<link href="css/color.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link href="css/jquery.bxslider.css" rel="stylesheet">
<!-- Bx-Slider -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
<script type="text/javascript">
<!--
function delayer(){
    window.location = "<?php echo $_SERVER['HTTP_REFERER']; ?>"
}
//-->
</script>
</head>
<body>
<!-- /. Main Container start ./-->
<div class="wrapper inner"> 
  <!-- /. topbar start ./-->
  <div class="topbar">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 topnav"> <a href="branches.html">Branches</a> | <a href="reservation.html">Reservations</a> | <span>0800 1234 5678</span> </div>
        <div class="col-lg-6 col-md-6">
          <div class="social pull-left"> <a href="#" title="Facebook"><i class="fa fa-facebook-square"></i></a> <a href="#" title="Linkedin"><i class="fa fa-linkedin-square"></i></a> <a href="#" title="Gplus"><i class="fa fa-google-plus-square"></i></a> <a href="#" title="Twitter"><i class="fa fa-twitter-square"></i></a> <a href="#" title="Pinterest"><i class="fa fa-pinterest-square"></i></a> <a href="#" title="Instagram"><i class="fa fa-instagram"></i></a> <a href="#" title="Flickr"><i class="fa fa-flickr"></i></a> </div>
          <div class="hlinks pull-right">
            <ul>
              <li> <a href="#"><i class="fa fa-shopping-cart"></i> Shoping Cart</a></li>
              <li><a href="#">Sign up</a></li>
              <li><a href="#">Log In</a></li>
              <li>
                <input type="search" id="search"/>
                <a id="search-active" class="search-toggle"><span class="hsearch"><i class="fa fa-search"></i></span></a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /. topbar end ./--> 
  
  <!-- /. Header Start ./-->
  <header id="header">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3">
          <div class="logo"><a href="index.html"><img src="images/inner-logo.png" alt="Logo" title="Pageant Beauty Palace"/></a></div>
        </div>
        <div class="col-lg-9 col-md-9"> 
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div>
            <div class="navbar mm">
              <div>
                <nav class="navbar navbar-default" role="navigation"> 
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                  </div>
                  <div id="navbar-collapse-1" class="collapse navbar-collapse pull-right">
                    <ul class="nav navbar-nav">
                      <li><a href="index.html">Home</a></li>
                      <li class="dropdown"><a href="index.html" data-toggle="dropdown" class="dropdown-toggle">Pages<b class="caret"></b></a>
                        <ul role="menu" class="dropdown-menu">
                          <li><a tabindex="-1" href="aboutus-01.html"> About Us 1 </a></li>
                          <li><a tabindex="-1" href="aboutus-02.html"> About Us 2 </a></li>
                          <li><a tabindex="-1" href="pricing-01.html"> Prices 1 </a></li>
                          <li><a tabindex="-1" href="pricing-02.html"> Prices 2 </a></li>
                          <li><a tabindex="-1" href="team-01.html"> Team 1 </a></li>
                          <li><a tabindex="-1" href="team-02.html"> Team 2 </a></li>
                          <li><a tabindex="-1" href="404.html"> 404</a></li>
                          <li><a tabindex="-1" href="testimonials.html"> Testimonials</a></li>
                          <li><a tabindex="-1" href="reservation.html"> RESERVATIONS</a></li>
                        </ul>
                      </li>
                      
                      <!-- Classic list -->
                      <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Services<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li> 
                            <!-- Content container to add padding -->
                            <div class="mm-content">
                              <div class="row">
                                <ul class="col-sm-4 list-unstyled">
                                  <li>
                                    <p><strong>Section Title</strong></p>
                                  </li>
                                  <li><a href="services.html">Services Page</a></li>
                                  <li><a href="services-details.html">Services Details</a></li>
                                  <li><a href="#">Body Massage</a></li>
                                  <li><a href="#">Special Facial</a></li>
                                  <li><a href="#">Manicure</a></li>
                                  <li><a href="#">Pedicure</a></li>
                                </ul>
                                <ul class="col-sm-4 list-unstyled">
                                  <li>
                                    <p><strong>Section Title</strong></p>
                                  </li>
                                  <li><a href="#">Body Massage</a></li>
                                  <li><a href="#">Spa Treatments</a></li>
                                  <li><a href="#">Body Massage</a></li>
                                  <li><a href="#">Special Facial</a></li>
                                  <li><a href="#">Manicure</a></li>
                                  <li><a href="#">Pedicure</a></li>
                                </ul>
                                <ul class="col-sm-4 list-unstyled">
                                  <li>
                                    <p><strong>Section Title</strong></p>
                                  </li>
                                  <li><a href="#">Body Massage</a></li>
                                  <li><a href="#">Spa Treatments</a></li>
                                  <li><a href="#">Body Massage</a></li>
                                  <li><a href="#">Special Facial</a></li>
                                  <li><a href="#">Manicure</a></li>
                                  <li><a href="#">Pedicure</a></li>
                                </ul>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </li>
                      
                      <!-- Blog -->
                      <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">BLOG<b class="caret"></b></a>
                        <ul role="menu" class="dropdown-menu">
                          <li><a tabindex="-1" href="blog-full.html"> Full Width </a></li>
                          <li><a tabindex="-1" href="blog-masanary.html"> Masonry Style </a></li>
                          <li><a tabindex="-1" href="blog.html"> Single Column (With Sidebar) </a></li>
                          <li><a tabindex="-1" href="blog-02-column.html"> Double Column</a></li>
                          <li><a tabindex="-1" href="blog-03-column.html"> Three Column</a></li>
                        </ul>
                      </li>
                      <!-- Blog End --> 
                      
                      <!-- Product -->
                      <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Products<b class="caret"></b></a>
                        <ul role="menu" class="dropdown-menu">
                          <li><a tabindex="-1" href="products.html"> Product Listing </a></li>
                          <li><a tabindex="-1" href="product-details.html"> Product Details</a></li>
                          <li><a tabindex="-1" href="cart.html"> Cart </a></li>
                          <li><a tabindex="-1" href="checkout.html"> Check Out</a></li>
                          <li><a tabindex="-1" href="register.html"> Login</a></li>
                          <li><a tabindex="-1" href="register.html"> Register</a></li>
                        </ul>
                      </li>
                      <!-- Product End --> 
                      
                      <!-- Product -->
                      <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Gallery<b class="caret"></b></a>
                        <ul role="menu" class="dropdown-menu">
                          <li><a tabindex="-1" href="galletry01.html"> Double Column </a></li>
                          <li><a tabindex="-1" href="galletry02.html"> Three Column</a></li>
                          <li><a tabindex="-1" href="galletry03.html"> Four Column</a></li>
                          <li><a tabindex="-1" href="galletry04.html"> Masonry Style</a></li>
                        </ul>
                      </li>
                      <!-- Product End --> 
                      
                      <!-- Contact Us -->
                      <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Contact Us<b class="caret"></b></a>
                        <ul role="menu" class="dropdown-menu">
                          <li><a tabindex="-1" href="contact-01.html"> Contact Us 1 </a></li>
                          <li><a tabindex="-1" href="contact-02.html"> Contact Us 2</a></li>
                          <li><a tabindex="-1" href="branches.html"> Branches 1</a></li>
                          <li><a tabindex="-1" href="branches2.html"> Branches 2</a></li>
                        </ul>
                      </li>
                      <!-- Contact Us End -->
                      
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
          <!-- /.navbar-collapse --> 
        </div>
      </div>
    </div>
  </header>
  <!-- /. Header End ./--> 
  
  <!-- /.inner title Start ./-->
  <section class="inner-titlebg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <h2>Reservation</h2>
        </div>
        <div>
          <div class="col-lg-9 col-md-9">
            <h5>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form.</h5>
          </div>
          <div class="col-lg-3 col-md-3">
            <ul class="bcrumb pull-right">
              <li> <a href="#">Home </a></li>
              <li><a href="#"> Signup</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- /.inner title Start ./-->
  <div class="gap"></div>
  
  <!-- /.signup Start ./-->
  
  <section class="register signup">
    <div class="container">
      <div class="row"> 
        
        <!-- Register Form Start -->
        
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
          <div>
            <h2>Make a Reservation</h2>
            <div class="success-message"><i class="fa fa-thumbs-up"></i> Your Message was sent</div>
          </div>
        </div>
        
        <!-- Register Form end --> 
        
        <!-- Login Form Start -->
        
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="login">
            <h2>Time Schedule</h2>
            <h4>Branch 1</h4>
            <ul class="office-time">
              <li>Monday <span>09:00 am  -  09:00 pm</span> </li>
              <li>Tuesday<span>09:00 am  -  09:00 pm</span> </li>
              <li>Wednesday <span>09:00 am  -  09:00 pm</span></li>
              <li>Thursday <span>09:00 am  -  09:00 pm</span></li>
              <li>Friday <span>09:00 am  -  09:00 pm</span></li>
              <li>Saturday <span>09:00 am  -  09:00 pm</span></li>
              <li>Sunday <span>09:00 am  -  09:00 pm</span></li>
            </ul>
            <div class="gap-25"></div>
            <h4>Branch 2</h4>
            <ul class="office-time">
              <li>Monday <span>09:00 am  -  09:00 pm</span> </li>
              <li>Tuesday<span>09:00 am  -  09:00 pm</span> </li>
              <li>Wednesday <span>09:00 am  -  09:00 pm</span></li>
              <li>Thursday <span>09:00 am  -  09:00 pm</span></li>
              <li>Friday <span>09:00 am  -  09:00 pm</span></li>
              <li>Saturday <span>09:00 am  -  09:00 pm</span></li>
              <li>Sunday <span>09:00 am  -  09:00 pm</span></li>
            </ul>
          </div>
        </div>
        
        <!-- Login Form End --> 
        
      </div>
    </div>
  </section>
  <!-- /.Cart End ./-->
  
  <div class="gap"></div>
  
  <!-- /. Footer Start ./-->
  
  <section id="footer"> 
    
    <!-- /. Footer Bottom Bar ./-->
    
    <section class="footer-mid">
      <div class="footer-midbg">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6">
              <h3>Flickr Photos</h3>
              <ul class="lb-album">
                <li> <a href="#image-1"> <img src="images/fp1.jpg" alt="image01"> <span><i class="fa fa-search-plus"></i></span> </a>
                  <div class="lb-overlay" id="image-1"> <img src="images/large/large1.gif" alt="image01" />
                    <div>
                      <p>Image Tagline Will Come here</p>
                    </div>
                    <a href="#page" class="lb-close"><i class="fa fa-times-circle"></i></a> </div>
                </li>
                <li> <a href="#image-2"> <img src="images/fp2.jpg" alt="image01"> <span><i class="fa fa-search-plus"></i></span> </a>
                  <div class="lb-overlay" id="image-2"> <img src="images/large/large1.gif" alt="image01" />
                    <div>
                      <p>Image Tagline Will Come here</p>
                    </div>
                    <a href="#page" class="lb-close"><i class="fa fa-times-circle"></i></a> </div>
                </li>
                <li> <a href="#image-3"> <img src="images/fp3.jpg" alt="image01"> <span><i class="fa fa-search-plus"></i></span> </a>
                  <div class="lb-overlay" id="image-3"> <img src="images/large/large1.gif" alt="image01" />
                    <div>
                      <p>Image Tagline Will Come here</p>
                    </div>
                    <a href="#page" class="lb-close"><i class="fa fa-times-circle"></i></a> </div>
                </li>
                <li> <a href="#image-4"> <img src="images/fp4.jpg" alt="image01"> <span><i class="fa fa-search-plus"></i></span> </a>
                  <div class="lb-overlay" id="image-4"> <img src="images/large/large1.gif" alt="image01" />
                    <div>
                      <p>Image Tagline Will Come here</p>
                    </div>
                    <a href="#page" class="lb-close"><i class="fa fa-times-circle"></i></a> </div>
                </li>
                <li> <a href="#image-5"> <img src="images/fp5.jpg" alt="image01"> <span><i class="fa fa-search-plus"></i></span> </a>
                  <div class="lb-overlay" id="image-5"> <img src="images/large/large1.gif" alt="image01" />
                    <div>
                      <p>Image Tagline Will Come here</p>
                    </div>
                    <a href="#page" class="lb-close"><i class="fa fa-times-circle"></i></a> </div>
                </li>
                <li> <a href="#image-6"> <img src="images/fp1.jpg" alt="image01"> <span><i class="fa fa-search-plus"></i></span> </a>
                  <div class="lb-overlay" id="image-6"> <img src="images/large/large1.gif" alt="image01" />
                    <div>
                      <p>Image Tagline Will Come here</p>
                    </div>
                    <a href="#page" class="lb-close"><i class="fa fa-times-circle"></i></a> </div>
                </li>
                <li> <a href="#image-7"> <img src="images/fp7.jpg" alt="image01"> <span><i class="fa fa-search-plus"></i></span> </a>
                  <div class="lb-overlay" id="image-7"> <img src="images/large/large1.gif" alt="image01" />
                    <div>
                      <p>Image Tagline Will Come here</p>
                    </div>
                    <a href="#page" class="lb-close"><i class="fa fa-times-circle"></i></a> </div>
                </li>
                <li> <a href="#image-8"> <img src="images/fp8.jpg" alt="image01"> <span><i class="fa fa-search-plus"></i></span> </a>
                  <div class="lb-overlay" id="image-8"> <img src="images/large/large1.gif" alt="image01" />
                    <div>
                      <p>Image Tagline Will Come here</p>
                    </div>
                    <a href="#page" class="lb-close"><i class="fa fa-times-circle"></i></a> </div>
                </li>
                <li> <a href="#image-9"> <img src="images/fp9.jpg" alt="image01"> <span><i class="fa fa-search-plus"></i></span> </a>
                  <div class="lb-overlay" id="image-9"> <img src="images/large/large1.gif" alt="image01" />
                    <div>
                      <p>Image Tagline Will Come here</p>
                    </div>
                    <a href="#page" class="lb-close"><i class="fa fa-times-circle"></i></a> </div>
                </li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
              <h3>Recent Posts</h3>
              <ul class="recent-posts">
                <li><a href="blog-details.html">Bed ut perspiciatis unde omnis</a></li>
                <li><a href="blog-details.html">Duis aute irure dolor in excepteur</a></li>
                <li><a href="blog-details.html">Sint occaecat cupidatat nemo enim</a></li>
                <li><a href="blog-details.html">Voluptatem quia autem vel eum iure</a></li>
                <li><a href="blog-details.html">Bed ut perspiciatis unde omnis</a></li>
                <li><a href="blog-details.html">Duis aute irure dolor in excepteur</a></li>
                <li><a href="blog-details.html">Sint occaecat cupidatat nemo enim</a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
              <h3>Tweets</h3>
              <div>
                <ul class="tweets">
                  <li class="twuser"><img src="images/twuser-1.jpg" alt=""></li>
                  <li class="twpost">
                    <h4><a href="#">@johndoe</a></h4>
                    <p> There are many variations of passages the majority. <span class="url">themeforest.net/item/boxme-res</span> </p>
                  </li>
                </ul>
                <ul class="tweets">
                  <li class="twuser"><img src="images/twuser-2.jpg"  alt=""></li>
                  <li class="twpost">
                    <h4><a href="#">@dazy</a></h4>
                    <p> There are many variations of passages the majority. <span class="url">themeforest.net/item/boxme-res</span> </p>
                  </li>
                </ul>
                <ul class="tweets">
                  <li class="twuser"><img src="images/twuser-3.jpg" alt="" ></li>
                  <li class="twpost">
                    <h4><a href="#">@lizaanderson</a></h4>
                    <p> There are many variations of passages the majority. <span class="url">themeforest.net/item/boxme-res</span> </p>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 getintouch">
              <h3>Get in Touch</h3>
              <p> when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries. </p>
              <p>Phone: (012) 123 456<br>
                Fax: (012) 123 456<br>
                Email: <a href="mailto:info@relaxspapalace.com">info@relaxspapalace.com</a><br>
                <a href="#">www.relaxspapalace.com</a> </p>
              <div class="social"> <a href="#" title="Facebook"><i class="fa fa-facebook-square"></i></a> <a href="#" title="Linkedin"><i class="fa fa-linkedin-square"></i></a> <a href="#" title="Gplus"><i class="fa fa-google-plus-square"></i></a> <a href="#" title="Twitter"><i class="fa fa-twitter-square"></i></a> <a href="#" title="Pinterest"><i class="fa fa-pinterest-square"></i></a> <a href="#" title="Instagram"><i class="fa fa-instagram"></i></a> <a href="#" title="Flickr"><i class="fa fa-flickr"></i></a> </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- /. Footer Copy rights ./-->
    
    <section class="footer-copy">
      <div class="container">
        <div class="row">
          <div class="col-lg-12"><strong>Pageant Beauty Palace</strong> &copy; 2014 All Rights Reserved, Designed &amp; Developed by: <a href="http://CrunchPress.com" title="Crunch Press" target="_blank">CrunchPress.com</a></div>
        </div>
      </div>
    </section>
  </section>
  
  <!-- /. Footer End ./--> 
  
</div>
<!-- main end --> 
<!-- /. Main Container End ./--> 
<!-- JavaScript --> 
<script src="js/jquery-1.10.2.js"></script><!-- Main Jquery File --> 
<script src="js/modernizr.custom.39665.js"></script><!-- Modernizer --> 
<script src="js/bootstrap.js"></script><!-- Bootstrap --> 
<script src="js/jquery.easing.1.3.js"></script><!-- Easing --> 
<script type="text/javascript" src="js/bootstrap-select.min.js"></script> 
<script type="text/javascript" src="js/jquery.validate.js"></script><!-- Validate Script --> 
<script src="js/jquery.ui.core.js"></script> 
<script src="js/jquery.ui.datepicker.js"></script> 
<script src="js/jquery.timepicker.min.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script>
	$(function() {
		$( "#datepicker" ).datepicker();
		$('#basic_example_2').timepicker();
	});
	</script> 
<script src="js/jquery-scrolltofixed-min.js" type="text/javascript"></script> 
<script src="js/custom.js"></script><!-- Custom -->
</body>
</html>
