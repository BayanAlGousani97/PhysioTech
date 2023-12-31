@extends('admin.app')
@section('main')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Content Row -->
        <form method="POST" action="{{ route('footer.update') }}">
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
                            <div class="card-body text-center table-responsive">
                                <table class="table table-sm ">
                                    <thead>
                                        <tr>
                                            <td>Day</td>
                                            <td>Close</td>
                                            <td>From</td>
                                            <td>To</td>
                                        </tr>
                                    </thead>
                                    @foreach ($businessHours as $item)
                                        <tr>
                                            <td>
                                                <select class="form-select" name="business_day[]" required
                                                    aria-label="Default select example">
                                                    <option value="1"
                                                        @if (in_array($item->day, ['Sat', 'السبت'])) selected @endif>Sat</option>
                                                    <option value="2"
                                                        @if (in_array($item->day, ['Sun', 'الأحد'])) selected @endif>Sun</option>
                                                    <option value="3"
                                                        @if (in_array($item->day, ['Mon', 'الاثنين'])) selected @endif>Mon</option>
                                                    <option value="4"
                                                        @if (in_array($item->day, ['Tue', 'الثلاثاء'])) selected @endif>Tue</option>
                                                    <option value="5"
                                                        @if (in_array($item->day, ['Wed', 'الأربعاء'])) selected @endif>Wed</option>
                                                    <option value="6"
                                                        @if (in_array($item->day, ['Thur', 'الخميس'])) selected @endif>Thur</option>
                                                    <option value="7"
                                                        @if (in_array($item->day, ['Fri', 'الجمعة'])) selected @endif>Fri</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select class="form-select" name="status[]" required
                                                    aria-label="Default select example">
                                                    <option @if ($item->status == 'open') selected @endif
                                                        value="open">Open in
                                                        bussiness
                                                        hours</option>
                                                    <option @if ($item->status == 'close') selected @endif
                                                        value="close">Close</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input class="form-control" type="time" name="from[]"
                                                    @if (!empty($item->from)) value="{{ $item->from->format('H:i') }}" @endif>
                                            </td>
                                            <td>
                                                <input class="form-control" type="time" name="to[]"
                                                    @if (!empty($item->to)) value="{{ $item->to->format('H:i') }}" @endif>
                                            </td>

                                        </tr>
                                    @endforeach
                                </table>
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
