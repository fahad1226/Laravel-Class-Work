@extends('layouts.navbar')

@section('content')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

@if (session()->has('message'))
    <div class="alert alert-success">
        <strong>Success</strong> {{ session()->get('message') }}
    </div>
@endif

   <div class="container">
    <form method="post" enctype="multipart/form-data" action="{{ url('import') }}">
       
        @csrf

        <div class="form-group">
            <label>Select file for upload</label>
            <br>
            <input type="file" name="select_file">
            <input class="btn btn-secondary" type="submit" value="upload">

        </div>
       

   </form>
   </div>

<table id="myTable" class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Country</th>
            <th scope="col">University</th>
            <th scope="col">Action</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach($customers as $customer)
        <tr> 
            <td> {{ $customer->name }} </td>
            <td> {{$customer->email}} </td>
            <td>{{$customer->country}}</td>
            <td>{{$customer->university}}</td>
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

    <tfoot>
        <th>Name</th>
        <th>Email</th>
        <th>Country</th>
        <th>University</th>
        <th>Action</th>
        <th>Action</th> 
    </tfoot>

</table>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script>

$(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#myTable tfoot th').each( function () {
        var title = $(this).text();
        console.log(title);
        if(title != 'Action')
        {
            $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
        }
        
    } );
 
    // DataTable
    var table = $('#myTable').DataTable();
 
    // Apply the search
    table.columns().every( function () {
        var that = this;
       
 
        $( 'input', this.footer() ).on( 'keyup change clear', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
} );


</script>

@endsection

