
@extends('layouts.navbar')

@section('content')
    
    <h3 class="text-muted ">Profile Page</h3>
    <ul class="list-group">
        @foreach ($information as $key => $value)
            <li class="list-group-item"> <strong>{{ $key }}:</strong>  {{ $value }}  </li>
        @endforeach
    </ul>
@endsection

