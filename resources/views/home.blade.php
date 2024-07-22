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

       <!--Best icons so far that its working -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
        <!--this one is for the image slider-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a href="/" class="logo">
                    <img src="https://media.istockphoto.com/id/1333675089/vector/church-christian-vector-icon-on-white-background.jpg?s=1024x1024&w=is&k=20&c=CmUGRFYHCcnjE2XqMfRpHRJfyXgnXTFfqrsv_JR1na0=" alt="Your Logo">
                  </a>
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
                        <a class="btn btn-primary btn-xl" href="{{url('/contact')}}">Contact us.</a>
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
                <h2 class="text-center mt-0">Our Sermons</h2>
                <hr class="divider" />
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-3 col-md-6 text-center">


                </div>
            </div>

            <h2 class="section-title">Latest sermons</h2>
            <div class="sermon-carousel">
                <ul class="seremon-list">
                    {{-- @foreach ($add_sermons as $add_sermon )
                        <li>
                            <img src="https://png.pngtree.com/thumb_back/fh260/background/20230523/pngtree-bible-gif-hd-wallpaper-image_2683159.jpg" alt="">
                            <div class="seremon-detail">
                                <h3 class="seremon-title"><a href="#">I believe in god with all my heart</a></h3>
                                <div class="seremon-meta">
                                    <div class="pastor"><i class="fa fa-user"></i> Alan Ray</div>
                                    <div class="date"><i class="fa fa-calendar"></i> 18 mar 2014</div>
                                </div>
                            </div>
                        </li>
                    @endforeach --}}



                    {{-- <li>
                        <img src="https://png.pngtree.com/thumb_back/fh260/background/20230523/pngtree-bible-gif-hd-wallpaper-image_2683159.jpg" alt="">
                        <div class="seremon-detail">
                            <h3 class="seremon-title"><a href="#">Trusting in jesus and god</a></h3>
                            <div class="seremon-meta">
                                <div class="pastor"><i class="fa fa-user"></i> David Clark</div>
                                <div class="date"><i class="fa fa-calendar"></i> 18 mar 2014</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="https://png.pngtree.com/thumb_back/fh260/background/20230523/pngtree-bible-gif-hd-wallpaper-image_2683159.jpg" alt="">
                        <div class="seremon-detail">
                            <h3 class="seremon-title"><a href="#">Love your kids</a></h3>
                            <div class="seremon-meta">
                                <div class="pastor"><i class="fa fa-user"></i> anthony roberts</div>
                                <div class="date"><i class="fa fa-calendar"></i> 18 mar 2024</div>
                            </div>
                        </div>
                    </li> --}}
                </ul>
                {{-- <button class="carousel-btn prev" ><i class="fas fa-chevron-left"></i></button>
                <button class="carousel-btn next"><i class="fa fa-chevron-right" aria-hidden="true"></i></button> --}}
            </div>
            <div class="sermon-carousel">
                <div class="sermon-intro">
                    <p>Welcome to our collection of latest sermons, where faith meets everyday life. Each message is carefully crafted to inspire, encourage, and challenge you in your spiritual journey. Whether you're a long-time believer or just exploring faith, these sermons offer insights and wisdom for all.</p>

                <ul class="seremon-list">


                        <!-- Remember to delete these w3 school codes -->
                         <!-- Slideshow container -->
                    <div class="slideshow-container">
                      @foreach ($add_sermons as $add_sermon )

                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade">
                        <div class="numbertext">{{$add_sermon->id}}</div>
                        <img src="https://png.pngtree.com/thumb_back/fh260/background/20230523/pngtree-bible-gif-hd-wallpaper-image_2683159.jpg" style="width:100%">
                        <p class="textme">{{$add_sermon->title}}</p>
                        <div class="text">{{$add_sermon->text}}</div>
                        </div>

                      @endforeach

                        <!-- Next and previous buttons -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    <br>

                    <!-- The dots/circles -->
                    <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                    </div>
                </ul>
            </div>
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
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2024 - Company Name</div></div>
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

        <!--image slider latest -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    </body>
</html>

