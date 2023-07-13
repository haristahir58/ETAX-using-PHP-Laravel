@extends('/admin/base')

@section('content')
        <div class="container rounded px-5 py-4 bg-white mb-5 form-container">
            <h3 class="pt-3 pb-5">
                Update user, {{$user->name}}
            </h3>
            {{-- Users Edit form --}}
        <form method="POST">
            @csrf
            <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate" data-aos="zoom-in-up" data-aos-duration="1000">
                <label class="contact-label fs-5 fw-bold" for="name">Name</label>
                <input type="text" class="contact-input" id="name" name="name" value="{{$user->name}}" required>
            </div>
            <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate" data-aos="zoom-in-up" data-aos-duration="1000">
                <label class="contact-label fs-5 fw-bold" for="email">Email</label>
                <input type="email" class="contact-input" id="email" name="email" value="{{$user->email}}" required>
            </div>
            <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate" data-aos="zoom-in-up" data-aos-duration="1000">
                <label class="contact-label fs-5 fw-bold" for="number">Phone Number</label>
                <input type="tel" class="contact-input" id="number" name="number" value="{{$user->phone}}" required>
            </div>
            <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate" data-aos="zoom-in-up" data-aos-duration="1000">
                <label class="contact-label fs-5 fw-bold" for="cnic">CNIC</label>
                <input type="text" class="contact-input" id="cnic" name="cnic" pattern="[0-9]{13}" value="{{$user->cnic}}" required>
            </div>
            <div class="form-group d-flex flex-column pb-5 position-relative aos-init aos-animate" data-aos="zoom-in-up" data-aos-duration="1000">
                <label class="contact-label fs-5 fw-bold" for="password">Password</label>
                <input type="password" class="contact-input" id="password" name="password" value="{{$user->password}}" required>
            </div>
            <div class="d-flex justify-content-end">
                <input class="btn update-btn rounded-pill fw-bold fs-5" type="submit" name="submit" id="submit" value="Update">
            </div>
        </form>
        {{-- End User Edit form --}}
        </div>
@endsection