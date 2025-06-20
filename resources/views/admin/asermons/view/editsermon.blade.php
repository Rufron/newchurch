                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Sermon Content</h1>
                        <a href={{ url('/admin/addsermon/sermonview') }}
                            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-arrow-left fa-sm text-white-50"></i> Back</a>
                    </div>

                    <!-- Content Row -->
                    {{-- where the contents should be placed.. --}}
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6">
                            <style>
                                .edit-form-container {
                                    background-color: #fff;
                                    border-radius: 1rem;
                                    padding: 2rem;
                                    box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
                                    margin-top: 2rem;
                                }

                                .edit-form-container h4 {
                                    font-weight: 700;
                                    margin-bottom: 1.5rem;
                                    color: #0d6efd;
                                }

                                .edit-form-container label {
                                    font-weight: 600;
                                    margin-bottom: 0.3rem;
                                }

                                .edit-form-container .form-control {
                                    font-size: 0.92rem;
                                    padding: 0.5rem 0.75rem;
                                    border-radius: 0.5rem;
                                }

                                .edit-form-container .btn-primary {
                                    margin-top: 1.25rem;
                                    padding: 0.6rem;
                                    font-weight: 600;
                                    border-radius: 0.5rem;
                                    width: 100%;
                                }

                                .edit-form-container .alert-success {
                                    margin-top: 1.25rem;
                                    font-size: 0.9rem;
                                    border-radius: 0.5rem;
                                }

                                textarea.form-control {
                                    resize: vertical;
                                    min-height: 100px;
                                }
                            </style>

                            <div class="edit-form-container">
                                <h4 class="text-center">Edit Sermon Details</h4>

                                <form method="POST" action="{{ route('sermons.update', $add_sermons->id) }}">
                                    @csrf
                                    @method('PUT')

                                    <div class="mb-3">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" id="title" name="title"
                                            required value="{{ old('title', $add_sermons->title) }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="date">Date</label>
                                        <input type="date" class="form-control" id="date" name="date"
                                            required value="{{ old('date', $add_sermons->date) }}">
                                    </div>

                                    <div class="mb-3">
                                        <label for="text">Bible Verse</label>
                                        <textarea class="form-control" id="text" name="text" required>{{ old('text', $add_sermons->text) }}</textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="notes">Notes</label>
                                        <textarea class="form-control" id="notes" name="notes" required>{{ old('notes', $add_sermons->notes) }}</textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="author">Author</label>
                                        <input type="text" class="form-control" id="author" name="author"
                                            required value="{{ old('author', $add_sermons->author) }}">
                                    </div>

                                    <button type="submit" class="btn btn-primary">
                                        Update Sermon
                                    </button>

                                    @if (session('success'))
                                        <div class="alert alert-success text-center">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                </form>
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
