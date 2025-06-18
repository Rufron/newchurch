  <section class="page-section" id="services">
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">Our Latest Sermons</h2>
            <hr class="divider" />

            <!-- Sermons Section -->
            <section id="services" class="services section">
                <div class="container section-title" data-aos="fade-up">
                    <h2>Sermons</h2>
                </div>

                <div class="container">
                    <div class="row gy-4">
                        @foreach ($add_sermons as $add_sermon)
                            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                                <div class="service-item d-flex">
                                    <div class="icon flex-shrink-0"><i class="bi bi-book"></i></div>
                                    <div>
                                        <h4 class="title">
                                            <a href="{{ route('sermon.show', $add_sermon->id) }}" class="stretched-link">{{ $add_sermon->title }}</a>
                                        </h4>
                                        <p class="description">{{ $add_sermon->date }}</p>
                                        <p class="description">{{ $add_sermon->text }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    </section>
