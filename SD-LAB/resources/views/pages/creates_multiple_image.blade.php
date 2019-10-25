@extends('layouts.navbar')


@section('content')
	
    <form action="{{ url('store_images') }}" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" name="images[]"  multiple />
        </div>
       @csrf
    <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection