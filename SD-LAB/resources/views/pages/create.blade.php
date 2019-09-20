@extends('layouts.navbar')


@section('content')
    <h1 class="text-primary">Add New Customer</h1>
    <form class="form-group" action=" {{    URL::to('store') }} " method="post">
        <label class="text-muted" for="name"> <strong>What's Your Name?</strong> </label>
        <input class="form-control" type="text" name="name" id="name" placeholder="Name">
        <label class="text-muted" for="email"> <strong>What's Your Email?</strong> </label>
        <input class="form-control" type="email" name="email" id="email" placeholder="Email">
        <label class="text-muted" for="uni_id"> <strong>What's Your ID?</strong> </label>
        <input class="form-control" type="text" name="uni_id" id="uni_id" placeholder="ID">
        <label class="text-muted" for="country"> <strong>You're From?</strong> </label>
        <input class="form-control" type="text" name="country" id="country" placeholder="Your'e Country?">
        <label class="text-muted" for="university"> <strong>You're University?</strong> </label>
        <input class="form-control" type="text" name="university" id="university" placeholder="University">
        <label class="text-muted" for="city"> <strong>You're City?</strong> </label>
        <input class="form-control" type="text" name="city" id="city" placeholder="Your'e City?">
        <button class="btn btn-primary btn-block" >Submit</button>
        @csrf
    </form>
@endsection