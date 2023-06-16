@extends('admin.app')
@section('main')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->
        <form method="POST" action="{{ route('doctors.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-2">
                <div class="col-lg-6">
                    <div class="card shadow">
                        <!-- Card Header - Accordion -->
                        <a href="#collapseCardEnglish" class="d-block card-header py-3" data-toggle="collapse" role="button"
                            aria-expanded="true" aria-controls="collapseCardEnglish">
                            <h6 class="m-0 font-weight-bold text-primary"> Content in English
                            </h6>
                        </a>
                        <!-- Card Content - Collapse -->
                        <div class="collapse show" id="collapseCardEnglish">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label class="col-form-label">Doctor Name</label>
                                        <input type="text" class="form-control" name="full_name_en" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label class="col-form-label">Short Description</label>
                                        <textarea type="text" class="form-control" name="description_en" rows="2" required> </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card shadow" style="text-align: right;">
                        <!-- Card Header - Accordion -->
                        <a href="#collapseCardHeaderArabic" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="collapseCardHeaderArabic">
                            <h6 class="m-0 font-weight-bold text-primary"> المحتوى في اللغة العربية
                            </h6>
                        </a>
                        <div class="collapse show" id="collapseCardHeaderArabic">
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label class="col-form-label"> اسم الطبيب</label>
                                            <input type="text" class="form-control" name="full_name_ar" dir="rtl"
                                                required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label class="col-form-label">نبذة قصيرة</label>
                                            <textarea type="text" class="form-control" name="description_ar" rows="2" dir="rtl" required> </textarea>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-auto mt-4">
                    <button class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>

    </div>
    <!-- /.container-fluid -->
@endsection
