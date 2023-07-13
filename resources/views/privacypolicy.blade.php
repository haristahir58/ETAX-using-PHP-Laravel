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
                    -- Our Privacy Policy
                </h5>
                <h1 class="heading text-white fw-bold pb-3" id="slider-heading">
                    Read Our <br>
                    Privacy Policy
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
<section class="banner-second pt-5 d-flex justify-content-center flex-column align-items-center mb-5" id="scroll">
    <div class="row container py-3 px-4 w-75 d-flex justify-content-between flex-column flex-md-row over-svg">
        <div class="col-md-6">
            <h1 class="display-5 text-white fw-bold pb-3" id="slider-heading">
                Our Privacy Policy
            </h1>
        </div>
        <div class="col-md-7 mt-5">
            <p class="text-white fs-6 fw-dark lh-sm d-md-inline" id="slider-subheading">
                Thank you for visiting the ETax's website, an official United States Government System, and reviewing our privacy policy. Our privacy policy explains how we handle the personally identifiable information (PII) that you provide to us when you visit us online to browse, obtain information, or conduct a transaction. PII includes information that is personal in nature and which might be used to identify you. The IRS uses this website to provide information about IRS services and programs. This website includes specific applications which provide more services or enable us to respond to specific questions from website visitors.
                We won't collect personal information about you just because you visit this Internet site. Some applications on this website provide you with the opportunity to order forms, ask questions requiring a response, sign up for electronic newsletters, participate in focus groups and customer surveys, or learn the status of filed returns or anticipated payments. Using these services is voluntary and may require that you provide additional personal information to us. Providing the requested information implies your consent for us to use this data in order to respond to your specific request.
            </p>
        </div>
    </div>
</section>
@endsection