@extends('layouts.app')

@section('content')
<div class="container">
    <div id="carouselExampleSlidesOnly" class="carousel slide custom-carousel" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/envios.png') }}" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/pagos.png') }}" class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/descuento.png') }}" class="d-block w-100" alt="Slide 3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
</div>
<footer class="footer mt-5 py-3 text-white bg-success">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-6 text-start">
                <!-- redes -->
                <a href="#"><i class="fab fa-facebook-f fa-lg text-white me-3"></i></a>
                <a href="#"><i class="fab fa-twitter fa-lg text-white me-3"></i></a>
                <a href="#"><i class="fab fa-instagram fa-lg text-white me-3"></i></a>
            </div>
            <div class="col-md-6 text-end">
                <!-- contacto -->
                <p class="mb-0">Email: talentostore@gamil.com</p>
                <p class="mb-0">Teléfono: +123456789</p>
                <p class="mb-0">Dirección: Calle falsa 123, Corrientes, Corrientes</p>
            </div>
        </div>
    </div>
</footer>
@endsection

@push('styles')
<style>
    .custom-carousel {
        width: 50%;
        margin: auto;
        margin-top: 20px;
    }
    .custom-carousel .carousel-inner img {
        height: 50px; 
        object-fit: cover; 
    }
    .footer-custom {
        background-color: #53c685;
    }
    .footer-custom .col-md-6 a {
        color: white;
    }
    .footer-custom .col-md-6 p {
        margin-bottom: 0;
    }
</style>
@endpush


