<x-login-layout>

  {!! Form::open(['url' => '/post/create']) !!}
  <div class="post_content">
    <div class="icon_post">
      <img src="{{asset('storage/images/' . Auth::user()->icon_image)}}">
    </div>
    <div class="text_post">
      {{ Form::textarea('post', null, ['class' => 'form_control', 'placeholder' => '投稿内容を入力してください', 'rows' => '5']) }}
    </div>

    <div class="btn_post">
      <input type="image" src="{{asset('/images/post.png')}}">
    </div>
  </div>
  {!! Form::close() !!}


  <!--投稿表示-->
  <div>
    @foreach($posts as $post)
      <ul>
        <li class="post_block">
          <div class="post_detail">
            <div class="post_image">
              <img src="{{asset('storage/images/' . $post->user->icon_image)}}">
            </div>
            <div class="post_group">
              <div class="post_name">{{$post->user->username}}</div>
              <div class="post_word">{{$post->post}}</div>
            </div>
            <div class="post_time">{{$post->created_at}}</div>
          </div>

          <div class="btn_detail">
            @if (Auth::id() == $post->user_id)
              <div class="js-modal-open" href="" post="{{ $post->post }}" post_id="{{ $post->id }}">
                <img src="./images/edit.png" alt="編集">
              </div>
              <div class="btn_delete">
                <a href="/post/{{$post->id}}/delete" onclick="return confirm('この投稿を削除しますか？')">
                  <img src="{{asset('/images/trash.png')}}" onmouseover="this.src='/images/trash-h.png'" onmouseout="this.src='/images/trash.png'">
                </a>
              </div>
            @endif
          </div>
        </li>
      </ul>
    @endforeach
  </div>

  <!-- モーダルの中身 -->
  <div class="modal js-modal">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
      <form action="/update" method="post">
        <div class="text_modal">
          <textarea name="up_post" class="modal_post"></textarea>
        </div>
        <input type="hidden" name="id" class="modal_id" value="">
        <div class="btn_modal">
          <input type="image" src="{{asset('./images/edit.png')}}">
        </div>
        {{ csrf_field() }}
      </form>
      <a class="js-modal-close" href=""></a>
    </div>
  </div>
</x-login-layout>
