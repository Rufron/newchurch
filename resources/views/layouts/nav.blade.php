<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a href="/" class="logo">
            <img src="https://media.istockphoto.com/id/1333675089/vector/church-christian-vector-icon-on-white-background.jpg?s=1024x1024&w=is&k=20&c=CmUGRFYHCcnjE2XqMfRpHRJfyXgnXTFfqrsv_JR1na0="
                alt="Your Logo">
        </a>
        <a class="navbar-brand" href="#page-top">True Church</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto my-2 my-lg-0">
                <li class="nav-item {{ request()->is('home') ? 'current-nav-item' : '' }}">
                    <a class="nav-link" href="{{ url('/home') }}">Homepage</a>
                </li>

                <li class="nav-item {{ request()->is('pastor') ? 'current-nav-item' : '' }}">
                    <a class="nav-link" href="{{ url('/pastor') }}">Pastors</a>
                </li>

                <li class="nav-item {{ request()->is('sermon') ? 'current-nav-item' : '' }}">
                    <a class="nav-link" href="{{ url('/sermon') }}">Sermons</a>
                </li>

                <li class="nav-item {{ request()->is('events') ? 'current-nav-item' : '' }}">
                    <a class="nav-link" href="{{ url('/events') }}">Events</a>
                </li>

                <li class="nav-item {{ request()->is('about') ? 'current-nav-item' : '' }}">
                    <a class="nav-link" href="{{ url('/about') }}">About</a>
                </li>

                <li class="nav-item {{ request()->is('contact') ? 'current-nav-item' : '' }}">
                    <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                </li>

            </ul>

        </div>
    </div>
</nav>

{{-- this is just atrial will remove --}}
<style>
    .current-nav-item > a {
        background-color: #dd8b33;
        color: #fff !important;
        border-radius: 5px;
        padding: 6px 12px;
    }
</style>
