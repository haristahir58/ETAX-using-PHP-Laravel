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
                    -- Register Here
                </h5>
                <h1 class="heading text-white fw-bold pb-3" id="slider-heading">
                    Sign Up <br>
                    To Continue
                </h1>
            </div>
            <button
                class="arrow-btn btn text-white border border-3 arrow-icon bg-transparent rounded-circle mt-5 d-none d-md-block">
                <i class="fa-solid fa-angle-down fa-xs"></i>
            </button>
            

        </div>
        <div class="imagem-2 ms-auto">
            <img class="banner-svg2" src="/svg/bannerimg2.svg" alt="">
        </div>
    </div>
</section>
<section class="contact-banner d-flex justify-content-center align-items-center">
    <div class="row container py-3 px-4 w-75 d-flex justify-content-between flex-column flex-md-row">
        <div class="col-md-6">
            <h1 class="display-6 text-white fw-bold pb-3" id="slider-heading">
                Sign Up to your account.
            </h1>
        </div>
        <div class="col-md-7 mt-5">
            <form method="POST">
                @csrf
                <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate" data-aos="zoom-in-up" data-aos-duration="1000">
                    <label class="contact-label fs-5 fw-bold" for="name">Name</label>
                    <input type="text" class="contact-input" id="name" name="name" required>
                </div>
                <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate" data-aos="zoom-in-up" data-aos-duration="1000">
                    <label class="contact-label fs-5 fw-bold" for="email">Email</label>
                    <input type="email" class="contact-input" id="email" name="email" required>
                </div>
                <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate" data-aos="zoom-in-up" data-aos-duration="1000">
                    <label class="contact-label fs-5 fw-bold" for="number">Phone Number</label>
                    <input type="tel" class="contact-input" id="number" name="number" required>
                </div>
                <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate" data-aos="zoom-in-up" data-aos-duration="1000">
                    <label class="contact-label fs-5 fw-bold" for="cnic">CNIC</label>
                    <input type="text" class="contact-input" id="cnic" name="cnic" pattern="[0-9]{13}" required>
                </div>
                <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate" data-aos="zoom-in-up" data-aos-duration="1000">
                    <label class="contact-label fs-5 fw-bold" for="password">Password</label>
                    <input type="password" class="contact-input" id="password" name="password" required>
                </div>
                <div class="d-flex justify-content-end">
                    <input class="btn contact-btn text-white rounded-pill fw-bold fs-5" type="submit" name="submit" id="submit" value="Sign Up">
                </div>
            </form>
        </div>
    </div>
</section>
@endsection