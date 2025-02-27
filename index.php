<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAC</title>
   

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">



    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One|Source+Sans+Pro:400" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.js"
        integrity="sha256-cVd/tGoi+gMVBrq5xd20ZA447xChtJWaESiLQc5LB1c=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/homepagenew.css">
    <link rel="stylesheet" type="text/css" href="css/homepage1new.css">

    <style>
    .btn-outline-primary:hover, .btn-outline-primary:active, .btn-outline-primary:visited {
        background-color: #00416d !important;
        border-color: #00416d !important;
        color:white !important;
    }
    .btn-outline-primary{
        color:  #00416d !important;
        border-color:  white !important;
    }
    .hero-carousel .carousel-item .carousel-image{
        background-size:100% 100%;
    }
    .carousel-control-nexti,.carousel-control-previ{
        background-color:none;
        width:fit-content;
        height:fit-content;
        font-size: 2rem;
        color:rgba(0, 0, 0, 0.74);
        position:absolute;
        top: 30%;
        left: 2%;
        opacity: 0.6;
  
    }
    .carousel-control-nexti{
        left: auto;
        right: 2%;
    } 
    .carousel-control-nexti:hover,.carousel-control-previ:hover{
        color:black;
        transition: ease-in-out;
    }
    
    @media only screen and (max-width:500px){
        .hero-carousel .carousel-item{
            height:350px;
        }
        .hero-carousel .carousel-item .carousel-image{
        height:350px;
        }

    }

    </style>
	<script>
	function resizeframe(obj)
	{
		obj.style.height = obj.contentWindow.document.body.scrollHeight + "px";
	}
	</script>

</head>


<body>
    <?php include 'navbar.php'?>
    <div id="carouselExampleIndicators" style="width:100%" class="carousel slide hero-carousel" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>

        </ol>
        <div class="carousel-inner" style="width:100%">
            <div class="carousel-item active">
                <div class="carousel-image" style="background-image:url('img/indexslider/sac-logo.jpg');"></div>
            </div>
            <div class="carousel-item" style>
                <div class="carousel-image" style="background-image:url('img/indexslider/phonathon2019.jpg');"></div>
            </div>
            <div class="carousel-item">
                <div class="carousel-image" style="background-image:url('img/indexslider/alvida.jpg');" ></div>
            </div>
            <div class="carousel-item">
                <div class="carousel-image" style="background-image:url('img/indexslider/convocation.jpg');"></div>
            </div>
            <div class="carousel-item">
                <div class="carousel-image" style="background-image:url('img/indexslider/imprint.jpg');"></div>
            </div>
            <div class="carousel-item">
                <div class="carousel-image" style="background-image:url('img/indexslider/17th_aam.jpg');background-size:100% 100%"></div>
            </div>
            <div class="carousel-item">
                <div class="carousel-image" style="background-image:url('img/indexslider/homecoming.jpg')"></div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </div>
    <main>
        <section class="section-1 justify-content-center" style="display:flex;overflow:hidden">
            <div class="container" style="margin:18px">
                <div class="row">
                    <div class="col-md-9 col-12">
                        <div class="panel text-left">
                            <h1>ABOUT US</h1>
                            <div class="progress" style="height: 0.4rem;">
                                <div id="one" class="progress-bar" role="progressbar" style="width: 100%"
                                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="height:0.4rem;">
                                </div>
                            </div>
                            <p class="pt-4" style="opacity: 1" align="justify">
                                The Students' Alumni Cell, IIT Kharagpur is a voluntary student body working under the
                                aegis of the Dean of Alumni Affairs and International Relations. It strives to bridge
                                the gap between IIT Kharagpur and its esteemed alumni community.

                                The Students' Alumni Cell continuously endeavours to strengthen the relations of the
                                alumni of this Institute and their alma mater. It has been instrumental in organising
                                the Annual Alumni Meet, Regional Student Alumni Meet, regular guest lectures by
                                distinguished alumni in the campus, publishing the annual literary magazine (Yearnings
                                of Yore) & the annual yearbook. The Students' Alumni Cell also operates the Student -
                                Alumni Mentorship Programme, My Imprint (Giving Back - Alumni contribution) and
                                organises Alvida (the annual farewell dinner).

                            </p>
                        </div>
                    </div>
                    <br>
                    <div id="x" class="col-md-3 col-12" style="position:relative">
                            <iframe
                                src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fiitkgp.alumnicell&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                                style="border:none;position:absolute;top:0;right:0;left:0;bottom:0;height:100% !important;width:100% !important" scrolling="no"
                                onload = "resizeframe(this)" frameborder="0" allowTransparency="true" allow="encrypted-media">
							</iframe>
                    </div>
                </div>
            </div>
        </section>


    </main>

    <section id="timeline">

        <div class="tl-item">

            <div class="tl-bg" style="background-image: url(img/marathon1.jpg)"></div>

            <div class="tl-year">
                <p class="f2"><u>What We Do</u></p>
                <br>
                <p class="f2 heading --sanSerif">For Alumni</p>
            </div>

            <div class="tl-content">
                <h1></h1>
                <p>The Cell helps the alumni in staying connected to their alma mater. Through regular interactions with
                    the students, the alumni get a chance to share their experiences and impart the knowledge they have
                    acquired to the next generation of KGPians. Also, with this interchange, they get a glimpse of the
                    young minds of the nation.</p>
            </div>

        </div>

        <div class="tl-item">

            <div class="tl-bg" style="background-image: url(img/IIT.jpg)"></div>

            <div class="tl-year">
                <p class="f2"><u>What We Do</u></p>
                <br>
                <p class="f2 heading--sanSerif">For Institute</p>
            </div>

            <div class="tl-content">
                <h1 class="f3 text--accent ttu"></h1>
                <p>Students' Alumni Cell reconnects the Institute and alumni, providing the alumni with an avenue to
                    give back to their alma mater. The Institution Development Programme (IDP) aims to promote the
                    Institute's domestic ranking while simultaneously improving the international stature.</p>
            </div>

        </div>

        <div class="tl-item">

            <div class="tl-bg" style="background-image: url(img/imprint.jpg)"></div>

            <div class="tl-year">
                <p class="f3 text --accent ttu"><u>What We Do</u></p>
                <br>
                <p class="f2 heading--sanSerif">For Students</p>
            </div>

            <div class="tl-content">
                <h1 class="f3 text--accent ttu"></h1>
                <p>Students' Alumni Cell works in conjunction with the student administration bodies and is therefore
                    constantly in touch with the needs and wants of the students. It connects the students with the
                    alumni, giving them a chance to interact with some of the most eminent personalities in all fields
                    of work. It works towards making their learning experience more holistic.</p>
            </div>

        </div>

    </section>

    <section class="section-3">
        <div class="container-fluid">
            <h1 class="text-center" style="font-family: 'Raleway', sans-serif">News & Updates</h1>
        </div>
    </section>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div id="inam" class="carousel slide" data-ride="carousel" data-interval="false" >
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12 col-lg-4">
                                        <div class="card" style="height: 100% !important;">
                                            <img src="img/news&updates/01.jpg" style="height: 300px;"
                                                class="card-img-top">
                                            <div class="card-body">
                                                <h5 class="card-title">IIT-KGP Alumni hold online quiz to raise funds for campus workers</h5>
                                                <p class="card-text">With the pandemic and lockdown raising question mark over the next semester, students and alumni got together to help alleviate the distress of informal workers on campus... <br><br><button type="button" class="btn btn-outline-primary"><a
                                                            href="https://indianexpress.com/article/cities/kolkata/rs-90-lakh-and-50-yrs-iit-kgp-alumni-hold-online-quiz-to-raise-funds-for-campus-workers-6480765/"
                                                            target="_blank"
                                                            style="color:white">More...</a></button>
                                                </p>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-lg-4">
                                        <div class="card" style="height: 100% !important;">
                                            <img src="img/news&updates/05.jpg" style="height: 300px;"
                                                class="card-img-top">
                                            <div class="card-body">
                                                <h5 class="card-title">Coronavirus: Startups by IIT-KGP alumni unveil tech to fight pandemic</h5>
                                                <p class="card-text">IIT Kharagpur alumnus Debayan Saha has collaboratively developed Airlens Minus Corona, a device which may help sanitise large areas...<br><br><button type="button" class="btn btn-outline-primary"><a
                                                            href="https://economictimes.indiatimes.com/small-biz/startups/newsbuzz/coronavirus-start-ups-by-iit-kgp-alumni-unveil-tech-to-fight-pandemic/articleshow/75179928.cms"
                                                            target="_blank"
                                                            style="color:white">More...</a></button>
                                                </p>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-lg-4">
                                        <div class="card" style="height: 100% !important;">
                                            <img src="img/news&updates/03.jpg" style="height: 300px;"
                                                class="card-img-top">
                                            <div class="card-body">
                                                <h5 class="card-title">IIT Alumnus Launches Mission 10k Khushiyan; 10,000 Children To Receive Educational Play Boxes</h5>
                                                <p class="card-text">As part of this campaign -- Mission 10K Khushiyaan, Anthill Creations seeks to deliver 10,000 underprivileged children with educational boxes. The educational boxes will provide the children an opportunity to learn via structured games...<br><br><button type="button"
                                                        class="btn btn-outline-primary"><a
                                                            href="https://www.ndtv.com/education/iit-alumnus-launches-mission-10k-khushiyan-10000-children-receive-educational-play-boxes"
                                                            target="_blank"
                                                            style="color:white">More...</a></button></p>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>


                        </div>
                        <div class="carousel-item">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12 col-lg-4">
                                        <div class="card" style="height: 100% !important;">
                                            <img src="img/news&updates/06.jpg" style="height: 300px;"
                                                class="card-img-top">
                                            <div class="card-body">
                                                <h5 class="card-title">How an IIT Kharagpur alumnus, investment banker, and traveller started a trekking company</h5>
                                                <p class="card-text">Trekmunk is a Delhi-NCR based bootstrapped startup. Apart from regular treks, it hosts trail cleaning treks and escorts doctors to high altitudes to treat the less fortunate...<br><br><button type="button" class="btn btn-outline-primary"><a
                                                            href="https://yourstory.com/2020/09/iit-kharagpur-alumnus-investment-banker-traveller-trekking-startup"
                                                            target="_blank"
                                                            style="color:white">More...</a></button></p>

                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-lg-4">
                                        <div class="card" style="height: 100% !important;">
                                            <img src="img/news&updates/02.jpg" style="height: 300px;"
                                                class="card-img-top">
                                            <div class="card-body">
                                                <h5 class="card-title">IIT & Super30 alumni launch Uber-like study help app FILO for K12 students</h5>
                                                <p class="card-text">FILO is a sachet education app that aims to bridge the foundational divide for millions of deserving students of India with a lifeline - a simple video call that connects students with expert teachers...<br><br><button type="button" class="btn btn-outline-primary"><a
                                                            href="https://www.livemint.com/brand-post/iit-super30-alumni-launch-uber-like-study-help-app-filo-for-k12-students-11606311047505.html"
                                                            target="_blank"
                                                            style="color:white">More...</a></button></p>

                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-lg-4">
                                        <div class="card" style="height: 100% !important;">
                                            <img src="img/news&updates/04.jpg" style="height: 300px;"
                                                class="card-img-top">
                                            <div class="card-body">
                                                <h5 class="card-title">Lockdown: IIT Kharagpur alumni to provide financial aid to 10,500 unorganised sector workers</h5>
                                                <p class="card-text">The beneficiaries, who will receive financial assistance for six months, include daily wagers in eateries, ward boys of the hostels, laundrymen, tea stall owners, rickshaw-pullers, domestic workers and labourers engaged in construction projects, it said...<br><br><button
                                                        type="button" class="btn btn-outline-primary"><a
                                                            href="https://www.hindustantimes.com/education/lockdown-iit-kharagpur-alumni-to-provide-financial-aid-to-10-500-unorganised-sector-workers/story-QBr2qCFZQ84qWgAaBM93rN.html"
                                                            target="_blank"
                                                            style="color:white">More...</a></button></p>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>


                        </div>

                    </div>
                    <span  class="carousel-control-previ fas fa-chevron-circle-left fa-2x" data-target="#inam"
                    data-slide="prev"></span>
                    <span  class="carousel-control-nexti fas fa-chevron-circle-right fa-2x" data-target="#inam"
                    data-slide="next"></span>
             
                </div>

            </div>

        </div>

    </div>

    <br><br>

    <?php include 'footer.php'?>
    <!-- <?php include 'preloader.php'?> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
    $("#one").each(function() {
        $(this).addClass("progress-bar-purple");
    });
    (function($) {
        "use strict";

        // manual carousel controls
        $('.next').click(function() {
            $('.carousel').carousel('next');
            return false;
        });
        $('.prev').click(function() {
            $('.carousel').carousel('prev');
            return false;
        });

    })(jQuery);

    (function($) {

        $(document).ready(function() {
            // Pause hero carousel
            $('.hero-carousel').carousel('pause');
        });

    })(jQuery);
    </script>

</body>