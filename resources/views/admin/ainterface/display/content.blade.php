<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        {{-- admins action card example. --}}
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Admins</div>

                            {{-- this one now displays the total admin no !! --}}
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalAdmins }}</div>

                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-shield fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Action Admin Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Add new Admin</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <!-- Button Example -->
                                <a href="{{ route('admininterface.newadmin') }}" class="btn btn-square btn-primary">
                                    <i class="fas fa-check">Add</i>
                                    {{-- Add --}}
                                </a>
                                {{-- <button type="button" class="btn btn-square btn-primary" data-toggle="modal" data-target="#addPersonModal">
                                                        <i class="fas fa-check"></i>
                                                        Add
                                                    </button> --}}

                                <!-- Modal -->
                                <div class="modal fade" id="addPersonModal" tabindex="-1" role="dialog"
                                    aria-labelledby="addPersonModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="addPersonModalLabel">Add Person</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                You have successfully added a new person!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-plus fa-fw"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Admin Members</h6>
                    <div class="dropdown no-arrow">
                    </div>
                </div>



                <table class="table">

                    <tr>
                        <th> </th>
                        <th>Name</th>
                        <th>Email</th>

                    </tr>
                    {{-- table to actually display the content... --}}
                    @foreach ($admins as $admin)
                        <tr>
                            <div class="container">
                                <td>{{ $admin->id }}</td>
                                <td>{{ $admin->name }}</td>
                                <td>{{ $admin->email }}</td>
                                <td>
                                    <div class="d-flex justify-content-end">
                                        <a href="{{ route('admin.edit', $admin->id) }}"
                                            class="btn btn-primary btn-sm mr-2">Edit</a>
                                        <form action="{{ route('admin.destroy', $admin->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </div>
                        </tr>
                    @endforeach



                </table>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myAreaChart"></canvas>
                    </div>
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
