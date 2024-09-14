<x-logout-layout>
<!--ユーザー登録-->
<!-- 適切なURLを入力してください -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    </head>
    <body>
        {!! Form::open(['url' => '/seeders/users']) !!}

        <h2>新規ユーザー登録</h2>

        {{ Form::label('ユーザー名') }}
        {{ Form::text('username',null,['class' => 'input']) }}

        {{ Form::label('メールアドレス') }}
        {{ Form::email('email',null,['class' => 'input']) }}

        {{ Form::label('パスワード') }}
        {{ Form::text('password',null,['class' => 'input']) }}

        {{ Form::label('パスワード確認') }}
        {{ Form::text('password_confirmation',null,['class' => 'input']) }}

        {{ Form::submit('登録') }}

        <p><a href="login">ログイン画面へ戻る</a></p>

        {!! Form::close() !!}

    </body>
</html>

</x-logout-layout>
