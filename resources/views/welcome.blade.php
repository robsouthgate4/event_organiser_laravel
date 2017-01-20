@extends('layout');


@section('content')

    <div class="flex-center">
        <h1 class="title">Welcome</h1>
    </div>

    @foreach($people as $person)

        <li>{{$person}}</li>

    @endforeach
    
@stop