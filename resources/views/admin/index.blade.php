@extends('admin.app')
@section('main')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        Content in English
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label class="col-form-label">Title</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label class="col-form-label">Slogan</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                        </form>
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
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label class="col-form-label">الشعار</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </form>
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
    </div>
    <!-- /.container-fluid -->
@endsection
