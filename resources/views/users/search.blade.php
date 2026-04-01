<x-login-layout>
<div class="search-container">
  <div class="search-content">
    <div class="search">
      {!! Form::open(['url' => '/search','method' =>'GET']) !!}
      {{ Form::text('keyword',null,['class' => 'input','placeholder' => 'ユーザー名']) }}
    </div>
    <div class="btn-search">
      <input type="image" src="{{asset('/images/search.png')}}">
    </div>

    <div class="search-word">
      @if(!empty($keyword))
      <p>検索ワード:{{ $keyword }}</p>
      @endif
    </div>
  </div>

  <div class="search-result">
    @foreach($users as $user)
      <div class="search-group">
        @if(!empty(Auth::user()->icon_image))
          <figure><img src="{{asset('storage/images/'.$user->icon_image)}}"></figure>
        @else
          <figure><img src="{{asset('images/icon1.png')}}"></figure>
        @endif
        <div class="search-user">
          <div>{{ $user->username }}</div>
        </div>
        <button class="btn btn-info">フォローする</button>
      </div>
    @endforeach
  </div>
</div>
{!! Form::close() !!}

</x-login-layout>
