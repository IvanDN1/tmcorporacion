@extends('components.layout.layout')
@section('content')
<section>
    <div class="bg-light rounded-4 py-5 px-4 px-md-5">
        <div class="text-center mb-5">
            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
            <h1 class="fw-bolder">CONTACTANOS!</h1>
            <p class="lead fw-normal text-muted mb-0">Para Trabajar</p>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" placeholder="name">
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="phone" placeholder="phone">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" placeholder="email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="subject" placeholder="subject">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <textarea name="message" cols="64" placeholder="Message"></textarea>
                        </div>
                        <button class="btn btn-outline-success col-md-20">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
