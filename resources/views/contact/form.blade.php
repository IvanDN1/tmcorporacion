@extends('layout.layout')
@section('content')
<section>
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
                    <div class="form-group">
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" placeholder="name">
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="phone" placeholder="phone">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" placeholder="email">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="subject" placeholder="subject">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <textarea name="message" cols="68" style="height: 200px;" placeholder="Message"></textarea>
                        </div>
                        <button class="btn btn-outline-success col-md-20">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</section>
@endsection
