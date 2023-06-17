@extends('admin.app')
@section('main')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Banners</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($banners as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td><img class="img-fluid w-20" src="{{ asset($item->image_en) }}"></td>
                                    <td class="text-center"><a class="btn btn-warning btn-circle m-1"
                                            href="{{ route('banners.edit', $item->id) }}"><i class="fas fa-edit"></i></a>
                                        {{-- <a class="btn btn-danger btn-circle m-1"
                                            onclick="deleteItem({{ $item->id }})"><i class="fas fa-trash"></i></a> --}}
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
                        url: "{{ route('banners.destroy') }}",
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
