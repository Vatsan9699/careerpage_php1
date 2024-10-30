<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "careers_new";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch jobs from database
$sql = "SELECT * FROM jobs ORDER BY id DESC LIMIT 6";
$result = $conn->query($sql);

// Fetch job categories
$category_sql = "SELECT DISTINCT category FROM jobs";
$category_result = $conn->query($category_sql);

// Close the connection
$conn->close();
?>

<!doctype html>
    <html lang="en">

    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="styles.css">
    <title>Job Portal Landing Page</title>
    </head>

    <body>

    <!-- header starts -->
    <header class="main-header">
        <div class="container">
        <nav class="navbar navbar-expand-lg main-nav px-0">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu"
            aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar icon-bar-1"></span>
            <span class="icon-bar icon-bar-2"></span>
            <span class="icon-bar icon-bar-3"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainMenu">
            <ul class="navbar-nav ml-auto text-uppercase f1">
                <li>
                <a href="#home" class=" active-first">Home</a>
                </li>
                <li>
                <a href="#about">About us</a>
                </li>
                <li>
                <a href="#allJobs ">All Jobs</a>
                </li>
                <li>
                <a href="#Interships">Interships</a>
                </li>
                <li>
                <a href="#govt">Govt. Jobs</a>
                </li>
                <li>
                <a href="#contact">Contact us</a>
                </li>
            </ul>
            <div class="nav-item dropdown ml-auto">
                <a class="dropdown-toggle dropbtn" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false">
    <img src="company-logo.png"
            width="40" height="40" class="rounded-circle">
    </a>

                <div class="dropdown-menu dropdown-content" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Dashboard</a>
                <a class="dropdown-item" href="#">Edit Profile</a>
                <a class="dropdown-item" href="#">Log Out</a>
                </div>
            </div>

            </div>
        </nav>
        </div>
</header>

    <!-- section 2 -->
        <div class="banner text-center">
        <h1><span style="color: aqua; font-size: 1.7em;">1000+</span> Jobs on Jobsite</h1>
        <p>With verified, up-to-date job listings directly from employer websites,<br>

        we create a premium experience for job seekers, employers,<br>

        Quickly find and apply for the jobs you want</p>
    </div>

    <div class="benifits">
        <h3> BENEFITS</h3>
        <h2> Why Join Us </h2>

        <div class="text-boxs">
            <div class="text-box">
                <h4> Fast growing company <span>&#10003;</span>
                </h4>
                <p> we are at an inflection point to achieve accelerated </p>
            </div>

            <div class="text-box">
                <h4> Great company <span>&#10003;</span>
                </h4>
                <p> Closely tied and supportive team </p>
            </div>

            <div class="text-box">
                <h4> Take Charge <span>&#10003;</span>
                </h4>
                <p> as much as you are willing to take and show excellence</p>
            </div>

            <div class="text-box">
                <h4> Don't stop learning<span>&#10003;</span>
                </h4>
                <p> An atmosphere where learning is always on the to do list</p>
            </div>

            <div class="text-box">
                <h4>Latest Technology stack <span>&#10003;</span>
                </h4>
                <p> Working experience of cutting edge technology </p>
            </div>

            <div class="text-box">
                <h4> Cross domain exposure <span>&#10003;</span>
                </h4>
                <p> Highly passionate and cohesive team of technology and business people </p>
            </div>
        </div>
    </div>


    <div class="image-boxs">
        <img src="1.avif" alt="">

        <div class="image-col2">
            <img src="3.avif" alt="">
            <img src="2.avif" alt="">
        </div>

        <img src="4.avif" alt="">

        <div class="image-col4">
            <img src="5.webp" alt="">
            <img src="6.avif" alt="">
        </div>
    </div>


    

    
    <!-- recent jobs -->
    <section id="jobs">
        <div class="container">
        <h5>RECENT JOB UPDATES</h5>

        <div class="company-details">
            <div class="job-update">
            <h4><strong> Senior Python Devloper </strong>
            <i class="fa fa-heart-o bookmark"><p>
                Save Job</p></i></h4>
            <h6>XYZ private limited</h6>
            <i class="fa fa-briefcase"></i><span>0-1 years</span><br>
            <i class="fa fa-inr"></i><span class="price"> 4.00 - 5.00 Lacs P.A</span><br>
            <i class="fa fa-map-marker"></i><span class="location"> Delhi</span>
            <p><strong>Skills</strong> <i class="fa fa-angle-double-right"></i><small> Java</small><small> Web
                scrapping</small><small>
                Django</small><small> Flask</small></p>
            <p class="description"><strong>Description</strong> <i class="fa fa-angle-double-right"></i>
                Works independently under limited supervision and applies knowledge of subject matter in Applications
                Development. Possess sufficient knowledge and skills to effectively deal with issues, challenges within
                field of specialization to develop simple applications solutions.
                Second level professional with direct impact on
                results and outcome. <a href="#"> Read More</a></p>
            </div>
            <div class="apply-btn">
            <button type="button" class="btn btn-primary" target="_blank">Apply</button>
            </div>
        </div>


        <div class="company-details">
            <div class="job-update">
                        <h4><strong> Senior Python Devloper </strong>
                        <i class="fa fa-heart-o bookmark">
                            <p>
                            Save Job</p>
                        </i></h4>
            <h6>XYZ private limited</h6>
            <i class="fa fa-briefcase"></i><span>0-1 years</span><br>
            <i class="fa fa-inr"></i><span class="price"> 4.00 - 5.00 Lacs P.A</span><br>
            <i class="fa fa-map-marker"></i><span class="location"> Delhi</span>
            <p><strong>Skills</strong> <i class="fa fa-angle-double-right"></i><small> Java</small><small> Web
                scrapping</small><small>
                Django</small><small> Flask</small></p>
            <p class="description"><strong>Description</strong> <i class="fa fa-angle-double-right"></i>
                Works independently under limited supervision and applies knowledge of subject matter in Applications
                Development. Possess sufficient knowledge and skills to effectively deal with issues, challenges within
                field of specialization to develop simple applications solutions.
                Second level professional with direct impact on
                results and outcome. <a href="#"> Read More</a></p>
            </div>
            <div class="apply-btn">
            <button type="button" class="btn btn-primary" target="_blank">Apply</button>
            </div>
        </div>
        <div class="company-details">
            <div class="job-update">
                        <h4><strong> Senior Python Devloper </strong>
                        <i class="fa fa-heart-o bookmark">
                            <p>
                            Save Job</p>
                        </i></h4>
            <h6>XYZ private limited</h6>
            <i class="fa fa-briefcase"></i><span>0-1 years</span><br>
            <i class="fa fa-inr"></i><span class="price"> 4.00 - 5.00 Lacs P.A</span><br>
            <i class="fa fa-map-marker"></i><span class="location"> Delhi</span>
            <p><strong>Skills</strong> <i class="fa fa-angle-double-right"></i><small> Java</small><small> Web
                scrapping</small><small>
                Django</small><small> Flask</small></p>
            <p class="description"><strong>Description</strong> <i class="fa fa-angle-double-right"></i>
                Works independently under limited supervision and applies knowledge of subject matter in Applications
                Development. Possess sufficient knowledge and skills to effectively deal with issues, challenges within
                field of specialization to develop simple applications solutions.
                Second level professional with direct impact on
                results and outcome. <a href="#"> Read More</a></p>
            </div>
            <div class="apply-btn">
            <button type="button" class="btn btn-primary" target="_blank">Apply</button>
            </div>
        </div>
        <div class="company-details">
            <div class="job-update">
                        <h4><strong> Senior Python Devloper </strong>
                        <i class="fa fa-heart-o bookmark">
                            <p>
                            Save Job</p>
                        </i></h4>
            <h6>XYZ private limited</h6>
            <i class="fa fa-briefcase"></i><span>0-1 years</span><br>
            <i class="fa fa-inr"></i><span class="price"> 4.00 - 5.00 Lacs P.A</span><br>
            <i class="fa fa-map-marker"></i><span class="location"> Delhi</span>
            <p><strong>Skills</strong> <i class="fa fa-angle-double-right"></i><small> Java</small><small> Web
                scrapping</small><small>
                Django</small><small> Flask</small></p>
            <p class="description"><strong>Description</strong> <i class="fa fa-angle-double-right"></i>
                Works independently under limited supervision and applies knowledge of subject matter in Applications
                Development. Possess sufficient knowledge and skills to effectively deal with issues, challenges within
                field of specialization to develop simple applications solutions.
                Second level professional with direct impact on
                results and outcome. <a href="#"> Read More</a></p>
            </div>
            <div class="apply-btn">
            <button type="button" class="btn btn-primary" target="_blank">Apply</button>
            </div>
        </div>
        <ul class="pagelink text-center">
            <li class="right-arrow">←</li>
            <li class="active">1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li class="right-arrow">→</li>
        </ul>
        </div>
    </section>





    <!-- site stats -->
    <section id="site-stats">
        <div class="container text-center">
        <h3>JOBSITE STATS</h3>
        <div class="row">
            <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                <div class="stats-box">
                    <i class="fa fa-user-o"></i><span><small>100k + </small></span>
                    <p>Job Seekers</p>
                </div>
                </div>
                <div class="col-md-6">
                <div class="stats-box">
                    <i class="fa fa-slideshare"></i><span><small>500k + </small></span>
                    <p>Recruiters</p>
                </div>
                </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                <div class="stats-box">
                    <i class="fa fa-hand-peace-o"></i><span><small>10k + </small></span>
                    <p>Active Jobs</p>
                </div>
                </div>
                <div class="col-md-6">
                <div class="stats-box">
                    <i class="fa fa-building"></i><span><small>400k + </small></span>
                    <p>Companies</p>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="page-footer font-small blue-grey lighten-5">

        <!-- ` Links -->
        <div class="container text-center text-md-left mt-3 pt-5">

        <!-- Grid row -->
        <div class="row mt-3 dark-grey-text">

            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mb-4">



            <!-- Links -->
            <h6 class="text-uppercase font-weight-bold text-light">Information</h6>
            <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>
                <a class="dark-grey-text" href="#!">About Us</a>
            </p>
            <p>
                <a class="dark-grey-text" href="#!">Contact Us</a>
            </p>
            <p>
                <a class="dark-grey-text" href="#!">Terms Of Use</a>
            </p>
            <p>
                <a class="dark-grey-text" href="#!">FAQs</a>
            </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

            <!-- Links -->
            <h6 class="text-uppercase font-weight-bold text-light">Job seekers</h6>
            <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>
                <a class="dark-grey-text" href="#!">Job Search</a>
            </p>
            <p>
                <a class="dark-grey-text" href="#!">Career Advices</a>
            </p>
            <p>
                <a class="dark-grey-text" href="#!">Resume Builder</a>
            </p>
            <p>
                <a class="dark-grey-text" href="#!">Report a Problem</a>
            </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

            <!-- Links -->
            <h6 class="text-uppercase font-weight-bold text-light">Employers</h6>
            <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>
                <a class="dark-grey-text" href="#!">Job Posting</a>
            </p>
            <p>
                <a class="dark-grey-text" href="#!">Advertise With Us</a>
            </p>
            <p>
                <a class="dark-grey-text" href="#!">Access Resumes</a>
            </p>
            <p>
                <a class="dark-grey-text" href="#!">FAQs</a>
            </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

            <!-- Links -->
            <h6 class="text-uppercase font-weight-bold text-light">Stay Connected</h6>
            <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        
                            <!-- Facebook -->
                            <p>
                        <a class="fb-ic">
                            <i class="fa fa-facebook-official white-text mr-4 text-light"><span class="icon_name">Facebook</span></i>
                        </a>
                        </p>
                        <!-- Twitter -->
                        <p>
                        <a class="tw-ic">
                            <i class="fa fa-twitter white-text mr-4 text-light"><span class="icon_name">Twitter</span></i>
                        </a>
                        </p>
                        <!--Linkedin -->
                        <p>
                        <a class="li-ic">
                            <i class="fa fa-linkedin white-text mr-4 text-light"><span class="icon_name">Linkedin</span></i>
                        </a>
                        </p>
                        <!--Instagram-->
                        <p></p>
                        <a class="ins-ic">
                            <i class="fa fa-instagram white-text text-light"><span class="icon_name">Instagram </span></i>
                        </a>
                        </p>
            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center text-black-50 py-3 text-light">@
        <a class="dark-grey-text" href="#"> Build With Let's Upgrade</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="script.js"></script>

    </body>

    </html>