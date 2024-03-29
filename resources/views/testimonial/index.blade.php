@extends('layouts.app')
@section('content')
    <div class="container">
        @if (Session::has('message'))
            <div class="alert alert-success">{{ Session::get('message') }}</div>
        @endif

        <div class="row">
            <div class="col-md-4">
                @include('admin.left-menu')
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Contenu</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Profession</th>
                                    <th scope="col">Identifiant vidéo</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($testimonials as $testimonial)
                                    <tr>
                                        <td>{{ $testimonial->content }}</td>


                                        <td>{{ $testimonial->name }}</td>


                                        <td>{{ $testimonial->profession }}</td>
                                        <td>{{ $testimonial->video_id }}</td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {{ $testimonials->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
