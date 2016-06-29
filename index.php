<?php
error_reporting(E_ALL); ini_set('display_errors', 1);

$activelinks = array("Huntsville, AL", "London, KY", "Billings, MT", "Santa Clara, CA", 
"Grand Rapids, MI", "Dallas, TX", "Philadelphia, PA", "Indianapolis, IN");

/*
Monica Houston - San Francisco, CA	12-Jun		https://www.eventbrite.com/e/hackster-amazon-present-alexa-skill-building-101-tickets-25747094252
Memo Doring - Seattle, WA	18-Jun		https://www.eventbrite.com/e/hackster-amazon-present-alexa-skill-building-101-tickets-25851338048
Christopher Poage - Phoenix	26-Jun		https://www.eventbrite.com/e/hackster-amazon-present-alexa-skill-building-101-tickets-25747810394
Harold Pulcher - Dallas, TX	9-Jul	Dallas
Paul Langdon - Connecticut	9-Jul	Connecticut	https://www.eventbrite.com/e/hackster-amazon-present-alexa-skill-building-101-tickets-25747944796
Ron Dagdag - Dallas, TX	9-Jul	Dallas	https://www.eventbrite.com/e/hackster-amazon-present-alexa-skill-building-101-tickets-26046969186	ready to share
Leslie Birch - Philadelphia	16-Jul		https://www.eventbrite.com/e/hackster-amazon-present-alexa-skill-building-101-tickets-26046981222	ready to share
Johnie Karr - London, KY	23-Jul	London	https://www.eventbrite.com/e/hackster-amazon-present-alexa-skill-building-101-tickets-26048512803	ready to share
Phillip Horn - London, Kentucky	23-Jul	London
Aradhana Duppala - Santa Clara, CA	30-Jul	Santa Clara	https://www.eventbrite.com/e/hackster-amazon-present-alexa-skill-building-101-tickets-26046925054	ready to share
Shivansh Singh - Santa Clara, CA	30-Jul	Santa Clara
Joe Reese - Billings, MT	6-Aug		https://www.eventbrite.com/e/hackster-amazon-present-alexa-skill-building-101-tickets-26046995264	ready to share
Austin Owens - Indianapolis	13-Aug		https://www.eventbrite.com/e/hackster-amazon-present-alexa-skill-building-101-tickets-26048761547	not ready
Pete Hoffswell - Holland Michigan	1-Oct	Grand Rapids	https://www.eventbrite.com/e/hackster-amazon-present-alexa-skill-building-101-tickets-26064255891	ready to share
Dan Nagle - Huntsville, AL	16-Oct		https://www.eventbrite.com/e/hackster-amazon-present-alexa-skill-building-101-tickets-26048773583	ready to share

*/


//echo $_GET["page"];exit;



$locationinclude = "locations/huntsvilleal.php";

if(empty($_GET["page"])) {
    header("Location: /huntsvilleal");
    exit;
} else {

    $location = "locations/".$_GET["page"].".php";

    if(file_exists($locationinclude)) {
        $locationinclude = $location;
    }
}

include_once $locationinclude;

?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Alexa Hackathon is coming to <?=$location;?> on <?=$location;?>!">
    <meta name="author" content="Dan Nagle">

    <link rel="shortcut icon" href="/img/amazon-alexa-logo.png">
    <link rel="icon" href="/img/amazon-alexa-logo.png">



    <meta property="og:title" content="Alexa Hackathon" />
    <meta property="og:description" content="Alexa Hackathon is coming to <?=$location;?> on <?=$datetime?>!" />
    <meta property="og:image" content="http://alexahackathon.com/img/amazon-alexa-logo.png" />
    <meta property="og:url" content="http://alexahackathon.com/" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@naglecode" />
    <meta name="twitter:creator" content="@naglecode" />


    <title>Alexa Hackathon - <?=$datetime?> - <?=$location;?></title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
.header {
    background: url('<?=$bgsplah;?>') no-repeat center center scroll;
}

.callout {
    <?php
        if(empty($venuesplash)) {
            ?> background: #282c34; <?php
        } else {
            ?> background: url('<?=$venuesplash;?>') no-repeat center center scroll; <?php
        }

     ?>

}


</style>


</head>

<body>

<?php

function echoActiveLink($thelink) {
    $Activepage = @$_GET["page"];
    $Activepage = strtolower($Activepage);
    $Activepage = str_replace(array(" ", ","), "", $Activepage);

    $thelinkTest = $thelink;
    $thelinkTest = strtolower($thelinkTest);
    $thelinkTest = str_replace(array(" ", ","), "", $thelinkTest);

    echo '<li'; // class="active"><a href="/huntsvilleal">Huntsville, AL</a></li>';
    if($Activepage == $thelinkTest) {
        echo ' class="active" ';
    }
    echo '><a href="/'.$thelinkTest.'">'.$thelink.'</a></li>';

}

?>

    <!-- Navigation -->

    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
      <div class="container-fluid">
        <div class="navbar-header">
        
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
          <a class="navbar-brand" href="/">Alexa Hackathon</a>
        </div>
        <ul class="nav navbar-collapse navbar-nav xs-collapse" id="thenav">
            <?php
            foreach($activelinks as $links)
                echoActiveLink($links);

             ?>
        </ul>
      </div>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center headerblurb" >
        <div   style="background-color:rgba(255, 255, 255, 0.7);">
            <h1 ><?=$promoHash?> Hackathon</h1>
            
            <h2>Presented by <a href="https://www.hackster.io/live">#HacksterLive</a> &amp; <a href="https://developer.amazon.com/public/solutions/alexa">#AmazonAlexa</a></h2>
            <h3><?=$datetime?> at <a target="_blank" href="<?=$venuemaplink?>"><?=$venuename?></a></h3>
            <a href="#about" class="btn btn-dark btn-lg">Find Out More</a>
            </div>
        </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><a target="_blank" href="<?=$eventbritelink?>"><i class="fa fa-ticket" aria-hidden="true"></i> Tickets Available! <i class="fa fa-ticket" aria-hidden="true"></i></a></h2>
                    <p><a target="_blank" href="https://developer.amazon.com/public/solutions/alexa">Alexa</a> is the speech and personal assistant technology behind <a target="_blank" href="https://www.amazon.com/Amazon-Echo-Bluetooth-Speaker-with-WiFi-Alexa/dp/B00X4WHP5E">Amazon Echo</a>. Today you can use Alexa to listen to music, play games, check traffic and weather, control your household devices, and lots more. Alexa offers a full-featured <a target="_blank" href="https://developer.amazon.com/public/solutions/alexa">set of APIs and SDKs</a> that you can use to teach her new skills and add her into devices and applications of your own. </p><br>
                    <p><a target="_blank" href="https://twitter.com/memodoring">Memo Doring</a>, Alexa Developer Evangelist at Amazon, will be teaching <a target="_blank" href="<?=$eventbritelink;?>">Alexa Skill Building 101</a>. In this talk, intended for software and hardware developers interested in voice control, home automation, and personal assistant technology, we will walk through the development of a new Alexa skill and incorporate it into a consumer-facing device.</p>
                    <br>
                    <h1><a href="https://twitter.com/alexadevs">@alexadevs</a></h1>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="services" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>What should I bring?</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-laptop fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Laptop</strong>
                                </h4>
                                <p>You will be writing code.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-clock-o fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>6 Hours</strong>
                                </h4>
                                <p>All-day intense learning.</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-ticket fa-stack-1x text-primary"></i>

                            </span>
                                <h4>
                                    <strong>Ticket</strong>
                                </h4>
                                <p>
                                 <a target="_blank" class="btn btn-lg btn-light"
                                 href="<?=$eventbritelink;?>">Get Tickets!</a></p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-briefcase fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Bag</strong>
                                </h4>
                                <p>To hold all your amazing prizes!</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Callout -->
    <aside class="callout">
        <div class="text-vertical-center">
            <a href="<?=$venuelink;?>" style="color:white;">
            <h1>Located at</h1>
            <img width="800px" class="center-block img-responsive" src="<?=$venueimg;?>">
            <h2><?=$venueslogan;?></h2>
            </a>
        </div>
    </aside>

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>Start learning now!</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                        <img class="center-block img-responsive" src="img/echo_plain500.jpg">
                        </div>
                    <div class="row skillbullets">
                        <div class="col-md-6">
                            &bull; <a href="https://www.hackster.io/amazon-alexa">
                                Hackster.io/Amazon-Alexa</a>
                        </div>
                        <div class="col-md-6">
                            &bull; <a href="                        https://developer.amazon.com/public/solutions/alexa/alexa-skills-kit/getting-started-guide">
                                Alexa Skills Kit Guide</a>
                        </div>
                        <div class="col-md-6">
                            &bull; <a href="https://github.com/amzn/alexa-skills-kit-js">
                                Node.js Alexa Skills Kit Samples</a>
                        </div>
                        <div class="col-md-6">
                            &bull; <a href="https://developer.amazon.com/public/solutions/alexa">
                                Alexa Developer Portal</a>
                        </div>
                        <div class="col-md-6">
                            &bull; <a href="https://aws.amazon.com/lambda/">
                                Amazon Lambda Service</a>
                        </div>

                        <div class="col-md-6">
                            &bull; <a href="https://console.aws.amazon.com/lambda/">
                        AWS Console: Lambda</a> (Use N.Virginia)
                        </div>

                        <div class="col-md-6">
                            &bull; <a href="https://echosim.io/">
                                Alexa Skill Testing Tool</a> (Echosim.io)
                        </div>

                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Call to Action -->
    <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center">
                    <iframe width="100%" height="500px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?=$venueembed?>" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col-lg-6 text-center">
                    <h3><a target="_blank" class="btn btn-lg btn-light"  href="<?=$eventbritelink;?>">Are you ready?</a></h3>
                    <a target="_blank" href="https://www.hackster.io/"><img class="center-block img-responsive" src="img/hackster-dot-io-logo.png"></a> <br>
                    <a target="_blank" href="https://developer.amazon.com/public/solutions/alexa/alexa-skills-kit/getting-started-guide"><img class="center-block img-responsive" src="img/amazon-alexa-logo.png"></a>

                </div>
            </div>
        </div>
    </aside>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>Volunteers</h2>
                    <h2>
                                        <a target="_blank" href="<?=$asktovolunteerlink?>">Want to help?</a>
                                        </h2>


                    <div class="col-md-6">

                        <a target="_blank" href="<?=$hostLink?>">
                        <h3><?=$hostName?><br><br>
                        <img class="img-circle img-responsive" src="<?=$hostImage?>" alt="<?=$hostName?>"><br>
                           <?=$hostTitle?></h3><br>
                       </a>
                    </div>
                    <?php
                    if(!empty($coHostName)) {

                        ?>

                    <div class="col-md-6">
                        <a target="_blank" href="<?=$coHostLink?>">
                        <h3><?=$coHostName?><br><br>
                        <img class="img-circle img-responsive" src="<?=$coHostImage?>" alt="<?=$coHostName?>"><br>
                        <?=$coHostTitle?></h3><br>
                    </a>
                    </div>

                                            <?php


                                        }


                                         ?>


                    <?php
                    if(!empty($volunteer1Name)) {

                        ?>
                        <div class="col-md-6">
                            <a target="_blank" href="<?=$volunteer1Link?>">
                            <h3><?=$volunteer1Name?><br><br>
                            <img class="img-circle img-responsive" src="<?=$volunteer1Image?>" alt="<?=$volunteer1Name?>"><br>
                            <?=$volunteer1Title?></h3><br>
                        </a>
                        </div>

                        <?php


                    }


                     ?>
                </div>
            </div>
            <div class="row">
                    <div class="col-lg-10 col-lg-offset-1 text-center">
                    <hr class="small">
                    <p class="text-muted">Amazon Alexa is &copy; Amazon. Hackster is &copy; Hackster.io</p>
                    <p class="text-muted">Site designed by <a href="https://twitter.com/NagleCode">Dan Nagle</a> from Huntsville, AL.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        
        $(window).bind("load resize", function() {
            topOffset = 50;
            width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
            console.log("fix collapse?");
            if (width < 768) {
                $('.navbar-collapse').addClass('collapse');
                topOffset = 100; // 2-row-menu
            } else {
                $('.navbar-collapse').removeClass('collapse');
            }

            height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
            height = height - topOffset;
            if (height < 1) height = 1;
            if (height > topOffset) {
                $("#page-wrapper").css("min-height", (height) + "px");
            }
        });
    
        
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
        
        
    });
    </script>

    

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-2824772-12', 'auto');
      ga('send', 'pageview');

    </script>

</body>

</html>
