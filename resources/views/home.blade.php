<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>True Church</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        {{-- another css code. --}}
        {{-- <link rel="stylesheet" href="style.css"> --}}

        {{-- fontawesome code: --}}
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-F0sPsrC86mNsihWz+uTU7G9dW/sghggusZ2s1FYE5I0LbNB7m3i1BgO2vsrsUCUp8jCW2YlX6Pv2j4wuIuMNXg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}

    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">True Church</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">

                        <li class="nav-item current-nav-item"><a href="{{ url('/home')}}">Homepage </a></li>
							<li class="nav-item"><a class="nav-link" href="{{ url('/pastor')}}">Pastors</a></li>
							<li class="nav-item"><a class="nav-link" href="{{url('/sermon')}}">Sermons</a></li>
							<li class="nav-item"><a class="nav-link" href="{{ url('/events')}}">Events</a></li>
							<li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
							<li class="nav-item"><a class="nav-link" href="{{url('/contact')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Welcome to True Church We're thrilled to have you join our family!</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Welcome to True Church, a welcoming and inclusive community for spiritual growth, connection, and support, where everyone can find their place and purpose.</p>
                        <a class="btn btn-primary btn-xl" href="#about">Contact us.</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Learn More about us.</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mb-4">True Church welcomes all on a journey of faith, hope, and finding a supportive community. We offer inspiring worship services and programs for all ages.</p>
                        <a class="btn btn-light btn-xl" href="{{ url("/about")}}">Learn More!</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">Our Services</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">
                        {{-- <div class="mt-5">
                            <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Sturdy Themes</h3>
                            <p class="text-muted mb-0">Our themes are updated regularly to keep them bug free!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Up to Date</h3>
                            <p class="text-muted mb-0">All dependencies are kept current to keep things fresh.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Ready to Publish</h3>
                            <p class="text-muted mb-0">You can use this design as is, or you can make changes!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Made with Love</h3>
                            <p class="text-muted mb-0">Is it really open source if it's not made with love?</p>
                        </div>
                    </div> --}}






                    {{-- <section class="sermon-program">
                        <h2>Sermon Program</h2>
                        <ul class="grid sm:grid-cols-1 md:grid-cols-2 gap-4">
                          <li>
                            <h3>Date: Sunday, June 9, 2024</h3>
                            <h4>Topic: Finding Strength in Difficult Times</h4>
                            <p>Speaker: Pastor John Smith</p>
                            <p>Scripture: Isaiah 40:29</p>
                          </li>
                          <li>
                            <h3>Date: Sunday, June 16, 2024</h3>
                            <h4>Topic: The Power of Forgiveness</h4>
                            <p>Speaker: Guest Speaker, Sarah Jones</p>
                            <p>Scripture: Matthew 6:14-15</p>
                          </li>
                        </ul>
                      </section> --}}





                </div>
            </div>

            <h2 class="section-title">Latest sermons</h2>
            <div class="sermon-carousel">
                <ul class="seremon-list">
                    <li>
                        <img src="images/small-thumb-1.jpg" alt="">
                        <div class="seremon-detail">
                            <h3 class="seremon-title"><a href="#">I believe in god with all my heart</a></h3>
                            <div class="seremon-meta">
                                <div class="pastor"><i class="fa fa-user"></i> Alan Ray</div>
                                <div class="date"><i class="fa fa-calendar"></i> 18 mar 2014</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="images/small-thumb-2.jpg" alt="">
                        <div class="seremon-detail">
                            <h3 class="seremon-title"><a href="#">Trusting in jesus and god</a></h3>
                            <div class="seremon-meta">
                                <div class="pastor"><i class="fa fa-user"></i> David Clark</div>
                                <div class="date"><i class="fa fa-calendar"></i> 18 mar 2014</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="images/small-thumb-3.jpg" alt="">
                        <div class="seremon-detail">
                            <h3 class="seremon-title"><a href="#">Love your kids</a></h3>
                            <div class="seremon-meta">
                                <div class="pastor"><i class="fa fa-user"></i> anthony roberts</div>
                                <div class="date"><i class="fa fa-calendar"></i> 18 mar 2024</div>
                            </div>
                        </div>
                    </li>
                </ul>
                <button class="carousel-btn prev" ><i class="fas fa-chevron-left"></i></button>
                <button class="carousel-btn next"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
            </div>
        </section>
        <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/11.jpg" title="Africa Mission Trip">
                            <img class="img-fluid" src="https://www.shutterstock.com/image-photo/abuja-nigeria-may-1-2023-600nw-2307221017.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Saturday<hr>17/10/24</div>
                                <div class="project-name">Africa Mission Trip</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/2.jpg" title="Bible School">
                            <img class="img-fluid" src="https://img.freepik.com/free-photo/holy-bible-with-rays-light-coming-out-ai-generative_123827-23906.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Sunday<hr>6/6/24</div>
                                <div class="project-name">Bible School</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/3.jpg" title="Prayers and Worshipping">
                            <img class="img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVqRm5st79B4EhA_g_Fid37swetrupwWd76A&s" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Friday<hr>25/6/24</div>
                                <div class="project-name">Prayers and Worshipping</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/4.jpg" title="Love giving">
                            <img class="img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtPGqQR7SXx0QgZYyoWLYZznb27ZTpGD6M_g&s" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Saturday<hr>31/6/24</div>
                                <div class="project-name">Love giving</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/5.jpg" title="Children Home visit">
                            <img class="img-fluid" src="https://www.shutterstock.com/image-photo/abuja-nigeria-may-1-2023-600nw-2307221017.jpg" alt="..." />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Sunday<hr>1/6/24</div>
                                <div class="project-name">Children Home visit</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href="assets/img/portfolio/fullsize/6.jpg" title="Church VBS">
                            <img class="img-fluid" src="https://www.shutterstock.com/image-photo/children-playing-tug-war-park-600nw-459100483.jpg" alt="..." />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">Sunday<hr>8/6/24</div>
                                <div class="project-name">Church VBS</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to action-->
        <section class="page-section bg-dark text-white">
            <div class="container px-4 px-lg-5 text-center">
                <h2 class="mb-4">Click here to view our events planned.</h2>
                <a class="btn btn-light btn-xl" href="{{ url('/events')}}">Events</a>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Let's Get In Touch!</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Ready to start worshipping with us?Contact us providing your details.</p>
                    </div>
                </div>






                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                        <i class="bi-phone fs-2 mb-3 text-muted"></i>
                        <div>+254721234567</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2023 - Company Name</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>

