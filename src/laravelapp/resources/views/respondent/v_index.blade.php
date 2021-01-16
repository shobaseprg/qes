@extends('layouts.base')

@section('content')

<div>
    <a href="/create">回答する<a>
</div>

@foreach($respondents as $respondent)
<a href="/show/{{$respondent->id}}">名前: {{$respondent->name}}</a>
<p>作成日: {{$respondent->created_at}}</p>
@endforeach


@endsection
