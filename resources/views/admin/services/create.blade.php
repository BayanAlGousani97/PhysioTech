@extends('admin.app')
@section('main')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->
        <form method="POST" action="{{ route('services.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
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
                                        <label class="col-form-label">Name <sub class="text-info">no more 50
                                                chars</sub></label>
                                        <input type="text" class="form-control" name="name_en" required>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-12">
                                        <label class="col-form-label">Short description <sub class="text-info">no more 100
                                                chars</sub></label>
                                        <textarea type="text" class="form-control" name="short_description_en" rows="2" required> </textarea>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-12">
                                        <label class="col-form-label">Description</label>
                                        <textarea type="text" class="form-control" name="description_en" rows="5" required> </textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-5">
                                            <label for="Image" class="form-label">Image
                                                <sub class="text-info">recommended to use a png image, size: 64 x 64
                                                    px</sub>
                                            </label>
                                            <input class="form-control" type="file" id="formFileEn"
                                                onchange="previewEn()" name="image_en"
                                                accept="image/jpeg, image/png, image/jpg" required>
                                        </div>
                                        <img id="frameEn" src="" class="img-fluid" />
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
                                <div class="row mb-4">
                                    <div class="col-lg-12">
                                        <label class="col-form-label">
                                            اسم الخدمة
                                            <sub class="text-info">لا يتجاوز خمسين محرفاً</sub>

                                        </label>
                                        <input type="text" class="form-control" name="name_ar" dir="rtl" required>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-12">
                                        <label class="col-form-label">نبذة قصيرة
                                            <sub class="text-info">لا تتجاوز مئة محرف</sub>
                                        </label>
                                        <textarea type="text" class="form-control" name="short_description_ar" rows="2" dir="rtl" required> </textarea>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-12">
                                        <label class="col-form-label"> وصف مفصل</label>
                                        <textarea type="text" class="form-control" name="description_ar" rows="5" dir="rtl" required> </textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-5">
                                        <label for="Image" class="form-label">الصورة
                                            <sub class="text-info">ينصح باستخدام صورة ذات خلفية شفافة بمقاس 64× 64
                                                بكسل</sub>
                                        </label>
                                        <input class="form-control" type="file" id="formFileAr" onchange="previewAr()"
                                            name="image_ar" dir="rtl" accept="image/jpeg, image/png, image/jpg"
                                            required>
                                    </div>
                                    <img id="frameAr" src="" class="img-fluid" />
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
