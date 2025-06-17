<section class="page-section" id="services">
    <div class="container px-4 px-lg-5">
        <h2 class="text-center mt-0">Our Events</h2>
        <hr class="divider" />


        <!-- Blog Posts Section -->
        <section id="blog-posts" class="blog-posts section">
            <div class="container">
                <div class="row gy-4">
                    @foreach ($events as $event)
                        <div class="col-lg-4">
                            <article>
                                <div class="post-img">
                                    <img src="https://images.pexels.com/photos/976866/pexels-photo-976866.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                        alt="" class="img-fluid">
                                </div>

                                <p class="post-category"></p>

                                <h2 class="title">
                                    <a href="{{ url('/blog') }}">{{ $event->title }}</a>
                                </h2>

                                <div class="d-flex align-items-center">
                                    <img src="https://images.pexels.com/photos/976866/pexels-photo-976866.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                        alt="" class="img-fluid post-author-img flex-shrink-0">

                                    <div class="post-meta">
                                        <p class="post-author">{{ $event->location }}</p>
                                        <p class="post-date">
                                            <time datetime="2022-01-01">{{ $event->date }}</time>
                                        </p>
                                    </div>
                                </div>

                            </article>
                        </div><!-- End post list item -->
                    @endforeach
                </div>
            </div>
        </section><!-- /Blog Posts Section -->
</section>
