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


        <script src="https://www.google.com/recaptcha/api.js" async defer></script>


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
                            <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
                            <li class="nav-item current-nav-item"><a href="{{url('/contact')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masterhead1">
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

                                    <!-- Contact Section -->
                        <section id="contact" class="contact section">

                            <!-- Section Title -->
                            <div class="container section-title" data-aos="fade-up">
                            <h2>Contact</h2>
                            <p>You can reach us, using the Contacts Provided Below😉.</p>
                            </div><!-- End Section Title -->

                            <div class="container" data-aos="fade-up" data-aos-delay="100">

                            <div class="row gy-4">

                                <div class="col-lg-6">

                                <div class="row gy-4">
                                    <div class="col-md-6">
                                    <div class="info-item" data-aos="fade" data-aos-delay="200">
                                        <i class="bi bi-geo-alt"></i>
                                        <h3>Address</h3>
                                        <p>A106 Holy Family Basilica</p>
                                        <p>Nairobi, NRB 10100</p>
                                    </div>
                                    </div><!-- End Info Item -->

                                    <div class="col-md-6">
                                    <div class="info-item" data-aos="fade" data-aos-delay="300">
                                        <i class="bi bi-telephone"></i>
                                        <h3>Call Us</h3>
                                        <p>+254712345678</p>
                                        <p>+254709876543</p>
                                    </div>
                                    </div><!-- End Info Item -->

                                    <div class="col-md-6">
                                    <div class="info-item" data-aos="fade" data-aos-delay="400">
                                        <i class="bi bi-envelope"></i>
                                        <h3>Email Us</h3>
                                        <p>info@truechurch.com</p>
                                        <p>contact@truechurch.com</p>
                                    </div>
                                    </div><!-- End Info Item -->

                                    <div class="col-md-6">
                                    <div class="info-item" data-aos="fade" data-aos-delay="500">
                                        <i class="bi bi-clock"></i>
                                        <h3>Open Hours</h3>
                                        <p>Monday - Friday</p>
                                        <p>9:00AM - 05:00PM</p>
                                    </div>
                                    </div><!-- End Info Item -->

                                </div>

                                </div>

                                <div class="col-lg-6">
                                <form action="{{ route('contact.store') }}" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                                    @csrf
                                    <div class="row gy-4">

                                    <div class="col-md-6">
                                        <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                                    </div>

                                    <div class="col-md-6 ">
                                        <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                                    </div>

                                    <div class="col-md-12">
                                        <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                                    </div>

                                    <div class="col-md-12 text-center">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Your message has been sent. Thank you!</div>

                                        <div class="g-recaptcha" data-sitekey="6Lepew4qAAAAAIUt1kR0tVuyLzRqHB8dRRZpfOJ6"></div>
                                        <br/>

                                        <button type="submit">Send Message</button>
                                    </div>


                                    </div>

                                    @if (session('success'))
                                    <div class="bg-green-200 text-green-900 p-3 mb-5 rounded-lg">
                                        {{ session('success') }}
                                    </div>
                                    @endif

                                    @if (session('error'))
                                    <div class="bg-red-200 text-red-900 p-3 mb-5 rounded-lg">
                                        {{ session('error') }}
                                    </div>
                                    @endif
                                </form>
                                </div><!-- End Contact Form -->

                            </div>

                            </div>

                        </section><!-- /Contact Section -->





        </section>









        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2024 - Company Name</div></div>
        </footer>

        <!-- captcha form -->



        <script type="text/javascript">
            var onloadCallback = function() {
              alert("grecaptcha is ready!");
            };
          </script>


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





























































