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
    <section class="about">

    </section>
    @endsection