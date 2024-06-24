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
                        <li class="nav-item current-nav-item"><a class="nav-link" href="{{ url('/pastor')}}">Pastors </a></li>
                            <li class="nav-item"><a href="{{url('/sermon')}}">Sermons</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/events')}}">Events</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
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
                <h2 class="text-center mt-0">Our Latest Sermons</h2>
                <hr class="divider" />


                                        <!-- Services Section -->
                            <section id="services" class="services section">

                                <!-- Section Title -->
                                <div class="container section-title" data-aos="fade-up">
                                <h2>Sermons</h2>
                                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
                                </div><!-- End Section Title -->

                                <div class="container">

                                <div class="row gy-4">
                                        @foreach ($add_sermons as $add_sermon )


                                            <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="100">
                                            <div class="service-item d-flex">
                                                <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
                                                <div>
                                                <h4 class="title"><a href="services-details.html" class="stretched-link">{{$add_sermon->title}}</a></h4>
                                                <p class="description">{{$add_sermon->date}}</p>
                                                <p class="description">{{$add_sermon->text}}</p>
                                                <p class="description">{{$add_sermon->notes}}</p>

                                                </div>
                                            </div>
                                            </div>
                                            <!-- End Service Item -->

                                        @endforeach

                                    {{-- <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="200">
                                    <div class="service-item d-flex">
                                        <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
                                        <div>
                                        <h4 class="title"><a href="services-details.html" class="stretched-link">Dolor Sitema</a></h4>
                                        <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                                        </div>
                                    </div>
                                    </div><!-- End Service Item -->

                                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="300">
                                    <div class="service-item d-flex">
                                        <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
                                        <div>
                                        <h4 class="title"><a href="services-details.html" class="stretched-link">Sed ut perspiciatis</a></h4>
                                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                                        </div>
                                    </div>
                                    </div><!-- End Service Item -->

                                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="400">
                                    <div class="service-item d-flex">
                                        <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
                                        <div>
                                        <h4 class="title"><a href="services-details.html" class="stretched-link">Magni Dolores</a></h4>
                                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                        </div>
                                    </div>
                                    </div><!-- End Service Item -->

                                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="500">
                                    <div class="service-item d-flex">
                                        <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
                                        <div>
                                        <h4 class="title"><a href="services-details.html" class="stretched-link">Nemo Enim</a></h4>
                                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                                        </div>
                                    </div>
                                    </div><!-- End Service Item -->

                                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="600">
                                    <div class="service-item d-flex">
                                        <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week"></i></div>
                                        <div>
                                        <h4 class="title"><a href="services-details.html" class="stretched-link">Eiusmod Tempor</a></h4>
                                        <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                                        </div>
                                    </div>
                                    </div><!-- End Service Item --> --}}

                                </div>

                                </div>

                            </section><!-- /Services Section -->




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
    </body>
</html>





