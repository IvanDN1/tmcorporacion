@extends('layout.layout')
<link href="{{ asset('css/cards.css') }}" rel="stylesheet">
@vite([
  'resources/css/app.scss',
  'resources/js/app.js',
 ])
@section('content')

<div class="cardeck">
    <div class="row justify-content-center text-center">
        <div class="col-sm-5 col-md-4">
            <div class="card1">
                <div class="content">
                    <p class="para">
                        TM corporación es una ATE que se enfoca en entregar asesorías y
                        capacitaciones a comunidades educativas, entregamos innovación en forma de nuevas
                        estrategias e implementación de tecnologías nuevas para el desarrollo educativo.
                        Nos enfocamos en el diseño de capacitaciones y asesorías orientadas en al comunidad
                        educativa que adquiere nuestros servicios, buscamos fortalecer la curiosidad junto
                        al pensamiento critico e impulsar el uso de tecnologías nuevas y emergentes para
                        mejorar la implementación de lecciones en aulas, tanto para estudiantes como docentes,
                        consideramos la importancia de la cooperación y respeto mutuo así como la experiencia
                        adquirida en la practica.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-5 col-md-4">
            <div class="card">
                <div class="content">
                    <p class="heading">SOMOS TM CORPORACION</p>
                    <img class="img-fluid" src="/images/Diseñando.png" alt="..." />
                </div>
            </div>
        </div>
    </div>
</div>


</section>
    <section class=" bg-gradient-primary-to-secondary6 text-white py-3">
    </section>
</div>
@endsection
