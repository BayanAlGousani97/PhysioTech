@extends('admin.app')
@section('main')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Bookings</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Patiant Name</th>
                                <th>Age</th>
                                <th>Gender</th>
                                <th>Phone</th>
                                <th>Card Number</th>
                                <th>Notes</th>
                                <th>Booking Date</th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Patiant Name</th>
                                <th>Age</th>
                                <th>Gender</th>
                                <th>Phone</th>
                                <th>Card Number</th>
                                <th>Notes</th>
                                <th>Booking Date</th>
                                <th> Action </th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($bookings as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->full_name }}</td>
                                    <td>{{ $item->age }}</td>
                                    <td>{{ $item->gender }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->card_number }}</td>
                                    <td>{{ $item->notes }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td class="text-center">
                                        {{-- <a class="btn btn-warning btn-circle m-1" href=" "><i
                                                class="fas fa-check"></i></a> --}}
                                        <a class="btn btn-danger btn-circle m-1"><i class="fas fa-trash"></i></a>
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
@endsection()
