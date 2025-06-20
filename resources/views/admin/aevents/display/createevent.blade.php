<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        {{-- <h1 class="h3 mb-0 text-gray-800">Dashboard</h1> --}}
        <a href="{{ route('events.all') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> View All Events</a>
    </div>


    <!-- Content Row -->
    <!-- where the contents should be placed.. -->
    <div class="row justify-content-center">
        <div class="col-lg-7 col-md-9">
            <style>
                .create-event-card {
                    background-color: #ffffff;
                    padding: 2rem;
                    border-radius: 1rem;
                    box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
                    margin-top: 2rem;
                }

                .create-event-card h3 {
                    font-weight: 700;
                    margin-bottom: 1.5rem;
                    text-align: center;
                    color: #0d6efd;
                }

                .create-event-card label {
                    font-weight: 600;
                    margin-bottom: 0.3rem;
                }

                .create-event-card .form-control {
                    padding: 0.5rem 0.75rem;
                    border-radius: 0.5rem;
                    font-size: 0.95rem;
                }

                .create-event-card textarea {
                    resize: vertical;
                    min-height: 100px;
                }

                .create-event-card .btn-primary {
                    width: 100%;
                    margin-top: 1.5rem;
                    padding: 0.6rem;
                    font-weight: 600;
                    border-radius: 0.5rem;
                }

                .modal .modal-content {
                    border-radius: 1rem;
                }
            </style>

            <div class="create-event-card">
                <h3>Create New Event</h3>

                <form method="POST" action="{{ route('admin.events.store') }}" enctype="multipart/form-data">
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
                        <label for="time">Time</label>
                        <input type="time" class="form-control" id="time" name="time" required>
                    </div>

                    <div class="mb-3">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" id="location" name="location" required>
                    </div>

                    <div class="mb-3">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="image" name="image" required>
                    </div>

                    <button type="submit" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#create-event-modal">
                        Create Event
                    </button>

                    {{-- Optional: Show success modal --}}
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

    <!-- ✅ Modal: Success -->
    <div class="modal fade" id="create-event-modal" tabindex="-1" aria-labelledby="create-event-modal-label"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content shadow">
                <div class="modal-header">
                    <h5 class="modal-title" id="create-event-modal-label">Event Created</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Your new event has been successfully created.
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

<!-- Footer -->
<footer class="sticky-footer bg-white">

</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->
