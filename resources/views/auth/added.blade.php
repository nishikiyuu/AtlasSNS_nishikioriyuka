<x-logout-layout>
<!--登録完了画面-->
  <div id="clear">
    {!! Form::open(['url' => 'added']) !!}
    <p>{{$store}}さん</p>

    <p>ようこそ！AtlasSNSへ！</p>
    <p>ユーザー登録が完了しました。</p>
    <p>早速ログインをしてみましょう。</p>

    <p class="btn"><a href="login">ログイン画面へ</a></p>
    {!! Form::close() !!}
  </div>
</x-logout-layout>
