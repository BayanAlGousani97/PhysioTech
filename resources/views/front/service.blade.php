@extends('front.app')

@section('content')
    <!-- Service Start -->
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid w-100 animated pulse infinite" style="animation-duration: 3s;"
                        src="@if (app()->isLocale('ar')) {{ $service->image_ar }}@else{{ $service->image_en }} @endif"
                        alt="{{ $service->slug }}">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6">{{ $service->name }}</h1>
                        <p class="text-primary fs-5 mb-4">{{ $service->short_description }}</p>
                        <p>{{ $service->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection()
