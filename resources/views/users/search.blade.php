<x-login-layout>
<div class="search">
{!! Form::open(['url' => '/search']) !!}
{{ Form::text('search',null,['class' => 'input']) }}
<div class="btn-search">
  <input type="image" src="{{asset('/images/search.png')}}">
</div>
{!! Form::close() !!}

</x-login-layout>
