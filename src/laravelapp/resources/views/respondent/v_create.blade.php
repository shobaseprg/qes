<form action="/store" method="post">
  @csrf

  @if ($errors->has('name'))
  {{$errors->first('name')}}
  @endif

  nama<br />
  <input type="text" name="name"><br />

  @if ($errors->has('age'))
  {{$errors->first('age')}}
  @endif

  <p>年齢<br />
    <label><input type="radio" name="age" value=1>20歳未満</label><br />
    <label><input type="radio" name="age" value=2>20歳〜39歳</label><br />
    <label><input type="radio" name="age" value=3>40歳〜59歳</label><br />
    <label><input type="radio" name="age" value=4>60歳以上</label><br />
  </p>

  @if ($errors->has('sex'))
  {{$errors->first('sex')}}
  @endif

  <p>性別<br />
    <label><input type="radio" name="sex" value=1>男性</label>
    <label><input type="radio" name="sex" value=2>女性</label>
  </p>

  @if ($errors->has('status'))
  {{$errors->first('status')}}
  @endif

  <p>希望物件<br />
    <label><input type="checkbox" name="status[]" value=1>新築一戸建て</label><br />
    <label><input type="checkbox" name="status[]" value=2>中古一戸建て</label><br />
    <label><input type="checkbox" name="status[]" value=3>マンション</label><br />
    <label><input type="checkbox" name="status[]" value=4>土地</label><br />
  </p>

  @if ($errors->has('other'))
  {{$errors->first('other')}}
  @endif

  <p>その他要望：<br>
    <textarea name="other" cols="40" rows="8"></textarea>
  </p>

  <input type="submit" value="送信する">
</form>
