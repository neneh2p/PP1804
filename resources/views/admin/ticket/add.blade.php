@extends('admin.master')

@section('title','User')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Create a new ticket</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Create a new ticket
            </div>
            <!-- /.panel-heading -->
            @foreach ($errors->all() as $error)
              <p class = "alert alert-danger">{{$error}}</p>
              @endforeach
            <div class="panel-body">
                 <form action="{{ route('tickets.store') }}" method="POST">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <label for="email">Title</label>
                        <input type="text" name="title" class="form-control" id="title">
                      </div>

                      <div class="form-group">
                        <label for="email">Content</label>
                        <input type="text" name="content" class="form-control" id="content">
                      </div>

                      <div class="form-group">
                        <label for="exampleUser1">Status</label>
                        <select name ="status" class = "form-control">
                          <option value="1" selected = "true">Answered</option>
                          <option value="2">Pending</option>
                        </select>
                      </div>



                      <button type="submit" class="btn btn-default"><i class="fa fa-edit"></i>Submit</button>
                </form> 
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.container-fluid -->
@endsection

@section('footer')

@endsection