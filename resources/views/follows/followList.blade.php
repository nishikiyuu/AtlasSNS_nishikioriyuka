<x-login-layout>
  {!! Form::open(['url' => '/follow-list']) !!}
  <div class="follow_content">
    <div class="follow_group">
      <p class="follow_text">フォローリスト</p>
      <div class="follow_block">
        @foreach($followings as $following)
          @if(Auth::user()->id !== $following->id)

            <ul>
              <li class="follow_image">
                <figure><img src="{{asset('storage/images/' . $following->icon_image)}}"></figure>
              </li>
            </ul>
          @endif
        @endforeach
      </div>
    </div>

    @foreach($followings as $following)
      @if(Auth::user()->id !== $following->id)
        @foreach($following->post as $post)
          <ul>
            <li class="follow_list">
              <img src="{{asset('storage/images/' . $following->icon_image)}}">

              <div class="post-name">
                {{$following->username}}
              </div>

              <div class="post-word">
                {{ $post->post }}
              </div>

              <div class="post-time">{{$following->created_at}}</div>
            </li>
          </ul>
        @endforeach
      @endif
    @endforeach
  </div>


  {!! Form::close() !!}
</x-login-layout>
