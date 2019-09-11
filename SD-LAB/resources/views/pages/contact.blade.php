@extends('layouts.navbar')

@section('content')
    <h2 class="text-primary">Contact Us</h2>
    <h3>send us email</h3>
    <form class="form-group" action="">
        <label for="name">Your Name?</label>
        <input placeholder="Name" type="text" name="name" class="form-control">
        <label for="email">Your Email?</label>
        <input placeholder="Email" id="email" type="email" name="email" class="form-control">
        <label for="msg">Your Message?</label>
        <textarea class="form-control" name="msg" id="" cols="30" rows="10"></textarea>
        <button class="btn btn-primary btn-block">send</button>
    </form>
@endsection