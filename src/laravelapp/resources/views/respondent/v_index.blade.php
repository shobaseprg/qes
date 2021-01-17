@extends('layouts.base')

@section('content')
<ul class="nav">
    <li class="nav-item">
        <a class="nav-link active" href="/create">回答する</a>
    </li>
</ul>

@foreach($respondents as $respondent)
<a href="/show/{{$respondent->id}}">{{$respondent->name}}( {{$respondent->created_at->format('Y年n月j日')}})</a></br>
@endforeach


@endsection
