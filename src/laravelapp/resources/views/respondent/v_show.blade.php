@extends('layouts.base')

@section('content')

<div>氏名を教えてください。</div>
<p>→{{$targetRespondent->name}}</p>

<div>年齢を教えてください。</div>
<p>→{{$ageClass}}</p>

<div>性別を教えてください。</div>
<p>→{{$sexClass}}</p>

<div>希望物件種別を教えてください。</div>
<?php $i = 1 ?>
<p>→
  @foreach($wishClassArray as $wish)
  @if($i !== 1)
  <span>、</span>
  @endif
  {{$wish}}
  <?php $i++ ?>
  @endforeach
</p>

<div>その他ご要望をご入力ください。</div>
<p>{{$targetRespondent->other}}</p>

<a class="btn btn-success" href="/" role="button">一覧に戻る</a>
@endsection
