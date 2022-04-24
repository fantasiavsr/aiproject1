@extends('layouts\main2')

@section('content')
    @include('Partials.navbar2')


    <!--Main layout-->
    <main class="bg-light" style="margin-top: 58px; margin-left:260px; margin-right: 60px">

        <div class="container pt-4">

            <div class="row">
                <div class="col">
                    <h5 class="" style="font-weight: 400">Edit Contact Us Page</h5>
                </div>
            </div>

            <br>


            <div class="row mt-4">

                <div class="col">
                    <div class="card shadow-sm bg-white rounded-3">
                        <div class="card-body">
                            <table class="table table-hover table-borderless table-responsive">
                                <thead>
                                    <tr>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Adress</th>
                                        <th scope="col">Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $data)
                                        <tr>
                                            <td>{{ $data['email'] }}</td>
                                            <td>{{ $data['notelp'] }}</td>
                                            <td>{{ $data['alamat'] }}</td>
                                            <td><a href={{ "editContactUs/".$data['id'] }}>Edit</a></td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </main>


    {{-- @include('Partials.footer') --}}
@endsection
