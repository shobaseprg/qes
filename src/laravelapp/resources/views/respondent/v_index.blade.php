@extends('layouts.base')

@section('content')
<a class="btn btn-success" href="/create" role="button">回答する</a></br>

@foreach($respondents as $respondent)
<a href="/show/{{$respondent->id}}">{{$respondent->name}}( {{$respondent->created_at->format('Y年n月j日')}})</a></br>
@endforeach


@endsection
