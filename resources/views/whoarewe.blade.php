@extends('base')

@section('content')
<section class="default-banner" id="banner">
    <div class="position-absolute w-100 banner-cover h-100 d-flex flex-column justify-content-between">
        <div class="imagem-1">
            <img class="banner-svg1" src="svg/bannerimg1.svg" frameborder="0"></img>
        </div>
        <div class="container py-3 px-4 w-75 d-flex justify-content-between flex-column flex-md-row">
            <div>
                <h5 class="text-secondary fw-bold">
                    -- About Us
                </h5>
                <h1 class="display-4 text-white fw-bold pb-3" id="slider-heading">
                    Know About <br>
                    Our Company
                </h1>
            </div>
            <a href="#scroll">
                <button class="arrow-btn btn text-white border border-3 arrow-icon bg-transparent rounded-circle mt-5">
                    <i class="fa-solid fa-angle-down fa-xs"></i>
                </button>
            </a>

        </div>
        <div class="imagem-2 ms-auto">
            <img class="banner-svg2" src="svg/bannerimg2.svg" alt="">
        </div>
    </div>
</section>
<section class="banner-second d-flex justify-content-center align-items-center mb-5" id="scroll">
    <div class="row container py-3 px-4 w-75 d-flex justify-content-between flex-column flex-md-row over-svg">
        <div class="col-md-6">
            <h1 class="display-5 text-white fw-bold pb-3" id="slider-heading">
                What our company does?
            </h1>
        </div>
        <div class="col-md-7 mt-5">
            <div>
                <p class="high-z-index text-white fs-3 fw-dark lh-sm d-md-inline" id="slider-subheading">
                    E-Tax is a joint initiative of team of leading tax professionals and technology enthusiasts. The initiative aims to simplify tax return filing process for individuals; especially salaried class, and promote the culture of documentation. It aims to enhance the number of tax filers in the interest of enhancing tax base of the country, at the same time, reduce huge cost to ordinary citizens who have to suffer cost of being non-filers.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection