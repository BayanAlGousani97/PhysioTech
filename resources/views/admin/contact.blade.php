@extends('admin.app')
@section('main')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->
        <form method="POST" action="{{ route('contact.update') }}">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="card shadow">
                        <!-- Card Header - Accordion -->
                        <a href="#collapseCardCantactEn" class="d-block card-header py-3" data-toggle="collapse" role="button"
                            aria-expanded="true" aria-controls="collapseCardCantactEn">
                            <h6 class="m-0 font-weight-bold text-primary">
                                Content in English
                            </h6>
                        </a>
                        <div class="collapse show" id="collapseCardCantactEn">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label class="col-form-label">
                                            Address
                                        </label>
                                        <input type="text" class="form-control" name="address_en"
                                            value="{{ $translateFields['address']['en'] }}" required>
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer">
                                <span> Note: All inputs are required</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card shadow" style="text-align: right;">
                        <!-- Card Header - Accordion -->
                        <a href="#collapseCardCantactAr" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="collapseCardCantactAr">
                            <h6 class="m-0 font-weight-bold text-primary">
                                المحتوى في اللغة العربية
                            </h6>
                        </a>
                        <div class="collapse show" id="collapseCardCantactAr">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label class="col-form-label">العنوان</label>
                                        <input type="text" class="form-control" name="address_ar"
                                            value="{{ $translateFields['address']['ar'] }}" dir="rtl" required>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <span>ملاحظة: كل الحقول مطلوبة</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-4">
                    <div class="card shadow">
                        <!-- Card Header - Accordion -->
                        <a href="#collapseCardMap" class="d-block card-header py-3" data-toggle="collapse" role="button"
                            aria-expanded="true" aria-controls="collapseCardMap">
                            <h6 class="m-0 font-weight-bold text-primary"> Google map link
                            </h6>
                        </a>
                        <!-- Card Content - Collapse -->
                        <div class="collapse show" id="collapseCardMap">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <label class="col-form-label">Google map </label>
                                        <textarea type="text" class="form-control" name="map" rows="4">{{ $info->map }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-4">
                    <div class="card shadow">
                        <!-- Card Header - Accordion -->
                        <a href="#collapseCardEnglish" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="collapseCardEnglish">
                            <h6 class="m-0 font-weight-bold text-primary"> Social media links
                            </h6>
                        </a>
                        <!-- Card Content - Collapse -->
                        <div class="collapse show" id="collapseCardEnglish">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                                        <label class="col-form-label">Email *</label>
                                        <input type="text" class="form-control" name="email"
                                            placeholder="ex: admin@physio.sa" value="{{ $info->email }}">
                                        <span class="text-danger"><sub>type your email </sub></span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                                        <label class="col-form-label">Phone 1 *</label>
                                        <input type="text" class="form-control" name="phone1" placeholder=""
                                            value="{{ $info->phone1 }}" required>
                                        <span class="text-danger"><sub>type your phone number 1 </sub></span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                                        <label class="col-form-label">Phone 2 *</label>
                                        <input type="text" class="form-control" name="phone2" placeholder=""
                                            value="{{ $info->phone2 }}" required>
                                        <span class="text-danger"><sub>type phone number 2 </sub></span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                                        <label class="col-form-label">Telephone *</label>
                                        <input type="text" class="form-control" name="tel" placeholder=""
                                            value="{{ $info->tel }}" required>
                                        <span class="text-danger"><sub>type your telephone </sub></span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                                        <label class="col-form-label">Whatsapp *</label>
                                        <input type="text" class="form-control" name="whatsapp"
                                            placeholder="ex: 966581231234" value="{{ $info->whatsapp }}">
                                        <span class="text-danger"><sub>type phone number to contact your
                                                using
                                                whastapp with
                                                country code but without + or 00 </sub></span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                                        <label class="col-form-label">Facebook </label>
                                        <input type="text" placeholder="ex: https://www.facebook.com/physiotechexample"
                                            class="form-control" name="facebook" value="{{ $info->facebook }}">
                                        <span class="text-danger"><sub>copy page link from facebook and
                                                paste here</sub></span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                                        <label class="col-form-label">Instagram </label>
                                        <input type="text"
                                            placeholder="ex: https://www.instagram.com/physiotechexample/"
                                            class="form-control" name="instagram" value="{{ $info->instagram }}">
                                        <span class="text-danger"><sub>copy your account link from instagram and
                                                paste here</sub></span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                                        <label class="col-form-label">Twitter </label>
                                        <input type="text" placeholder="ex: https://twitter.com/physiotechexample"
                                            class="form-control" name="twitter" value="{{ $info->twitter }}">
                                        <span class="text-danger"><sub>copy your account link from twitter and
                                                paste here</sub></span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                                        <label class="col-form-label">Telegram </label>
                                        <input type="text" placeholder="ex: https://t.me/physiotechexample"
                                            class="form-control" name="telegram" value="{{ $info->telegram }}">
                                        <span class="text-danger"><sub>copy your channle or account link from
                                                telegram
                                                and
                                                paste here</sub></span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                                        <label class="col-form-label">Youtube </label>
                                        <input type="text" placeholder="ex: https://www.youtube.com/@PhysioTechExample"
                                            class="form-control" name="youtube" value="{{ $info->youtube }}">
                                        <span class="text-danger"><sub>copy your channle link from
                                                youtube
                                                and
                                                paste here</sub></span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                                        <label class="col-form-label">Snapchat </label>
                                        <input type="text"
                                            placeholder="ex: https://www.snapchat.com/add/physiotechexample"
                                            class="form-control" name="snapchat" value="{{ $info->snapchat }}">
                                        <span class="text-danger"><sub>copy your account link from snapchat and
                                                paste here</sub></span>
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
