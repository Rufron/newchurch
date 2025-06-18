<!-- Features Section -->
<section id="features" class="features section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Meet Our Pastors</h2>
        <p></p>


        <div class="container d-flex justify-content-center align-items-center" style="height: 150vh;">

            <div id="carouselExampleCaptions" class="carousel slide" style="width: 50rem;">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    {{-- <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button> --}}
                </div>
                <div class="carousel-inner">
                    @foreach ($add_pastors as $add_pastor)
                        <div class="carousel-item active">
                            <img src="{{ $add_pastor->image }}" class="d-block w-100 h-50" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>{{ $add_pastor->name }}</h5>
                                <p>Pastor {{ $add_pastor->name }} is a dedicated servant of God...</p>
                                <a href="#" class="btn btn-get-started align-self-start">Click to view more</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>


    </div>


</section>

<!-- Team Section -->
<section id="team" class="team section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p class="mt-2 text-gray-600 text-sm">Leading the church in authentic, spirit-filled worship.</p>
    </div>

    <div class="container">
        <div class="row gy-5">
            @foreach ($add_pastors as $add_pastor)
                <div class="card" style="width: 18rem;">
                    <img src="{{ $add_pastor->image }}" class="card-img-top h-50" alt="...">
                    <div class="card-body">
                        <div class="member-info text-center">
                            <h4>{{ $add_pastor->name }}</h4>
                            <span>{{ $add_pastor->role }}</span>
                            <p>{{ $add_pastor->message }}</p>
                        </div>
                        <div class="social">
                            <a href="#"><i class="bi bi-twitter-x"></i></a>
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
