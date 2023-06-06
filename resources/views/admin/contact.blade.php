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
                                    <input type="text" class="form-control" name="address_en"
                                        value="{{ $translateFields['address']['en'] }}" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label class="col-form-label">
                                        Phone
                                    </label>
                                    <input type="text" class="form-control" name="phone_en"
                                        value="{{ $translateFields['phone']['en'] }}" required>
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
                                            value="{{ $translateFields['address']['ar'] }}" dir="rtl" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label class="col-form-label">رقم الهاتف</label>
                                        <input type="text" class="form-control" name="phone_ar"
                                            value="{{ $translateFields['phone']['en'] }}" dir="rtl" required>
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
                                        <label class="col-form-label">Email </label>
                                        <input type="text" class="form-control" name="email"
                                            value="{{ $info->email }}">
                                        <span class="text-danger"><sub>please type phone number to contact your
                                                using
                                                whastapp with
                                                country code </sub></span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                                        <label class="col-form-label">Whatsapp </label>
                                        <input type="text" class="form-control" name="whatsapp"
                                            placeholder="00963912345678" value="{{ $info->whatsapp }}">
                                        <span class="text-danger"><sub>please type phone number to contact your
                                                using
                                                whastapp with
                                                country code </sub></span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                                        <label class="col-form-label">Facebook </label>
                                        <input type="text" class="form-control" name="facebook"
                                            value="{{ $info->facebook }}">
                                        <span class="text-danger"><sub>please copy page link from facebook and
                                                paste here</sub></span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                                        <label class="col-form-label">Instagram </label>
                                        <input type="text" class="form-control" name="instagram"
                                            value="{{ $info->instagram }}">
                                        <span class="text-danger"><sub>please copy page link from instagram and
                                                paste here</sub></span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                                        <label class="col-form-label">Twitter </label>
                                        <input type="text" class="form-control" name="twitter"
                                            value="{{ $info->twitter }}">
                                        <span class="text-danger"><sub>please copy page link from twitter and
                                                paste here</sub></span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                                        <label class="col-form-label">Telegram </label>
                                        <input type="text" class="form-control" name="telegram"
                                            value="{{ $info->telegram }}">
                                        <span class="text-danger"><sub>please copy page link from telegram and
                                                paste here</sub></span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                                        <label class="col-form-label">Youtube </label>
                                        <input type="text" class="form-control" name="youtube"
                                            value="{{ $info->youtube }}">
                                        <span class="text-danger"><sub>please copy page link from youtube and
                                                paste here</sub></span>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 mb-2">
                                        <label class="col-form-label">Snapchat </label>
                                        <input type="text" class="form-control" name="snapchat"
                                            value="{{ $info->snapchat }}">
                                        <span class="text-danger"><sub>please copy page link from snapchat and
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
