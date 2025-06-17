<!-- Features Section -->
<section id="features" class="features section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Meet Our Pastors</h2>
        <p></p>
    </div>

    {{-- <div class="container">
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
    </div> --}}









    <div id="carouselExampleSlidesOnly" style="width:500px" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://i.pinimg.com/736x/01/a0/91/01a091fd1159b4218b2049561923aecf.jpg"
                    alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://i.pinimg.com/736x/c0/35/33/c03533d8338b79285826472892730286.jpg"
                    alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://i.pinimg.com/736x/9e/75/6a/9e756a3fc996a1cb85eee7a50714237f.jpg"
                    alt="Third slide">
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.carousel').carousel({
                interval: 2
            });
        });
    </script>


    {{-- <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="https://i.pinimg.com/736x/01/a0/91/01a091fd1159b4218b2049561923aecf.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div> --}}

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
