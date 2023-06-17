@extends('admin.app')
@section('main')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->
        <form method="POST" action="{{ route('vision.update') }}" enctype="multipart/form-data">
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
                                <div class="row mb-4">
                                    <div class="col-lg-12">
                                        <label class="col-form-label">Title</label>
                                        <input type="text" class="form-control" name="title_en"
                                            value="{{ $ourVisionTranslate['title']['en'] }}" required>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-12">
                                        <label class="col-form-label">Our vision (description)</label>
                                        <textarea type="text" class="form-control" name="description_en" rows="6" required>{{ $ourVisionTranslate['description']['en'] }} </textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-5">
                                            <label for="Image" class="form-label">Image</label>
                                            <input class="form-control" type="file" id="formFileEn"
                                                onchange="previewEn()" name="image_en"
                                                accept="image/jpeg, image/png, image/jpg" required>
                                        </div>
                                        <img id="frameEn" src="{{ $ourVision->image_en }}" class="img-fluid" />
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
                                    <div class="row mb-4">
                                        <div class="col-lg-12">
                                            <label class="col-form-label">موجز مختصر</label>
                                            <input type="text" class="form-control" name="title_ar"
                                                value="{{ $ourVisionTranslate['title']['ar'] }}" dir="rtl" required>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-lg-12">
                                            <label class="col-form-label"> رؤيتنا (وصف مفصل)</label>
                                            <textarea type="text" class="form-control" name="description_ar" rows="6" dir="rtl" required>{{ $ourVisionTranslate['description']['ar'] }} </textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="mb-5">
                                            <label for="Image" class="form-label">الصورة</label>
                                            <input class="form-control" type="file" id="formFileAr"
                                                onchange="previewAr()" name="image_ar" dir="rtl"
                                                accept="image/jpeg, image/png, image/jpg" required>
                                        </div>
                                        <img id="frameAr" src="{{ $ourVision->image_ar }}" class="img-fluid" />
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
    <script>
        function previewAr() {
            frameAr.src = URL.createObjectURL(event.target.files[0]);
        }

        function clearImageAr() {
            document.getElementById('formFileAr').value = null;
            frameAr.src = "";
        }

        function previewEn() {
            frameEn.src = URL.createObjectURL(event.target.files[0]);
        }

        function clearImageEn() {
            document.getElementById('formFileEn').value = null;
            frameEn.src = "";
        }
    </script>
@endsection
