@extends('layouts.navbar')

@section('content')
    <h2>our team members are</h2>
    <ul class="list-group">
        @foreach ($team_members as $member)
            <li class="list-group-item"> {{ $member }} </li>
        @endforeach
    </ul>
@endsection