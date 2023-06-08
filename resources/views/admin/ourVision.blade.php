@extends('admin.app')
@section('main')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->
        <form method="POST" action="{{ route('vision.update') }}">
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
                                        <label class="col-form-label">Title</label>
                                        <input type="text" class="form-control" name="title_en"
                                            value="{{ $ourVisionTranslate['title']['en'] }}" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label class="col-form-label">About us (description)</label>
                                        <textarea type="text" class="form-control" name="description_en" rows="4" required>{{ $ourVisionTranslate['description']['en'] }} </textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label class="col-form-label">Image</label>
                                        <input type="file" class="form-control" name="image_en" value=""
                                            accept="image/jpeg, image/png, image/jpg" required>
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
                                            <label class="col-form-label">موجز مختصر</label>
                                            <input type="text" class="form-control" name="title_ar"
                                                value="{{ $ourVisionTranslate['title']['ar'] }}" dir="rtl" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label class="col-form-label">من نحن (وصف مفصل)</label>
                                            <textarea type="text" class="form-control" name="description_ar" rows="4" dir="rtl" required>{{ $ourVisionTranslate['description']['ar'] }} </textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label class="col-form-label">الصورة</label>
                                            <input type="file" class="form-control uploadImage" name="image_ar"
                                                dir="rtl" value="" accept="image/jpeg, image/png, image/jpg"
                                                required>
                                        </div>
                                    </div>

                            </div>
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
