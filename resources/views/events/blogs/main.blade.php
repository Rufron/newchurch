<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Blog Details</h1>

                    </div>
                </div>
            </div>
        </div>
        {{-- <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ url('/events') }}">Home</a></li>
                    <li class="current">Events Details</li>
                </ol>
            </div>
        </nav> --}}

        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/events') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Events Details</li>
                </ol>
            </div>
        </nav>

    </div><!-- End Page Title -->
