@extends('layouts\main')

@section('content')
    @include('Partials.navbar')

    <div class="container-fluid bg-light pb-5">

        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-md-5 pe-4">
                    <div class="row">
                        {{-- <h1 class="display-5">Share your idea</h1>
                        <h1 class="display-5 fw-bold">Create Your Dreams</h1> --}}
                        <h1 class="display-5 fw-bold">{{ $c1 }}</h1>
                        <hr class="solid mt-3">
                        <p class="mt-3">{{ $c1desc }}</p>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <a href="/order" class="btn btn-dark btn-lg mt-2 shadow-custom-lg" role="button">Order Now</a>
                        </div>
                    </div>
                    <div class="mt-5">
                        <i class="bi bi-caret-right-square-fill float" style="color: #54429a"></i>
                        <a href="/media" class="text-decoration-none fw-bold fs-5" style="color: #54429a">See creativity at
                            work</a>
                    </div>
                </div>
                <div class="col-md-auto">
                    <div class="">

                    </div>
                </div>
                <div class="col">
                    <div class="float-end">
                        <img src="img/aiimg1.png" alt="" class="float-end" style="max-width: 90%;">
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <hr class="solid">
        </div>

        <div class="container pt-5 pb-5">
            <div class="row align-items-center pb-5">

                <div class=" col-md-4 pe-4">
                    <img src="img/aiimg2.png" alt="" class="" style="max-width: 100%;">
                </div>

                <div class="col-md-auto">

                </div>

                <div class="col-md-5">
                    <div class="">
                        <div class="row">
                            <h2 class="fw-bold">{{ $c2 }}</h2>
                            <p class="mt-4"> {{ $c2desc }}</p>

                            <p>
                                We'll help you find a designer with just the right skill set, and you'll collaborate
                                one-on-one
                                with them on your project.
                            </p>
                        </div>
                    </div>

                    <div class="mt-2">
                        <i class="bi bi-caret-right-square-fill float" style="color: #54429a"></i>
                        <a href="/order" class="text-decoration-none fw-bold fs-5" style="color: #54429a">Get Started</a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <hr class="solid">
        </div>

        <div class="container pt-5 pb-5">

            <div class="row justify-content-center text-center">
                <h2 class="fw-bold">{{ $c3 }}</h2>
            </div>

            <div class="row pb-3 justify-content-center text-center">
                <div class="col-md-5">
                    <p class="mt-3">{{ $c3desc }}</p>
                </div>
            </div>

            <div class="row pb-5">
                <div class="col text-center">
                    <div class="row">
                        <div class="col-lg-3 mb-3">
                            <div class="hover hover-1 text-white rounded"><img src="img/test5.png" alt="img/aibg-black.png">
                                {{-- <div class="hover-overlay"></div> --}}
                                <div class="hover-1-content px-5 py-4">
                                    <h3 class="hover-1-title text-uppercase font-weight-bold mb-0">{{ $i1 }}</h3>
                                    <p class="hover-1-description font-weight-light mb-0">{{ $i1desc }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-3">
                            <div class="hover hover-1 text-white rounded"><img src="img/test4.png" alt="img/aibg-black.png">
                                {{-- <div class="hover-overlay"></div> --}}
                                <div class="hover-1-content px-5 py-4">
                                    <h3 class="hover-1-title text-uppercase font-weight-bold mb-0">{{ $i2 }}</h3>
                                    <p class="hover-1-description font-weight-light mb-0">{{ $i2desc }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-3">
                            <div class="hover hover-1 text-white rounded"><img src="img/test3.png" alt="img/aibg-black.png">
                                {{-- <div class="hover-overlay"></div> --}}
                                <div class="hover-1-content px-5 py-4">
                                    <h3 class="hover-1-title text-uppercase font-weight-bold mb-0">{{ $i3 }}</h3>
                                    <p class="hover-1-description font-weight-light mb-0">{{ $i3desc }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-3">
                            <div class="hover hover-1 text-white rounded"><img src="img/test2.png" alt="img/aibg-black.png">
                                {{-- <div class="hover-overlay"></div> --}}
                                <div class="hover-1-content px-5 py-4">
                                    <h3 class="hover-1-title text-uppercase font-weight-bold mb-0">{{ $i4 }}</h3>
                                    <p class="hover-1-description font-weight-light mb-0">{{ $i4desc }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="container pb-5">
            <hr class="solid">
        </div>

        <div class="container bg-image pt-5 pb-5 mt-5 shadow-custom-lg rounded" style="background-image: url('img/test.png')">
            <div class="container pt-5 pb-5">
                <div class="row justify-content-center text-center text-light">
                    <h2 class="fw-bold">{{ $c4 }}</h2>
                </div>

                <div class="row pb-3 justify-content-center text-center text-light">
                    <div class="col-md-5">
                        <p class="mt-3">{{ $c4desc }}</p>
                    </div>
                </div>

                <div class="row justify-content-center text-center text-light">
                    <div class="col-md-5">
                        <a href="/order" class="btn btn-dark btn-lg mt-2 shadow-custom-lg" role="button">Order Now</a>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>
    </div>


    @include('Partials.footer')
@endsection
