@extends('layouts.navbar')

@section('content')
    <form action=" {{ url('store_image') }} " method="post" enctype="multipart/form-data" class="col-md-7 offset-2">
        @csrf
        <h2 class="display-5 text-center">Single Image Uploading</h2>

        <div class="form-group">
            <label for="name">Your Name</label>
            <input type="text" name="name" class="form-control"  placeholder="Name">
        </div>
        <div class="form-group">
            <label for="name">Your University</label>
            <input type="text" name="university" class="form-control" placeholder="University">
        </div>
        <div class="form-group">
            <label for="name">Your Profile Image</label>
            <input type="file" name="filename" class="form-control">
        </div>

        <div class="form-group">
            <input type="submit" value="Submit" class="btn btn-primary">
        </div>

    </form>
@endsection