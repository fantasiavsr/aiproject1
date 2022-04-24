@extends('layouts\main')

@section('content')
    @include('Partials.navbar')

    <div class="container-fluid bg-light pt-5 pb-5">

        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-md-5 mb-5 pe-4">
                    <div class="row">
                        <h1 class="display-5 fw-bold">Contact Us!</h1>
                        <p class="mt-2">AiPROJECT is the go-to graphic a design service. We make it easy to work
                            with designer, creative experts from around the world and build your brand through custom,
                            memorable design.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <br><br><br>
                        </div>
                    </div>
                    <div class="mt-5">
                        <div>
                            <i class="bi bi-chat-square-dots-fill"><span
                                    class="fs-5 ms-3">fantasiavsr@gmail.com</span></i>
                        </div>
                        <div>
                            <i class="bi bi-person-badge-fill"><span class="fs-5 ms-3">+ 000 000-00-00</span></i>
                        </div>
                        <div>
                            <i class="bi bi-geo-alt-fill"><span class="fs-5 ms-3">Malang</span></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-auto">
                    <div class="">

                    </div>
                </div>
                <div class="col">
                    <div class="float-end">
                        <div class="container pt-5 pb-5 shadow-custom-lg rounded text-light"
                            style="background-color: #54429a">
                            <div class="container pt-5 pb-5">

                                <form>
                                    <div class="row">
                                        <div class="col">
                                            <label for="inputEmail4" class="form-label">First Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col">
                                            <label for="inputPassword4" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" id="inputPassword4">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                            <label for="inputEmail4" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="inputEmail4">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                            <label class="form-label">Message</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-dark btn-lg mt-4 shadow-custom-lg">Send A
                                        Message</button>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br><br>
    </div>

    @include('Partials.footer')
@endsection
