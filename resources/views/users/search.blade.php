<x-login-layout>
{!! Form::open(['url' => '/search']) !!}
{{ Form::text('search',null,['class' => 'input']) }}
{{ Form::submit('検索') }}
{!! Form::close() !!}
</x-login-layout>
