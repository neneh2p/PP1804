@extends('admin.master')

@section('title','User')
@section('content')

<div class = "well well bs-component col-md-offset-3  col-md-4">
  <form class = "form-horizontal" method = "post" action = "/admin/comment">
  @foreach ($errors->all() as $error)
  <p class = "alert alert-danger">{{$error}}</p>
  @endforeach

  @if(session('status'))
    <div class = "alert alert-success">
      {{ session('status')}}
    </div>
  @endif

  <input type = "hidden" name = "_token" value = "{!! csrf_token() !!}">
  <input type = "hidden" name = "post_id" value = "{!! $ticket->id !!}">

  <fieldset>
    <legend>Reply</legend>
    <div class = "form-group">
      <div class = "col-lg-12">
        <textarea class = "form-control" rows = "3" id = "content" name = "content"></textarea>
       </div>
      </div>

    <div class = "form-group">
      <div class = "col-lg-10 col-lg-offset-2">
        <a href = "{{ route('tickets.index') }}" class = "btn btn-default">Cancel</a>
        <button type = "submit" class = "btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
  </form>
 </div> 
        
@endsection

@section('footer')

@endsection