<div>
{!! Form::open(['url' => '/post/create']) !!}
{{ Form::text('post',null,['class' => 'input']) }}
{{ Form::submit('登録') }}
{!! Form::close() !!}


<!--投稿表示-->
<div>
  <ul>
    <li class="post-block">
      <figure><img src="/images/icon1.png" alt="さとみ"></figure>
      <div class="post-content">
        <div>
          <div class="post-name">さとみ</div>
          <div>2022-12-22</div>
        </div>
        <div>投稿内容<br>投稿内容</div>
      </div>
    </li>

    <li class="post-block">
      <figure><img src="/images/icon2.png" alt="ころん"></figure>
      <div class="post-content">
        <div>
          <div class="post-name">ころん</div>
          <div>2022-12-22</div>
        </div>
        <div>投稿内容<br>投稿内容</div>
      </div>
    </li>

    <li class="post-block">
      <figure><img src="/images/icon3.png" alt="莉犬"></figure>
      <div class="post-content">
        <div>
          <div class="post-name">莉犬</div>
          <div>2022-12-22</div>
        </div>
        <div>投稿内容<br>投稿内容</div>
      </div>
    </li>
  </ul>
</div>

</x-login-layout>
