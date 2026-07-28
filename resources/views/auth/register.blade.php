<x-logout-layout>
  <!--ユーザー登録-->
  <!-- 適切なURLを入力してください -->

  {!! Form::open(['url' => '/register']) !!}
  <div class="register_container">
    <p>新規ユーザー登録</p>
    <div class="register_content">
      {{ Form::label('ユーザー名') }}
      {{ Form::text('username', null, ['class' => 'input']) }}

      {{ Form::label('メールアドレス') }}
      {{ Form::email('email', null, ['class' => 'input']) }}

      {{ Form::label('パスワード') }}
      {{ Form::text('password', null, ['class' => 'input']) }}

      {{ Form::label('パスワード確認') }}
      {{ Form::text('password_confirmation', null, ['class' => 'input']) }}
    </div>
    <div class="register-btn">
      <button class="btn btn-danger">登録</button>
    </div>

    @if($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <div class="login_return">
      <a href="login">ログイン画面へ戻る</a>
    </div>
  </div>
  {!! Form::close() !!}



</x-logout-layout>
