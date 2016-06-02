@extends('layouts.app');

 @section('title')
    FeedBack
 @endsection

 @section('content')
 <form role="form" method="post" action='{{ url("/feedback") }}' >
 <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Name" id="name" required="required" >
            
        </div>
    </div>
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label>Message</label>
            <textarea rows="5" class="form-control" placeholder="Message" id="message" ></textarea>
            
        </div>
    </div>
    <br>
    <div class="row">
        <div class="form-group col-xs-12">
            <button type="submit" class="btn btn-default">Send</button>
        </div>
    </div>
</form>

@endsection

