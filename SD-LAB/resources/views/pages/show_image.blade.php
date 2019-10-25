@extends('layouts.navbar')



@section('content')

    @if (session()->has('msg'))
        <div class="alert alert-success">
            <p> {{ session()->get('msg') }} </p>
        </div>
    @else
        
    @endif
    @foreach ($images as $image)
        <img src="{{ url('uploads/thumbnail/'.$image->image) }} " alt=" {{ $image->name }} ">
        <p>Name: <strong> {{ $image->name }} </strong> </p>
        <p>Uiversity: <strong> {{ $image->university }} </strong> </p>       
    @endforeach


    
@endsection

{{-- 
    <img src="uploads/images/{{$image->image}}" /> -->>  original image
<img src=" {{ url('uploads/thumbnail/'.$imagee->image) }}" height="200" width="200"> --}}