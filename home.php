<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metadata Information -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Gallery Home Page">
    <meta name="keywords" content="HTML,CSS,JavaScript">
    <meta name="author" content="Fadwa Khalil">
    
        <title>Gallery Home Page</title>

    <?php include("includes/mainhead.php"); ?>
    
    <!-- JS to fade container when hover over dropdown nav -->
    <script type="text/javascript">
        $(document).ready(function(){
            $(".dropdown").hover(function(){
                $("#transparent").fadeTo(0, 0.5);
                },function(){
                $("#transparent").fadeTo(0, 1);
            });
        });
    </script>
    <!-- JS to hide the fade color when the page loads -->
    <script type="text/javascript">
      $(window).load(function() {
        $('#loading').hide();
      });
</script>

</head>  
    <body>
    <!-- For page Fade -->
        <div id="loading"><img id="loading-image" src="scr/img/boat.png" alt="Loading..." />
</div>
    <!-- Moving Red Bar -->
        <div id="top">
            <div id="bar"></div>
        </div>
    <!-- Main Container -->
        <div id="transparent" class="container">
    <!-- Moving Boat -->
            <div class="boat"></div>
    <!-- Home header -->
                <div class="row">
                    <div class="col-md-8">
                        <div class="inner cover">
                            <h1 class="cover-heading">Dania Risheg<small><br>Art &amp; Photography Gallery</small></h1>
                            <blockquote>The purpose of art is washing the dust of daily life off our souls.<footer id="footercover">Pablo Picasso.</footer></blockquote>
                        </div>        
                    </div>
    <!-- News Feed Carousal -->
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                        <ol class="carousel-indicators">
                          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                          <li data-target="#myCarousel" data-slide-to="1"></li>
                          <li data-target="#myCarousel" data-slide-to="2"></li>
                          <li data-target="#myCarousel" data-slide-to="3"></li>
                        </ol>

    <!-- Wrapper for carousal slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <h2>Dania has an exibition coming soon..</h2>
                                <div class="carousel-caption">
                                    <h3>Human Sculptures</h3>
                                    <p>The exhibition will be held in New York.</p>
                                </div>
                            </div>
                            <div class="item">
                                <h2>New Theme</h2>
                                <div class="carousel-caption">
                                    <h3>Flowers</h3>
                                    <p>Inspired by Spring and the colors of flowers. Stay tuned for more in the gallery..</p>
                                </div>
                            </div>
                            <div class="item">
                                <h2>Exploring..</h2>
                                <div class="carousel-caption">
                                    <h3>Cultures</h3>
                                    <p>Dania will be traveling to different areas in the world looking for a new taste of art..</p>
                                </div>
                            </div>
                            <div class="item">
                                <h2>Calligraphy</h2>
                                <div class="carousel-caption">
                                    <h3>Visual Art classes</h3>
                                    <p>Classes conducted in Massachusetts every Thursday at 10:30 am.</p>
                                </div>
                            </div>
                        </div>
                    </div>
    <!-- Modal Button -->
                    <div class="col-md-4">
                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Discover Me!</button> 
                    </div>
                </div>
            </div> 
    <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h2 class="modal-title" id="myModalLabel">Discover Me!</h2>
                        </div>
                        <div class="modal-body">
                            <p id="bio">It just kind of happened.  I suppose it&#39;s possible that it&#39;s  my Aunt being an avid amateur photographer and I did admire her a great deal, or it could be that my mother was an artist, or it could be that I because I was gifted with a nice voice family thought I&#39;d be a singer... I couldn&#39;t tell you why for sure. What I can tell you is that I really love what I have as a hobby... Yes, hobby! It is a passion.

I&#39;m an architect, a single mother of a 14 years old beautiful girl. I wanted an online presence that was no longer just about my Art &amp; photography. It needed to be a place for people to get to explore, to really know me. To know I&#39;m more than the images I create. Yes, I&#39;m an artist. But I&#39;m also an explorer, a discoverer, a nurturer and a "singer". All of this is what makes me whole … what makes me, well, me...</p>                  
                            <div class="media">
                                <div class="media-left media-middle"> 
                                    <img class="img-rounded" src="scr/img/modal.jpg" alt="personal picture">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
    <!-- Add breadcrumb -->
                    <ol class="breadcrumb">
                        <li><a href="home.php">Home</a></li>
                    </ol>
    <!-- Footer & nav -->
            <?php include("includes/bottom.php"); ?>
    </body>
</html>
