@extends('base')

@section('content')
<section class="default-banner" id="banner">
    <div class="position-absolute w-100 banner-cover h-100 d-flex flex-column justify-content-between">
        <div class="imagem-1">
            <img class="banner-svg1" src="/svg/bannerimg1.svg" frameborder="0"></img>
        </div>
        <div class="container py-3 px-4 w-75 d-flex justify-content-between flex-column flex-md-row">
            <div>
                <h5 class="text-secondary fw-bold">
                    -- Already have an account
                </h5>
                <h1 class="heading text-white fw-bold pb-3" id="slider-heading">
                    Log In <br>
                    To Continue
                </h1>
            </div>
            <a href="#scroll">
                <button class="arrow-btn btn text-white border border-3 arrow-icon bg-transparent rounded-circle mt-5">
                    <i class="fa-solid fa-angle-down fa-xs"></i>
                </button>
            </a>
            

        </div>
        <div class="imagem-2 ms-auto">
            <img class="banner-svg2" src="/svg/bannerimg2.svg" alt="">
        </div>
    </div>
</section>
<section class="contact-banner d-flex justify-content-center align-items-center" id="scroll">
    <div class="row container py-3 px-4 w-75 d-flex justify-content-between flex-column flex-md-row over-svg">
        <div class="col-md-6">
            <h1 class="display-6 text-white fw-bold pb-3" id="slider-heading">
                Log in to your account.
            </h1>
        </div>
        @if (session()->has('error'))
            <div id="alert" class="alert alert-warning" role="alert">
                {{ session('error') }}
            </div>
        @endif
        <div class="col-md-7 mt-5">
            <form method="post">
                @csrf
                <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate" data-aos="zoom-in-up" data-aos-duration="1000">
                    <label class="contact-label fs-5 fw-bold" for="email">Email</label>
                    <input type="email" class="contact-input" id="email" name="email">
                </div>
                <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate" data-aos="zoom-in-up" data-aos-duration="1000">
                    <label class="contact-label fs-5 fw-bold" for="password">Password</label>
                    <input type="password" class="contact-input" id="password" name="password">
                </div>
                <div class="d-flex justify-content-end">
                    <input class="btn contact-btn text-white rounded-pill fw-bold fs-5" type="submit" name="submit" id="submit" value="Log In">
                </div>
            </form>
        </div>
    </div>
</section>
@endsection