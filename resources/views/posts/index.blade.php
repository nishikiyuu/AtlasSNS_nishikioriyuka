<x-login-layout>

{!! Form::open(['url' => '/post/create']) !!}
<div class="post-content">
  <div class="icon-post">
      <img src="{{asset('/images/'.Auth::user()->icon_image)}}">
  </div>
  <div class="text-post">
  {{ Form::textarea('post',null,['class' => 'form-control', 'placeholder' => '投稿内容を入力してください', 'rows' => '5']) }}
  </div>

  <div class="btn-post">
    <input type="image" src="{{asset('/images/post.png')}}">
  </div>
</div>
{!! Form::close() !!}


<!--投稿表示-->
<div>
  @foreach($posts as $post)
  <ul>
    <li class="post-block">
      <div class="post-detail">
        <figure><img src="{{asset('/images/'.$post->user->icon_image)}}"></figure>
        <div class="post-group">
          <div class="post-name">{{$post->user->username}}</div>
          <div>{{$post->post}}</div>
        </div>
        <div class="post-time">{{$post->created_at}}</div>
      </div>

      <div class="btn-detail">
        @if (Auth::id() == $post->user_id)
          <div>
            <a class="js-modal-open" href="" post="{{ $post->post }}" post_id="{{ $post->id }}"><img src="./images/edit.png" alt="編集"></a>
          </div>
          <div>
            <a class="btn-delete" href="/post/{{$post->id}}/delete" onclick="return confirm('この投稿を削除しますか？')">
            <input type="image" src="{{asset('/images/trash-h.png')}}">
            </a>
          </div>
        @endif
      </div>
    </li>
  </ul>
  @endforeach
</div>

<!--  <table>
    <tbody>
      @foreach($posts as $post)
          <tr>
            <td>{{$post->user_id}}</td>
            <td><img src="{{asset('/images/'.$post->user->icon_image)}}"></td>
            <td>{{$post->user->username}}</td>
            <td>{{$post->post}}</td>
            <td>{{$post->created_at}}</td>
          </tr>-->
      <!--    <tr>
            @if (Auth::id() == $post->user_id)-->
              <!--if文、==で比較する-->
      <!--        <td> -->
                <!-- 投稿の編集ボタン -->
      <!--          <a class="js-modal-open" href="" post="{{ $post->post }}" post_id="{{ $post->id }}"><img src="./images/edit.png" alt="編集"></a>
              </td> -->
              <!--削除機能-->
        <!--      <td>
                <a class="btn-delete" href="/post/{{$post->id}}/delete" onclick="return confirm('この投稿を削除しますか？')">
                  <input type="image" src="{{asset('/images/trash-h.png')}}">
                </a>
              </td>
            @endif
          </tr>
      @endforeach
    </tbody>
  </table>-->


<!-- モーダルの中身 -->
    <div class="modal js-modal">
        <div class="modal__bg js-modal-close"></div>
        <div class="modal__content">
           <form action="/update" method="post">
                <textarea name="up_post" class="modal_post"></textarea>
                <input type="hidden" name="id" class="modal_id" value="">
                <input type="submit" value="更新">
                {{ csrf_field() }}
           </form>
           <a class="js-modal-close" href="">閉じる</a>
        </div>
    </div>
</x-login-layout>


<!--
<div>
  @foreach($posts as $post)
  <ul>
    <li class="post-block">
      <figure><img src="{{asset('/images/'.$post->user->icon_image)}}"></figure>
      <div class="post-content">
        <div>
          <div class="post-name">{{$post->user->username}}</div>
          <div>{{$post->created_at}}</div>
        </div>
        <div>{{$post->post}}</div>
      </div>
    </li>

    <li>
      @if (Auth::id() == $post->user_id)
        <div>
          <a class="js-modal-open" href="" post="{{ $post->post }}" post_id="{{ $post->id }}"><img src="./images/edit.png" alt="編集"></a>
        </div>
        <div>
          <a class="btn-delete" href="/post/{{$post->id}}/delete" onclick="return confirm('この投稿を削除しますか？')">
          <input type="image" src="{{asset('/images/trash-h.png')}}">
          </a>
        </div>
      @endif
    </li>
  </ul>
  @endforeach
</div>
-->
