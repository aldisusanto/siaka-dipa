@extends('layout_mahasiswa.base')
@section('content')
<div class="container-fluid">
    <div class="row" style="padding-top:20px">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#semester1" data-toggle="tab">Semester
                                1</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#semester2" data-toggle="tab">Semester 2</a></li>
                        <li class="nav-item"><a class="nav-link" href="#semester3" data-toggle="tab">Semester 3</a></li>
                    </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content">
                        <div class="active tab-pane" id="semester1">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Matakuliah</th>
                                        <th>Kelas</th>
                                        <th>Hari</th>
                                        <th>Jam</th>
                                        <th>Ruang</th>
                                        <th>Dosen</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($jadwal as $value)
                                    @if($value->matakuliah->semester == "Semester 1")
                                    <tr>
                                        <td>{{ $value->matakuliah->kode_matakuliah }}</td>
                                        <td>{{ $value->matakuliah->nama_matakuliah}}</td>
                                        <td>{{ $value->kelas }}</td>
                                        <td>{{ $value->hari }}</td>
                                        <td>{{ $value->jam }}</td>
                                        <td>{{ $value->ruang }}</td>
                                        <td>{{ $value->dosen->nama_depan}} {{$value->dosen->nama_belakang}}</td>
                                    </tr>
                                    @endif
                                    @endforeach

                                    </tbody>

                                </table>
                            </div>
                        </div>
                        <!-- /.tab-pane -->

                        <div class=" tab-pane" id="semester2">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Matakuliah</th>
                                        <th>Kelas</th>
                                        <th>Hari</th>
                                        <th>Jam</th>
                                        <th>Ruang</th>
                                        <th>Dosen</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($jadwal as $value)
                                    @if($value->matakuliah->semester == "Semester 1")
                                    <tr>
                                        <td>{{ $value->matakuliah->kode_matakuliah }}</td>
                                        <td>{{ $value->matakuliah->nama_matakuliah}}</td>
                                        <td>{{ $value->kelas }}</td>
                                        <td>{{ $value->hari }}</td>
                                        <td>{{ $value->jam }}</td>
                                        <td>{{ $value->ruang }}</td>
                                        <td>{{ $value->dosen->nama_depan}} {{$value->dosen->nama_belakang}}</td>
                                    </tr>
                                    @endif
                                    @endforeach

                                    </tbody>

                                </table>
                            </div>
                        </div>
                        <!-- /.tab-pane -->


                        <div class="tab-pane" id="semester3">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Matakuliah</th>
                                        <th>Kelas</th>
                                        <th>Hari</th>
                                        <th>Jam</th>
                                        <th>Ruang</th>
                                        <th>Dosen</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($jadwal as $value)
                                    @if($value->matakuliah->semester == "Semester 3")
                                    <tr>
                                        <td>{{ $value->matakuliah->kode_matakuliah }}</td>
                                        <td>{{ $value->matakuliah->nama_matakuliah}}</td>
                                        <td>{{ $value->kelas }}</td>
                                        <td>{{ $value->hari }}</td>
                                        <td>{{ $value->jam }}</td>
                                        <td>{{ $value->ruang }}</td>
                                        <td>{{ $value->dosen->nama_depan}} {{$value->dosen->nama_belakang}}</td>
                                    </tr>
                                    @endif
                                    @endforeach

                                    </tbody>

                                </table>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div><!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
</div>
</div>
@endsection
