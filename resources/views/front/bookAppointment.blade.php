@extends('front.app')

@section('content')
    <!-- Service Start -->
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-12 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="mb-4"> </p>
                    <form action="{{ route('bookAppointment.store') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="form-floating custom-class">
                                    <input type="text" class="form-control" id="first_name" name="first_name"
                                        placeholder="{{ trans('views.site.contact.form.first_name') }}" required>
                                    <label for="first_name"
                                        dir="@if (app()->isLocale('ar')) rtl @endif">{{ trans('views.site.contact.form.first_name') }}</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating custom-class">
                                    <input type="text" class="form-control" id="middle_name" name="middle_name"
                                        placeholder="{{ trans('views.site.contact.form.middle_name') }}" required>
                                    <label for="middle_name"
                                        dir="@if (app()->isLocale('ar')) rtl @endif">{{ trans('views.site.contact.form.middle_name') }}</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating custom-class">
                                    <input type="text" class="form-control" id="lase_name" name="last_name"
                                        placeholder="{{ trans('views.site.contact.form.lase_name') }}" required>
                                    <label for="lase_name"
                                        dir="@if (app()->isLocale('ar')) rtl @endif">{{ trans('views.site.contact.form.last_name') }}</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating custom-class">
                                    <input type="text" class="form-control" id="card_number" name="card_number"
                                        placeholder="{{ trans('views.site.contact.form.card_number') }}" required>
                                    <label for="card_number"
                                        dir="@if (app()->isLocale('ar')) rtl @endif">{{ trans('views.site.contact.form.card_number') }}</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating custom-class">
                                    <input type="tel" class="form-control" id="phone" name="phone"
                                        placeholder="{{ trans('views.site.contact.form.phone') }}" required>
                                    <label for="phone"
                                        dir="@if (app()->isLocale('ar')) rtl @endif">{{ trans('views.site.contact.form.phone') }}</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating custom-class">
                                    <input type="number" min="10" max="150" step="1" class="form-control"
                                        id="age" name="age"
                                        placeholder="{{ trans('views.site.contact.form.age') }}" required>
                                    <label for="age"
                                        dir="@if (app()->isLocale('ar')) rtl @endif">{{ trans('views.site.contact.form.age') }}</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="gender" class="form-label"
                                    dir="@if (app()->isLocale('ar')) rtl @endif">{{ trans('views.site.contact.form.gender') }}</label>
                                <br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="male"
                                        value="male" required>
                                    <label class="form-check-label"
                                        for="male">{{ trans('views.site.contact.form.gender.male') }}</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="female"
                                        value="female">
                                    <label class="form-check-label"
                                        for="female">{{ trans('views.site.contact.form.gender.female') }}</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating custom-class">
                                    <textarea class="form-control" placeholder="{{ trans('views.site.contact.form.notes') }}" id="notes" name="notes"
                                        style="height: 100px" dir="@if (app()->isLocale('ar')) rtl @endif"></textarea>
                                    <label for="notes">{{ trans('views.site.contact.form.notes') }}</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-4"
                                    type="submit">{{ trans('views.site.nav.bookAppointment') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection()
