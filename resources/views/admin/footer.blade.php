@extends('admin.app')
@section('main')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->
        <form method="POST" action="{{ route('header.update') }}">
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
                                        <label class="col-form-label">Summary</label>
                                        <textarea type="text" class="form-control" name="summary_en" rows="4" required>{{ $info['summary']['en'] }}</textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label class="col-form-label">About Business Hours</label>
                                        <input type="text" class="form-control" name="businesshour_en"
                                            value="{{ $businessHourTitle['title']['en'] }}" required>
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
                                            <label class="col-form-label">موجز عن فيزيوتيك</label>
                                            <textarea type="text" class="form-control" name="summary_ar" rows="4" dir="rtl" required>{{ $info['summary']['ar'] }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label class="col-form-label">حول ساعات العمل</label>
                                            <input type="text" class="form-control" name="businesshour_ar"
                                                value="{{ $businessHourTitle['title']['ar'] }}" dir="rtl" required>
                                        </div>
                                    </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row shadow">
                <div class="col-lg-12">
                    <div class="card shadow">
                        <!-- Card Header - Accordion -->
                        <a href="#collapseCardBusiness" class="d-block card-header py-3" data-toggle="collapse"
                            role="button" aria-expanded="true" aria-controls="collapseCardBusiness">
                            <h6 class="m-0 font-weight-bold text-primary"> Business Hours
                            </h6>
                        </a>
                        <div class="collapse show" id="collapseCardBusiness">
                            <div class="card-body text-center">
                                <div class="row m-2">
                                    <div class="col-lg-3">
                                        <label class="col-form-label">Day</label>
                                        <select class="form-select" name="business_day[]" required
                                            aria-label="Default select example">
                                            <option selected value="sat">Sat</option>
                                            <option value="sun">Sun</option>
                                            <option value="mon">Mon</option>
                                            <option value="tue">Tue</option>
                                            <option value="wed">Wed</option>
                                            <option value="thur">Thur</option>
                                            <option value="fri">Fri</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="col-form-label">From</label>
                                        <input class="form-control" type="time" name="from[]" value="">
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="col-form-label">To</label>
                                        <input class="form-control" type="time" name="to[]">
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="col-form-label">Close</label><br>
                                        <input class="checkbox-control" type="checkbox" name="status[]">
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col-lg-3">
                                        <select class="form-select" name="business_day[]" required
                                            aria-label="Default select example">
                                            <option value="sat">Sat</option>
                                            <option selected value="sun">Sun</option>
                                            <option value="mon">Mon</option>
                                            <option value="tue">Tue</option>
                                            <option value="wed">Wed</option>
                                            <option value="thur">Thur</option>
                                            <option value="fri">Fri</option>

                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control" type="time" name="from">
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control" type="time" name="to[]">
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="checkbox-control" type="checkbox" name="status[]">
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col-lg-3">
                                        <select class="form-select" name="business_day[]" required
                                            aria-label="Default select example">
                                            <option value="sat">Sat</option>
                                            <option value="sun">Sun</option>
                                            <option selected value="mon">Mon</option>
                                            <option value="tue">Tue</option>
                                            <option value="wed">Wed</option>
                                            <option value="thur">Thur</option>
                                            <option value="fri">Fri</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control" type="time" name="from[]">
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control" type="time" name="to[]">
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="checkbox-control" type="checkbox" name="status[]">
                                    </div>
                                </div>
                                <div class="row m-2">
                                    <div class="col-lg-3">
                                        <select class="form-select" name="business_day[]" required
                                            aria-label="Default select example">
                                            <option value="sat">Sat</option>
                                            <option value="sun">Sun</option>
                                            <option value="mon">Mon</option>
                                            <option value="tue" selected>Tue</option>
                                            <option value="wed">Wed</option>
                                            <option value="thur">Thur</option>
                                            <option value="fri">Fri</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control" type="time" name="from[]">
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control" type="time" name="to[]">
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="checkbox-control" type="checkbox" name="status[]">
                                    </div>
                                </div>

                                <div class="row m-2">
                                    <div class="col-lg-3">
                                        <select class="form-select" name="business_day[]" required
                                            aria-label="Default select example">
                                            <option value="sat">Sat</option>
                                            <option value="sun">Sun</option>
                                            <option value="mon">Mon</option>
                                            <option value="tue">Tue</option>
                                            <option value="wed" selected>Wed</option>
                                            <option value="thur">Thur</option>
                                            <option value="fri">Fri</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control" type="time" name="from[]">
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control" type="time" name="to[]">
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="checkbox-control" type="checkbox" name="status[]">
                                    </div>
                                </div>

                                <div class="row m-2">
                                    <div class="col-lg-3">
                                        <select class="form-select" name="business_day[]" required
                                            aria-label="Default select example">
                                            <option value="sat">Sat</option>
                                            <option value="sun">Sun</option>
                                            <option value="mon">Mon</option>
                                            <option value="tue">Tue</option>
                                            <option value="wed">Wed</option>
                                            <option value="thur" selected>Thur</option>
                                            <option value="fri">Fri</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control" type="time" name="from[]">
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control" type="time" name="to[]">
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="checkbox-control" type="checkbox" name="status[]">
                                    </div>
                                </div>

                                <div class="row m-2">
                                    <div class="col-lg-3">
                                        <select class="form-select" name="business_day[]" required
                                            aria-label="Default select example">
                                            <option value="sat">Sat</option>
                                            <option value="sun">Sun</option>
                                            <option value="mon">Mon</option>
                                            <option value="tue">Tue</option>
                                            <option value="wed">Wed</option>
                                            <option value="thur">Thur</option>
                                            <option value="fri" selected>Fri</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control" type="time" name="from[]">
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="form-control" type="time" name="to[]">
                                    </div>
                                    <div class="col-lg-3">
                                        <input class="checkbox-control" type="checkbox" name="status[]" checked>
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
