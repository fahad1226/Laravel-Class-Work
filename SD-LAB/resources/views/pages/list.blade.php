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

            <td data-toggle="modal" data-target="# {{ $customer->id }} ">
                <button type="button" class="btn btn-danger">
                    Delete
                </button>
                <!-- Modal -->
                <div class="modal fade" id=" {{ $customer->id }} " role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Are You Sure?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                This Will Delete <strong> {{ $customer->name }} </strong> From The List!
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <a class="btn btn-primary" href="delete/{{ $customer->id }}">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection

