@extends('layout.principal')

@section('title')
    Inicio
@endsection

@section('styles')
@endsection

@section('content')
<section class="container-fluid pt-60 pb-60 banner">
    <p class="h1 mt-4 text-white text-center">Global Sustainable Development Enterprise</p>
    <p class="h1 mt-4 text-white text-center">Disruptiving The Pharmaceutical</p>
    <p class="h1 mt-4 text-white text-center">Food (Nestle) Industry</p>
    <p class="mt-4 text-center"><img src="{{ env('APP_URL') }}/assets/images/home/iconBanner.png" alt="icono_logo" width="200px"></p>
</section>

<section class="container-fluid bg_blue pt-60 pb-60">
    <div class="row">
        <div class="col-md-3 text-center mt-4">
            <img src="{{ env('APP_URL') }}/assets/images/home/pillars/img1_cuadrohome_efw.png" class="img_pillars">
        </div>
        <div class="col-md-3 text-center mt-4">
            <img src="{{ env('APP_URL') }}/assets/images/home/pillars/img2_cuadrohome_efw.png" class="img_pillars">
        </div>
        <div class="col-md-3 text-center mt-4">
            <img src="{{ env('APP_URL') }}/assets/images/home/pillars/img3_cuadrohome_efw.png" class="img_pillars">
        </div>
        <div class="col-md-3 text-center mt-4">
            <img src="{{ env('APP_URL') }}/assets/images/home/pillars/img4_cuadrohome_efw.png" class="img_pillars">
        </div>
        <div class="col-md-3 text-center mt-4">
            <img src="{{ env('APP_URL') }}/assets/images/home/pillars/img5_cuadrohome_efw.png" class="img_pillars">
        </div>
        <div class="col-md-3 text-center mt-4">
            <img src="{{ env('APP_URL') }}/assets/images/home/pillars/img6_cuadrohome_efw.png" class="img_pillars">
        </div>
        <div class="col-md-3 text-center mt-4">
            <img src="{{ env('APP_URL') }}/assets/images/home/pillars/img7_cuadrohome_efw.png" class="img_pillars">
        </div>
        <div class="col-md-3 text-center mt-4">
            <img src="{{ env('APP_URL') }}/assets/images/home/pillars/img8_cuadrohome_efw.png" class="img_pillars">
        </div>
        <div class="col-md-3 text-center mt-4">
            <img src="{{ env('APP_URL') }}/assets/images/home/pillars/img9_cuadrohome_efw.png" class="img_pillars">
        </div>
        <div class="col-md-3 text-center mt-4">
            <img src="{{ env('APP_URL') }}/assets/images/home/pillars/img10_cuadrohome_efw.png" class="img_pillars">
        </div>
        <div class="col-md-3 text-center mt-4">
            <img src="{{ env('APP_URL') }}/assets/images/home/pillars/img11_cuadrohome_efw.png" class="img_pillars">
        </div>
        <div class="col-md-3 text-center mt-4">
            <img src="{{ env('APP_URL') }}/assets/images/home/pillars/img12_cuadrohome_efw.png" class="img_pillars">
        </div>
        <div class="col-md-3 text-center mt-4">
            <img src="{{ env('APP_URL') }}/assets/images/home/pillars/img13_cuadrohome_efw.png" class="img_pillars">
        </div>
        <div class="col-md-3 text-center mt-4">
            <img src="{{ env('APP_URL') }}/assets/images/home/pillars/img14_cuadrohome_efw.png" class="img_pillars">
        </div>
        <div class="col-md-3 text-center mt-4">
            <img src="{{ env('APP_URL') }}/assets/images/home/pillars/img15_cuadrohome_efw.png" class="img_pillars">
        </div>
        <div class="col-md-3 text-center mt-4">
            <img src="{{ env('APP_URL') }}/assets/images/home/pillars/img16_cuadrohome_efw.png" class="img_pillars">
        </div>
        <div class="col-md-3 offset-md-3 text-center mt-4">
            <img src="{{ env('APP_URL') }}/assets/images/home/pillars/img17_cuadrohome_efw.png" class="img_pillars">
        </div>
        <div class="col-md-3 text-center mt-4">
            <img src="{{ env('APP_URL') }}/assets/images/home/pillars/img18_cuadrohome_efw.png" class="img_pillars">
        </div>
    </div>
</section>
@endsection

@section('scripts')
@endsection


<style>
    .banner{
        min-height: 500px;
        background-color: #143e53;
        background-image: url('assets/images/home/banner1.png');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .img_pillars{
        width: 250px;
        cursor: pointer;
    }

    .bg_blue{
        background-color: #143e53;
    }
</style>