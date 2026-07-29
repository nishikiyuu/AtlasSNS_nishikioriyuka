<x-logout-layout>
  <!--ユーザー登録-->
  <!-- 適切なURLを入力してください -->

  {!! Form::open(['url' => '/register']) !!}
  <div class="register_container">
    <p>新規ユーザー登録</p>
    <div class="register_content">
      {{ Form::label('ユーザー名') }}
      {{ Form::text('username', null, ['class' => 'input']) }}
      @error('username')
        <div class="register_error" style="color: red;">{{ $message }}</div>
      @enderror

      {{ Form::label('メールアドレス') }}
      {{ Form::email('email', null, ['class' => 'input']) }}
      @error('email')
        <div class="register_error" style="color: red;">{{ $message }}</div>
      @enderror

      {{ Form::label('パスワード') }}
      {{ Form::text('password', null, ['class' => 'input']) }}
      @error('password')
        <div class="register_error" style="color: red;">{{ $message }}</div>
      @enderror

      {{ Form::label('パスワード確認') }}
      {{ Form::text('password_confirmation', null, ['class' => 'input']) }}
      @error('password_confirmation')
        <div class="register-error" style="color: red;">{{ $message }}</div>
      @enderror
    </div>
    <div class="register_btn">
      <button class="btn btn-danger">登録</button>
    </div>

    <div class="login_return">
      <a href="login">ログイン画面へ戻る</a>
    </div>
  </div>
  {!! Form::close() !!}



</x-logout-layout>
