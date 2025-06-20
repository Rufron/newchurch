<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="{{ route('events.all') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> View All Events</a>
    </div>

    <!-- Content Row -->
    <div class="row">


    </div>

    <!-- Content Row -->
    <!-- where the contents should be placed.. -->
    <div class="row">

        {{-- code starts here --}}


        <div class="card-body">
            <h2>Events</h2>
            {{-- table to display and edit and delete the ready events --}}




            <!-- Event Creation Form -->
            <form method="POST" action="{{ route('admin.events.store') }}" enctype="multipart/form-data">
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
                    <label for="time">Time:</label>
                    <input type="time" class="form-control" id="time" name="time" required>
                </div>

                <div class="form-group">
                    <label for="location">Location:</label>
                    <input type="text" class="form-control" id="location" name="location" required>
                </div>

                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" id="description" name="description" required></textarea>
                </div>

                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" class="form-control" id="image" name="image" required>
                </div>



                <button type="submit" class="btn btn-primary" data-toggle="modal"
                    data-target="#create-event-modal">Create Event</button>

                <!-- Modal Dialog  for a succesful registration!!-->
                <div class="modal fade" id="create-event-modal" tabindex="-1" role="dialog"
                    aria-labelledby="create-event-modal-label" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="create-event-modal-label">New Event Created!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                A new event has been successfully created.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Check for Success message and show modal if it exists --}}
                @if (session('success'))
                    <script>
                        $(document).ready(function() {
                            $('#create-event-modal').modal('show');
                        });
                    </script>
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
