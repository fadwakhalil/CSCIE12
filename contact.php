<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Metadata Information -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Contact Page">
        <meta name="keywords" content="HTML,CSS,JavaScript">
        <meta name="author" content="Fadwa Khalil">
        
        <title>Contact Page</title>

        <?php include("includes/mainhead.php"); ?>
        <?php include("includes/galleryhead.php"); ?>

        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="scr/css/mycss/contact.css">
    <!-- Add Google JS library -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- JS to add fancybox youtube layout -->
        <script type="text/javascript">
            $(document).ready(function() {
            $(".various").fancybox({
                maxWidth	: 800,
                maxHeight	: 600,
                fitToView	: false,
                width		: '70%',
                height		: '70%',
                autoSize	: false,
                closeClick	: false,
                openEffect	: 'none',
                closeEffect	: 'none'
                });
            });
        </script>
    <!-- JS to add google map -->
        <script>
            if ($("#map-canvas").length > 0){

                  var map;
                  function initialize(){
                    var mapOptions ={
                      zoom:8,
                      center:new google.maps.LatLng(-34.397,150.644)
                    };
                    map =new google.maps.Map(document.getElementById('map-canvas'),
                        mapOptions);
                    var marker=new google.maps.Marker({
                      position:center,
                      animation:google.maps.Animation.BOUNCE
                      });

                    marker.setMap(map);
                  }

                  google.maps.event.addDomListener(window,'load', initialize);

                }
        </script>
        
    <!-- JS to Facebook api connect -->
        <script>
              window.fbAsyncInit = function() {
                FB.init({
                  appId      : '1580615205545310',
                  xfbml      : true,
                  version    : 'v2.3'
                });
              };

              (function(d, s, id){
                 var js, fjs = d.getElementsByTagName(s)[0];
                 if (d.getElementById(id)) {return;}
                 js = d.createElement(s); js.id = id;
                 js.src = "//connect.facebook.net/en_US/sdk.js";
                 fjs.parentNode.insertBefore(js, fjs);
               }(document, 'script', 'facebook-jssdk'));
        </script>
    </head>
        <body>
            <div id="fb-root"></div>
            <div id="bar"></div>
            
    <!-- Main container -->
            <div class="container">
                <div id="sidepic" >
                    <img  src="scr/img/Dania.jpg" alt="" />
                </div>
    <!-- PHP to send email via Apache server -->
            <?php
                //if the sender email is filled out, send email
                if ( (isset($_REQUEST['email'])) &&  !(empty($_REQUEST['email'])) ) {

                //Email information
                    $admin_email = "fadwakhalil@gmail.com";
                    $email = $_REQUEST['email'];
                    $subject = $_REQUEST['subject'];
                    $comment = $_REQUEST['comment'];

                //send email
                    $message = $comment .  "\r\n \r\n Message From: " . $email . "\r\n";
                    mail($admin_email, "$subject", $message);

                //Email response

                    echo '<div class="response">Thank you for contacting me!</div>';
                    unset($email);
                    unset($subject);
                    unset($comment);
                    unset($admin_email);
                }

                //if "email" variable is not filled out, display the form and show required alert
                else	{
            ?>

                     <form id="form" class="form-inline" method="post">
                         <div class="form-group">
                             <label class="sr-only" for="email">Email address</label>
                             <input name="email" type="email" class="form-control" id="email" size="18" placeholder="Enter email" required>
                         </div>
                        <br><br>
                         <div class="form-group">
                             <label class="sr-only" for="subject">Subject</label>
                             <input name="subject" type="text" class="form-control" id="subject" size="18" placeholder="Enter Subject" required>
                         </div>
                        <br><br>
                         <div class="form-group">
                             <label class="sr-only" for="comment">Message</label>
                             <textarea name="comment" class="form-control" id="comment"  rows="15" cols="40"></textarea>
                         </div>
                        <br>
                         <button type="submit" class="btn btn-default">Send!</button>
                    </form>

                <?php
                    }
                ?>
    <!-- Locate headers -->
                        <div id="contactheader">
                            <ul>
                                <li><h1>&nbsp;Look for Dania</h1></li>
                                <li><h1>Message Dania</h1></li>
                            </ul>
                        </div>
    <!-- Contact details -->
                        <div class="center-block">
                            <ul>
                                <li ><div id="map_canvas">
                                    <a class="various fancybox.iframe" href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2945.126603213182!2d-71.179368!3d42.425039999999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e3763b5ed5931d%3A0x901f15f6ea2050f6!2s1+Watermill+Pl%2C+Arlington%2C+MA+02476!5e0!3m2!1sen!2sus!4v1430612375881"><img src="scr/img/locateme.png" alt="" ><h6>Locate Me!</h6></a></div></li>
                                <li><div class="fb-follow" data-href="https://www.facebook.com/zuck" data-colorscheme="light" data-layout="button" data-show-faces="true"></div></li>
                                <li><a target="_blank"  href="https://www.linkedin.com/pub/fadwa-khalil/17/63b/238"><img src="https://static.licdn.com/scds/common/u/img/webpromo/btn_liprofile_blue_80x15.png" width="80" height="17" alt="View Fadwa Khalil's profile on LinkedIn"><h6>Connect with Me!</h6></a></li>
                            </ul>
                        </div>
    <!-- Add breadcrumb -->
                    <ol class="breadcrumb">
                        <li><a href="home.php">Home</a></li>
                        <li class="active">Contact</li>
                    </ol>
    <!-- Footer & nav -->
            <?php include("includes/bottom.php"); ?>
            </div>
    </body>
</html>





