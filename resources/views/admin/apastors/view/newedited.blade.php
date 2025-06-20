<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href={{ route('viewpastor') }} class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-arrow-left fa-sm text-white-50"></i> Back</a>
    </div>

    <!-- Content Row -->
    <div class="row">

    </div>

    <!-- Content Row -->
    {{-- where the contents should be placed.. --}}
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <style>
                .form-container {
                    background-color: #ffffff;
                    border-radius: 1rem;
                    padding: 2rem;
                    box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
                }

                .form-control:focus {
                    border-color: #0d6efd;
                    box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, 0.25);
                }

                label {
                    font-weight: 600;
                    margin-top: 1rem;
                }

                .btn-primary {
                    background-color: #0d6efd;
                    border: none;
                    padding: 0.6rem 1.5rem;
                    font-weight: bold;
                    margin-top: 1.5rem;
                    transition: all 0.3s ease;
                    border-radius: 0.5rem;
                }

                .btn-primary:hover {
                    background-color: #0b5ed7;
                    transform: scale(1.03);
                }

                .modal-content {
                    border-radius: 1rem;
                }

                .form-image-preview {
                    max-width: 180px;
                    height: auto;
                    border-radius: 0.5rem;
                    box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
                }
            </style>

            <div class="form-container">
                <h3 class="text-center text-primary fw-bold mb-4">Edit Pastor Details</h3>

                <form method="POST" action="{{ route('pastor.update', $add_pastors->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required
                            value="{{ $add_pastors->name }}">
                    </div>

                    <div class="form-group">
                        <label for="role">Role:</label>
                        <input type="text" class="form-control" id="role" name="role" required
                            value="{{ $add_pastors->role }}">
                    </div>

                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required>{{ $add_pastors->message }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="current-image">Current Image:</label><br>
                        <img src="{{ asset('storage/' . $add_pastors->image) }}" alt="Pastor Image"
                            class="form-image-preview mb-3">
                    </div>

                    <div class="form-group">
                        <label for="image">Upload New Image:</label>
                        <input type="file" class="form-control" id="image" name="image" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100" data-bs-toggle="modal"
                        data-bs-target="#create-event-modal">
                        Save Pastor
                    </button>

                    <!-- Modal for Success -->
                    <div class="modal fade" id="create-event-modal" tabindex="-1"
                        aria-labelledby="create-event-modal-label" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-success" id="create-event-modal-label">Success!</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    You have successfully updated the pastor’s details.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Trigger modal if session has success message --}}
                    @if (session('success'))
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                var successModal = new bootstrap.Modal(document.getElementById('create-event-modal'));
                                successModal.show();
                            });
                        </script>
                    @endif
                </form>
            </div>
        </div>
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
