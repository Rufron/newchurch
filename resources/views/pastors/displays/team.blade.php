<!-- Features Section -->
<section id="features" class="features section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Meet Our Pastors</h2>
        <p></p>
    </div>

    <div class="container">
        @foreach ($add_pastors as $add_pastor)
            <div class="row gy-4 align-items-stretch justify-content-between features-item">
                <div class="col-lg-6 d-flex align-items-center features-img-bg" data-aos="zoom-out">
                    <img src="https://media.gettyimages.com/id/1284922366/photo/portrait-of-a-happy-pastor-in-church.jpg?s=612x612"
                        class="img-fluid" alt="">
                </div>
                <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                    <h3>{{ $add_pastor->name }}</h3>
                    <p>Pastor {{ $add_pastor->name }} is a dedicated servant of God...</p>
                    <ul>
                        <li><i class="bi bi-check"></i> Spirit-filled preaching...</li>
                    </ul>
                    <a href="#" class="btn btn-get-started align-self-start">Click to view more</a>
                </div>
            </div>
        @endforeach
    </div>
</section>

<!-- Team Section -->
<section id="team" class="team section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div>

    <div class="container">
        <div class="row gy-5">
            @foreach ($add_pastors as $add_pastor)
                <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="https://www.shutterstock.com/image-photo/confident-african-american-man-pastor-600nw-2177616767.jpg"
                            class="img-fluid" alt="">
                        <div class="social">
                            <a href="#"><i class="bi bi-twitter-x"></i></a>
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info text-center">
                        <h4>{{ $add_pastor->name }}</h4>
                        <span>{{ $add_pastor->role }}</span>
                        <p>{{ $add_pastor->message }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
