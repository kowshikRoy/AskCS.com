@extends('layouts.app')

@section('content')

    
        <div class="col-md-10 col-md-offset-1">
            <h2>{{ $user->name }}'s Profile Photo</h2>
            <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; border-radius:50%; margin-right:25px;">
            <br>
            <br>
            <label>Update Profile Image</label>
            <br>
            <br>
            <form enctype="multipart/form-data" action="/profile" method="POST">
                
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>
        </div>
   

@endsection