<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->


    <!-- Content Row -->
    <!-- where the contents should be placed.. -->
    <div class="row justify-content-center">
        <div class="col-lg-7 col-md-9">
            <style>
                .edit-event-card {
                    background-color: #ffffff;
                    padding: 2rem;
                    border-radius: 1rem;
                    box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
                    margin-top: 2rem;
                }

                .edit-event-card h3 {
                    font-weight: 700;
                    margin-bottom: 1.5rem;
                    text-align: center;
                    color: #0d6efd;
                }

                .edit-event-card label {
                    font-weight: 600;
                    margin-bottom: 0.3rem;
                }

                .edit-event-card .form-control {
                    padding: 0.5rem 0.75rem;
                    border-radius: 0.5rem;
                    font-size: 0.95rem;
                }

                .edit-event-card textarea {
                    resize: vertical;
                    min-height: 100px;
                }

                .edit-event-card .btn-primary {
                    width: 100%;
                    margin-top: 1.5rem;
                    padding: 0.6rem;
                    font-weight: 600;
                    border-radius: 0.5rem;
                }
            </style>

            <div class="edit-event-card">
                <h3>Edit Event Details</h3>

                <form method="POST" action="{{ route('events.update', $events->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" required
                            value="{{ old('title', $events->title) }}">
                    </div>

                    <div class="mb-3">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" id="date" name="date" required
                            value="{{ old('date', $events->date) }}">
                    </div>

                    <div class="mb-3">
                        <label for="time">Time</label>
                        <input type="time" class="form-control" id="time" name="time" required
                            value="{{ old('time', $events->time) }}">
                    </div>

                    <div class="mb-3">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" id="location" name="location" required
                            value="{{ old('location', $events->location) }}">
                    </div>

                    <div class="mb-3">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" required>{{ old('description', $events->description) }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="image">Current Image</label><br>

                        @if ($events->image)
                            <img src="{{ asset('storage/' . $events->image) }}" alt="Event Image"
                                class="img-thumbnail mb-2" width="180">
                        @else
                            <p class="text-muted">No image uploaded yet.</p>
                        @endif

                        <input type="file" class="form-control mt-2" id="image" name="image">
                        <small class="form-text text-muted">Choose a new image only if you want to replace the current
                            one.</small>
                    </div>

                    <button type="submit" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#create-event-modal">
                        Update Event
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

    <!-- ✅ Modal: Update Success -->
    <div class="modal fade" id="create-event-modal" tabindex="-1" aria-labelledby="create-event-modal-label"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content shadow">
                <div class="modal-header">
                    <h5 class="modal-title" id="create-event-modal-label">Event Updated</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    You have successfully updated the event.
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
