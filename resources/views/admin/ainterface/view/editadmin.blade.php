<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="{{ route('admininterface') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i>Home</a>
    </div>

    <!-- Content Row -->
    <div class="row">

    </div>

    <!-- Content Row -->
    {{-- where the contents should be placed.. --}}
    <div class="row justify-content-center mt-4">
        <div class="col-md-7">
            <style>
                .edit-admin-card {
                    background-color: #fff;
                    padding: 2rem;
                    border-radius: 1rem;
                    box-shadow: 0 0 15px rgba(0, 0, 0, 0.08);
                }

                .edit-admin-card h3 {
                    text-align: center;
                    margin-bottom: 1.5rem;
                    font-weight: 700;
                    color: #0d6efd;
                }

                .form-group label {
                    font-weight: 600;
                    font-size: 0.95rem;
                }

                .form-control {
                    font-size: 0.95rem;
                    padding: 0.5rem 0.75rem;
                    border-radius: 0.5rem;
                }

                .btn {
                    padding: 0.5rem 1rem;
                    font-weight: 600;
                    border-radius: 0.5rem;
                }

                .modal-content {
                    border-radius: 1rem;
                }
            </style>

            <div class="edit-admin-card">
                <h3>Edit Admin</h3>

                <form action="{{ route('admin.update', $admins->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ $admins->name }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email"
                            value="{{ $admins->email }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="password">New Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Leave blank to keep current password">
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('admininterface') }}" class="btn btn-outline-secondary">Cancel</a>
                        <button type="submit" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#updateSuccessModal">Update Admin</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- ✅ Update Success Modal -->
    <div class="modal fade" id="updateSuccessModal" tabindex="-1" aria-labelledby="updateSuccessModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content shadow">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateSuccessModalLabel">Update Successful</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Admin details have been updated successfully.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ✅ Trigger modal after redirect if session('success') -->
    @if (session('success'))
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const successModal = new bootstrap.Modal(document.getElementById('updateSuccessModal'));
                successModal.show();
            });
        </script>
    @endif

    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->
