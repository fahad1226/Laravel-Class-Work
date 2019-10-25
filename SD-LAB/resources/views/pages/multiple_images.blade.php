@extends('layouts.navbar')



@section('content')

    @if(session('success'))
        <div class="alert alert-success">
        {{ session('success') }}
        </div> 
    @endif



    @foreach($images as $image)
    <div class="d-inline py-2">
        <img src="{{ asset('images/'.$image->multiple_images) }} " height="250" width="400" > 
    </div>

    @endforeach

@endsection