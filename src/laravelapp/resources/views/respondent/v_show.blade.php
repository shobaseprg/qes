<p>名前 : {{$targetRespondent->name}}</p>
<p>年齢 : {{$ageClass}}</p>
<p>性別 : {{$sexClass}}</p>

<p>要望 : </p>
@foreach($wishClassArray as $wish)
<p>
  {{$wish}}
<p>
  @endforeach
<p>その他要望 : {{$targetRespondent->other}}</p>

<a href="/">一覧に戻る</a>
