<x-logout-layout>
<!--ログイン画面-->
  <!-- 適切なURLを入力してください -->
  {!! Form::open(['url' => '/login']) !!}

<div class="login-content">
  <p>AtlasSNSへようこそ</p>

    <div class="login-group">
      {{ Form::label('email','メールアドレス') }}
      {{ Form::text('email',null,['class' => 'input']) }}

      {{ Form::label('password','パスワード') }}
      {{ Form::password('password',['class' => 'input']) }}
    </div>
  <div class="login-btn">
    <button class="btn btn-danger">ログイン</button>
  </div>
  <div class="register-content">
    <a href="register">新規ユーザーの方はこちら</a>
  </div>
</div>
  {!! Form::close() !!}
</x-logout-layout>
