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
                        <li class="nav-item current-nav-item"><a href="{{ url('/events')}}">Events</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{url('/contact')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masterhead">
            {{-- <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">Events displayed.</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">Displaying the Upcoming events.</p>

                    </div>
                </div>
            </div> --}}


            <div class="container px-4 px-lg-5">
                <!-- Features Section -->
                <section id="features" class="features section">

                  <!-- Section Title -->
                  <div class="container section-title" data-aos="fade-up">
                  <h2 class="two">Upcoming Events</h2>
                  <p class="one">Exciting events coming up at True Church! Don't miss our annual family picnic, youth retreat, and special Christmas Eve service. Something for everyone!</p>
                  </div><!-- End Section Title -->

                  <div class="container">

                  <div class="row gy-4 align-items-center features-item">
                      <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                      <h3 class="two">Take a Look</h3>
                      <p class="one">
                        At True Church, we have a vibrant calendar of events and activities to help you and your family grow in faith and community.
                      </p>
                      <a href="#" class="btn btn-get-started">Get Started</a>
                      </div>
                      <div class="col-lg-7 order-1 order-lg-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                      <div class="image-stack">
                          <img src="data:image/jpeg;base64,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" alt="" class="stack-front">
                          <img src="data:image/jpeg;base64,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" alt="" class="stack-back">
                      </div>
                      </div>
                  </div><!-- Features Item -->



                  </div>

              </section><!-- /Features Section -->
          </div> <!--end of the div class -->

        </header>
        {{-- <div class="container px-4 px-lg-5">
              <!-- Features Section -->
              <section id="features" class="features section">

                <!-- Section Title -->
                <div class="container section-title" data-aos="fade-up">
                <h2>Upcoming Events</h2>
                <p>Exciting events coming up at True Church! Don't miss our annual family picnic, youth retreat, and special Christmas Eve service. Something for everyone!</p>
                </div><!-- End Section Title -->

                <div class="container">

                <div class="row gy-4 align-items-center features-item">
                    <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h3>Corporis temporibus maiores provident</h3>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                    </p>
                    <a href="#" class="btn btn-get-started">Get Started</a>
                    </div>
                    <div class="col-lg-7 order-1 order-lg-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                    <div class="image-stack">
                        <img src="data:image/jpeg;base64,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" alt="" class="stack-front">
                        <img src="data:image/jpeg;base64,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" alt="" class="stack-back">
                    </div>
                    </div>
                </div><!-- Features Item -->



                </div>

            </section><!-- /Features Section -->
        </div> <!--end of the div class --> --}}
        <!-- About-->

        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container px-4 px-lg-5">
                <h2 class="text-center mt-0">Our Events</h2>
                <hr class="divider" />


                                <!-- Blog Posts Section -->
                    <section id="blog-posts" class="blog-posts section">

                        <div class="container">



                            <div class="row gy-4">
                                @foreach ($events as $event )

                                    <div class="col-lg-4">
                                    <article>

                                        <div class="post-img">
                                        <img src="https://images.pexels.com/photos/976866/pexels-photo-976866.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" class="img-fluid">
                                        </div>

                                        <p class="post-category"></p>

                                        <h2 class="title">
                                        <a href="{{ url('/blog')}}">{{$event->title}}</a>
                                        </h2>

                                        <div class="d-flex align-items-center">
                                        <img src="https://images.pexels.com/photos/976866/pexels-photo-976866.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" class="img-fluid post-author-img flex-shrink-0">

                                        <div class="post-meta">
                                            <p class="post-author">{{$event->location}}</p>
                                            <p class="post-date">
                                            <time datetime="2022-01-01">{{$event->date}}</time>
                                            </p>
                                        </div>
                                        </div>

                                    </article>
                                    </div><!-- End post list item -->

                                @endforeach

                            {{-- <div class="col-lg-4">
                            <article>

                                <div class="post-img">
                                <img src="https://images.pexels.com/photos/976866/pexels-photo-976866.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" class="img-fluid">
                                </div>

                                <p class="post-category">Sports</p>

                                <h2 class="title">
                                <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
                                </h2>

                                <div class="d-flex align-items-center">
                                <img src="https://images.pexels.com/photos/976866/pexels-photo-976866.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" class="img-fluid post-author-img flex-shrink-0">
                                <div class="post-meta">
                                    <p class="post-author">Allisa Mayer</p>
                                    <p class="post-date">
                                    <time datetime="2022-01-01">Jun 5, 2022</time>
                                    </p>
                                </div>
                                </div>

                            </article>
                            </div><!-- End post list item -->

                            <div class="col-lg-4">
                            <article>

                                <div class="post-img">
                                <img src="https://images.pexels.com/photos/976866/pexels-photo-976866.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" class="img-fluid">
                                </div>

                                <p class="post-category">Entertainment</p>

                                <h2 class="title">
                                <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
                                </h2>

                                <div class="d-flex align-items-center">
                                <img src="https://images.pexels.com/photos/976866/pexels-photo-976866.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" class="img-fluid post-author-img flex-shrink-0">
                                <div class="post-meta">
                                    <p class="post-author">Mark Dower</p>
                                    <p class="post-date">
                                    <time datetime="2022-01-01">Jun 22, 2022</time>
                                    </p>
                                </div>
                                </div>

                            </article>
                            </div><!-- End post list item -->

                            <div class="col-lg-4">
                            <article>

                                <div class="post-img">
                                <img src="https://images.pexels.com/photos/976866/pexels-photo-976866.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" class="img-fluid">
                                </div>

                                <p class="post-category">Sports</p>

                                <h2 class="title">
                                <a href="blog-details.html">Non rem rerum nam cum quo minus olor distincti</a>
                                </h2>

                                <div class="d-flex align-items-center">
                                <img src="https://images.pexels.com/photos/976866/pexels-photo-976866.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" class="img-fluid post-author-img flex-shrink-0">
                                <div class="post-meta">
                                    <p class="post-author">Lisa Neymar</p>
                                    <p class="post-date">
                                    <time datetime="2022-01-01">Jun 30, 2022</time>
                                    </p>
                                </div>
                                </div>

                            </article>
                            </div><!-- End post list item -->

                            <div class="col-lg-4">
                            <article>

                                <div class="post-img">
                                <img src="https://images.pexels.com/photos/976866/pexels-photo-976866.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" class="img-fluid">
                                </div>

                                <p class="post-category">Politics</p>

                                <h2 class="title">
                                <a href="blog-details.html">Accusamus quaerat aliquam qui debitis facilis consequatur</a>
                                </h2>

                                <div class="d-flex align-items-center">
                                <img src="https://images.pexels.com/photos/976866/pexels-photo-976866.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" class="img-fluid post-author-img flex-shrink-0">
                                <div class="post-meta">
                                    <p class="post-author">Denis Peterson</p>
                                    <p class="post-date">
                                    <time datetime="2022-01-01">Jan 30, 2022</time>
                                    </p>
                                </div>
                                </div>

                            </article>
                            </div><!-- End post list item -->

                            <div class="col-lg-4">
                            <article>

                                <div class="post-img">
                                <img src="https://images.pexels.com/photos/976866/pexels-photo-976866.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" class="img-fluid">
                                </div>

                                <p class="post-category">Entertainment</p>

                                <h2 class="title">
                                <a href="blog-details.html">Distinctio provident quibusdam numquam aperiam aut</a>
                                </h2>

                                <div class="d-flex align-items-center">
                                <img src="https://images.pexels.com/photos/976866/pexels-photo-976866.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="" class="img-fluid post-author-img flex-shrink-0">
                                <div class="post-meta">
                                    <p class="post-author">Mika Lendon</p>
                                    <p class="post-date">
                                    <time datetime="2022-01-01">Feb 14, 2022</time>
                                    </p>
                                </div>
                                </div>

                            </article>
                            </div><!-- End post list item --> --}}

                        </div>
                        </div>

                    </section><!-- /Blog Posts Section -->



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
