<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pastors</h1>
        <a href="{{ route('addpastor') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-arrow-left fa-sm text-white-50"></i>
            Back</a>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <style>
                .card {
                    border: none;
                    border-radius: 1rem;
                    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
                }

                .table thead th {
                    background: linear-gradient(to right, #0d6efd, #6610f2);
                    color: white;
                    border: none;
                }

                .table-hover tbody tr:hover {
                    background-color: #f5f9ff;
                    cursor: pointer;
                    transition: background-color 0.2s ease;
                }

                .btn-outline-primary:hover,
                .btn-outline-danger:hover {
                    transform: scale(1.05);
                    transition: all 0.2s ease;
                }

                .table td,
                .table th {
                    vertical-align: middle;
                }

                .table td {
                    white-space: nowrap;
                }

                .card-title {
                    font-weight: bold;
                    color: #0d6efd;
                }

                .gap-2>* {
                    margin-right: 0.5rem;
                }

                .gap-2>*:last-child {
                    margin-right: 0;
                }
            </style>

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center mb-4">Pastors List</h4>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle text-center">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Message</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($add_pastors as $add_pastor)
                                    <tr>
                                        <td>{{ $add_pastor->id }}</td>
                                        <td>{{ $add_pastor->name }}</td>
                                        <td>{{ $add_pastor->role }}</td>
                                        <td>{{ $add_pastor->message }}</td>
                                        <td>
                                            <div class="d-flex justify-content-center gap-2">
                                                <a href="{{ route('pastor.edit', $add_pastor->id) }}"
                                                    class="btn btn-sm btn-outline-primary">
                                                    <i class="fas fa-edit me-1"></i> Edit
                                                </a>
                                                <form action="{{ route('pastor.destroy', $add_pastor->id) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this pastor?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                                        <i class="fas fa-trash me-1"></i> Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div> <!-- table-responsive -->
                </div> <!-- card-body -->
            </div> <!-- card -->
        </div> <!-- col -->
    </div> <!-- row -->


    <!-- Content Row -->
    {{-- where the contents should be placed.. --}}
    <div class="row">

        {{-- code starts here --}}


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
