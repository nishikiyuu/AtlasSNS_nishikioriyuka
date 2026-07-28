<x-logout-layout>
  <!--登録完了画面-->
  <div id="clear">
    {!! Form::open(['url' => 'added']) !!}
    <div class="added_content">
      <div class="added_group">
        <p>{{$store}}さん</p>
        <p>ようこそ！AtlasSNSへ</p>
      </div>
      <div class="added_comment">
        <p>ユーザー登録が完了しました。</p>
        <p>早速ログインをしてみましょう!</p>
      </div>

      <div class="added_btn">
        <a href="login" class="btn btn-danger" role="button">ログイン画面へ</a>
      </div>
    </div>
    {!! Form::close() !!}
  </div>
</x-logout-layout>
