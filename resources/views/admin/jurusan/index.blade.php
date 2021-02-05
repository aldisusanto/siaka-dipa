@extends('layout.base')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Jurusan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Jurusan</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="container-fluid">
    <div class="row" style="padding: 10px;">

        <div class="col-md-12">
            @if(session('sukses'))
            <div class="alert alert-success">
                {{session('sukses')}}
            </div>
            @endif
            <button style="margin-bottom:10px" type="button" class="btn btn-outline-info" data-toggle="modal"
                    data-target="#modal-info">
                <i class="fas fa-plus"> Tambah</i>
            </button>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Jurusan</h3>
                    <div class="card-tools">
                        <form action="jurusan" method="get">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="search" class="form-control float-right"
                                       placeholder="Search" autofocus autocomplete="off">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Jurusan</th>
                            <th>Aksi</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; ?>
                        @foreach($jurusan as $j)
                        <tr>

                            <td><?= $i; ?></td>
                            <td>{{$j->nama_jurusan}}</td>
                            <td>
                                <a href="jurusan/{{$j->id}}/edit" class="btn btn-outline-warning"><i
                                        class="fas fa-pencil-alt"> Edit</i></a>
                                <a href="jurusan/{{$j->id}}/delete" class="btn btn-outline-danger"
                                   onclick="return confirm('Yakin ingin di hapus')"><i
                                        class="fas fa-trash"> Delete</i></a></td>
                        </tr>

                        <?php $i++; ?>
                        @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
        <div class="modal fade" id="modal-info">
            <div class="modal-dialog">
                <div class="modal-content bg-info">
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Jurusan</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="jurusan/create" method="POST">
                        {{csrf_field()}}
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="jur">Nama Jurusan</label>
                                <input type="text" class="form-control" id="jur" name="nama_jurusan"
                                       placeholder="Masukkan Nama Jurusan">
                            </div>

                            <!-- /.card-body -->

                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-outline-light">Submit</button>
                        </div>
                    </form>
                </div>

                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

    </div>
</div>
@endsection
