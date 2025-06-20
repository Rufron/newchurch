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
    <!-- container-fluid -->
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <style>
                .form-container {
                    background-color: #fff;
                    border-radius: 0.75rem;
                    padding: 1.5rem;
                    box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
                }

                .form-container .form-group label {
                    font-weight: 600;
                    font-size: 0.95rem;
                    margin-bottom: 0.25rem;
                }

                .form-container .form-control {
                    font-size: 0.9rem;
                    padding: 0.4rem 0.75rem;
                    border-radius: 0.5rem;
                }

                .form-container .btn-primary {
                    width: 100%;
                    padding: 0.6rem;
                    font-weight: 600;
                    border-radius: 0.5rem;
                    margin-top: 1rem;
                }

                .form-container .alert-success {
                    margin-top: 1rem;
                    border-radius: 0.5rem;
                    font-size: 0.9rem;
                }

                .form-container textarea.form-control {
                    resize: vertical;
                    min-height: 100px;
                }
            </style>

            <div class="form-container">
                <h5 class="text-center text-primary mb-3 fw-bold">Add New Sermon</h5>

                <form method="POST" action="{{ route('addsermon.store') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>

                    <div class="mb-3">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>

                    <div class="mb-3">
                        <label for="text">Text</label>
                        <textarea class="form-control" id="text" name="text" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="notes">Notes</label>
                        <textarea class="form-control" id="notes" name="notes" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="author">Author</label>
                        <input type="text" class="form-control" id="author" name="author" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Add Sermon</button>

                    @if (session('success'))
                        <div class="alert alert-success text-center">
                            {{ session('success') }}
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
    <!--container-fluid -->

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
