@extends('layouts.base')

@section('content')

<div>
  <a href="/index">一覧に戻る<a>
</div>

<form action="/store" method="post">
  @csrf

  @if ($errors->has('name'))
  {{$errors->first('name')}}
  @endif

  nama<br />
  <input type="text" name="name" value="{{ old('name') }}"><br />

  @if ($errors->has('age'))
  {{$errors->first('age')}}
  @endif

  <p>年齢<br />
    <label><input type="radio" name="age" value=1 {{ old('age') == 1 ? 'checked' : '' }}>20歳未満</label><br />
    <label><input type="radio" name="age" value=2 {{ old('age') == 2 ? 'checked' : '' }}>20歳〜39歳</label><br />
    <label><input type="radio" name="age" value=3 {{ old('age') == 3 ? 'checked' : '' }}>40歳〜59歳</label><br />
    <label><input type="radio" name="age" value=4 {{ old('age') == 4 ? 'checked' : '' }}>60歳以上</label><br />
  </p>

  @if ($errors->has('sex'))
  {{$errors->first('sex')}}
  @endif

  <p>性別<br />
    <label><input type="radio" name="sex" value=1 {{ old('sex') == 1 ? 'checked' : '' }}>男性</label>
    <label><input type="radio" name="sex" value=2 {{ old('sex') == 2 ? 'checked' : '' }}>女性</label>
  </p>

  @if ($errors->has('status'))
  {{$errors->first('status')}}
  @endif

  <p>希望物件<br />
    <label><input type="checkbox" name="status[]" value=1 {{ is_array(old("status")) && in_array(1, old('status')) ? 'checked' : '' }}>新築一戸建て</label><br />
    <label><input type="checkbox" name="status[]" value=2 {{ is_array(old("status")) && in_array(2, old('status')) ? 'checked' : '' }}>中古一戸建て</label><br />
    <label><input type="checkbox" name="status[]" value=3 {{ is_array(old("status")) && in_array(3, old('status')) ? 'checked' : '' }}>マンション</label><br />
    <label><input type="checkbox" name="status[]" value=4 {{ is_array(old("status")) && in_array(4, old('status')) ? 'checked' : '' }}>土地</label><br />
  </p>

  @if ($errors->has('other'))
  {{$errors->first('other')}}
  @endif

  <p>その他要望：<br>
    <textarea name="other" cols="40" rows="8">{{ old('other') }}</textarea>
  </p>

  <input type="submit" value="送信する">
</form>
@endsection
