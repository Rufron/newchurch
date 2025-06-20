                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="{{ route('events') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                            <i class="fas fa-download fa-sm text-white-50"></i> Back
                        </a>

                    </div>

                    <!-- Content Row -->
                    <div class="row">


                    </div>

                    <!-- Content Row -->
                    <!-- where the contents should be placed.. -->
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <style>
                                .table thead {
                                    background-color: #0d6efd;
                                    color: white;
                                }

                                .table th,
                                .table td {
                                    vertical-align: middle;
                                    text-align: center;
                                }

                                .btn {
                                    margin: 0 0.25rem;
                                }

                                .pagination {
                                    justify-content: center;
                                    margin-top: 1.5rem;
                                }

                                .card {
                                    margin-top: 2rem;
                                    border-radius: 0.75rem;
                                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
                                }
                            </style>

                            <div class="card">
                                <div class="card-body">
                                    <h4 class="text-center text-primary fw-bold mb-4">Event List</h4>

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Event Name</th>
                                                    <th>Date</th>
                                                    <th>Location</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($events as $event)
                                                    <tr>
                                                        <td>{{ $event->title }}</td>
                                                        <td>{{ \Carbon\Carbon::parse($event->date)->format('M d, Y') }}
                                                        </td>
                                                        <td>{{ $event->location }}</td>
                                                        <td>
                                                            <div class="d-flex justify-content-center">
                                                                <a href="{{ route('events.edit', $event->id) }}"
                                                                    class="btn btn-sm btn-outline-primary">
                                                                    <i class="fas fa-edit me-1"></i> Edit
                                                                </a>
                                                                <form action="{{ route('events.destroy', $event->id) }}"
                                                                    method="POST"
                                                                    onsubmit="return confirm('Are you sure you want to delete this event?')">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="btn btn-sm btn-outline-danger">
                                                                        <i class="fas fa-trash me-1"></i> Delete
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="4" class="text-muted">No events found.</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- Pagination -->
                                    <div class="d-flex justify-content-center">
                                        {{ $events->links() }}
                                    </div>
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
