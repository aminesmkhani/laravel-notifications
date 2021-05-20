@extends('layouts.layouts')

@section('title','Home')


@section('content')

    <div class="row match-height">
    <!-- Greetings Card starts -->
    <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="card card-congratulations">
            <div class="card-body text-center">
                <img src="{{asset('images/decore-left.png')}}" class="congratulations-img-left" alt="card-img-left" />
                <img src="{{asset('images/decore-right.png')}}" class="congratulations-img-right" alt="card-img-right" />
                <div class="avatar avatar-xl bg-danger shadow">
                    <a style="color: white" href="{{route('notification.send.email')}}">
                        <div class="avatar-content">
                            <i data-feather="send" class="font-large-1"></i>
                        </div>
                    </a>
                </div>
                <div class="text-center">
                    <h1 class="mb-1 text-white">ارسال ایمیل</h1>
                    <p class="card-text m-auto w-75">
                        به راحتی ایمیل های خودتون رو ارسال کنید <strong>یک پکیج برای ارسال ایمیل</strong>  رعایت کامل استاندارهای کدنویسی و اصول سالید
                    </p>
                </div>
            </div>
        </div>

    </div>
    <!-- Greetings Card ends -->

    <!-- Greetings Card starts -->
    <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="card card-congratulations">
            <div class="card-body text-center">
                <img src="{{asset('images/decore-left.png')}}" class="congratulations-img-left" alt="card-img-left" />
                <img src="{{asset('images/decore-right.png')}}" class="congratulations-img-right" alt="card-img-right" />
                <div class="avatar avatar-xl bg-success shadow">
                    <a style="color: white" href="{{route('notification.send.sms')}}">
                    <div class="avatar-content">
                        <i data-feather="smartphone" class="font-large-1"></i>
                    </div>
                    </a>
                </div>
                <div class="text-center">
                    <h1 class="mb-1 text-white">ارسال پیام کوتاه</h1>
                    <p class="card-text m-auto w-75">
                        به راحتی پیام کوتاه خودتون رو برای مشتریانتون ارسال کنید پکیجی برای <strong>ارسال پیام کوتاه</strong> راعایت کامل اصول کد نویسی و اصول سالید
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Greetings Card ends -->
    </div>

@endsection
