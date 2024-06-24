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

                            <li class="nav-item"><a class="nav-link" href="{{ url('/home')}}">Homepage </a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/pastor')}}">Pastors </a></li>
                            <li class="nav-item"><a class="nav-link" href="{{url('/sermon')}}">Sermons</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/events')}}">Events</a></li>
                            <li class="nav-item current-nav-item"><a href="{{ url('/about') }}">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{url('/contact')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            {{-- <div class="container px-4 px-lg-5 h-100">
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
            </div> --}}

        </header>
        <!-- About-->

        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0"></h2>
                <hr class="divider" />


                                <!-- About Section -->
                    <section id="about" class="about section">

                        <div class="container" data-aos="fade-up" data-aos-delay="100">
                        <div class="row align-items-xl-center gy-5">

                            <div class="col-xl-5 content">
                            <h3>About Us</h3>
                            <h2>History of the Church</h2>
                            <p>True Church was founded in 1985 by a small group of believers who desired to establish a gospel-centered church in our community. Starting with just 20 members, the church has grown steadily over the past 35 years, now serving over 500 families.</p>
                            <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                            </div>

                            <div class="col-xl-7">
                            <div class="row gy-4 icon-boxes">

                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <div class="icon-box">
                                    <i class="bi bi-buildings"></i>
                                    <h3>Vision</h3>
                                    <p>Our vision is to be a vibrant, Christ-centered community that impacts our local neighborhood and the world for the Kingdom of God.</p>
                                </div>
                                </div> <!-- End Icon Box -->

                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon-box">
                                    <i class="bi bi-clipboard-pulse"></i>
                                    <h3>Mission</h3>
                                    <p>True Church is committed to glorifying God and making disciples of Jesus Christ. Our mission is to lead people into a transformative relationship with Christ.</p>
                                </div>
                                </div> <!-- End Icon Box -->

                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                                <div class="icon-box">
                                    <i class="bi bi-command"></i>
                                    <h3>What We Believe</h3>
                                    <p>True Church holds firmly to the essential doctrines of the Christian faith as revealed in Scripture. We believe in the triune nature of God, the full deity and humanity of Jesus Christ, the authority and inspiration of the Bible, salvation by grace through faith, and the power of the Holy Spirit to transform lives.</p>
                                </div>
                                </div> <!-- End Icon Box -->

                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                                <div class="icon-box">
                                    <i class="bi bi-graph-up-arrow"></i>
                                    <h3>Ministries and Programs</h3>
                                    <p>At True Church, we offer a wide range of ministries and programs to serve people of all ages and stages of life. Some of our key ministries include:

                                        Dynamic worship services with relevant and Bible-based teaching.
                                        </p>
                                </div>
                                </div> <!-- End Icon Box -->

                            </div>
                            </div>

                        </div>
                        </div>

                    </section><!-- /About Section -->






        </section>


                    <!-- Faq Section -->
                <section id="faq" class="faq section">

                    <div class="container">

                    <div class="row gy-4">

                        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="content px-xl-5">
                            <h3><span>Frequently Asked </span><strong>Questions</strong></h3>
                            <p>
                             Heres a list of the frequently asked quiz
                            </p>
                        </div>
                        </div>

                        <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

                        <div class="faq-container">
                            <div class="faq-item faq-active">
                            <h3><span class="num">1.</span> <span>What do you believe?</span></h3>
                            <div class="faq-content">
                                <p>At True Church, we hold firmly to the essential doctrines of the Christian faith as revealed in Scripture. We believe in the triune nature of God - Father, Son, and Holy Spirit. We affirm the full deity and humanity of Jesus Christ, and the authority and inspiration of the Bible as God's inerrant Word.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                            <h3><span class="num">2.</span> <span>What are your worship services like?</span></h3>
                            <div class="faq-content">
                                <p>Our Sunday worship services are a blend of traditional and contemporary elements. You can expect a warm, welcoming atmosphere with vibrant, Spirit-filled worship led by our talented music team.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                            <h3><span class="num">3.</span> <span>Do you have programs for kids and youth?</span></h3>
                            <div class="faq-content">
                                <p>Absolutely! We have robust children's and youth ministries to disciple the next generation. On Sundays, kids from birth through 5th grade enjoy age-appropriate Bible lessons, worship, and activities in a safe, nurturing environment.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                            <h3><span class="num">4.</span> <span>How can I get involved?</span></h3>
                            <div class="faq-content">
                                <p>There are many ways to get plugged into the life of True Church! We encourage everyone to join a small group, where you can build deeper relationships and experience biblical community. </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                            <h3><span class="num">5.</span> <span>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</span></h3>
                            <div class="faq-content">
                                <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                        </div>

                        </div>
                    </div>

                    </div>

                </section><!-- /Faq Section -->




        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2024 -True Church</div></div>
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
