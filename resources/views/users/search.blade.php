<x-login-layout>
  <div class="search_container">
    <div class="search_content">
      <div class="search">
        {!! Form::open(['url' => '/search', 'method' => 'GET']) !!}
        {{ Form::text('keyword', null, ['class' => 'input', 'placeholder' => 'ユーザー名']) }}
      </div>
      <div class="btn_search">
        <input type="image" src="{{asset('/images/search.png')}}">
      </div>

      <div class="search_word">
        @if(!empty($keyword))
          <p>検索ワード:{{ $keyword }}</p>
        @endif
      </div>
    </div>
    {!! Form::close() !!}

    <div class="search_result">
      @foreach($users as $user)
        @if(Auth::user()->id !== $user->id)
          <div class="search_group">
            @if(!empty(Auth::user()->icon_image))
              <figure><img src="{{asset('storage/images/' . $user->icon_image)}}"></figure>
            @else
              <figure><img src="{{asset('images/icon1.png')}}"></figure>
            @endif
            <div class="search_user">
              <div>{{ $user->username }}</div>
            </div>
            @csrf

            @if(!$user->isFollow())
              <form action="{{ route('follow', ['id' => $user->id]) }}" method="post">
                @csrf
                <button type="submit" class="btn btn-info">フォローする</button>
              </form>
            @else
              <form action="{{ route('unfollow', ['id' => $user->id]) }}" method="post">
                @csrf
                <button type="submit" class="btn btn-danger">フォロー解除</button>
              </form>
            @endif
          </div>
        @endif
      @endforeach
    </div>
  </div>


</x-login-layout>
