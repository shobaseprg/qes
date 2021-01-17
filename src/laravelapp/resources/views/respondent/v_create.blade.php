@extends('layouts.base')

@section('content')

@section('content')
<a class="btn btn-success" href="/" role="button">一覧に戻る</a></br></br>

<form action="/store" method="post">
  @csrf

  <div>
    <p>氏名を教えてください</p>

    <div class="error-msg">
      @if ($errors->has('name'))
      {{$errors->first('name')}}
      @endif
    </div>
    <input type="text" name="name" value="{{ old('name') }}">
  </div></br></br>

  <div>
    <p>年齢を教えてください。</p>

    <div class="error-msg">
      @if ($errors->has('age'))
      {{$errors->first('age')}}
      @endif
    </div>
    <select name="age">
      <option hidden value=>---</option>
      <option value=1 {{ old('age') == 1 ? 'selected' : '' }}>20歳未満</option>
      <option value=2 {{ old('age') == 2 ? 'selected' : '' }}>20歳〜39歳</option>
      <option value=3 {{ old('age') == 3 ? 'selected' : '' }}>40歳〜59歳</option>
      <option value=3 {{ old('age') == 4 ? 'selected' : '' }}>60歳以上</option>
    </select>

  </div></br></br>

  <div>
    <p>性別を教えてください。</p>

    <div class="error-msg">
      @if ($errors->has('sex'))
      {{$errors->first('sex')}}
      @endif
    </div>

    <label><input type="radio" name="sex" value=1 {{ old('sex') == 1 ? 'checked' : '' }}>男性</label>
    <label><input type="radio" name="sex" value=2 {{ old('sex') == 2 ? 'checked' : '' }}>女性</label>
  </div></br></br>

  <div>
    <p>希望物件種別を教えてください。</p>

    <div class="error-msg">
      @if ($errors->has('status'))
      {{$errors->first('status')}}
      @endif
    </div>

    <label><input type="checkbox" name="status[]" value=1 {{ is_array(old("status")) && in_array(1, old('status')) ? 'checked' : '' }}>新築一戸建て</label><br />
    <label><input type="checkbox" name="status[]" value=2 {{ is_array(old("status")) && in_array(2, old('status')) ? 'checked' : '' }}>中古一戸建て</label><br />
    <label><input type="checkbox" name="status[]" value=3 {{ is_array(old("status")) && in_array(3, old('status')) ? 'checked' : '' }}>マンション</label><br />
    <label><input type="checkbox" name="status[]" value=4 {{ is_array(old("status")) && in_array(4, old('status')) ? 'checked' : '' }}>土地</label><br />
  </div></br></br>

  <div>
    <p>その他ご要望をご入力ください。</p>

    <div class="error-msg">
      @if ($errors->has('other'))
      {{$errors->first('other')}}
      @endif
    </div>

    <div>
      <textarea name="other" cols="40" rows="8">{{ old('other') }}</textarea>
    </div>
  </div></br>

  <input type="submit" value="送信">
</form>
@endsection
