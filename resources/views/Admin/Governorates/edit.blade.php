@extends('Admin.layouts.app')

@section('title', 'Edit User Home')


@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">المحافظات</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('Admin') }}">الرئيسة</a></li>
          <li class="breadcrumb-item"><a href="{{ route('Admin.Governorates.index') }}">المحافظات</a></li>
          <li class="breadcrumb-item active">اضافة</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="container-fluid">
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <form role="form" method="POST" action="{{ route('Admin.Governorates.update',$Governorate->id) }}">
                {{ csrf_field() }}
                {{ method_field('put') }}
                <input type="hidden" name="id" value="{{ $Governorate->id}}">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" name="name" value="{{ $Governorate->name}}">
                        @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                       @endif
                      </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
        </div>
        </div>

</div>
</div>

  @endsection

