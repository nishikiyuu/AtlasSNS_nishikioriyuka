<x-login-layout>
{!! Form::open(['url' => '/follow-list']) !!}
<h2>フォローリスト</h2>

{!! Form::close() !!}
<!--
 @foreach($posts as $post)
    <tr>
      <td>{{$post->user_id}}</td>
      <td><img src="{{asset('/images/'.$post->user->icon_image)}}"></td>
      <td>{{$post->user->username}}</td>
      <td>{{$post->post}}</td>
      <td>{{$post->created_at}}</td>
  @endforeach
-->

</x-login-layout>
