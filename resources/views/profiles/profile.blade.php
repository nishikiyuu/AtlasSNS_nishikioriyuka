<x-login-layout>
{!! Form::open(['url' => '/profiles']) !!}

{{ Form::label('ユーザー名' ) }}
{{ Form::text('username',$user->username,null,['class' => 'input']) }}

{{ Form::label('メールアドレス') }}
{{ Form::email('email',$user->email,null,['class' => 'input'])}}

{{ Form::label('パスワード') }}
{{ Form::password('password',['class' => 'input']) }}

{{ Form::label('パスワード確認') }}
{{ Form::password('password-confirmation',['class' => 'input']) }}

{{ Form::label('自己紹介') }}
{{ Form::text('bio',$user->bio,null,['class' => 'input']) }}

{{ Form::label('アイコン画像') }}
{{ Form::file('image',null,['class' => 'input']) }}

{{ Form::submit('更新') }}
{!! Form::close() !!}

</x-login-layout>
