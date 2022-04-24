@extends('layouts\main')

@section('content')


    @include('Partials.navbar')

    <div class="container-fluid bg-light pt-5 pb-5">
        <div class="container" style="">
            <div class="row justify-content-center pt-5 pb-5">
                <div class=" col-md-4 pt-5 pb-5 px-5 shadow-custom-lg rounded align-self-center text-center text-light"
                    style="background-color: #54429a">
                    <div class="text-light">
                        <h1 class="ms-5 mb-5 pe-5 fw-bold">Log In</h1>
                    </div>

                    <form action="/login" method="post">
                        @csrf
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" id="username" class="form-control" autofocus required>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control" required>

                        </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-dark btn-lg mt-4 shadow-custom-lg mb-4">Log In</button>

                            <!-- Register buttons -->
                            <div class="text-center">
                                <p>Not a member? <a href="/register" class=" fw-bold" style="color: white">Register</a></p>
                            </div>
                    </form>
                </div>
            </div>
        </div>



        <br><br>
    </div>

    <div class="container-fluid">
        <div class="container-fluid bg-dark pb-2 ">
            <div class="container text-light">
                <div class="row text-light mt-5 text-center">
                    <div class="col-md-12 mt-4">
                        <p class="text-muted">© 2022 AIPROJECT / alif r. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- @include('Partials.footer') --}}
@endsection
