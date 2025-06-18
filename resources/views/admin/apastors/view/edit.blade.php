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

        <!--content for the sermons-->
        <ul>
            <table class="table">
                <thead>
                    <tr>
                        <th> </th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Message</th>
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
                                <div class="d-flex justify-content-end">
                                    <a href="{{ route('pastor.edit', $add_pastor->id) }}" class="btn btn-primary btn-sm">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('pastor.destroy', $add_pastor->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this pastor?')">
                                            <i class="fas fa-trash"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>

        </ul>

    </div>

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
