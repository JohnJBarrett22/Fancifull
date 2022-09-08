<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="google-site-verification" content="iFDuQJgQtGtF_Ej-sHWnUu6EWTTyasOwARHlXpmKSzE" />
    <title>Fancifull Gift Baskets - Los Angeles, Hollywood, California</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Fancifull Gift Baskets">

    <link rel="shortcut icon" href="favicon.png">

    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="dist/styles/main.css">
    <style>
        #main-container {
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            position: fixed;
            overflow: auto;
            z-index: 4;
            display: none;
        }

        div#popupContact {
            position: absolute;
            left: 40%;
            top: 17%;
            margin-left: -202px;
            z-index: 2;
        }

        #form {
            width: 630px;
            margin-top: 10%;
            position: relative;
            font-family: 'Montserrat', sans-serif;
            background-color: #C8D5A6;
        }

        #formImage {
            width: 200px;
        }

        #close {
            width: 20px;
            position: absolute;
            left: 600px;
            top: 10px;
            cursor: pointer;
        }

        #formHeader {
            font-size: 50px;
            padding-left: 30px;
            position: absolute;
            top: 40px;
        }

        #formText {
            position: absolute;
            top: 125px;
            left: 235px;
        }

        #submit {
            position: absolute;
            top: 190px;
            left: 430px;
            padding-top: 7px;
            padding-bottom: 7px;
            padding-left: 13px;
            padding-right: 13px;
            background-color: #5B272D;
            color: white;
            text-decoration: none;
            cursor: pointer;
        }

        #main-page {
            margin: auto;
            font-family: 'Montserrat', sans-serif;
            text-align: center;
        }

        #transparent {
            position: absolute;
            top: 0;
            left: 0;
            display: none;
            z-index: 1;
        }

        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            padding-top: 30px;
            height: 0;
            overflow: hidden;
        }

        .video-container iframe,
        .video-container object,
        .video-container embed {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>

    <script type="text/javascript">
        $(document).ready(function() {
            var showed = readCookie('subscribed');
            if (showed != 'yes') {
                $('#loginModal').modal('show');
            }
            $("#loginModal").on("hidden.bs.modal", function() {
                document.cookie = "subscribed=yes;max-age=1900800";
            });
        });

        function readCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }

        function saveSubscriber() {
            var email = $('#email').val();
            //alert(email);
            var data = "email=" + email;
            $.ajax({
                url: 'saveSubscriber.php',
                type: 'POST',
                data: data,
                success: function(data) {
                    //called when successful
                    if (data == 'saved') {
                        $('#loginModal .close').click();
                        setTimeout(alert("Thank you!"), 1000);
                        setTimeout(createCookie, 5000);
                    }
                },
                error: function(e) {
                    alert('error');
                    //called when there is an error
                    //console.log(e.message);
                }
            });
        }

        function createCookie() {
            document.cookie = "subscribed=yes;max-age=7776000";
        }

        function check_empty() {
            if ($('#email').val() == "") {
                alert("Please enter your email");
            } else {

                if (isEmail($('#email').val())) {
                    saveSubscriber();
                } else {
                    alert('Please enter a valid email');
                    //
                }
                //alert("Email Submitted Successfully...");
            }
        }

        function isEmail(email) {
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            var esto = regex.test(email);
            return esto;
        }
        //Function To Display Popup




        //Submits the email on click of submit and checks if email is empty
        $("#submit").on("click", function() {
            check_empty();
        });
        //popup is hidden on load of the screen

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-1803677-1']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') +
                '.google-analytics.com/ga.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga);
        })();
    </script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <!--<button class="btn btn-primary btn-sm" data-target="#loginModal" data-toggle="modal">Subscribe</button>-->
                <div class="modal fade" tabindex="-1" id="loginModal" data-keyboard="false" data-backdrop="static">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Subscribe to our Newsletter</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 hidden-xs"><img src="images/chc6_crop.jpg"></div>
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                        <h1>Join Us!</h1>
                                        <p>Be among the first to find out about special offers and exciting new products we have found. You'll also be entered into a drawing to win a Fancifull Gift Certificate.</p>
                                        <form action="#" method="POST" name="form">
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Email address" type="text" id="email" />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" onclick="check_empty()">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper">

        <?php include('site-header.php'); ?>
        <?php include('menu15-version2.php'); ?>

        <main>
            <div id="myCarousel" class="carousel slide hidden-xs" data-ride="carousel">
                <!-- Indicators -->
                <!--                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
-->
                <div class="carousel-inner" role="listbox">
                    <!--xmas-2020-slider.jpg virtual-meetings-1263x300.jpg-->
                    
                    
<!--                     
                    <div class="item active">
                       <img class="first-slide" src="images/carousel/summer.png" alt="First slide">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1 style="margin-top:-15px;">Holiday Gift Baskets</h1>
                                <p>For colleagues and clients<br />family and friends<br />our gifts bring delight<br />from beginning to end!</p>

                            </div>
                        </div>
                    </div> -->


                    <div class="item active">
                        <a href="https://fancifullgiftbaskets.com/wine-gift-baskets.php">
                            <img class="first-slide" src="images/Wineslider22.png" alt="First slide">
                            <div class="container">
                                <div class="carousel-caption">
    <!--                               <h1 style="margin-top:-15px;">Wine Gift Baskets</h1>
                                    
                                    <p><a class="btn btn-lg btn-primary" href="wine-gift-basket-top.php" role="button">Order
                                            a great wine basket here</a></p>
    -->
                                </div><!-- .carousel-caption -->
                            </div><!-- .container -->
                        </a>
                    </div><!-- .item -->

                    <div class="item">
                        <a href="https://fancifullgiftbaskets.com/gourmet-gift-baskets.php">
                            <img class="second-slide" src="images/gourmet_food_slider.jpg" alt="Second slide">
                            <div class="container">
                                <!-- <div class="carousel-caption">
                                    <h1 style="margin-top:-15px;">Welcome Gifts</h1>
                                    <p>Make a great impression<br />with a welcoming gift<br />for your arriving guests and VIPs</p>
                                    <p><a class="btn btn-lg btn-primary" href="hotel-welcome-gift-baskets.php" role="button">Order Here!</a></p>
                                </div>.carousel-caption -->
                            </div><!-- .container -->
                        </a>
                    </div><!-- .item -->


                    <div class="item">
                        <a href="https://fancifullgiftbaskets.com/hotel-welcome-gift-baskets.php">
                            <img class="second-slide" src="images/carousel/welcome-baskets.png" alt="Second slide">
                            <div class="container">
                                <!-- <div class="carousel-caption">
                                    <h1 style="margin-top:-15px;">Welcome Gifts</h1>
                                    <p>Make a great impression<br />with a welcoming gift<br />for your arriving guests and VIPs</p>
                                    <p><a class="btn btn-lg btn-primary" href="hotel-welcome-gift-baskets.php" role="button">Order Here!</a></p>
                                </div>.carousel-caption -->
                            </div><!-- .container -->
                        </a>
                    </div><!-- .item -->


                    <div class="item">
                        <img class="second-slide" src="images/carousel/baby-gift-basket-1263x300.jpg"
                            alt="Second slide">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1 style="margin-top:-15px;">Baby Gift Baskets</h1>
                                <p>The dawn of a new life<br />is something to celebrate!</p>
                                <p><a class="btn btn-lg btn-primary" href="/baby-gift-baskets.php" role="button">SEND A BABY BASKET</a></p>
                            </div><!-- .carousel-caption -->
                        </div><!-- .container -->
                    </div><!-- .item -->


                    <div class="item">
                        <a href="https://fancifullgiftbaskets.com/flowers-for-all-occasions.php">
                            <img class="second-slide" src="images/carousel/flowers.png" alt="Third slide">
                            <div class="container">
                                <div class="carousel-caption">
    <!--                                <h1 style="margin-top:-15px;">Fancifull Flowers</h1>
                                    <p>Why send ordinary<br />when you can send<br />Extraordinary? </p>
                                    <p><a class="btn btn-lg btn-primary" href="\flowers.php" role="button">SEND FLOWERS HERE</a></p>
    -->
                                </div><!-- .carousel-caption -->
                            </div><!-- .container -->
                        </a>
                    </div><!-- .item -->

                </div><!-- .carousel-inner -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div><!-- .carousel -->
            
            <div class="container featured-homepage">
                <div class="row">
                    <h1 class="home-title visible-xs">Gift Baskets with a Personal Touch</h1>
                    <section class="col-md-12 col-lg-4 hidden-xs hidden-sm">
                        <h4 class="section-title">Why We Are Different</h4>
                        <blockquote class="ff-quote">We have long said if we won't eat it we won't bring it in our shop. We mean it.</blockquote>
                        <p class="terry-wally">Since 1987 we have been sharing our passion for the good things in life by creating artisan baskets and filling our shop with real food and unusual finds so you can send a thoughtful gift with pride and ease.</p>
                        <a class="read" href="http://www.fancifullgiftbaskets.com/about-us.php"><strong>Read more about us</strong></a>
                        <a class="yelp-reviews" href="http://www.yelp.com/biz/fancifull-gift-baskets-los-angeles-2">Yelp Reviews</a>
                    </section>
                    <div class="mobile-flex">
                        <!--  <section class="featured col-sm-6 col-md-6 col-lg-4">
                            <a href="champagne-gift-baskets.php">
                            <h3 style="text-align:center;">Congratulate the Winners!</h3>
                                <img class="img-responsive" src="/images/champagnecelebration-360-225.jpg" alt="champagne gift baskets">
                                <p style="font-size:17px;font-weight:600;text-align:center;">Flowers, Chocolate, Champagne...</p> 
                            </a>
                        </section>
-->
                        <!-- VALENTINE GIFTS -->
<!--                        <section class="featured col-sm-6 col-md-6 col-lg-4">
                            <a href="valentine-gift-baskets.2021.php">
                            <h3 style="text-align:center;">Valentine's Day</h3>
                            <img class="img-responsive" src="/images/homepage/vday19.jpg" alt="flowers, chocolates and sweets for your beloved"></a>
                            <a href="valentine-gift-baskets.2021.php"><p style="font-size:17px;font-weight:600;text-align:center;">Chocolate, Cheese & Champagne</p></a>
                        </section>
-->                        
                        <!-- <section class="featured col-sm-6 col-md-6 col-lg-4">
                            <a href="https://www.rescue.org/" target="_blank" rel="noopener noreferrer">
                                <h3 style="text-align:center;">Help for Ukraine</h3>
                                <img class="img-responsive" src="/images/irc-donation-effort.jpg" alt="Help Ukraine with your purchase!"></a>
                            <a href="https://www.rescue.org/" target="_blank" rel="noopener noreferrer">
                                <p style="font-size:17px;font-weight:600;text-align:center;">Learn more about the IRC</p>
                            </a>
                        </section> -->

                        <!-- LUNAR NEW YEAR -->
                        <!-- <section class="featured col-sm-6 col-md-6 col-lg-4">
                            <a href="lunar-new-year-gift-basket.php">
                                <h3 style="text-align:center;">Lunar New Year 2022</h3>
                                <img class="img-responsive" src="/images/lunar-new-year-gift-basket-360x225.jpg" alt="a holiday basket with fine foods and wine">
                                <p style="font-size:17px;font-weight:600;text-align:center;">Year of the Tiger</p> 
                            </a>
                        </section> -->
                        <!-- HOLIDAY GIFTS -->
                        <!--                       <section class="featured col-sm-6 col-md-6 col-lg-4">
                            <a href="champagne-gift-baskets.php">
                                <h3 style="text-align:center;">New Year Gifts</h3>
                                <img class="img-responsive" src="/images/seasons-greetings-360x225.jpg" alt="a holiday basket with fine foods and wine">
                                <p style="font-size:17px;font-weight:600;text-align:center;">Order Now!</p> 
                            </a>
                        </section>
-->
                        <!-- JANUARY GIFTS -->
                        <!--                       <section class="featured col-sm-6 col-md-6 col-lg-4">
                            <a href="get-well-gift-baskets.php">
                                <h3 style="text-align:center;">Healthy New Year Gifts</h3>
                                <img class="img-responsive" src="/images/fine-food-and-fresh-fruit-gift-basket-360x225.jpg" alt="a holiday basket with fine foods and wine"></a>
                   <a href="get-well-gift-baskets.php"><p style="font-size:18px;font-weight:600;text-align:center;color:red;">Baskets On Sale!</p> 
                            </a>
                        </section>
-->
                        <!-- Quarantine -->
                        <!--                       <section class="featured col-sm-6 col-md-6 col-lg-4">
                            <a href="virtual-event-gifts.php">
                                <h3 style="text-align:center;">COVID</h3>
                                <img class="img-responsive" src="images/homepage/quarantine.jpg" alt="gifts to unite us"></a>
                        </section>
-->
                        <!-- EASTER PASSOVER -->
                        <!--                       <section class="featured col-sm-6 col-md-6 col-lg-4">
                            <a href="easter-gift-baskets.php">
                                <h3 style="text-align:center;">Easter Gifts</h3></a>
                                <img class="img-responsive" src="/images/homepage/easter-passover-360x225.jpg" alt="easter and passover gifts">
                            <a href="kosher-gift-baskets.php">
                                <h3 style="text-align:center;">Passover Gifts</h3>
                            </a>
                        </section>
-->
                        <!-- Fathers Day -->
                        <!--                       <section class="featured col-sm-6 col-md-6 col-lg-4">
                            <a href="fathers-day-gift-baskets.php">
                                <h3 style="text-align:center;">Father's Day</h3>
                                <img class="img-responsive" src="images/homepage/fdaywa.jpg" alt="Father Wally and our two kids"></a>
                        </section>
-->
                        <!-- THANKSGIVING GIFTS -->
                        <!--                       <section class="featured col-sm-6 col-md-6 col-lg-4">
                            <a href="holiday-gift-baskets.php">
                                <h3 style="text-align:center;">Holiday Gifts</h3>
                                <img class="img-responsive" src="/images/homepage/sleigh20-home-page.jpg" alt="a holiday sleigh full of treats">
                                <p style="font-size:17px;font-weight:600;text-align:center;">Order Here</p> 
                            </a>
                        </section>
-->

          							<!-- EASTER PASSOVER -->
<!--                        <section class="featured col-sm-6 col-md-6 col-lg-4">
                            <a href="easter-gift-baskets.php">
                                <h3 style="text-align:center;">Easter & Passover Gifts</h3></a>
                                <a href="easter-gift-baskets.php"><img class="img-responsive" src="/images/homepage/neuhaus-egg-truffles-homepg.jpg" alt="easter and passover gifts"></a>																							
                            <a href="easter-gift-baskets.php">
                                <h3 style="text-align:center;">Easter & Passover Gifts</h3>
                            </a>
                        </section>
-->
	
          							<!-- Mothers Day-->
<!--                        <section class="featured col-sm-6 col-md-6 col-lg-4">
                            <a href="mothers-day-gift-baskets.php">
                                <h3 style="text-align:center;">Mothers Day Gifts</h3></a>
                                <a href="mothers-day-gift-baskets.php"><img class="img-responsive"
                                 src="/images/homepage/loveyoumom-homepg.jpg" alt="mothers-day-gifts"></a>
                                <a href="mothers-day-gift-baskets.php">
                                <p style="font-size:17px;font-weight:600;text-align:center;">Send Something Special</p>
                            </a>
                        </section>
-->

          							<!-- Holiday Gifts-->
<!--                        <section class="featured col-sm-6 col-md-6 col-lg-4">
                            <a href="holiday-gift-baskets.php">
                                <h3 style="text-align:center;">Holiday Gifts</h3></a>
                                <a href="holiday-gift-baskets.php"><img class="img-responsive"
                                 src="/images/homepage/xmas2021bright.jpg" alt="holiday-gifts"></a>
                                <a href="holiday-gift-baskets.php">
                                <p style="font-size:17px;font-weight:600;text-align:center;">Send Something Special</p>
                            </a>
                        </section>
-->
          							<!-- Quarantine -->
<!--                       <section class="featured col-sm-6 col-md-6 col-lg-4">
                            <a href="gift-card.php">
                                <h3 style="text-align:center;">Let Them Choose!</h3>
                                <img class="img-responsive" src="images/homepage/gift-card-360x225.jpg" alt="Send a Gift Card"></a>
                            <a href="celebration-gift-baskets.php">
                                <h3 style="text-align:center;">Gifts for Events, Celebrations, Virtual Meetings</h3>
                            </a>
                        </section>
-->



                        <!-- BABY GIFTS -->
                        <!--                     <section class="featured col-sm-6 col-md-6 col-lg-4">
                            <a href="baby-gift-baskets.php">
                                <h3 style="text-align:center;">Baby Gifts</h3>
                                <img class="img-responsive" src="images/homepage/baby-gift-basket-360x225.jpg" alt="Baby Wagon Gift">
                                <p style="font-size:17px;font-weight:600;text-align:center;">Welcome To The World</p>
                            </a>
                        </section>
-->
                        <!-- GET WELL / WELLNESS -->
                        <!--                    <section class="featured col-sm-6 col-md-6 col-lg-4">
                            <a href="get-well-gift-baskets.php">
                                <h3 style="text-align:center;">Comfort and Caring</h3>
                                <img class="img-responsive" src="images/homepage/wellness-360x225.jpg" alt="get-well-basket">
                                <p style="font-size:17px;font-weight:600;text-align:center;">Cheer them up - Cheer them on!</p>
                            </a>
                        </section>
-->
                        <!-- GIFT CARD -->
<!--                    <section class="featured col-sm-6 col-md-6 col-lg-4">
                            <a href="gift-card.php">
                                <h3 style="text-align:center;">Send a Gift Card!</h3>
                                <img class="img-responsive" src="images/homepage/gift-card-360-225.jpg" alt="get-well-basket">
                                <p style="font-size:17px;font-weight:600;text-align:center;">They can pick anything they like!</p>
                            </a>
                        </section>
-->
                        <!-- Shop Our Store -->
                        <!--                    <section class="featured col-sm-6 col-md-6 col-lg-4">

                                <h3 style="text-align:center;">Come To Our Store</h3>
                                <img class="img-responsive" src="images/homepage/ffstore-360x225.jpg" alt="get-well-basket">
                                <p style="font-size:17px;font-weight:600;text-align:center;">Cheese, Bread, Butter, Salami - F ne Foods<br>5617 Melrose, L.A., 90038 ph: 323.466.7654</p>
-->

                        <!--                            </a> -->
                        <!-- </section> -->


                        <!-- Fancifull Events -->
<!--                        <section class="featured col-sm-6 col-md-6 col-lg-4">
                            <a href="ticket2.php">
                                <h3 style="text-align:center;">Don't Miss Out</h3>
                                <img class="img-responsive" src="images/tea-time-tasting.jpg" alt="Tea Time Tasting">
                                <p style="font-size:17px;font-weight:600;text-align:center;">Tea Time Tasting - Apr 2nd - CLICK HERE</p>
                            </a>
                        </section>
-->

                        <!-- Christmas In August -->
                        <!--                     <section class="featured col-sm-6 col-md-6 col-lg-4">
                            <a href="christmas-in-august-2019.php">
                                <h3 style="text-align:center;">Christmas in August</h3>
                                <img class="img-responsive" src="images/homepage/champagne-celebration-homepage.jpg" alt="Christmas In August">
                                <p style="font-size:17px;font-weight:600;text-align:center;">Save 10% on Holiday Orders</p>
                            </a>
                     </section>
-->
                        <!-- Open House -->
<!--                     <section class="featured col-sm-6 col-md-6 col-lg-4">
                            <a href="fancifull-open-house.php">
                                <h3 style="text-align:center;">Fall Open House</h3>
                                <img class="img-responsive" src="images/homepage/fall-open-house-360x225.jpg" alt="Fancifull Open House">
                                <p style="font-size:17px;font-weight:600;text-align:center;">Come Celebrate With Us</p>
                            </a>
                     </section>
-->

                        <!-- Bubbles On Sale -->
                        <!--                     <section class="featured col-sm-6 col-md-6 col-lg-4">
                            <a href="gift-baskets-on-sale.php">
                                <h3 style="text-align:center;">Bubbles On Sale!</h3>
                                <img class="img-responsive" src="images/homepage/bubbles-on-sale.jpg" alt="Sale on Champagne and Beer">
                                <p style="font-size:17px;font-weight:600;text-align:center;">Champagne and Beer On Sale</p>
                            </a>
                     </section>
-->
                        <!-- FOR WOMEN BY WOMEN -->
<!--                     <section class="featured col-sm-6 col-md-6 col-lg-4">
                            <a href="wonder-women.php">
                                <h3 style="text-align:center;">Wonder Women</h3>
                                <img class="img-responsive" src="images/homepage/wonder-women-360x225.jpg" alt="wonder women basket">
                                <p style="font-size:17px;font-weight:600;text-align:center;">Made For Women, By Women</p>
                            </a>
                     </section>
-->
                        <!-- JULY 4th -->
<!--                                <h3 style="text-align:left;">&nbsp;</h3>
                     <section class="featured col-sm-6 col-md-6 col-lg-4">
                                <img class="img-responsive" src="temp/July-4th-hours.png" alt="July 4th Hours">
                     </section>
-->
                     <section class="featured col-sm-6 col-md-6 col-lg-4">
                                <h3 style="text-align:center;">&nbsp;</h3>
                     <a href="https://www.fancifullgiftbaskets.com/kosher-gift-baskets.php"><img class="img-responsive" src="/images/rosh_hashanah.jpg" alt="Rosh Hashanah"></a>
                     </section>

                        <!-- WCK -->
<!--                     <section class="featured col-sm-6 col-md-6 col-lg-4">
                            <a href="https://www.fancifullgiftbaskets.com/blog/world-central-kitchen-feeding-the-world/">
                                <h3 style="text-align:center;">A Gift that helps feed others!</h3>
                                <img class="img-responsive" src="images/wck.png" alt="help feed others">
                                <p style="font-size:17px;font-weight:600;text-align:center;">Find out more on our blog</p>
                            </a>
                     </section>
-->

                        <!-- FOR BUILD YOUR GIFT -->
                        <section class="featured col-sm-6 col-md-6 col-lg-4">
                            <a href="build-your-gift-new.php">
                                <h3 style="text-align:center;">Build Your Own Gift</h3>
                                <img class="img-responsive" src="images/custom-basket-banner.jpg"
                                    alt="Featured Item">
                                <p style="font-size:17px;font-weight:600;text-align:center;">Or buy something for
                                    yourself!</p>
                            </a>
                        </section>

                    </div><!-- .mobile-flex -->
                </div>
                <!--/row-->
            </div>
            <!--/container-->

            <div class="container featured-category">
                <h4 class="section-title">Featured Categories</h4>
                <div class="row mobile-flex">
                    <section class="grid-basket col-sm-12 col-md-3">
                        <h2 class="featured-cat-title">Gourmet</h2>
                        <strong>GOURMET GIFT BASKETS</strong>
                        <p>We feature a great variety of <br />ingredients and containers<br />
                            &diams; Locally Handmade Product<br />
                            &diams; European Specialities<br />
                            &diams; Fun Snacks to Fine Pat&eacute;<br />
                            &diams; Cater to any diet<br />
                            &diams; Substitutions Welcomed<br />
                            &diams; Fast, Reliable Service</p>
                    </section>
                    <figure class="grid-basket col-sm-4 col-md-3">
                        <a href="http://www.fancifullgiftbaskets.com/gourmet-gift-baskets-top.php"><img
                                class="img-responsive" src="images/fancifull-favorites-gourmet-gift-basket-hcr.jpg" alt=""></a>
                        <figcaption>
                            <h3 class="category-title">
                                <a href="http://www.fancifullgiftbaskets.com/gourmet-gift-baskets-top.php"><strong>Gourmet
                                        Gift Baskets</strong></a>
                            </h3>
                            <!--                           California Naturally Gift Basket. -->
                        </figcaption>
                    </figure>
                    <figure class="grid-basket col-sm-4 col-md-3">
                        <a href="http://www.fancifullgiftbaskets.com/cookie-gift-baskets.php"><img
                                class="img-responsive" src="images/bakery-box-hcr.jpg" alt=""></a>
                        <figcaption>
                            <h3 class="category-title">
                                <a href="http://www.fancifullgiftbaskets.com/cookie-gift-baskets.php"><strong>Bakery
                                        Gift Baskets</strong></a>
                            </h3>
                        </figcaption>
                    </figure>
                    <figure class="grid-basket col-sm-4 col-md-3">
                        <a href="http://www.fancifullgiftbaskets.com/special-diet-gift-baskets.php"><img
                                class="img-responsive" src="images/vegan-delicious-gift-basket-hcr.jpg"
                                alt=""></a>
                        <figcaption>
                            <h3 class="category-title"><a
                                    href="http://www.fancifullgiftbaskets.com/special-diet-gift-baskets.php"><strong>Vegan, Gluten-free Gift Baskets...</strong></a></h3>
                        </figcaption>
                    </figure>
                </div><!-- .row -->
            </div><!-- .container -->

            <div class="container featured-category">
                <div class="row mobile-flex">
                    <section class="col-sm-12 col-md-3">
                        <h2 class="featured-cat-title">Wine and Beer</h2>
                        <strong>Wine Gift Baskets</strong>
                        <p>We are the only gift basket service that allows you to upgrade your wine on any basket as
                            well as bring in your own if you have a special bottle to include. </p>


                        <!--                        <p>At Fancifull you can choose the wine you want in your basket. <br />
                        We have options listed and you can check out our wine list to see others we have. <br />
                        Call if you don't see exactly what you like or to speak with our wine expert. <br />
                        We are constantly tasting wines for our gift baskets and updating our selection.<br />
                        Need Something Special? - call us</p>
-->
                    </section>
                    <figure class="grid-basket col-sm-4 col-md-3">
                        <a href="http://www.fancifullgiftbaskets.com/wine-gift-basket-top.php"><img
                                class="img-responsive" src="images/homepage/wine-gift-basket-big-hcr.jpg" alt=""></a>
                        <figcaption>
                            <h3 class="category-title">
                                <a href="http://www.fancifullgiftbaskets.com/wine-gift-basket-top.php"><strong>Wine Gift
                                        Baskets</strong></a>
                            </h3>
                        </figcaption>
                    </figure>
                    <figure class="grid-basket col-sm-4 col-md-3">
                        <a href="http://www.fancifullgiftbaskets.com/champagne-gift-baskets.php"><img
                                class="img-responsive" src="images/homepage/solid-gold-champagne-basket-hcr.jpg"
                                alt=""></a>
                        <figcaption>
                            <h3 class="category-title">
                                <a href="http://www.fancifullgiftbaskets.com/champagne-gift-baskets.php"><strong>Champagne
                                        Gift Baskets</strong></a>
                            </h3>
                        </figcaption>
                    </figure>
                    <figure class="grid-basket col-sm-4 col-md-3">
                        <a href="http://www.fancifullgiftbaskets.com/beer-gift-baskets.php"><img class="img-responsive"
                                src="images/beer7-hcr.jpg" alt=""></a>
                        <figcaption>
                            <h3 class="category-title">
                                <a href="http://www.fancifullgiftbaskets.com/beer-gift-baskets.php"><strong>Beer Gift
                                        Baskets</strong></a>
                            </h3>
                        </figcaption>
                    </figure>
                </div><!-- .row -->
            </div><!-- .container -->

            <div class="container featured-category">
                <div class="row mobile-flex">
                    <section class="col-sm-12 col-md-3">
                        <h2 class="featured-cat-title"><a id="custom">Custom Gift Baskets</a></h2>
                        <p>There are many reasons to order a custom gift. The most popular are:<br />
                            &diams; A Very Special Someone <br />&nbsp; requires a Very Special Gift.<br />
                            &diams; You have branded items to use.<br />
                            &diams; Welcoming clients to a convention<br />
                            &diams; Auction and Promotional Baskets<br />
                            &diams; New Product Launches<br />
                            Whatever you need: a small token, a magnificent display, a slew of baskets, <br />we can do
                            it.
                        </p>
                    </section>
                    <figure class="grid-basket col-sm-4 col-md-3">
                        <a href="http://www.fancifullgiftbaskets.com/custom-basket-order-page.php"><img
                                class="img-responsive" src="images/homepage/hyde-at-staples-custom-basket-hcr.jpg"
                                alt=""></a>
                        <figcaption>
                            <h3 class="category-title">
                                <a href="http://www.fancifullgiftbaskets.com/custom-basket-order-page.php"><strong>Branding
                                        Gift Baskets</strong></a>
                            </h3>
                            Hyde at Staples custom basket.
                        </figcaption>
                    </figure>
                    <figure class="grid-basket col-sm-4 col-md-3">
                        <a href="http://www.fancifullgiftbaskets.com/custom-basket-order-page.php"><img
                                class="img-responsive" src="images/homepage/night-at-the-museum-custom-basket-hcr.jpg"
                                alt=""></a>
                        <figcaption>
                            <h3 class="category-title">
                                <a href="http://www.fancifullgiftbaskets.com/custom-basket-request-page.php"><strong>Custom
                                        Gift Baskets</strong></a>
                            </h3>
                            Night at the Museum Basket
                        </figcaption>
                    </figure>
                    <figure class="grid-basket col-sm-4 col-md-3">
                        <a href="http://www.fancifullgiftbaskets.com/corporate-gift-baskets.php"> <img
                                class="img-responsive" src="images/homepage/product-promotion-gift-boxes-hcr.jpg"
                                alt=""></a>
                        <figcaption>
                            <h3 class="category-title">
                                <a href="http://www.fancifullgiftbaskets.com/corporate-gift-baskets.php"><strong>Product
                                        Promotions</strong></a>
                            </h3>
                            Custom Promotional Designs
                        </figcaption>
                    </figure><!-- .col-md-3 -->
                </div><!-- .row -->
            </div><!-- .container -->

            <div class="container container--listing">
                <h4 class="section-title">Other Categories</h4>
                <div class="row mobile-flex">
                    <figure class="grid-basket col-sm-4 col-md-3">
                        <a href="http://www.fancifullgiftbaskets.com/baby-gift-baskets.php"><img class="img-responsive"
                                src="images/homepage/baby-gift-basket.jpg" alt=""></a>
                        <figcaption>
                            <h3 class="category-title">
                                <a href="http://www.fancifullgiftbaskets.com/baby-gift-baskets.php"><strong>Baby Gift
                                        Baskets</strong></a>
                            </h3>
                            <!--                            Memorable gifts to welcome the new baby  -->
                        </figcaption>
                    </figure>
                    <figure class="grid-basket col-sm-4 col-md-3">
                        <a href="http://www.fancifullgiftbaskets.com/chocolate-gift-baskets.php"><img
                                class="img-responsive" src="images/homepage/chocolate-gift-basket.jpg"
                                alt="a gift box containing premium chocolates, chocolate truffles, chocolate cookies and other chocolaty delights"></a>
                        <figcaption>
                            <h3 class="category-title">
                                <a href="http://www.fancifullgiftbaskets.com/chocolate-gift-baskets.php"><strong>Chocolate
                                        Gift Baskets</strong></a>
                            </h3>
                        </figcaption>
                    </figure>
                    <figure class="grid-basket col-sm-4 col-md-3">
                        <a href="condolence-gift-baskets.php"><img class="img-responsive"
                                src="images/homepage/condolence-gift-basket.jpg"
                                alt="a basket with cheese, fruit, crackers and other fine foods as well as a flower arrangement or plant"></a>
                        <figcaption>
                            <h3 class="category-title">
                                <a href="condolence-gift-baskets.php"><strong>Condolence Gift Baskets</strong></a>
                            </h3>
                        </figcaption>
                    </figure>
                    <figure class="grid-basket col-sm-4 col-md-3">
                        <a href="http://www.fancifullgiftbaskets.com/flowers.php"><img class="img-responsive"
                                src="images/flowers.png" alt=""></a>
                        <figcaption>
                            <h3 class="category-title">
                                <a href="http://www.fancifullgiftbaskets.com/flowers.php"><strong>Flowers</strong></a>
                            </h3>
                        </figcaption>
                    </figure>
                </div>
                <div class="row mobile-flex">

                    <figure class="grid-basket col-sm-4 col-md-3">
                        <a href="http://www.fancifullgiftbaskets.com/hotel-welcome-gift-baskets.php"><img
                                class="img-responsive" src="images/homepage/hotel-welcome-basket.jpg" alt=""></a>
                        <figcaption>
                            <h3 class="category-title">
                                <a href="http://www.fancifullgiftbaskets.com/hotel-welcome-gift-baskets.php"><strong>Hotel
                                        Welcome Gift Baskets</strong></a>
                            </h3>
                        </figcaption>
                    </figure>
                    <figure class="grid-basket col-sm-4 col-md-3">
                        <a href="http://www.fancifullgiftbaskets.com/get-well-gift-baskets.php"><img
                                class="img-responsive" src="images/homepage/get-well-basket.jpg" alt=""></a> <figcaption>
                        <h3 class="category-title"> <a
                                href="http://www.fancifullgiftbaskets.com/get-well-gift-baskets.php"><strong>Get Well
                                    Gift Baskets</strong></a></h3>
                        </figcaption>
                    </figure>
                    <figure class="grid-basket col-sm-4 col-md-3">
                        <a href="http://www.fancifullgiftbaskets.com/tea-&-coffee-gift-baskets.php"><img
                                class="img-responsive" src="images/homepage/tea-basket-flowers.jpg" alt=""></a>
                        <figcaption>
                            <h3 class="category-title"><a
                                    href="http://www.fancifullgiftbaskets.com/tea-&-coffee-gift-baskets.php"><strong>Coffee
                                        And Tea Baskets</strong></a></h3>
                        </figcaption>
                    </figure>
                    <figure class="grid-basket col-sm-4 col-md-3">
                        <a href="http://www.fancifullgiftbaskets.com/pamper-&-bath-gift-baskets.php"><img
                                class="img-responsive" src="images/homepage/pamper-gift-basket.jpg" alt=""></a>
                        <figcaption>
                            <h3 class="category-title"><a
                                    href="http://www.fancifullgiftbaskets.com/pamper-&-bath-gift-baskets.php"><strong>Bath
                                        and Pamper Gifts</strong></a></h3>
                        </figcaption>
                    </figure>
                    <figure class="grid-basket col-sm-4 col-md-3">
                        <a href="http://www.fancifullgiftbaskets.com/low-cost-gift-baskets.php"> <img
                                class="img-responsive" src="images/homepage/gifts-under-50.jpg" alt=""></a>
                        <figcaption>
                            <h3 class="category-title"><a
                                    href="http://www.fancifullgiftbaskets.com/low-cost-gift-baskets.php"><strong>Gifts
                                        Under $50</strong></a></h3>
                        </figcaption>
                    </figure>
                </div><!-- .row -->
            </div><!-- .container -->

            <div class="container">
                <?php
                //Include Wordpress
                define('WP_USE_THEMES', false);
                require('./blog/wp-load.php');
                query_posts('showposts=1');
                while (have_posts()) : the_post(); ?>
                <h2><a href="<?php echo get_permalink(); ?>">Fancifull Gift Baskets' Blog</a></h2>
                <?php endwhile; ?>
                <div class="homepage-blog col-md-12 well well-lg clearfix">
                    <div class="mobile-flex">
                        <div class="col-sm-2 col-md-2"><img src="images/tcaks2.jpg"></div>
                        <div class="col-sm-4 col-md-4">
                            <p class="author">by Terry August</p>
                            <?php
                            //Include Wordpress
                            //define('WP_USE_THEMES',false);
                            //require('./blog/wp-load.php');
                            //query_posts('showposts=1');
                            while (have_posts()) : the_post(); ?>
                            <h2><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <?php the_excerpt(); ?>
                            <p><a href="<?php the_permalink(); ?>">Read more on our Gift Baskets blog...</a></p>
                            <?php endwhile; ?>
                        </div>
                    </div><!-- .mobile-flex -->
                    <br>
                    <div class="mobile-flex">
                        <div class="col-sm-6 col-md-6">
                            <div class="video-container">
                                <iframe width="512" height="288" src="https://www.youtube.com/embed/okjkPvsYUgk"
                                    frameborder="0" allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div><!-- .mobile-flex -->
                </div><!-- .col-md-12 -->
            </div><!-- .container -->
        </main><!-- .main -->

        <?php include('includes/global/footer.php'); ?>

    </div>
    <!--/wrapper-->

    <!-- JS Global Compulsory -->
    <script async src="dist/scripts/main.js"></script>

    <!--[if lt IE 9]>
        <script src="dist/scripts/ie.js"></script>
    <![endif]-->
</body>

</html>