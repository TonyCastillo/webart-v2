@extends('front-template.layout')
@section('body')
<section id="home" class="heroSection">
    <div class="homeSlider owl-carousel owl-theme">
        <div class="box-slider">
            <div class="descripContent">
                <h1 data-animation-in="fadeInUp" class="title">¿Estas listo para subir al siguiente nivel?</h1>
                <p data-animation-in="fadeInLeft" data-wow-delay="1s" class="content">Provocar un ¡Woooow esta pagina
                    web esta increíble!. Además de tener un empleado más, que trabaje para vos, pero solo que las 24Hrs
                    del día</p>
                <a data-animation-in="fadeIn" data-wow-delay="2s" href="#contact" class="btn btn-large bg-gradient">Enviar
                    mensaje</a>
            </div>
        </div>
        <div class="box-slider">
            <div class="descripContent">
                <h1 data-animation-in="fadeInUp" class="title">El éxito no está en lo que se hace, si no en como se hace
                </h1>
                <p data-animation-in="fadeInLeft" data-wow-delay="1s" class="content">Un buen diseño genera confianza y
                    una buena estructura genera acciones que se convierten en clientes.</p>
                <a data-animation-in="fadeIn" data-wow-delay="2s" href="#contact" class="btn btn-large bg-gradient">Enviar
                    mensaje</a>
            </div>
        </div>
        <div class="box-slider">
            <div class="descripContent">
                <h1 data-animation-in="fadeInUp" class="title">Anlisis, desarrollo, asesoria, seguimiento.</h1>
                <p data-animation-in="fadeInLeft" data-wow-delay="1s" class="content">Todos nuestros proyectos cuentan
                    con una cobertura de asesoria para generar mas impacto al menor costo posible.</p>
                <a data-animation-in="fadeIn" data-wow-delay="2s" href="#contact" class="btn btn-large bg-gradient">Enviar
                    mensaje</a>
            </div>
        </div>
    </div>
    <div class="spaceSection">
        {{--<div class="spaceNav"><img src="/image/nave/nave-nueva.svg" alt=""></div>--}}
        <img src="/image/nave/nave-completa.svg" alt="">
        <div class="wave1"></div>
    </div>
</section>
<section id="about" class="about px-lg-5 page-section">
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-lg-4 ">
                <div class="greatTitle">
                    <h1>¡Estamos aquí para hacer que su <span>web</span> se vea más <span>elegante</span> y con estilo!
                    </h1>
                </div>
            </div>
            <div class="col-lg-8 ">
                <div class="contenedor-boxes-skill">
                    <article class="box-skill wow fadeInUp" data-wow-duration=".8s">
                        <span class="overlay-background"></span>
                        <div class="contenedor">
                            <div class="icon">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="456.42px"
                                    height="456.42px" viewBox="4420.734 -2611.505 456.42 456.42"
                                    enable-background="new 4420.734 -2611.505 456.42 456.42" xml:space="preserve">
                                    <g>
                                        <path d="M4742.423-2266.502h-38.053c-1.371,0-2.494-1.121-2.494-2.495v-9.263c0-1.372-1.123-2.495-2.496-2.495h-53.242
                    c-1.375,0-2.498,1.123-2.498,2.495v9.263c0,1.374-1.121,2.495-2.494,2.495h-28.607c-1.373,0-2.496,1.122-2.496,2.495v10.715
                    c0,1.372,1.123,2.495,2.496,2.495h129.883c1.373,0,2.494-1.123,2.494-2.495v-10.715
                    C4744.917-2265.377,4743.796-2266.502,4742.423-2266.502z" />
                                        <g>
                                            <path
                                                d="M4806.353-2517.014h-271.523c-9.449,0-17.133,7.687-17.133,17.135c0,0,0,32.673,0,44.691c0,5.908-0.439,6.744,3.525,6.744
                        c2.104,0,4.436,0,6.795,0c3.328,0,2.645-0.836,2.645-6.854c0-11.991,0-44.581,0-44.581c0-2.258,1.91-4.166,4.168-4.166h271.523
                        c2.256,0,4.166,1.908,4.166,4.166v167.281h-193.582c0,0-6.822-0.012-6.822,8.81c0,5.23,0,15.691,0,20.924
                        c0,8.81,7.045,8.81,7.045,8.81h189.193c9.445,0,17.135-7.685,17.135-17.133v-188.691
                        C4823.487-2509.326,4815.8-2517.014,4806.353-2517.014z M4670.591-2308.849c-4.266,0-7.723-3.456-7.723-7.719
                        c0-4.264,3.457-7.722,7.723-7.722c4.262,0,7.721,3.458,7.721,7.722C4678.312-2312.305,4674.853-2308.849,4670.591-2308.849z" />
                                            <path d="M4583.685-2433.14h-98.227c-6.098,0-11.057,4.96-11.057,11.059v161.446c0,6.098,4.959,11.059,11.057,11.059h98.227
                        c6.096,0,11.057-4.961,11.057-11.059v-161.446C4594.741-2428.18,4589.78-2433.14,4583.685-2433.14z M4522.456-2421.86h24.232
                        c1.156,0,2.094,0.936,2.094,2.096c0,1.157-0.938,2.095-2.094,2.095h-24.232c-1.158,0-2.096-0.938-2.096-2.095
                        C4520.36-2420.925,4521.298-2421.86,4522.456-2421.86z M4534.427-2257.344c-3.162,0-5.725-2.562-5.725-5.723
                        c0-3.16,2.563-5.723,5.725-5.723c3.16,0,5.723,2.563,5.723,5.723C4540.149-2259.905,4537.587-2257.344,4534.427-2257.344z
                         M4585.241-2274.163c0,1.476-1.182,2.683-2.623,2.683h-96.09c-1.443,0-2.623-1.207-2.623-2.683v-134.155
                        c0-1.476,1.182-2.682,2.623-2.682h96.09c1.443,0,2.623,1.207,2.623,2.682V-2274.163z" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <h3>Ere erea.</h3>
                            <p>No importa desde que dispositivo accedan a página web. Paginas webs adaptables a
                                cualquier smarphone o computadora</p>
                        </div>
                    </article>
                    <article class="box-skill wow fadeInUp" data-wow-duration=".8s" data-wow-delay="1s">
                        <span class="overlay-background"></span>
                        <div class="contenedor">
                            <div class="icon">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="456.42px"
                                    height="456.42px" viewBox="2639.107 -2611.505 456.42 456.42"
                                    enable-background="new 2639.107 -2611.505 456.42 456.42" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path fill="#282828" d="M2780.156-2496.853c1.49,0.591,2.842,1.842,3.938,3.377l0.783-2.05l7.137,2.731
                            c4.035,1.546,8.563-0.473,10.107-4.508c0.742-1.94,0.686-4.094-0.16-5.99l-3.127-6.985l9.525-4.253l3.115,6.978
                            c1.764,3.946,6.389,5.718,10.334,3.956c1.895-0.844,3.379-2.408,4.119-4.347l2.732-7.137l9.742,3.729l-2.732,7.136
                            c-1.545,4.037,0.475,8.561,4.512,10.105c1.938,0.742,4.094,0.684,5.986-0.163l6.977-3.114l4.252,9.528l-6.975,3.114
                            c-3.947,1.762-5.721,6.389-3.957,10.336c0.227,0.512,0.518,0.985,0.842,1.429c2.637-0.158,5.277-0.254,7.92-0.314
                            c0.67-0.056,1.342-0.081,2.01-0.127l-4.557-1.743c-1.348-0.515-2.021-2.021-1.51-3.368c0.25-0.646,0.744-1.168,1.375-1.45
                            l9.359-4.178c1.316-0.588,1.906-2.13,1.32-3.444l-6.381-14.293c-0.586-1.314-2.129-1.904-3.445-1.317l-9.355,4.179
                            c-1.313,0.594-2.859,0.013-3.455-1.3c-0.287-0.637-0.309-1.363-0.055-2.015l3.664-9.574c0.514-1.345-0.154-2.853-1.502-3.368
                            c0,0,0,0-0.004-0.001l-14.607-5.591c-1.344-0.516-2.85,0.156-3.367,1.501l-3.664,9.573c-0.516,1.344-2.021,2.019-3.369,1.504
                            c-0.646-0.247-1.17-0.741-1.447-1.373l-4.178-9.359c-0.588-1.315-2.131-1.905-3.445-1.318l-8.949,3.995
                            c-6.557,3.584-4.52,2.432-6.715,3.84c-0.246,0.646-0.229,1.363,0.055,1.994l4.176,9.357c0.447,0.962,0.252,2.099-0.486,2.857
                            c-0.725,0.769-1.84,1.024-2.822,0.646l-9.572-3.663c-1.346-0.518-2.855,0.154-3.371,1.499c0,0.002,0,0.003,0,0.003l-1.055,2.755
                            C2779.967-2496.999,2780.064-2496.943,2780.156-2496.853z" />
                                            <g>
                                                <g>
                                                    <path fill="#282828" d="M2799.617-2478.354c1.6,0.734,3.002,1.716,4.318,2.8c-0.107-1.503-0.002-3.044,0.35-4.589
                                    c1.916-8.429,10.301-13.707,18.73-11.79c8.428,1.917,13.707,10.304,11.789,18.731c-0.148,0.653-0.35,1.28-0.574,1.895
                                    c0.85-0.19,1.701-0.367,2.563-0.519c1.045-0.184,2.092-0.313,3.137-0.452c2.395-11.155-4.605-22.192-15.758-24.742
                                    c-11.236-2.556-22.418,4.482-24.975,15.72c-0.199,0.87-0.318,1.738-0.404,2.603
                                    C2799.068-2478.589,2799.344-2478.479,2799.617-2478.354z" />
                                                </g>
                                            </g>
                                        </g>
                                        <path
                                            d="M3052.414-2406.723c-24.941-17.612-50.924-33.691-77.811-48.144c-40.715-22.53-96.229-27.974-160.789-15.966
                        l-33.408-33.657c-1.293-1.293-3.045-2.025-4.875-2.025l-96.297-0.021c-2.549,0.001-4.891,1.404-6.088,3.653
                        c-1.199,2.246-1.063,4.977,0.357,7.088l28.266,42.151c0.256,0.369,0.541,0.716,0.859,1.037c2.51,2.516,6.523,2.709,9.27,0.452
                        c2.75-2.261,3.324-6.235,1.336-9.187l-21.061-31.404l80.414-0.001l25,25.199c-26.902,5.973-53.205,14.383-78.584,25.115
                        c-2.48,1.115-4.078,3.576-4.08,6.296l0.002,96.029l-41.42,61.777c-1.416,2.111-1.555,4.84-0.354,7.086
                        c1.197,2.249,3.537,3.651,6.082,3.652l96.242-0.039c0.684,0.002,1.344-0.13,1.984-0.321c-2.973-2.525-5.291-7.865-6.221-9.948
                        c-0.58-1.295-0.762-2.469-0.65-3.531l-78.361,0.002l32.146-48.031c12.109,4.884,24.418,9.232,36.873,13.098
                        c-0.361-0.827-0.57-1.701-0.615-2.607c-0.297-0.521-0.494-1.123-0.57-1.764c-0.262-2.231,0-4.396,0.84-6.355
                        c-0.16-1.205-0.199-2.434-0.025-3.713c0.012-0.079,0.037-0.141,0.053-0.216c-15.15-4.826-26.512-9.258-32.207-11.592l-0.006-37.571
                        l108.484-0.003c3.811,0.001,6.9-3.087,6.9-6.899c-0.002-3.813-3.092-6.904-6.904-6.905l-108.475,0.004v-37.563
                        c24.451-10.05,153.182-58.781,239.168-11.246c26.4,14.104,51.889,29.856,76.313,47.164c0.646,0.479,1.242,1.036,1.764,1.649
                        l-82.225-0.003c-3.629-26.769-27.381-46.144-54.332-44.32c-26.951,1.815-47.885,24.211-47.885,51.224s20.934,49.403,47.887,51.225
                        c26.945,1.817,50.701-17.56,54.334-44.324l82.221-0.008c-0.527,0.617-1.121,1.174-1.77,1.654
                        c-24.42,17.308-49.908,33.06-76.313,47.163c-24.691,13.658-52.926,19.348-81.211,20.302c0,0.001,0,0.002,0,0.003v9.439
                        c0,1.23-0.545,2.084-1.311,2.625c0.039,0.271,0.045,0.546,0.029,0.82c-0.002,0.043-0.006,0.084-0.01,0.125
                        c-0.023,0.271-0.07,0.539-0.15,0.798c34.373-1.005,64.596-8.36,89.328-22.038c26.93-14.395,52.916-30.479,77.818-48.144
                        c6.262-4.578,9.953-11.882,9.922-19.644C3062.328-2394.833,3058.654-2402.129,3052.414-2406.723z M2950.443-2387.067
                        c0.021,17.937-12.631,33.387-30.221,36.901c-17.59,3.516-35.213-5.889-42.088-22.453c-6.875-16.567-1.088-35.687,13.824-45.654
                        c14.912-9.973,34.785-8.018,47.473,4.661c7.045,7.038,11.01,16.575,11.029,26.53L2950.443-2387.067z" />
                                        <g>
                                            <path fill="#282828"
                                                d="M2772.438-2354.643c-0.143,1.008,0.121,2.032,0.734,2.847l9.053,12.073
                            c0.955,1.234,1.047,2.931,0.229,4.263c-0.783,1.34-2.303,2.07-3.84,1.848l-14.941-2.136c-2.102-0.301-4.047,1.157-4.348,3.257
                            c0,0.002,0,0.003,0,0.004l-3.262,22.813c-0.303,2.1,1.158,4.046,3.256,4.348c0.002,0,0.004,0,0.006,0l14.941,2.136
                            c2.1,0.299,3.559,2.244,3.26,4.345c-0.143,1.009-0.682,1.92-1.498,2.531l-12.072,9.054c-1.695,1.272-2.041,3.68-0.768,5.378
                            l13.828,18.438c1.273,1.697,3.68,2.042,5.379,0.769l12.074-9.054c1.699-1.271,4.107-0.924,5.379,0.775
                            c0.607,0.813,0.869,1.834,0.727,2.839l-2.133,14.941c-0.301,2.101,1.156,4.049,3.258,4.35l0,0l22.816,3.26
                            c0.178,0.023,0.361,0.035,0.543,0.035c1.91,0.004,3.533-1.401,3.807-3.295l2.131-14.943c0.299-2.1,2.244-3.56,4.346-3.261
                            c1.008,0.143,1.918,0.683,2.529,1.498l9.057,12.072c1.273,1.698,3.682,2.042,5.379,0.77l18.438-13.828
                            c1.697-1.274,2.041-3.682,0.77-5.379l-9.055-12.072c-0.949-1.237-1.041-2.932-0.229-4.264c0.768-1.357,2.301-2.094,3.84-1.844
                            l14.941,2.132c2.102,0.302,4.047-1.156,4.348-3.256c0,0,0,0,0-0.002l3.26-22.816c0.301-2.1-1.158-4.046-3.26-4.348l0,0
                            l-0.006-0.009l-14.943-2.132c-2.1-0.298-3.559-2.243-3.262-4.344c0.145-1.01,0.684-1.92,1.5-2.531l12.074-9.058
                            c1.699-1.273,2.041-3.68,0.77-5.377l-13.828-18.438c-1.273-1.697-3.682-2.041-5.377-0.768l-12.074,9.057
                            c-1.689,1.282-4.1,0.953-5.381-0.737c-0.623-0.821-0.889-1.858-0.742-2.877l2.137-14.942c0.299-2.1-1.156-4.045-3.258-4.347
                            l-0.002-0.002l-22.803-3.257c-2.1-0.302-4.047,1.156-4.348,3.256c0,0.001,0,0.001,0,0.001l-2.137,14.943
                            c-0.299,2.1-2.244,3.56-4.344,3.261c-1.01-0.144-1.92-0.684-2.533-1.498l-9.053-12.076c-1.273-1.697-3.68-2.042-5.377-0.769
                            l-11.543,8.661C2772.586-2355.063,2775.133-2357.383,2772.438-2354.643 M2878.277-2296.103l-11.141-1.591
                            c-6.299-0.899-12.137,3.479-13.035,9.778c-0.434,3.026,0.354,6.1,2.188,8.545l6.75,8.999l-12.291,9.22l-6.752-8.996
                            c-3.82-5.092-11.041-6.126-16.135-2.307c-2.445,1.833-4.061,4.563-4.494,7.588l-1.557,11.154l-15.207-2.174l1.592-11.14
                            c0.9-6.3-3.475-12.139-9.773-13.04c-3.029-0.434-6.102,0.354-8.549,2.189l-9.002,6.748l-9.219-12.291l8.996-6.753
                            c5.092-3.818,6.125-11.041,2.307-16.132c-1.83-2.445-4.563-4.063-7.588-4.495l-11.139-1.591l2.174-15.207l11.139,1.591
                            c6.301,0.901,12.141-3.475,13.041-9.774c0.434-3.028-0.354-6.103-2.188-8.549l-6.773-9.008l12.293-9.219l6.752,9.001
                            c3.816,5.091,11.041,6.123,16.131,2.307c2.445-1.835,4.064-4.563,4.496-7.589l1.59-11.141l15.209,2.172l-1.592,11.139
                            c-0.9,6.301,3.479,12.137,9.779,13.037c3.025,0.432,6.1-0.355,8.543-2.189l9-6.749l9.219,12.291l-8.998,6.753
                            c-5.094,3.818-6.127,11.041-2.307,16.133c1.832,2.445,4.561,4.062,7.588,4.494l11.139,1.591L2878.277-2296.103z" />
                                            <g>
                                                <g>
                                                    <path fill="#282828" d="M2822.338-2342.579c-16.969,0-30.729,13.759-30.729,30.73c0,16.971,13.76,30.729,30.729,30.729
                                    c16.975,0,30.73-13.759,30.73-30.729C2853.051-2328.813,2839.303-2342.56,2822.338-2342.579z M2822.338-2288.801
                                    c-12.727,0-23.045-10.319-23.045-23.048c0-12.729,10.318-23.048,23.045-23.048c12.732,0,23.051,10.318,23.051,23.048
                                    C2845.371-2299.126,2835.061-2288.816,2822.338-2288.801z" />
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>

                            </div>
                            <h3>Te bancamos</h3>
                            <p><strong>StartUp Friendlly</strong>. Apoyamos con un trato especial a todas las startups
                                que estan empezando, y quieren llegar lejos.</p>
                        </div>
                    </article>
                    <article class="box-skill wow fadeInUp" data-wow-duration=".8s" data-wow-delay="1.5s">
                        <span class="overlay-background"></span>
                        <div class="contenedor">
                            <div class="icon">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="456.419px"
                                    height="456.42px" viewBox="3210.968 -2611.505 456.419 456.42"
                                    enable-background="new 3210.968 -2611.505 456.419 456.42" xml:space="preserve">
                                    <g>
                                        <g>
                                            <g>
                                                <g>

                                                    <rect x="3496.67" y="-2528.072"
                                                        transform="matrix(-0.1781 -0.984 0.984 -0.1781 6626.4663 488.3948)"
                                                        width="41.045" height="9.95" />
                                                </g>
                                            </g>
                                            <g>
                                                <g>

                                                    <rect x="3553.938" y="-2534.272"
                                                        transform="matrix(-0.7736 -0.6337 0.6337 -0.7736 7904.4326 -2201.7329)"
                                                        width="9.95" height="42.818" />
                                                </g>
                                            </g>
                                            <g>
                                                <g>

                                                    <rect x="3574.174" y="-2499.757"
                                                        transform="matrix(-0.1833 -0.9831 0.9831 -0.1833 6672.5029 584.7739)"
                                                        width="9.956" height="41.1" />
                                                </g>
                                            </g>
                                        </g>
                                        <g>
                                            <path d="M3539.804-2484.221c-3.954-3.981-9.571-5.836-15.117-4.992c-21.784,3.751-43.318,8.821-64.481,15.188
                            c-32.378,9.309-63.584,34.941-90.489,74.142l-34.333-0.129c-1.323,0-2.596,0.523-3.533,1.46l-49.309,49.287
                            c-1.305,1.307-1.784,3.224-1.246,4.988c0.535,1.764,2.003,3.092,3.811,3.446l36.05,7.108c0.32,0.059,0.644,0.09,0.972,0.09
                            c2.572,0.004,4.727-1.952,4.977-4.513c0.25-2.564-1.49-4.895-4.02-5.387l-26.859-5.296l41.168-41.169l25.699,0.102
                            c-10.715,16.831-19.875,34.603-27.373,53.089c-0.699,1.842-0.258,3.919,1.135,5.313l49.162,49.161l10.422,52.831
                            c0.355,1.807,1.682,3.274,3.446,3.809c1.765,0.539,3.681,0.059,4.984-1.244l49.251-49.291c0.945-0.94,1.472-2.221,1.464-3.552
                            l-0.043-16.257c-0.012-2.752-2.244-4.977-4.996-4.977c-2.751,0-4.988,2.225-4.996,4.977l0.055,14.195l-41.167,41.168
                            l-8.131-41.047c19.441-8.267,38.08-18.31,55.672-30.004c41.168-27.436,68.025-59.556,77.612-92.874
                            c6.417-21.155,11.487-42.693,15.191-64.485C3545.643-2474.635,3543.793-2480.263,3539.804-2484.221z M3519.99-2407.362
                            c-19.645,68.284-110.535,109.292-128.193,116.685l-19.236-19.232l55.536-55.539c1.952-1.951,1.952-5.113,0-7.064
                            c-1.952-1.952-5.117-1.952-7.069,0l-55.531,55.535l-19.23-19.23c7.373-17.663,48.329-108.515,116.684-128.199
                            c20.737-6.296,41.85-11.28,63.213-14.922c0.577-0.086,1.167-0.105,1.748-0.059l-42.096,42.093
                            c-15.563-11.847-37.64-9.606-50.505,5.125c-12.868,14.727-12.119,36.909,1.71,50.738s36.008,14.574,50.738,1.709
                            c14.727-12.864,16.967-34.945,5.125-50.508l42.088-42.097c0.047,0.586,0.027,1.175-0.058,1.753
                            C3531.271-2449.213,3526.287-2428.101,3519.99-2407.362z M3482.547-2426.948c9.192,9.172,10.625,23.56,3.419,34.364
                            c-7.205,10.804-21.042,15.012-33.04,10.051c-12.003-4.961-18.826-17.713-16.297-30.449c2.529-12.74,13.705-21.913,26.69-21.917
                            c7.21-0.004,14.122,2.85,19.228,7.936V-2426.948z" />
                                            <path
                                                d="M3347.221-2291.643c-1.951-1.951-5.113-1.951-7.064,0l-48.01,48.018c-1.951,1.952-1.951,5.113,0,7.065
                            c1.947,1.952,5.113,1.952,7.064,0l48.01-48.022C3349.169-2286.533,3349.169-2289.691,3347.221-2291.643z" />
                                            <path d="M3366.608-2279.117l-48.021,48.018c-1.358,1.238-1.925,3.123-1.479,4.906c0.449,1.785,1.839,3.178,3.623,3.627
                            c1.779,0.453,3.664-0.109,4.91-1.468l48.029-48.021c1.951-1.952,1.951-5.113,0-7.065c-1.952-1.951-5.113-1.951-7.065,0
                            L3366.608-2279.117z" />
                                            <path d="M3334.699-2318.091c-1.951-1.952-5.113-1.952-7.064,0l-48.021,48.034c-1.3,1.252-1.819,3.11-1.362,4.859
                            c0.456,1.744,1.819,3.11,3.567,3.566c1.744,0.457,3.603-0.063,4.859-1.361l48.021-48.033
                            C3336.651-2312.978,3336.651-2316.143,3334.699-2318.091z" />
                                        </g>
                                    </g>
                                </svg>

                            </div>
                            <h3>Diseños re puretes</h3>
                            <p>Olvidate de las webs estaticas cuadradas y sin vida. Queremos destacarnos con nuestros
                                clientes, queremos que seas único</p>
                        </div>
                    </article>
                    <article class="box-skill wow fadeInUp" data-wow-duration=".8s" data-wow-delay="2s">
                        <span class="overlay-background"></span>
                        <div class="contenedor">
                            <div class="icon">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="456.419px"
                                    height="456.42px" viewBox="3846.688 -2611.505 456.419 456.42"
                                    enable-background="new 3846.688 -2611.505 456.419 456.42" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M4206.216-2321.541c1.104-2.882-0.245-6.07-3.127-7.234c-2.881-1.104-6.068,0.245-7.233,3.127
                            c-4.23,10.728-14.774,17.961-26.299,17.961h-116.292c-1.41,0-2.819,0.552-3.862,1.533l-53.088,50.82v-46.836
                            c0-1.471-0.613-2.881-1.655-3.924c-1.042-1.042-2.452-1.654-3.923-1.654h-26.483c-15.571,0-28.261-12.69-28.261-28.262v-125.241
                            c0-15.571,12.689-28.261,28.261-28.261h125.978c3.065,0,5.578-2.514,5.578-5.579c0-3.064-2.513-5.578-5.578-5.578h-125.978
                            c-21.701,0-39.356,17.655-39.356,39.356v125.303c0,21.701,17.655,39.357,39.356,39.357h20.966v54.314
                            c0,2.207,1.349,4.229,3.371,5.088c0.675,0.307,1.472,0.429,2.207,0.429c1.41,0,2.82-0.552,3.862-1.532l60.874-58.299h114.085
                            C4185.618-2296.591,4200.33-2306.644,4206.216-2321.541z" />
                                            <path d="M4224.545-2435.933c1.655-10.359-2.636-20.904-10.912-26.851c-4.72-3.371-10.237-5.149-16-5.149h-40.644v-29.058
                            c0-12.873-3.801-22.191-11.279-27.647c-11.832-8.705-28.016-3.739-28.69-3.556c-2.329,0.735-3.861,2.882-3.861,5.272v33.532
                            c0,25.809-30.1,34.637-31.326,35.004c-0.123,0.062-0.245,0.123-0.368,0.123c-1.839-2.82-5.026-4.721-8.705-4.721h-31.142
                            c-5.701,0-10.36,4.659-10.36,10.36v90.545c0,5.701,4.659,10.359,10.36,10.359h31.142c2.882,0,5.456-1.164,7.356-3.064
                            c4.966,4.965,11.832,8.031,19.434,8.031h82.023c18.574,0,30.406-9.748,32.552-26.729L4224.545-2435.933z M4072.023-2358.814
                            h-29.609v-89.012h29.609V-2358.814z M4213.572-2437.649l-10.483,66.575c0,0.061,0,0.123,0,0.184
                            c-1.409,11.342-8.644,17.104-21.517,17.104h-82.023c-9.073,0-16.43-7.356-16.43-16.43v-73.257c0.552,0,1.104,0,1.655-0.184
                            c1.594-0.43,39.479-11.402,39.479-45.732v-28.996c4.046-0.552,10.299-0.674,14.958,2.697c4.475,3.311,6.682,9.563,6.682,18.697
                            v34.637c0,3.064,2.514,5.578,5.579,5.578h46.222c3.434,0,6.743,1.042,9.502,3.065
                            C4212.039-2450.216,4214.553-2443.902,4213.572-2437.649z" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <h3>Somos kape</h3>
                            <p>Contamos con un proceso de asesoria y seguimiento en cada uno de nuestros proyectos.
                                Mantenimiento de un mes</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-section">
        <div class="cloud --left"><img src="/image/cloud/cloud-02.png" alt=""></div>
        <div class="cloud --right"><img src="/image/cloud/cloud-03.png" alt=""></div>
        <div class="cloud --top"><img src="/image/cloud/cloud-03.png" alt=""></div>
    </div>
</section>
<section id="whatsapp" class="page-section">
    <div class="ctaContacto ">
        <div class="wow fadeInDown" data-wow-duration=".5s">
            <img src="/image/migaam-home-02.png" class="mb-4" alt="">
            <h3>Whatsappear</h3>
            {{--<p>Whatsapeanos...!</p>--}}
        </div>
        <div>
            <div class="chat-whats border border-dark p-3 wow fadeInUp" data-wow-duration=".5s" data-wow-delay="1s">
                <p>Hola! Quisiera tener una Super Pagina Web 🙌 💪... ¿Cuales son los requisitos?.</p>
            </div>
            <div class="text-center"><a
                    href="https://api.whatsapp.com/send?phone=595981792647&amp;text=Hola! Quiero crear una pagina web, ¿cuales son los requisitos?."
                    target="_blank" class="btn whatsappEnviar">Enviar</a></div>
        </div>
    </div>
</section>
<section id="cta" class="page-section cta">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 p-3 text-center">
                <div class="box-image-cta wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                    <img src="/image/cta-img.jpg" alt="">
                </div>
                <div class="box-image-cta back">
                    <img src="/image/webarts-background.jpg" alt="">
                </div>
            </div>
            <div class="col-md-5 col-lg-4">
                <div class="normalTitle">
                    <h2>Convierte clics en prospectos de venta.</h2>
                </div>
                <p class="content"><span>7</span> de cada <span>10</span> usuarios eligen una empresa en base en la
                    apariencia de su sitio web. Es por eso que el sitio web de una
                    <span><strong>startup</strong></span>, <span><strong>proyecto</strong></span>,
                    <span><strong>idea</strong></span>, o <span><strong>cualquier tipo de empresa</strong></span>,
                    esta obligada a generar confianza para tener la posibilidad de convertir los visitantes en
                    prospectos de venta. </p>
            </div>
        </div>
    </div>
</section>
{{-- <section id="gallery" class="page-section gallery">
    <div class="homegallery owl-carousel owl-theme">
        <div class="item-gallery">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 p-0">
                        <div class="great-box">
                            <img src="/image/gallery/migaam-home-02.png" alt="">
                            <div class="descrip">
                                <h3>Sistema de carga de facturas online.</h3>
                                <h3>Migaam WebSystem.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0">
                        <div class="container-fluid cont-small-boxes">
                            <div class="row">
                                <div class="col-6 col-md-6 p-0">
                                    <div class="small-box">
                                        <img src="/image/gallery/notebook-migaam.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 p-0">
                                    <div class="small-box">
                                        <img src="/image/gallery/phone--migaam.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 d-none d-md-block p-0">
                                    <div class="small-box">
                                        <img src="/image/gallery/screencapture-web-app-migaamconsultora-dashboard-2019-06-24-10_53_29.png"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 d-none d-md-block p-0">
                                    <div class="small-box">
                                        <img src="/image/gallery/screencapture-web-app-migaamconsultora-home-client-2019-06-24-10_50_57.png"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item-gallery">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 p-0">
                        <div class="great-box">
                            <img src="/image/gallery/screencapture-doctosalud-py-2019-06-25-13_24_25.png" alt="">
                            <div class="descrip">
                                <h3>Pagina web institucional - auto administrable.</h3>
                                <h3>DoctoSalud - Sanatorio Americano.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0">
                        <div class="container-fluid cont-small-boxes">
                            <div class="row">
                                <div class="col-6 col-md-6 p-0">
                                    <div class="small-box">
                                        <img src="/image/gallery/notebook-docto.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 p-0">
                                    <div class="small-box">
                                        <img src="/image/gallery/iphone-docto.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 d-none d-md-block p-0">
                                    <div class="small-box">
                                        <img src="/image/gallery/docto-pic.png" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 d-none d-md-block p-0">
                                    <div class="small-box logo">
                                        <img src="/image/gallery/logo-vertical-04.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item-gallery">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 p-0">
                        <div class="great-box">
                            <img src="/image/gallery/migaamweb.png" alt="">
                            <div class="descrip">
                                <h3>Pagina institucional de la empresa.</h3>
                                <h3>Migaam S.A.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0">
                        <div class="container-fluid cont-small-boxes">
                            <div class="row">
                                <div class="col-6 col-md-6 p-0">
                                    <div class="small-box">
                                        <img src="/image/gallery/notebook-web-migaam.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-6 col-md-6 p-0">
                                    <div class="small-box">
                                        <img src="/image/gallery/iphone-web-migaam.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 d-none d-md-block p-0">
                                    <div class="small-box">
                                        <img src="/image/gallery/migaamweb.png" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 d-none d-md-block p-0">
                                    <div class="small-box logo">
                                        <img src="/image/gallery/cropped-Logo_Migaam_Consultora_Contable_147x60.png"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<section id="contact" class="page-section contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-6">
                {{--<div class="contact-feature">--}}
                {{--<img src="/image/contact-02.svg" alt="">--}}
                {{--</div>--}}
                <div class="contact-form">
                    <div class="normalTitle">
                        <h2>¿Estas listo?</h2>
                    </div>
                    <p class="content">Un buen diseño genera confianza y una buena estructura genera acciones que se
                        convierten en clientes.</p>
                    <form action="{{url('/contact')}}" method="POST">
                        @csrf
                        <div class="form-group input-war">
                            <input type="text" class="form-control" required name="name">
                            <label>Nombre</label>
                        </div>
                        <div class="form-group input-war">
                            <input type="email" class="form-control" required name="email">
                            <label>Email</label>
                        </div>
                        <div class="form-group input-war">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" required
                                name="message"></textarea>
                            <label>Mensaje</label>
                        </div>
                        <button class="btn btn-large bg-gradient my-4 w-100">Enviar</button>
                    </form>
                    <div class="quick-contact px-lg-5">
                        <div class="d-flex flex-wrap justify-content-end justify-content-md-between">
                            <p><img src="/image/migaam-home-02.png" alt=""><a href="tel:+595981792647">+595981 792-647</a></p>
                            <p><a href="mailto:hola@webarts.dev">hola@webarts.dev</a></p>
                        </div>
                    </div>
                </div>
                <div class="thanks d-none d-md-block">
                    <div class="content">
                        <h3>Gracias por visitarnos</h3>
                        <p>Si tienes algun comentario o sugerencia sobre tu estadia en esta web nos gustaria estar al
                            tanto.</p>
                    </div>
                    <img src="/image/heary-02.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
