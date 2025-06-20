<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="{{ route('admininterface') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i>Home</a>
    </div>

    <!-- Content Row -->
    <div class="row justify-content-center mt-4">
        <div class="col-md-7">
            <style>
                .add-admin-card {
                    background-color: #ffffff;
                    padding: 2rem;
                    border-radius: 1rem;
                    box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
                }

                .add-admin-card h3 {
                    text-align: center;
                    margin-bottom: 1.5rem;
                    font-weight: 700;
                    color: #0d6efd;
                }

                .form-group label {
                    font-weight: 600;
                    font-size: 0.95rem;
                    margin-bottom: 0.3rem;
                }

                .form-control {
                    font-size: 0.95rem;
                    padding: 0.5rem 0.75rem;
                    border-radius: 0.5rem;
                }

                .btn {
                    padding: 0.5rem 1rem;
                    border-radius: 0.5rem;
                    font-weight: 600;
                }

                .modal .modal-content {
                    border-radius: 1rem;
                }
            </style>

            <div class="add-admin-card">
                <h3>Add New Admin</h3>

                <form action="{{ route('newadmin.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#create-event-modal">
                            Save Admin
                        </button>
                    </div>

                    @if (session('success'))
                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                var modal = new bootstrap.Modal(document.getElementById('create-event-modal'));
                                modal.show();
                            });
                        </script>
                    @endif
                </form>
            </div>
        </div>
    </div>

    <!-- ✅ Success Modal -->
    <div class="modal fade" id="create-event-modal" tabindex="-1" aria-labelledby="create-event-modal-label"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content shadow">
                <div class="modal-header">
                    <h5 class="modal-title" id="create-event-modal-label">Admin Created</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    A new admin has been successfully created.
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
