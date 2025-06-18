@include('admin.layouts.header')

@include('admin.layouts.sidebar')
@include('admin.layouts.navbar')

<main class="py-4">
    @yield('content')
</main>


@include('admin.layouts.footer')
