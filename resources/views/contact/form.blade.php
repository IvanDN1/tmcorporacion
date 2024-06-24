@extends('layout.layout')
@section('content')
<section class="py-5">
    <div class="container px-5">
        <div class="bg-light rounded-4 py-5 px-4 px-md-5">
            <div class="text-center mb-5">
                 <div class="card">
                    <div class="content">
                        <img class="img-fluid" src="/images/LogoATE2.jpg" alt="..." />
                        <p class="lead fw-normal text-muted mb-0">Trabajemos Juntos!</p>
                    </div>
                </div>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6 col-xl-8">
                    <form action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" placeholder="name">
                            <div class="invalid-feedback" data-sb-feedback="name:required">se requiere un nombre.</div>
                        </div>
                    </div>
                    <br>
                    <div class="form-floating mb-3">
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="phone" placeholder="phone">
                            <div class="invalid-feedback" data-sb-feedback="phone:required">se requiere un numero.</div>
                        </div>
                    </div>
                    <br>
                    <div class="form-floating mb-3">
                        <div class="col-sm-10">
                            <input name="email"class="form-control" id="email" type="email" placeholder="name@example.com" required>
                            <div class="invalid-feedback" data-sb-feedback="email:required">se requiere.</div>
                        </div>
                    </div>
                    <br>
                    <div class="form-floating mb-3">
                        <div class="col-sm-10">
                            <input class="form-control"  name="subject" id="subject" type="text" placeholder="Enter your subject..." required>
                            <div class="invalid-feedback" data-sb-feedback="subject:required">A phone is required.</div>
                        </div>
                    </div>
                    <br>
                    <div class="form-floating mb-3">
                        <div class=" message mb-3 ">
                            <textarea class="form-control" name="message"type="text" placeholder="Enter your message here..." style="height: 10rem" required></textarea>
                        </div>
                        <button class="btn btn-outline-success btn-lg">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</section>
@endsection
