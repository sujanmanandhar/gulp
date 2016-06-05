<?php 
error_reporting(0);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="description" content="--">
<meta name="keywords" content="--">
<title>Henry Robert</title>
<link href="css/style.css" type="text/css" rel="stylesheet">



<script src="js/jquery.min.js"></script>
<script src="js/jquery.flexslider.min.js"></script>

<!-- Javascript-->
<script type="text/javascript" charset="utf-8">
  $(window).load(function() {
    $('.flexslider').flexslider();
  });
</script>


<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>

<body id="home">

<!-------------------------------Header part Start-------------------------->
<div class="top-border">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 left">
        <ul>
          <li>RSS</li>
          <li>Site Map</li>
          <li>Privacy Policy</li>
        </ul>
      </div>
      <div class="col-lg-6 right">
        <ul class="clearfix">
          <li>My Account</li>
          <li>My Wishlist (0)</li>
          <li>Shopping Cart</li>
          <li>Check Out</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<?php include("include/head.php"); ?>

<!--------------------------------------Header part Close----------------------> 
<div class="header">
  <div class="container">
        <div class="row">
          <div class="col-lg-6  wow bounceIn"  data-wow-duration="1s">
              <img src="images/biz-logol.png" alt="biz-logo" class="img-responsive biz-logo" />                
            </div>
            <div class="col-lg-3 login">
              <ul>
                  <li>Login</li>
                    <li>Register</li>
                </ul>
                <form class="cleafix">
                    <input type="text" placeholder="Search" />
                    <input type="submit" class="submit" /> 
              </form>                
            </div>
            <div class="col-lg-3 shopping">
              <ul class="clearfix">
                    <li><img src="images/shopping.png" alt="shopping"/></li>
                    <li>Shopping Cart <br /><span>(0) items - $0.00</span></li>
                </ul>
            </div>
        </div>
                       
    </div>
</div>
<div class="container">
    <div class="navbar navbar-static-top" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
               MENU
            </button>
            
        </div>                

        <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="house"><img src="images/home.png" /></li>
                <li class="home"><a class="hvr-shutter-in-vertical" href="index.php">Home</a></li>
                <li class="about-us"><a class="hvr-shutter-in-vertical" href="about-us.php">About Us</a></li>
                <li class="products"><a class="hvr-shutter-in-vertical" href="products.php">Products</a></li>
                <li class="recipies"><a class="hvr-shutter-in-vertical" href="recipies.php">Recipies</a></li>
                <li class="testimonial"><a class="hvr-shutter-in-vertical" href="testimonial.php">Testimonial</a></li>
                <li class="terms"><a class="hvr-shutter-in-vertical" href="terms.php">Terms of services</a></li>
                <li class="contact-us"><a class="hvr-shutter-in-vertical" href="contact-us.php">Contact Us</a></li>
                
               
                
              </ul>
        </div>
   </div>
</div>
<!----------------------------------------Header part Close-------------------------> 

<!-------------------------------------Banenr part Start------------------------>
<div class="banner">
  <div class="background"> <img src="images/banner-back.png" alt="Banner-Bg" class="banner-bg"> </div>
  <div class="container">
    <div class="flexslider">
      <ul class="slides">
        <li class="slide1">
          <div class="row">
            <div class="col-lg-2 col-lg-offset-2"> <img src="images/ban-img1.png"> </div>
            <div class="col-lg-8">
              <h4>New product</h4>
              <h3>CHOW CHOW <br>
                6 BOTTLES - 17oz.</h3>
              <p>Chow Chow is a cabbage-based additive which is popular in the Southern States and has a tradition and history dating back to the fusion of English, French and African cultures. Comes in Sweet and Hot Flavors </p>
              <ul class="buyy clearfix">
                <li>$ 46.00</li>
                <li>SHOP NOW!</li>
              </ul>
            </div>
          </div>
        </li>
        <li class="slide1">
          <div class="row">
            <div class="col-lg-2 col-lg-offset-2"> <img src="images/ban-img2.png"> </div>
            <div class="col-lg-8">
              <h4>product</h4>
              <h3>BARBECUE SAUCE <br>
                1 GALLON</h3>
              <p>We take pride in producing all Kosher products. Our sauce are created from a blend of fine herbs and spices, cooked to perfection without artificial preservatives and they make your meal delicious?</p>
              <ul class="buyy clearfix">
                <li>$ 45.00</li>
                <li>SHOP NOW!</li>
              </ul>
            </div>
          </div>
        </li>
        <li class="slide1">
          <div class="row">
            <div class="col-lg-2 col-lg-offset-2"> <img src="images/ban-img3.png"> </div>
            <div class="col-lg-8">
              <h4>product</h4>
              <h3>BARBECUE SAUCE <br>
                12 BOTTLES - 17oz.</h3>
              <p> We take pride in producing all Kosher products. Our sauce is created from a blend of fine herbs and spices, cooked to perfection without artificial preservatives and they make your meal delicious? </p>
              <ul class="buyy clearfix">
                <li>$ 45.00</li>
                <li>SHOP NOW!</li>
              </ul>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>

<!--------------------------------------Banenr part Close-------------------------> 

<!---------------------------------------Product part Start------------------------>
<div class="product">
  <div class="container">
    <h3>Our Product</h3>
    <div class="row">
      <div class="col-lg-3 wow fadeInLeft" data-wow-duration="1s" align="center">
        <div class="border"> <img src="images/pro1.png" alt="product" class="img-responsive pro">
          <p>CHOW CHOW<br>
            6 BOTTLES - 17oz</p>
          <img src="images/star.png" alt="star" class="star">
          <p class="rate">$49.00</p>
          <span>ADD TO CART</span> </div>
      </div>
      <div class="col-lg-3 wow fadeInLeft"  data-wow-duration="2s" align="center">
        <div class="border"> <img src="images/pro2.png" alt="product" class="img-responsive pro">
          <p>BARBECUE SAUCE <br>
            6 BOTTLES </p>
          <img src="images/star.png" alt="star" class="star">
          <p class="rate">$49.00</p>
          <span>ADD TO CART</span> </div>
      </div>
      <div class="col-lg-3 wow fadeInRight"  data-wow-duration="2s"align="center">
        <div class="border"> <img src="images/pro3.png" alt="product" class="img-responsive pro">
          <p>BARBECUE SAUCE<br>
            1 GALLON</p>
          <img src="images/star.png" alt="star" class="star">
          <p class="rate">$49.00</p>
          <span>ADD TO CART</span> </div>
      </div>
      <div class="col-lg-3 wow fadeInRight"  data-wow-duration="1s" align="center">
        <div class="border"> <img src="images/pro4.png" alt="product" class="img-responsive pro">
          <p>CHOW CHOW <br>
            6 BOTTLES - 17oz</p>
          <img src="images/star.png" alt="star" class="star">
          <p class="rate">$49.00</p>
          <span>ADD TO CART</span> </div>
      </div>
    </div>
  </div>
</div>

<!-----------------------------------------Product part Start-------------------------> 

<!-----------------------------------------Fresh Roasted part Start------------------------>
<div class="fresh-roast">
  <div class="container wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".2s">
    <div class="col-lg-4 box">
      <h3>FRESH ROASTED SUASE WILL BLOW YOUR MIND</h3>
      <p>He made stops higher and higher up the ladder until he had some of the larger supermarkets giving it shelf space.</p>
      <span>View More</span> </div>
  </div>
</div>

<!-----------------------------------------Fresh Roasted part Close-------------------------> 

<!-----------------------------------------Feature Product part Start------------------------>
<div class="fea-product">
  <div class="container">
    <h3>Feature Product</h3>
    <div class="row">
      <div class="col-lg-3 wow fadeInLeft" data-wow-duration="1s" align="center">
        <div class="border"> <img src="images/pro1.png" alt="product" class="img-responsive pro">
          <p>CHOW CHOW<br>
            12 BOTTLES - 17oz</p>
          <img src="images/star.png" alt="star" class="star">
          <p class="rate">$60.00</p>
          <span>ADD TO CART</span> </div>
      </div>
      <div class="col-lg-3 wow fadeInLeft"  data-wow-duration="2s" align="center">
        <div class="border"> <img src="images/pro2.png" alt="product" class="img-responsive pro">
          <p>BARBECUE SAUCE <br>
            12 BOTTLES </p>
          <img src="images/star.png" alt="star" class="star">
          <p class="rate">$60.00</p>
          <span>ADD TO CART</span> </div>
      </div>
      <div class="col-lg-3 wow fadeInRight"  data-wow-duration="2s" align="center">
        <div class="border">
          <div class="new wow animated zoomIn" data-wow-duration="2s" data-wow-delay="1.5s" > <img src="images/new.png" alt="new"> </div>
          <img src="images/pro3.png" alt="product" class="img-responsive pro">
          <p>BARBECUE SAUCE<br>
            12 GALLON</p>
          <img src="images/star.png" alt="star" class="star">
          <p class="rate">$60.00</p>
          <span>ADD TO CART</span> </div>
      </div>
      <div class="col-lg-3 wow fadeInRight"  data-wow-duration="1s" align="center" >
        <div class="border"> <img src="images/pro4.png" alt="product" class="img-responsive pro">
          <p>CHOW CHOW <br>
            12 BOTTLES - 17oz</p>
          <img src="images/star.png" alt="star" class="star">
          <p class="rate">$60.00</p>
          <span>ADD TO CART</span> </div>
      </div>
    </div>
  </div>
</div>

<!-----------------------------------------Feature Product part Start-------------------------> 

<!-----------------------------------------Company brand logo part Start------------------------>
<div class="brand-logo">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0s" align="center"> <img src="images/brand1.png" alt="brant"> </div>
      <div class="col-lg-4 wow" data-wow-duration="2s" data-wow-delay="0.5s" align="center"> <img src="images/brand2.png" alt="brant" class="a"> </div>
      <div class="col-lg-4 wow fadeInLeft" data-wow-duration="3s" data-wow-delay="1s" align="center"> <img src="images/brand3.png" alt="brant" class="c"> </div>
    </div>
  </div>
</div>

<!-----------------------------------------Company brand logo Product part Start-----------------------> 


<!-----------------------------------------Footer--------------------------------------------> 

<!--Footer part Start-->
<div class="footer">
    <div class="welcome">
        <div class="container">
            <div class="wel  wow fadeInRightBig"  data-wow-duration="2s">
              <h3>wElcOME TO OUR WEBSITE</h3>
              <div class="row">
                  <div class="col-lg-2" align="center";>
                      <img src="images/waiter.png" alt="waiter">
                  </div>
                  <div class="col-lg-10">
                      <p>The Original and real Henry Roberts was an entrepreneur, master chef and inventor from South Carolina who grew up watching his parents and grandfather make sauces the old fashioned way for special occasions.Using his formal training of natural flair and memories of those days, he perfected the Henry Roberts range of sauces. So convinced was he of the sauces' marvelous taste that he became a traveling salesman from store to store in Jacksonville selling sauce. And the peopled loved it!!! He made stops higher and higher up the ladder until he had some of the larger supermarkets giving it shelf space. The blend of products used was so outstanding and of fine quality that the sauce became sought after in the South and was one of the well kept Barbecue secrets. <br>
      
                      Today, testament of this truly delightful product can be seen from the daily bundles of letters received from gourmet diners, chefs and genuine barbecue lovers. Henry Roberts Barbecue Sauces have become renown for their flavor and are popular with consumers in the South and South Eastern United States. They have become favorites of the discerning Barbecue lover and the preferred choice of Gourmet Diners. The growth from a stove-top local sauce to a store shelf item has been truly phenomenal and speaks volumes to the quality of the product.</p>
                  </div>
              </div>
            </div>
            <div class="line">
                <hr>
            </div>
            <div class="row customer-service">
              <div class="col-lg-2">
                  <h3>SERVICES</h3>
                    <ul>
                      <li><a href="#">Contact Us</a></li>
                      <li><a href="#">Returns</a></li>
                      <li><a href="#">Site Map</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-2 left">
                  <h3>My Account</h3>
                    <ul>
                      <li><a href="#">My Account</a></li>
                      <li><a href="#">Order History</a></li>
                      <li><a href="#">Wishlist</a></li>
                      <li><a href="#">Newsletter</a></li>
                    </ul>
                </div>
                <div class="col-lg-2">
                  <h3>Information</h3>
                    <ul>
                      <li><a href="#">About Us</a></li>
                      <li><a href="#">Privacy Policy</a></li>
                      <li><a href="#">Terms & Conditons</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h3>Subscribe Newsletter</h3>
                    <form class="cleafix">
                        <input type="text" placeholder="Your Email Address" />
                        <input type="submit" class="submit" value="Subscribe" /> 
                    </form>  
                    <ul class="social">
                        <li><a href="#"><img src="images/soc1.png" alt="social" /></a></li>
                        <li><a href="#"><img src="images/soc2.png" alt="social" /></a></li>
                        <li><a href="#"><img src="images/soc3.png" alt="social" /></a></li>
                        <li><a href="#"><img src="images/soc4.png" alt="social" /></a></li>
    
                    </ul>  
                </div>
                <div class="col-lg-3">
                  <h3>contact us</h3>
                    <p>2001 Art  Museum Dr,Jacksonville, <br />
                    FL 32207<br /><br />

                    Phone : (904) - 868-7989<br />
                    Email : james@henryroberts.com
                    </p>
                </div>
                
                
                </div>
            <div class="map wow zoomIn" data-wow-duration="2s" data-wow-delay="1">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3444.8883135117994!2d-81.613418!3d30.297241000000003!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e5b67b3c7a268d%3A0xaa5ae103116c4053!2s1+Art+Museum+Dr%2C+Jacksonville%2C+FL+32207%2C+USA!5e0!3m2!1sen!2s!4v1426806613868" width="1170" height="280" frameborder="0" style="border:0"></iframe></div> 
            <div class="foot">
                <div class="row bottom-footer">
                    <div class="col-lg-5">
                        <p>© 2015 All Right Reserved. Henry Roberts.</p>
                    </div>
                    <div class="col-lg-3" align="center">
                        <img src="images/card.png" />
                    </div>
                    <div class="col-lg-4" align="right">
                        <p>Powered By : <b>Sujan Manandhar</b></p>
                    </div>
                </div>
            </div>           
            </div>
        </div>
</div>
    




<!--Footer part Close-->

</body>
</html>