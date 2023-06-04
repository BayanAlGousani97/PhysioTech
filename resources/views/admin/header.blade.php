@extends('admin.app')
@section('main')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->
        <form method="POST" action="{{ route('header.update') }}">
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
                                    <label class="col-form-label">Title</label>
                                    <input type="text" class="form-control" name="title_en"
                                        value="{{ $info['title']['en'] }}" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label class="col-form-label">Slogan</label>
                                    <input type="text" class="form-control" name="slogan_en"
                                        value="{{ $info['slogan']['en'] }}" required>
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
                                        <label class="col-form-label">العنوان التفصيلي</label>
                                        <input type="text" class="form-control" name="title_ar"
                                            value="{{ $info['title']['ar'] }}" dir="rtl" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label class="col-form-label">الشعار</label>
                                        <input type="text" class="form-control" name="slogan_ar"
                                            value="{{ $info['slogan']['ar'] }}"dir="rtl" required>
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
