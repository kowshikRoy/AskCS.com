@extends('layouts.app')
@section('title')
{{$title}}
@endsection
@section('content')
@if ( !$users->count() )
There is no user with this name till now.
@else
<div class="">
  @foreach( $users as $user )
  <div class="list-group">
    <div class="list-group-item">
      <h3><a href="{{ url('/user/'.$user->id) }}">{{ $user->name }}</a>
       
      </h3>
      
    </div>
    
  </div>
  @endforeach
  {!! $users->render() !!}
</div>
@endif
@endsection