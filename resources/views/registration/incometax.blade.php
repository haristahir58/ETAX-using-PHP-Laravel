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
                    -- File Income Tax
                </h5>
                <h1 class="heading text-white fw-bold pb-3" id="slider-heading">
                    Fill out <br>
                    The IT Form
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
<section class="contact-banner d-flex justify-content-center align-items-center" id="scroll">
    <div class="row container py-3 px-4 w-75 d-flex justify-content-between flex-column flex-md-row">
        <div class="col-md-6">
            <h1 class="display-6 text-white fw-bold pb-3" id="slider-heading">
                Fill out the Details to get <br> Registered in Income tax
            </h1>
        </div>
        <div class="col-md-10 mt-5">
            <form method="POST">
                @csrf   
                <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate"
                    data-aos="zoom-in-up" data-aos-duration="1000">
                    <label class="contact-label fs-5 fw-bold" for="name">Name</label>
                    <input type="text" class="contact-input" id="name" name="name" value={{$name}}>
                    <div class="error" id="cnicErr" style="color: white"></div>
                </div>
                <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate"
                    data-aos="zoom-in-up" data-aos-duration="1000">
                    <label class="contact-label fs-5 fw-bold" for="email">Email</label>
                    <input type="text" class="contact-input" id="email" name="email" value={{$email}}>
                    <div class="error" id="cnicErr" style="color: white"></div>
                </div>
                <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate"
                    data-aos="zoom-in-up" data-aos-duration="1000">
                    <label class="contact-label fs-5 fw-bold" for="phone">Phone</label>
                    <input type="text" class="contact-input" id="phone" name="phone" value={{$phone}}>
                    <div class="error" id="cnicErr" style="color: white"></div>
                </div>
                <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate"
                    data-aos="zoom-in-up" data-aos-duration="1000">
                    <label class="contact-label fs-5 fw-bold" for="cnic">CNIC</label>
                    <input type="text" class="contact-input" id="cnic" name="cnic" value={{$cnic}}>
                    <div class="error" id="cnicErr" style="color: white"></div>
                </div>
                <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate"
                    data-aos="zoom-in-up" data-aos-duration="1000">
                    <label class="contact-label fs-5 fw-bold" for="nationality">Nationality</label>
                    <input type="text" class="contact-input" id="nationality" name="nationality">
                    <div class="error" id="cnicErr" style="color: white"></div>
                </div>
                <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate"
                    data-aos="zoom-in-up" data-aos-duration="1000">
                    <label class="contact-label fs-5 fw-bold" for="tax_year">Tax Year</label>
                    <input type="text" class="contact-input" id="tax_year" name="tax_year">
                    <div class="error" id="cnicErr" style="color: white"></div>
                </div>
                <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate"
                    data-aos="zoom-in-up" data-aos-duration="1000">
                    <label class="contact-label fs-5 fw-bold" for="address">Address</label>
                    <input type="text" class="contact-input" id="address" name="address">
                    <div class="error" id="cnicErr" style="color: white"></div>
                </div>
                <div class="accordion-item accordion-it">
                    <h2 class="accordion-header" id="flush-headingTwo">
                      <button class="accordion-button collapsed bg-transparent rounded text-white border border-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Business
                      </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse pt-5" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate"
                            data-aos="zoom-in-up" data-aos-duration="1000">
                            <label class="contact-label fs-5 fw-bold" for="business_name">Name</label>
                            <input type="text" class="contact-input" id="business_name" name="business_name">
                            <div class="error" id="cnicErr" style="color: white"></div>
                        </div>
                        <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate"
                            data-aos="zoom-in-up" data-aos-duration="1000">
                            <label class="contact-label fs-5 fw-bold" for="business_address">Address</label>
                            <input type="text" class="contact-input" id="business_address" name="business_address">
                            <div class="error" id="cnicErr" style="color: white"></div>
                        </div>
                        <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate"
                            data-aos="zoom-in-up" data-aos-duration="1000">
                            <label class="contact-label fs-5 fw-bold" for="gross_income">Gross Income</label>
                            <input type="text" class="contact-input" id="gross_income" name="gross_income">
                            <div class="error" id="cnicErr" style="color: white"></div>
                        </div>
                        <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate"
                            data-aos="zoom-in-up" data-aos-duration="1000">
                            <label class="contact-label fs-5 fw-bold" for="expenditures">Expenditures</label>
                            <input type="text" class="contact-input" id="expenditures" name="expenditures">
                            <div class="error" id="cnicErr" style="color: white"></div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item accordion-it mt-5">
                    <h2 class="accordion-header" id="flush-headingOne">
                      <button class="accordion-button collapsed bg-transparent rounded text-white border border-white" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Salary
                      </button> 
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse pt-5" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate"
                            data-aos="zoom-in-up" data-aos-duration="1000">
                            <label class="contact-label fs-5 fw-bold" for="company_name">Company Name</label>
                            <input type="text" class="contact-input" id="company_name" name="company_name">
                            <div class="error" id="cnicErr" style="color: white"></div>
                        </div>
                        <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate"
                            data-aos="zoom-in-up" data-aos-duration="1000">
                            <label class="contact-label fs-5 fw-bold" for="company_address">Company Address</label>
                            <input type="text" class="contact-input" id="company_address" name="company_address">
                            <div class="error" id="cnicErr" style="color: white"></div>
                        </div>
                        <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate"
                            data-aos="zoom-in-up" data-aos-duration="1000">
                            <label class="contact-label fs-5 fw-bold" for="salary">Salary</label>
                            <input type="text" class="contact-input" id="salary" name="salary">
                            <div class="error" id="cnicErr" style="color: white"></div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-lg contact-btn text-white rounded-pill mt-5" type="submit">Submit</button>
            </form>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    function validateForm(){
        var regexpCNIC = new RegExp("^[0-9]{13}$");
        var regexpContact = new RegExp("^[0-9]{11}$");
        var cnicInput = document.getElementById('cnic').value;
        var contactInput = document.getElementById('number').value;
        var emailInput = document.getElementById('email').value;
        var regexpemail = new RegExp("/^\S+@\S+\.\S+$/");
        if (cnicInput == "") {
            document.getElementById('cnic').style.borderColor = "Red"
            document.getElementById('cnicErr').innerHTML = "please enter some value CNIC";
                
            }
        if (regexpCNIC.test(cnicInput)){
            document.getElementById('cnicErr').innerHTML = "";
            document.getElementById('cnic').style.borderColor = "green"
        }
        else{
            console.log(regexpCNIC.test(cnicInput));
            document.getElementById('cnic').style.borderColor = "Red"
            document.getElementById('cnicErr').innerHTML = "Invalid CNIC";
        }
        if (regexpContact.test(contactInput)){
            document.getElementById('numErr').innerHTML = "";
            document.getElementById('number').style.borderColor = "green"
        }
        else{
            console.log(regexpContact.test(contactInput));
            document.getElementById('number').style.borderColor = "Red"
            document.getElementById('numErr').innerHTML = "Invalid Number";
        }
        if (regexpemail.test(emailInput)){
            document.getElementById('email').innerHTML = "";
            document.getElementById('email').style.borderColor = "green"
        }
        else{
            console.log(regexpemail.test(emailInput));
            document.getElementById('email').style.borderColor = "Red"
            document.getElementById('emailErr').innerHTML = "Invalid Email";
        }
    }
</script>
@endsection

