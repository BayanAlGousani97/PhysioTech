@extends('front.app')

@section('content')
    <!-- Service Start -->
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-12 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="mb-4"> </p>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating custom-class">
                                <input type="text" class="form-control" id="name"
                                    placeholder="{{ trans('views.site.contact.form.name') }}">
                                <label for="name"
                                    dir="@if (app()->isLocale('ar')) rtl @endif">{{ trans('views.site.contact.form.name') }}</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating custom-class">
                                <input type="email" class="form-control" id="phone"
                                    placeholder="{{ trans('views.site.contact.form.phone') }}">
                                <label for="email"
                                    dir="@if (app()->isLocale('ar')) rtl @endif">{{ trans('views.site.contact.form.phone') }}</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating custom-class">
                                <input type="text" class="form-control" id="subject"
                                    placeholder="{{ trans('views.site.contact.form.subject') }}">
                                <label for="subject"
                                    dir="@if (app()->isLocale('ar')) rtl @endif">{{ trans('views.site.contact.form.subject') }}</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating custom-class">
                                <textarea class="form-control" placeholder="{{ trans('views.site.contact.form.message') }}" id="message"
                                    style="height: 100px" dir="@if (app()->isLocale('ar')) rtl @endif"></textarea>
                                <label for="message">{{ trans('views.site.contact.form.message') }}</label>
                            </div>
                        </div>
                        <input type="hidden" id="physioPhone" value="{{ $info->whatsapp }}">
                        <div class="col-12">
                            <button class="btn btn-primary py-3 px-4"
                                onclick="sendMessage();">{{ trans('views.site.contact.form.sendMessage') }}</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection()
