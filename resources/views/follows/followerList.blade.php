<x-login-layout>
  {!! Form::open(['url' => '/follower-list']) !!}

  <div class="follow_content">
    <div class="follow_group">
      <p class="follow_text">フォロワーリスト</p>
      <div class="follow_block">
        @foreach($followers as $follower)
          @if(Auth::user()->id !== $follower->id)

            <ul>
              <li class="follow_image">
                <figure><img src="{{asset('storage/images/' . $follower->icon_image)}}"></figure>
              </li>
            </ul>
          @endif
        @endforeach
      </div>
    </div>

    @foreach($followers as $follower)
      @if(Auth::user()->id !== $follower->id)
        @foreach($follower->post as $post)
          <ul>
            <li class="follow_list">
              <img src="{{asset('storage/images/' . $follower->icon_image)}}">

              <div class="post-name">
                {{$follower->username}}
              </div>

              <div class="post-word">
                {{ $post->post }}
              </div>

              <div class="post-time">{{$follower->created_at}}</div>
            </li>
          </ul>
        @endforeach
      @endif
    @endforeach
  </div>
  {!! Form::close() !!}
</x-login-layout>
