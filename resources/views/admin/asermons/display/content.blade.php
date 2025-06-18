<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Sermon Content</h1>
        <a href={{ url('/admin/addsermon/sermonview') }}
            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> View current sermons</a>
    </div>

    <!-- Content Row -->
    <div class="row">


    </div>

    <!-- Content Row -->
    {{-- where the contents should be placed.. --}}
    <div class="row">

        {{-- code starts here --}}


        <div class="card-body">
            <!-- add-sermon.blade.php -->

            <form method="POST" action="{{ route('addsermon.store') }}">
                @csrf

                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>

                <div class="form-group">
                    <label for="date">Date:</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>

                <div class="form-group">
                    <label for="text">Text:</label>
                    <textarea class="form-control" id="text" name="text" required></textarea>
                </div>

                <div class="form-group">
                    <label for="notes">Notes:</label>
                    <textarea class="form-control" id="notes" name="notes" required></textarea>
                </div>

                <div class="form-group">
                    <label for="author">Author:</label>
                    <input type="text" class="form-control" id="author" name="author" required>
                </div>

                <button type="submit" class="btn btn-primary">Add Sermon</button>

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

            </form>
        </div>

        <!-- Content Row -->
        <div class="row">



            <div class="col-lg-6 mb-4">




            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">

</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->
