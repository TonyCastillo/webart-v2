@extends('front-template.layout')
@section('body')
    <section class="heroSection">
        <div class="homeSlider owl-carousel owl-theme">
            <div class="box-slider">
                <div class="descripContent">
                    <h1 class="title">Lorem ipsum dolor sit amet consectetur.</h1>
                    <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque soluta numquam molestiae beatae quae ipsum!</p>
                    <a href="#" class="btn btn-large bg-gradient">Enviar mensaje</a>
                </div>
            </div>
            <div class="box-slider">
                <div class="descripContent">
                    <h1 class="title">Lorem ipsum dolor sit amet consectetur.</h1>
                    <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque soluta numquam molestiae beatae quae ipsum!</p>
                    <a href="#" class="btn btn-large bg-gradient">Enviar mensaje</a>
                </div>
            </div>
            <div class="box-slider">
                <div class="descripContent">
                    <h1 class="title">Lorem ipsum dolor sit amet consectetur.</h1>
                    <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque soluta numquam molestiae beatae quae ipsum!</p>
                    <a href="#" class="btn btn-large bg-gradient">Enviar mensaje</a>
                </div>
            </div>
        </div>
        <div class="spaceSection">
            {{--<div class="spaceNav"><img src="/image/nave/nave-nueva.svg" alt=""></div>--}}
            <img src="/image/nave/nave-completa.svg" alt="">
            <div class="wave1"></div>
        </div>
    </section>
    <section class="about px-5">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-md-5 border border-warning">
                    <div class="greatTitle">
                        <h1>¡Estamos aquí para hacer que su sitio web se vea más elegante y con estilo!</h1>
                    </div>
                </div>
                <div class="col-md-7 border border-warning"></div>
            </div>
        </div>
        <div class="footer-section">
            <div class="cloud --left"><img src="/image/cloud/cloud-02.png" alt=""></div>
            <div class="cloud --right"><img src="/image/cloud/cloud-03.png" alt=""></div>
            <div class="cloud --top"><img src="/image/cloud/cloud-03.png" alt=""></div>

        </div>
    </section>
    @endsection