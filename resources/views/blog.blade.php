
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
                <a href="/" class="logo">
                    <img src="https://media.istockphoto.com/id/1333675089/vector/church-christian-vector-icon-on-white-background.jpg?s=1024x1024&w=is&k=20&c=CmUGRFYHCcnjE2XqMfRpHRJfyXgnXTFfqrsv_JR1na0=" alt="Your Logo">
                  </a>
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
        <main class="main">

            <!-- Page Title -->
            <div class="page-title" data-aos="fade">
              <div class="heading">
                <div class="container">
                  <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                      <h1>Blog Details</h1>
                      <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
                    </div>
                  </div>
                </div>
              </div>
              <nav class="breadcrumbs">
                <div class="container">
                  <ol>
                    <li><a href="{{ url('/events')}}">Home</a></li>
                    <li class="current">Events Details</li>
                  </ol>
                </div>
              </nav>
            </div><!-- End Page Title -->

            <div class="container">
              <div class="row">

                <div class="col-lg-8">

                @foreach ($events as $event )


                        <!-- Blog Details Section -->
                        <div id="blog-details" class="blog-details section">
                            <div class="container">

                            <article class="article">

                                <div class="post-img">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRlD8f_S5FaibMuB0UdrJ-mwR8zY_8VdX6ISA&s" alt="" class="img-fluid">
                                </div>

                                <h2 class="title">{{$event->title}}</h2>

                                <div class="meta-top">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-geo-alt"></i> <a href="#">{{$event->location}}</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="2020-01-01">{{$event->date}}</time></a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="#">{{$event->time}}</a></li>
                                </ul>
                                </div><!-- End meta top -->

                                <div class="content">
                                <p>
                                   {{$event->description}}
                                </p>

                                {{-- <p>
                                    Sit repellat hic cupiditate hic ut nemo. Quis nihil sunt non reiciendis. Sequi in accusamus harum vel aspernatur. Excepturi numquam nihil cumque odio. Et voluptate cupiditate.
                                </p> --}}

                                <blockquote>
                                    <p>

                                    </p>
                                </blockquote>

                                {{-- <p>
                                    Sed quo laboriosam qui architecto. Occaecati repellendus omnis dicta inventore tempore provident voluptas mollitia aliquid. Id repellendus quia. Asperiores nihil magni dicta est suscipit perspiciatis. Voluptate ex rerum assumenda dolores nihil quaerat.
                                    Dolor porro tempora et quibusdam voluptas. Beatae aut at ad qui tempore corrupti velit quisquam rerum. Omnis dolorum exercitationem harum qui qui blanditiis neque.
                                    Iusto autem itaque. Repudiandae hic quae aspernatur ea neque qui. Architecto voluptatem magni. Vel magnam quod et tempora deleniti error rerum nihil tempora.
                                </p>

                                <h3>Et quae iure vel ut odit alias.</h3>
                                <p>
                                    Officiis animi maxime nulla quo et harum eum quis a. Sit hic in qui quos fugit ut rerum atque. Optio provident dolores atque voluptatem rem excepturi molestiae qui. Voluptatem laborum omnis ullam quibusdam perspiciatis nulla nostrum. Voluptatum est libero eum nesciunt aliquid qui.
                                    Quia et suscipit non sequi. Maxime sed odit. Beatae nesciunt nesciunt accusamus quia aut ratione aspernatur dolor. Sint harum eveniet dicta exercitationem minima. Exercitationem omnis asperiores natus aperiam dolor consequatur id ex sed. Quibusdam rerum dolores sint consequatur quidem ea.
                                    Beatae minima sunt libero soluta sapiente in rem assumenda. Et qui odit voluptatem. Cum quibusdam voluptatem voluptatem accusamus mollitia aut atque aut.
                                </p>
                                <img src="assets/img/blog/blog-inside-post.jpg" class="img-fluid" alt="">

                                <h3>Ut repellat blanditiis est dolore sunt dolorum quae.</h3>
                                <p>
                                    Rerum ea est assumenda pariatur quasi et quam. Facilis nam porro amet nostrum. In assumenda quia quae a id praesentium. Quos deleniti libero sed occaecati aut porro autem. Consectetur sed excepturi sint non placeat quia repellat incidunt labore. Autem facilis hic dolorum dolores vel.
                                    Consectetur quasi id et optio praesentium aut asperiores eaque aut. Explicabo omnis quibusdam esse. Ex libero illum iusto totam et ut aut blanditiis. Veritatis numquam ut illum ut a quam vitae.
                                </p>
                                <p>
                                    Alias quia non aliquid. Eos et ea velit. Voluptatem maxime enim omnis ipsa voluptas incidunt. Nulla sit eaque mollitia nisi asperiores est veniam.
                                </p> --}}

                                </div><!-- End post content -->


                            </article>

                            </div>
                        </div><!-- /Blog Details Section -->
                  @endforeach

                  <!-- Blog Author Section -->
                  <section id="blog-author" class="blog-author section">

                    <div class="container">
                      <div class="author-container d-flex align-items-center">
                        <img src="assets/img/blog/blog-author.jpg" class="rounded-circle flex-shrink-0" alt="">
                        <div>
                          <h4>True Church</h4>
                          <div class="social-links">
                            <a href="https://x.com/#"><i class="bi bi-twitter-x"></i></a>
                            <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                            <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                          </div>
                          <p>
                            Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
                          </p>
                        </div>
                      </div>
                    </div>

                  </section><!-- /Blog Author Section -->



                  <!-- Comment Form Section -->
                  <section id="comment-form" class="comment-form section">
                    <div class="container">



                    </div>
                  </section><!-- /Comment Form Section -->

                </div>

                <div class="col-lg-4 sidebar">





                  </div>

                </div>

              </div>
            </div>

          </main>





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

