<x-login-layout>
  {!! Form::open(['url' => '/follow-list']) !!}
  <div class="follow_container">
    <div class="follow_content">
      <p class="follow_text">フォローリスト</p>
      <div class="follow_block">
        @foreach($followings as $following)
          @if(Auth::user()->id !== $following->id)

            <ul>
              <li class="follow_image">
                <a href="{{ route('followingProfile', $following->id) }}"><img src="{{asset('storage/images/' . $following->icon_image)}}"></a>
              </li>
            </ul>
          @endif
        @endforeach
      </div>
    </div>

    @if(Auth::user()->id !== $following->id)
      @foreach($following->post as $post)
        <ul>
          <li class="follow_list">
            <img src="{{asset('storage/images/' . $following->icon_image)}}">
            <div class="follow_group">
              <div class="post-name">
                {{$following->username}}
              </div>

              <div class="post-word">
                {{ $post->post }}
              </div>
            </div>
            <div class="post-time">{{$following->created_at}}</div>
          </li>
        </ul>
      @endforeach
    @endif
  </div>


  {!! Form::close() !!}
</x-login-layout>
