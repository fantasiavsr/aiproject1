@extends('layouts\main')

@section('content')
    @include('Partials.navbar')

    <div class="container-fluid bg-light pt-5 pb-5">

        <div class="container pt-5 pb-5">

            <div class="row justify-content-center text-center">
                <h2 class="fw-bold">{{ $c1 }}</h2>
            </div>

            <div class="row pb-3 justify-content-center text-center">
                <div class="col-md-5">
                    <p class="mt-3">{{ $c1desc }}</p>
                </div>
            </div>

            <div class="row pb-5 justify-content-center text-center">
                <div class="col-lg-2 mb-3">
                    <img class="img-fluid" src="img/order-1.jpg" style="height: 100%" alt="">
                </div>

                <div class="col-lg-2 mb-3">
                    <img class="img-fluid" src="img/order-2.jpg" style="height: 100%" alt="">
                </div>

                <div class="col-lg-2 mb-3">
                    <img class="img-fluid" src="img/order-3.jpg" style="height: 100%" alt="">
                </div>

                <div class="col-lg-2 mb-3">
                    <img class="img-fluid" src="img/order-4.jpg" style="height: 100%" alt="">
                </div>
            </div>

        </div>

        <div class="container pb-5">
            <hr class="solid">
        </div>

        <div class="container pt-5 pb-5">

            <div class="row justify-content-center text-center">
                <h2 class="fw-bold">{{ $c2 }}</h2>
            </div>

            <div class="row pb-3 justify-content-center text-center">
                <div class="col-md-5">
                    <p class="mt-3">{{ $c2desc }}</p>
                </div>
            </div>


            <div class="row pb-2 justify-content-center text-center">
                <div class=" mb-3">
                    <img class="img-fluid" src="img/media-b-1.png" style="height: 100%" alt="">
                </div>
            </div>

        </div>

        <div class="container pb-5">
            <hr class="solid">
        </div>

        <div class="container pt-5 pb-5">

            <div class="row justify-content-center text-center">
                <h2 class="fw-bold">{{ $c3 }}</h2>
            </div>

            <div class="row justify-content-center text-center">
                <div class="col-md-4">
                    <p class="mt-3">{{ $c3desc }}</p>
                </div>
            </div>

            <div class="row justify-content-center text-center">
                <div class="">
                    <img class="img-fluid" src="img/media-c-1.png" style="height: 100%" alt="">
                </div>

            </div>

        </div>

        <br>
    </div>

    @include('Partials.footer')
@endsection
