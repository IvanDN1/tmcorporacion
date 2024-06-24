@extends('layout.layout')
@section('content')
<section class="py-5">
    <div class="container px-5">
        <div class="bg-light rounded-4 py-5 px-4 px-md-5">
            <div class="text-center mb-5 justify-content-center">
                 <div class="card">
                    <div class="content">
                        <img class="img-fluid" src="/images/LogoATE2.jpg" alt="..." />
                        <p class="lead fw-normal text-muted mb-0">Trabajemos Juntos!</p>
                    </div>
                </div>
            </div>
            <div class="row gx-8 justify-content-center">
                <div class="col-lg-8 col-xl-8">
                    <form action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <input name="name" class="form-control" id="name" type="text" placeholder="Enter your name..." required>
                        <label for="name">Full name</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">se requiere un nombre.</div>
                    </div>
                    <br>
                    <div class="form-floating mb-3">
                        <input name="phone" class="form-control" id="phone" type="tel" placeholder="(569) 0000-0000" required >
                        <label for="phone">Phone number</label>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">se requiere un numero.</div>
                    </div>
                    <br>
                    <div class="form-floating mb-3">
                        <input name="email"class="form-control" id="email" type="email" placeholder="name@example.com" required>
                        <label for="email">Email address</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">se requiere.</div>
                    </div>
                    <br>
                    <div class="form-floating mb-3">
                        <input class="form-control"  name="subject" id="subject" type="text" placeholder="Enter your subject..." required>
                        <label for="subject">Subject</label>
                        <div class="invalid-feedback" data-sb-feedback="subject:required">A phone is required.</div>
                    </div>
                    <br>
                    <div class="form-floating mb-3">
                        <textarea name="message" class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" required></textarea>
                        <label for="message">Message</label>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-outline-success btn-lg">Submit</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</section>
@endsection
