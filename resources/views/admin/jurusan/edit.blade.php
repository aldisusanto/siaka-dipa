@extends('layout.base')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Jurusan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="/jurusan">Jurusan</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="container-fluid">
    <div class="row" style="padding: 10px;">

        <div class="col-md-12">
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Edit Jurusan</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <form action="jurusan/{{$jurusan->id}}/update" method="POST">
                    <div class="card-body">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="jur">Jurusan</label>
                            <input type="text" class="form-control" id="jur" name="jurusan"
                                   value="{{$jurusan->nama_jurusan}}"
                                   placeholder="Masukkan Jurusan">
                        </div>


                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-warning">Update</button>
                        </div>
                    </div>
                </form>
                <!-- /.card-body -->
            </div>
        </div>

    </div>
</div>
@endsection
