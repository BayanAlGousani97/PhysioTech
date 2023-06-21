@extends('admin.app')
@section('main')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Doctors</h1>
        <div class="card shadow mb-4">
            <div class="card-header">
                <form method="post" action="{{ route('doctors.section.update') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6 mb-2">
                            <label for="titleEn" class="form-label">Content</label>
                            <input type="text" name="title_en" id="titleEn" value="{{ $sectionT['title']['en'] }}"
                                class="form-control">
                        </div>
                        <div class="col-lg-6 col-md-6 mb-2" style="text-align: right;">
                            <label for="titleAr" class="form-label">نبذة مختصرة </label>
                            <input type="text" name="title_ar" id="titleAr" value="{{ $sectionT['title']['ar'] }}"
                                class="form-control" dir="rtl">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 m-2">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header">
                <div class="text-end">
                    <a class="btn btn-primary" href="{{ route('doctors.create') }}"> Add Doctor</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($doctors as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->full_name }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td class="text-center">
                                        <a class="btn btn-warning btn-circle m-1"
                                            href="{{ route('doctors.edit', $item->id) }}"><i class="fas fa-edit"></i></a>
                                        <a class="btn btn-danger btn-circle m-1"
                                            onclick="deleteItem({{ $item->id }})"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    <script>
        function deleteItem(id) {

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    axios({
                        method: "post",
                        url: "{{ route('doctors.destroy') }}",
                        data: {
                            id: id,
                        }
                    }).then((res) => {
                        Swal.fire({
                            title: 'Deleted!',
                            text: res.data.message,
                            icon: 'success'
                        }).then(() => {
                            location.reload()

                        });
                    }).catch((err) => {
                        swal.fire(
                            'error!',
                            'Error, beacause: ' + err,
                            'error'
                        );
                    });
                }
            })
        }
    </script>
@endsection
