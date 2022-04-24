@extends('layouts\main')

@section('content')
    @include('Partials.navbar')

    <div class="container-fluid bg-light pt-5 pb-5">

        <div class="container pt-5 pb-5 shadow-custom-lg rounded" style="background-color: #54429a">
            <div class="container pt-5 pb-5">
                <div class="text-light">
                    <h1 class="ms-5 mb-4 pe-5 fw-bold"><i class="pe-3 bi bi-pencil" style=""></i>Create Your Dream</h1>
                </div>
                <div class="row text-light">
                    <div class="col-md-6 ms-5 pe-5">

                        <form action="/order" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="" id="email" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Language</label>
                                <select class="form-select" name="language" id="language">
                                    <option value="1" selected>English</option>
                                    <option value="2">Indonesia</option>
                                    <option value="3">Japan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">What do you need designed?</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Describe Background
                                    Information and its target audience</label>
                                <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
                            </div>

                            <button type="submit" class="btn btn-dark btn-lg mt-4 shadow-custom-lg">Order Now</button>

                        </form>

                    </div>
                    <div class="col mt-4 ms-5">
                        <div class="row">
                            <div class="col">
                                <p class="fw-light">Designer Fee</p>
                            </div>
                            <div class="col me-5 text-end"">
                                            <p class="   fw-light">10 000 $</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="fw-light">Platform & Services Fee</p>
                            </div>
                            <div class="col me-5 text-end"">
                                            <p class="   fw-light">10 000 $</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="fw-light">Platform & Services Fee</p>
                            </div>
                            <div class="col me-5 text-end"">
                                            <p class="   fw-light">10 000 $</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p class="fw-bolder mt-5">Total</p>
                            </div>
                            <div class="col me-5 text-end"">
                                            <p class="   fw-bolder mt-5">20 000 $</p>
                            </div>
                        </div>
                        {{-- <p class="fw-light">Designer Fee</p>
                        <p class="fw-light">Platform & Services Fee</p>
                        <p class="fw-bolder mt-5">Total</p> --}}
                    </div>
                    {{-- <div class="col mt-4 ms-5 me-5 text-end">
                        <div class="row">
                            <p class="fw-light">10 000 $</p>
                        </div>
                        <div class="row">
                            <p class="fw-light">10 000 $</p>
                        </div>
                        <div class="row">
                            <p class="fw-bolder mt-5">20 000 $</p>
                        </div>
                    </div> --}}
                </div>

            </div>
        </div>

        <br><br>
    </div>

    @include('Partials.footer')
@endsection
