<x-login-layout>
  {!! Form::open(['url' => '/follower-list']) !!}

  <div class="follow_container">
    <div class="follow_content">
      <p class="follow_text">フォロワーリスト</p>
      <div class="follow_block">
        @foreach($followers as $follower)
          @if(Auth::user()->id !== $follower->id)
            <ul>
              <li class="follow_image">
                <a href="{{ route('followingProfile', $follower->id) }}"><img src="{{asset('storage/images/' . $follower->icon_image)}}"></a>
              </li>
            </ul>
          @endif
        @endforeach
      </div>
    </div>

    @if(Auth::user()->id !== $follower->id)
      @foreach($follower->post as $post)
        <ul>
          <li class="follow_list">
            <img src="{{asset('storage/images/' . $follower->icon_image)}}">
            <div class="follow_group">
              <div class="post_name">
                {{$follower->username}}
              </div>
              <div class="post_word">
                {{ $post->post }}
              </div>
            </div>
            <div class="post_time">{{$follower->created_at}}
            </div>
          </li>
        </ul>
      @endforeach
    @endif
  </div>
  {!! Form::close() !!}
</x-login-layout>
