@extends('layouts.navbar')


@section('content')
    <p>Name is  <strong> {{ $fname }} </strong> </p> 
    <p>Email is  <strong> {{ $femail }} </strong> </p> 
    <p>Message is  <strong> {{ $fmsg }} </strong> </p>    
@endsection