@extends('layouts.navbar')

@section('content')
<h1>Edit Customer's Information</h1>
<form class="form-group" action=" {{ URL::to('update',$customers->id) }} " method="POST">
    @method('PATCH')
    <label class="text-muted" for="name"> <strong>Update Your Name?</strong> </label>
    <input class="form-control" type="text" name="name" id="name" placeholder="Name"
        value=" {{  old('name') ?? $customers->name }} ">
    <label class="text-muted" for="email"> <strong>Update Your Email?</strong> </label>
    <input class="form-control" type="email" name="email" id="email" placeholder="Email"
        value=" {{ $customers->email }} ">
    <label class="text-muted" for="uni_id"> <strong> Your ID?</strong> </label>
    <input class="form-control" type="text" name="uni_id" placeholder="ID"
        value=" {{ old('uni_id') ?? $customers->uni_id }} ">
    <label class="text-muted" for="country"> <strong>You're From?</strong> </label>
    <input class="form-control" type="text" name="country" id="country" placeholder="Your'e Country?"
        value=" {{ $customers->country }} ">
    <label class="text-muted" for="university"> <strong>You're University?</strong> </label>
    <input class="form-control" type="text" name="university" id="university" placeholder="University"
        value=" {{ $customers->university }}">
    <label class="text-muted" for="city"> <strong>You're City?</strong> </label>
    <input class="form-control" type="text" name="city" id="city" placeholder="Your'e City?"
        value=" {{ $customers->city }}">
    <button class="btn btn-primary btn-block">Update</button>
    @csrf
</form>
@endsection
