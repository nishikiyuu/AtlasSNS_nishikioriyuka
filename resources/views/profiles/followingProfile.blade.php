<x-login-layout>
  <div class="following_container">
    <div class="following_content">
      <div class="following_image">
        <img src="{{asset('storage/images/' . $users->icon_image)}}">
      </div>
      <div class="following_group">
        <div class="following_name">
          <p>ユーザー名</p>
          <div>{{$users->username}}</div>
        </div>
        <div class="following_bio">
          <p>自己紹介</p>
          <div>{{ $users->bio }}</div>
        </div>
      </div>

      <div class="btn_following">
        @if(!$users->isFollow())
          <form action="{{ route('follow', ['id' => $users->id]) }}" method="post">
            @csrf
            <button type="submit" class="btn btn-info">フォローする</button>
          </form>
        @else
          <form action="{{ route('unfollow', ['id' => $users->id]) }}" method="post">
            @csrf
            <button type="submit" class="btn btn-danger">フォロー解除</button>
          </form>
        @endif
      </div>
    </div>

    @foreach($users->post as $post)
      <ul>
        <li class="follow_list">
          <img src="{{asset('storage/images/' . $users->icon_image)}}">
          <div class="follow_group">
            <div class="post-name">
              {{$users->username}}
            </div>
            <div class="post-word">
              {{ $post->post }}
            </div>
          </div>
          <div class="post-time">{{$users->created_at}}</div>
        </li>
      </ul>
    @endforeach
  </div>
</x-login-layout>
