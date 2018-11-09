@extends('admin.master')

@section('title','Sua thong tin nguoi dung')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Sua Thong tin nguoi dung</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                User list
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                 <form action="{{ route('users.update', $user->id) }}" method="POST">

                      {{ csrf_field() }}
                      {{ method_field('PATCH') }}

                      <div class="form-group">
                        <label for="email">Name:</label>
                        <input type="text" class="form-control" id="email" value="{{ $user->name }}">
                      </div>

                      <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" id="email">
                      </div>

                      <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" name="password" class="form-control" id="pwd">
                      </div>

                      <div class="form-group">
                        <label for="pwd">Confirm Password:</label>
                        <input type="password" name="confirm_password" class="form-control" id="pwd">
                      </div>

                      <button type="submit" class="btn btn-default"><i class="fa fa-edit"></i>Tao nguoi dung</button>
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