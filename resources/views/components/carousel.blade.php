<link href="{{ asset('css/carousel.scss') }}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div id="carouselExampleIndicators" class="carousel slide"  data-interval="false" data-bs-ride="carousel">
    <div class="carousel-indicators" >
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 0"></button>
    </div>
    <div class="carousel-inner">
        @for ($i = 1; $i <= 3; $i++)
            <div class="carousel-item @if ($i === 1) active @endif">
                <img src="{{ asset('images/carousel/foto'.$i.'.jpeg') }}" class="d-block w-100" alt="Foto {{ $i }}">
            </div>
        @endfor
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Scripts de Bootstrap y jQuery (opcional si ya están incluidos de otra manera) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

