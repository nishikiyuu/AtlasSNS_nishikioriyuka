<x-login-layout>

<div class="content">
{!! Form::open(['url' => '/post/create']) !!}
{{ Form::text('post',null,['class' => 'input']) }}
{{ Form::submit('登録') }}
{!! Form::close() !!}
</div>

  <!--投稿表示-->
<div>
  @foreach($posts as $post)
    <tr>
      <td>{{$post->user_id}}</td>
      <td>{{$post->user->username}}</td>
      <td>{{$post->post}}</td>
      <td>{{$post->created_at}}</td>
    </tr>
  @endforeach
</div>

</x-login-layout>
