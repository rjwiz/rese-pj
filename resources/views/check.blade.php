<div>
  @if (Auth::check())
  <p>ログイン中ユーザー: {{$user->name . ' メール' . $user->email . ''}}</p>
  @else
  <p>ログインしてください（<a href="/login">ログイン</a>｜
    <a href="/register">登録</a>）
  </p>
  @endif
</div>