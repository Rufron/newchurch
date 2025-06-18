<div class="container">
    <div class="row">

        <div class="col-lg-8">


            <!-- Blog Details Section -->
            <div id="blog-details" class="blog-details section">
                <div class="container">

                    <article class="article">

                        <div class="post-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRlD8f_S5FaibMuB0UdrJ-mwR8zY_8VdX6ISA&s"
                                alt="" class="img-fluid">
                        </div>

                        <h2 class="title">{{ $event->title }}</h2>

                        <div class="meta-top">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-geo-alt"></i> <a
                                        href="#">{{ $event->location }}</a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                        href="#"><time datetime="2020-01-01">{{ $event->date }}</time></a>
                                </li>
                                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                        href="#">{{ $event->time }}</a></li>
                            </ul>
                        </div><!-- End meta top -->

                        <div class="content">
                            <p>
                                {{ $event->description }}
                            </p>


                            <blockquote>
                                <p>

                                </p>
                            </blockquote>


                        </div><!-- End post content -->


                    </article>

                </div>
            </div><!-- /Blog Details Section -->


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
                                Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus
                                accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse
                                et accusantium ut unde voluptas.
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
