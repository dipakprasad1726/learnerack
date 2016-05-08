<html>

<head>
    <title>LearneracK</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/fonts.css" rel="stylesheet" type="text/css">
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    <?php 
        include 'navbar/navbar.php';
    ?>

        <div class="jumbotron text-center" style="background: linear-gradient(#269abc,#5bc0de,#c4e3f3);">
            <h1>LearneracK.c<span class="glyphicon glyphicon-globe"></span>m</h1>
            <p>Discovers the best</p>
            <form class="form-inline">
                <input type="email" class="form-control" size="50" placeholder="Institution Name / City" required>
                <button type="button" class="btn btn-primary">Search &nbsp;&nbsp;<span class="glyphicon glyphicon-search"></span></button>
                <h2>Coming soon..</h2>
            </form>
        </div>

        <!-- Container (About Section) -->
        <div id="about" class="container-fluid">
            <div class="row">
                <div class="col-sm-8">
                    <h2>About Company Page</h2>
                    <br>
                    <h4>This is the place where you can search and compare any institution. We provide the beast information about any institution that helps you to
      choose the best. </h4>
                    <br>
                    <p>This is a new generation of education and we look forward to serve you the best through new technologies.
                        We aim is to provide the best user experience.</p>
                    <br>
                    <button class="btn btn-default btn-lg">Get in Touch</button>
                </div>
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-globe logo "></span>
                </div>
            </div>
        </div>

        <div class="container-fluid bg-grey">
            <div class="row">
                <div class="col-sm-4">
                    <span class="glyphicon glyphicon-hourglass logo slideanim"></span>
                </div>
                <div class="col-sm-8">
                    <h2>Our Values</h2>
                    <br>
                    <h4><strong>MISSION:</strong> Time is priceless so we try to save most of our users time. We value our users time and try to help them by providing the most authentic information. </h4>
                    <br>
                </div>
            </div>
        </div>


        <h2>What our customers say</h2>
        <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>

            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <h4>"This web site is the best. I am so happy with the result!"<br><span style="font-style:normal;">Dipak Prasad, Software Developer, Infosys,Chennai.</span></h4>
                </div>
                <div class="item">
                    <h4>"One word... WOW!!"<br><span style="font-style:normal;">Chandan Kumar Gupta, Marketing Head, Bangalore</span></h4>
                </div>
                <div class="item">
                    <h4>"Could I... BE any more happy with this site?"<br><span style="font-style:normal;">Md. Shahrukh Khan, Salesman, Bangalore</span></h4>
                </div>
                <div class="item">
                    <h4>"The journey of a thousand miles begins with one step"<br><span style="font-style:normal;">Bhushan D. Gadekar,Angular2 Developer, Chandigarh</span></h4>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        </div>

        <!-- Container (Contact Section) -->
        <div id="contact" class="container-fluid bg-grey">
            <h2 class="text-center">CONTACT</h2>
            <div class="row">
                <div class="col-sm-5">
                    <p>Contact us and we'll get back to you within 24 hours.</p>
                    <p><span class="glyphicon glyphicon-map-marker"></span> Bangalore, India</p>
                    <p><span class="glyphicon glyphicon-phone"></span> +91 9094757075</p>
                    <p><span class="glyphicon glyphicon-envelope"></span> learnerack@gmail.com</p>
                </div>
                <div class="col-sm-7 slideanim">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                        </div>
                    </div>
                    <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
                    <br>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <button class="btn btn-default pull-right" type="submit">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="container-fluid text-center">
            <a href="#myPage" title="To Top">
                <span class="glyphicon glyphicon-chevron-up"></span>
            </a>
        </footer>

        <div id="googleMap" style="height:400px;width:100%;"></div>
        <!-- Add Google Maps -->
        <script src="js/jquery/jquery.min.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="js/jquery/jquery-1.8.2.min.js" type="text/javascript"></script>       
        <script src="js/google-map-api.js"></script>
        <script src="js/map-script.js"></script>
</body>

</html>