<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Sermon Content</h1>
        <a href="{{ route('addsermon') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-arrow-left fa-sm text-white-50"></i>
            Back</a>
    </div>

    <!-- Content Row -->
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <style>
                .table thead {
                    background-color: #0d6efd;
                    color: #fff;
                }

                .table th,
                .table td {
                    vertical-align: middle;
                }

                .btn {
                    margin-right: 0.5rem;
                }

                .pagination {
                    justify-content: center;
                    margin-top: 1.5rem;
                }
            </style>

            <div class="card shadow-sm rounded-3">
                <div class="card-body">
                    <h4 class="mb-4 text-primary text-center fw-bold">Sermons List</h4>

                    <div class="table-responsive">
                        <table class="table table-bordered table-hover text-center">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Bible Verse</th>
                                    <th>Date</th>
                                    <th>Author</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($add_sermons as $add_sermon)
                                    <tr>
                                        <td>{{ $add_sermon->id }}</td>
                                        <td>{{ $add_sermon->title }}</td>
                                        <td>{{ $add_sermon->text }}</td>
                                        <td>{{ $add_sermon->date }}</td>
                                        <td>{{ $add_sermon->author }}</td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <a href="{{ route('sermons.edit', $add_sermon->id) }}"
                                                    class="btn btn-sm btn-outline-primary">
                                                    <i class="fas fa-edit me-1"></i>Edit
                                                </a>
                                                <form action="{{ route('sermons.destroy', $add_sermon->id) }}"
                                                    method="POST" onsubmit="return confirm('Are you sure?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                                        <i class="fas fa-trash me-1"></i>Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-muted">No sermons available.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination Links -->
                    <div>
                        {{ $add_sermons->links() }}
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
