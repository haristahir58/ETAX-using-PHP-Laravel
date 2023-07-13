@extends('base')
@section('content')
<section class="banner d-flex" id="banner">
    <div class="position-absolute w-100 banner-cover d-flex flex-column justify-content-between">
        <div class="imagem-1">
            <img class="banner-svg1" src="svg/bannerimg1.svg" frameborder="0">
        </div>
        <div class="banner-content container d-flex flex-column flex-md-row justify-content-md-between align-items-center text-center text-md-start">
            <div>
                <h1 class="heading text-white fw-bold pb-3" id="slider-heading">
                    Pakistan's #1 <br>
                    Tax Solution
                </h1>
                <div class="d-flex align-items-center">
                    <p class="banner-para text-white fs-3 fw-light lh-sm d-none d-md-inline-block" id="slider-subheading">
                        We are the leading tax <br>
                        solution provider in Pakistan.
                    </p>
                    <a href="/whoarewe">
                        <button
                            class="arrow-btn btn hoverarrowrightbutton text-white border border-3 arrow-icon bg-transparent rounded-circle">
                            <i class="fa-solid fa-angle-right fa-xs"></i>
                        </button>
                    </a>
                </div>
            </div>
            <div class="slider-icons text-white d-flex flex-row flex-md-column h-100 justify-content-around pt-3 my-5">
                <i class="slider-icon fa-solid fa-circle fa-2xs"></i>
                <i class="slider-icon fa-solid fa-circle-notch fa-2xs"></i>
                <i class="slider-icon fa-solid fa-circle-notch fa-2xs"></i>
            </div>
        </div>
        <div class="imagem-2 ms-auto">
            <img class="banner-svg2" src="svg/bannerimg2.svg" alt="">
        </div>
    </div>
</section>
<section class="banner-second d-flex justify-content-center align-items-center mt-md-0">
    <div class="container row over-svg">
        <div class="col-md-4">
            <h5 class="text-secondary fw-bold" data-aos="fade-up">
                -- About Etax
            </h5>
            <h1 class="heading text-white fw-bold lh-base text-break" id="slider-heading" data-aos="fade-up">
                The Quickest and Simplest Way to get NTN & File Your Taxes
            </h1>
            <p class="text-white pt-5 d-none d-md-block" data-aos="fade-up">
                Click here to learn more &nbsp;<i class="fa-solid fa-arrow-right-long fa-lg"></i>
            </p>
        </div>
        <div class="offset-md-2 col-md-5">
            <div>
                <p class="text-white fs-3 d-md-inline text-break" id="slider-subheading" data-aos="fade-up">
                    What's Included? <br> Complete Support by Our Tax Expert support in Filing Your Tax Return.
                    And we've made the process extremely simple you're going to love it.
                </p>
                <div class="row mt-5 mx-1">
                    <div class="btn contact-btn2 border border-secondary text-white rounded-pill me-2" data-aos="fade-up">
                        <a href="/whoarewe">
                            <p class="fs-5">
                                Know Us
                            </p> 
                        </a>
                    </div>
                    <div class="btn btn-lg contact-btn2  border border-secondary text-white rounded-pill" data-aos="fade-up">
                        <a href="/contact">
                            <p>
                                Team
                            </p>
                        </a>
                    </div>
                    <button class=" btn second-bannerarrow text-white rounded-circle mt-1 ms-md-5" data-aos="fade-up">
                        <i class=" fa-solid fa-angle-right fa-xs"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="banner-white d-flex justify-content-center align-items-center mt-md-0">
    <div class="container row">
        <div class="col-md-4">
            <h5 class="text-secondary fw-bold"  data-aos="fade-up">
                -- Benefits of Etax
            </h5>
            <h1 class="heading fw-bold lh-base text-break" id="slider-heading"  data-aos="fade-up">
                Why become an active income/sales tax filer?
            </h1>
            <p class="pt-5 d-none d-md-block"  data-aos="fade-up">
                Read this to learn more &nbsp;<i class="fa-solid fa-arrow-right-long fa-lg"></i>
            </p>
        </div>
        <div class="offset-md-1 col-md-7">
            <div class="row"  data-aos="fade-up">
                <div class="col-2 icon-img">
                    <img src="../svg/icon1.svg" alt="">
                </div>
                <div class="offset-1 offset-md-0 col-9 col-md-10">
                    <h4 class="fw-bold">Tax Savings</h4>
                    <p>
                        Get maximum tax savings like claiming tax credits for investments and adjustment of taxes paid on utilities, vehicle, property transactions, and cash withdrawals etc.
                    </p>
                </div>
            </div>
            <div class="row"  data-aos="fade-up">
                <div class="col-2">
                    <img class="icon-img" src="../svg/icon2.svg" alt="">
                </div>
                <div class="offset-1 offset-md-0 col-9 col-md-10">
                    <h4 class="fw-bold">Lower the Rate of Withholding Taxes</h4>
                    <p>
                        Non-Filers are subject to higher rate of taxes on various transactions e.g. withholding tax is applicable on cash withdrawals and banking transfers exceeding Rs. 50,000.
                    </p>
                </div>
            </div>
            <div class="row"  data-aos="fade-up">
                <div class="col-2">
                    <img class="icon-img" src="../svg/icon3.svg" alt="">
                </div>
                <div class="offset-1 offset-md-0 col-9 col-md-10">
                    <h4 class="fw-bold">Avoid Penalties</h4>
                    <p>
                        Be a responsible citizen and avoid penalties and / or prosecutions from the FBR for not filing return. Penalties result in a higher amount to be paid to FBR. Avoid it by filing tax on time.
                    </p>
                </div>
            </div>
            <div class="row"  data-aos="fade-up">
                <div class="col-2">
                    <img class="icon-img" src="../svg/icon4.svg" alt="">
                </div>
                <div class="offset-1 offset-md-0 col-9 col-md-10">
                    <h4 class="fw-bold">Compliance Check</h4>
                    <p>
                        Many government-related organizations and banks now check your FBR tax filer status before acceding to your requests, like registration of company, purchase of property and loan processing etc.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="banner-third">
    <div class="container py-3 px-4 w-75 d-flex justify-content-between flex-column">
        <div class="mt-5">
            <h5 class="text-secondary fw-bold" data-aos="fade-up">
                 Tax Savings
            </h5>
            <h1 class="text-white fw-bold pb-3" id="slider-heading" data-aos="fade-up">
                Get maximum tax savings like <br>claiming tax credits
            </h1>   
        </div>
        <div class="mt-3">
            <h5 class="text-secondary fw-bold" data-aos="fade-up">
                -- Avoid Penalties
            </h5>
            <h1 class="text-white fw-bold pb-3" id="slider-heading" data-aos="fade-up">
                Be a responsible citizen and <br>avoid penalties
            </h1>   
        </div>
        <div class="mt-3">
            <h5 class="text-secondary fw-bold" data-aos="fade-up">
                -- Compliance Check
            </h5>
            <h1 class="text-white fw-bold pb-3" id="slider-heading" data-aos="fade-up">
                Many government-related <br>organizations and banks now
            </h1>   
        </div>
    </div>
    @if (session()->has('success'))
        <div id="alert" class="position-fixed bottom-0 end-0 me-5 alert alert-primary" role="alert">
            {{ session('success') }}
        </div>
    @endif
</section>
@endsection
@section('scripts')
    <script>
        setInterval(changeSlide, 5000)
        var colors = ["#011FFF", "#7729FB", "#21A7FC"]
        var headings = ["Pakistan's #1 <br>Tax Solution", "Online Tax <br>Filing Portal", "Already Using <br>Our Services"]
        var subheadings = ["We are the leading tax <br>solution provider in Pakistan.", "We provide online tax filing <br>services to all tax departments.", "Already using our services? <br>Click here to login."]
        var index = 2;
        function changeSlide() {
            var banner = document.getElementById('banner');
            banner.style.backgroundImage = "url('img/banner-" + index + ".jpg')";
            document.getElementById("menu-btn").style.backgroundColor = colors[index - 1];
            document.getElementById("slider-heading").innerHTML = headings[index - 1];
            document.getElementById("slider-subheading").innerHTML = subheadings[index - 1];
            var sliderIcons = document.getElementsByClassName("slider-icons");
            for (var i = 0; i < 3; i++) {
                if (i == (index - 1)) {
                    if (!sliderIcons[0].children[i].classList.contains("fa-circle-notch")) {
                        sliderIcons[0].children[i].classList.remove("fa-circle-notch");
                        sliderIcons[0].children[i].classList.add("fa-circle");
                    }
                }
                else {
                    sliderIcons[0].children[i].classList.remove("fa-circle");
                    sliderIcons[0].children[i].classList.add("fa-circle-notch");
                }
            }
            var icon_classes = document.getElementsByClassName("slider-icons")[0].children[index - 1].classList;
            if (icon_classes.contains("fa-circle-notch")) {
                document.getElementsByClassName("slider-icons")[0].children[index - 1].classList.remove("fa-circle-notch");
                document.getElementsByClassName("slider-icons")[0].children[index - 1].classList.add("fa-circle");
            }
            else {
                document.getElementsByClassName("slider-icons")[0].children[index - 1].classList.remove("fa-circle");
                document.getElementsByClassName("slider-icons")[0].children[index - 1].classList.add("fa-circle-notch");
            }
            index = index == 3 ? 1 : index + 1;
            console.log(document.getElementsByClassName("slider-icons")[0].children[index - 1].classList[2])
        }
        setTimeout(() => {
            const alert = document.getElementById('alert');
            alert.style.display = 'none';
        }, 5000);
    </script>
@endsection