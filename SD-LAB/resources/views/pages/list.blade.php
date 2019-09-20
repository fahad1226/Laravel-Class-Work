@extends('layouts.navbar')

@section('content')

    @if (session()->has('message'))
      <div class="alert alert-success">
          <strong>Success</strong> {{ session()->get('message') }}
      </div>
    @endif

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Country</th>
      <th scope="col">University</th>
      <th scope="col">City</th>
      <th scope="col">Action</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach($customers as $customer)
    <tr>
      <th scope="row">{{ $customer->uni_id }}</th>
      <td> {{ $customer->name }} </td>
      <td> {{$customer->email}} </td>
      <td>{{$customer->country}}</td>
      <td>{{$customer->university}}</td>
      <td>{{$customer->city}}</td>
      <td> <a class="btn btn-secondary" href=" {{ url('edit/'.$customer->id) }} ">Edit</a> </td>
      <td>
        <button class="btn btn-danger" id="btn" 
        data-toggle="modal" data-target="#delete">Delete</button>
      </td>


{{-- onclick=" return confirm('Are You Sure?') " --}}

<!-- Modal -->
<div class="modal fade" id="delete" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="delete">Are You Sure? {{ $customer->name }} </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span >&times;</span>
        </button>
      </div>
      <div class="modal-body">
       this will deleted <strong> {{ $customer->name }} </strong> from the list.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger" >
          <a class="text-white" href=" {{ url('delete/'.$customer->id) }}">Delete</a>
        </button>
      </div>
    </div>
  </div>
</div>


    </tr>
    @endforeach
  </tbody>
</table>


@endsection

