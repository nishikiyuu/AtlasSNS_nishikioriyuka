<x-login-layout>
  {!! Form::open(['url' => '/updateProfile', 'files' => true]) !!}
  <div class="profile_container">
    <div class="icon_profile">
      <img src="{{asset('storage/images/' . Auth::user()->icon_image)}}">
    </div>
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach

    <div class="profile_content">
      <div>
        {{ Form::label('ユーザー名') }}
        {{ Form::text('username', $user->username, ['class' => 'input']) }}
      </div>
      <div>
        {{ Form::label('メールアドレス') }}
        {{ Form::email('email', $user->email, ['class' => 'input'])}}
      </div>
      <div>
        {{ Form::label('パスワード') }}
        {{ Form::password('password', ['class' => 'input']) }}
      </div>
      <div>
        {{ Form::label('パスワード確認') }}
        {{ Form::password('password_confirmation', ['class' => 'input']) }}
      </div>
      <div>
        {{ Form::label('自己紹介') }}
        {{ Form::text('bio', $user->bio, ['class' => 'input']) }}
      </div>

      <div class="profile_file">
        {{ Form::label('アイコン画像') }}
        <label class="icon_label">
          <p class="icon_file">ファイルを選択</p>
          {{ Form::file('icon-image', ['class' => 'js-profile-file']) }}
          {{ csrf_field() }}
        </label>
      </div>
      <div class="btn_update">
        <button class="btn btn-danger">更新</button>
      </div>
    </div>
  </div>
  {!! Form::close() !!}
</x-login-layout>
