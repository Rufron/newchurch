<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="{{ route('viewpastor') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> View Pastors</a>
    </div>

    <!-- Content Row -->
    <div class="row">


    </div>

    <!-- Content Row -->
    {{-- where the contents should be placed.. --}}
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <style>
                .pastor-form-container {
                    background-color: #ffffff;
                    border-radius: 1rem;
                    padding: 2rem;
                    margin-top: 2rem;
                    box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
                }

                .pastor-form-container h4 {
                    font-weight: 700;
                    margin-bottom: 1.5rem;
                    color: #0d6efd;
                    text-align: center;
                }

                .pastor-form-container label {
                    font-weight: 600;
                    margin-bottom: 0.3rem;
                }

                .pastor-form-container .form-control {
                    font-size: 0.92rem;
                    padding: 0.5rem 0.75rem;
                    border-radius: 0.5rem;
                }

                .pastor-form-container .btn-primary {
                    margin-top: 1.25rem;
                    padding: 0.6rem;
                    font-weight: 600;
                    border-radius: 0.5rem;
                    width: 100%;
                }

                .pastor-form-container textarea {
                    resize: vertical;
                    min-height: 100px;
                }

                .modal-content {
                    border-radius: 0.75rem;
                }
            </style>

            <div class="pastor-form-container">
                <h4>Add New Pastor</h4>

                <form method="POST" action="{{ route('addpastors.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <div class="mb-3">
                        <label for="role">Role</label>
                        <input type="text" class="form-control" id="role" name="role" required>
                    </div>

                    <div class="mb-3">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="message" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="image">Upload Image</label>
                        <input type="file" class="form-control" id="image" name="image" required>
                    </div>

                    <button type="submit" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#create-event-modal">
                        Save Pastor
                    </button>

                    @if (session('success'))
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                var modal = new bootstrap.Modal(document.getElementById('create-event-modal'));
                                modal.show();
                            });
                        </script>
                    @endif
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="create-event-modal" tabindex="-1" aria-labelledby="create-event-modal-label"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content shadow">
                <div class="modal-header">
                    <h5 class="modal-title" id="create-event-modal-label">New Pastor Added</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    You have successfully added a new pastor.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->
