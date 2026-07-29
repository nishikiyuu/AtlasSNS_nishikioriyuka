<x-logout-layout>
  <!--ログイン画面-->
  <!-- 適切なURLを入力してください -->
  {!! Form::open(['url' => '/login']) !!}

  <div class="login_content">
    <p>AtlasSNSへようこそ</p>

    <div class="login_group">
      {{ Form::label('email', 'メールアドレス') }}
      {{ Form::text('email', null, ['class' => 'input']) }}
      @error('email')
        <div class="register_error" style="color: red;">{{ $message }}</div>
      @enderror

      {{ Form::label('password', 'パスワード') }}
      {{ Form::password('password', ['class' => 'input']) }}
      @error('password')
        <div class="register_error" style="color: red;">{{ $message }}</div>
      @enderror
    </div>
    <div class="login_btn">
      <button class="btn btn-danger">ログイン</button>
    </div>
    <div class="register_return">
      <a href="register">新規ユーザーの方はこちら</a>
    </div>
  </div>
  {!! Form::close() !!}
</x-logout-layout>
