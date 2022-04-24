@extends('layouts\main2')

@section('content')
    @include('Partials.navbar2')


    <!--Main layout-->
    <main class="bg-light" style="margin-top: 58px; margin-left:260px; margin-right: 60px">

        <div class="container pt-4">

            <div class="row">
                <div class="col">
                    <h5 class="" style="font-weight: 400">Edit Home Page</h5>
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
                                        <th scope="col">Content</th>
                                        <th scope="col">Content Title</th>
                                        <th scope="col">Desc</th>
                                        <th scope="col">Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dataHome as $data)
                                        <tr>
                                            <td>{{ $data['content'] }}</td>
                                            <td>{{ $data['contentTitle'] }}</td>
                                            <td>{{ $data['desc'] }}</td>
                                            <td><a href={{ "editHome/".$data['id'] }}>Edit</a></td>
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
