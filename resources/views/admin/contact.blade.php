@extends('admin.app')
@section('main')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->
        <form method="POST" action="{{ route('contact.update') }}">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            Content in English
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <label class="col-form-label">
                                        Address
                                    </label>
                                    <input type="text" class="form-control" name="address_en" value=" " required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label class="col-form-label">
                                        Phone
                                    </label>
                                    <input type="text" class="form-control" name="phone_en" value=" " required>
                                </div>
                            </div>

                        </div>
                        <div class="card-footer">
                            <span> Note: All inputs are required</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card" style="text-align: right;">
                        <div class="card-header">
                            المحتوى في اللغة العربية
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label class="col-form-label">العنوان</label>
                                        <input type="text" class="form-control" name="address_ar"
                                            value=""dir="rtl" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label class="col-form-label">رقم الهاتف</label>
                                        <input type="text" class="form-control" name="phone_ar"
                                            value=""dir="rtl" required>
                                    </div>
                                </div>
                        </div>
                        <div class="card-footer">
                            <span>ملاحظة: كل الحقول مطلوبة</span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-auto mt-4">
                    <button class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>

    </div>
    <!-- /.container-fluid -->
@endsection
