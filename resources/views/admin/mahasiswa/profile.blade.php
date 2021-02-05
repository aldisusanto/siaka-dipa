@extends('layout.base')
@section('content')
<div class="container-fluid">
    <div class="row" style="padding-top:20px">
        <div class="col-md-3">
            <div class="card card-primary card-outline card-shadow">
                <div class="card-body ">
                    <a href="/mahasiswa/{{$mahasiswa->id}}/edit"><i class="fas fa-pencil-alt"
                                                                    style="margin-left:200px"></i></a>
                    <div class="text-center">
                        <img class=" profile-user-img img-circle box-profile"
                             src="{{ asset('image/'.$mahasiswa->foto)}}" alt="Aldi Susanto"
                             style="width: 150px; height: 150px">
                        <h3 class="profile-username text-center">
                            {{$mahasiswa->user->username}} | {{$mahasiswa->nama_depan}}
                            {{$mahasiswa->nama_belakang}}</h3>
                        <p class="text-muted text-center">{{$mahasiswa->jurusan->nama_jurusan}}</p>
                    </div>
                </div>
            </div>
            <br>
            <div class="card card-primary card-shadow">
                <div class="card-header">
                    <h3 class="card-title">About Me</h3>
                </div>
                <div class="card-body">
                    <i class="fas fa-book mr-1"> Education</i>
                    <ul>
                        <li class="text-muted">SD INPRES TELLO BARU</li>
                        <li class="text-muted">SMPS MAHAPUTRA</li>
                        <li class="text-muted">SMAS MAHAPUTRA</li>
                        <li class="text-muted">STMIK DIPANEGARA</li>
                    </ul>

                    <hr>
                    <i class="fas fa-pencil-alt mr-0"> Skills</i>
                    <ul>

                        <li class="text-muted">C</li>
                        <li class="text-muted">C++</li>
                        <li class="text-muted">HTML</li>
                        <li class="text-muted">CSS</li>
                        <li class="text-muted">JS</li>
                        <li class="text-muted">PHP</li>
                        <li class="text-muted">Python</li>
                        <li class="text-muted">Flutter</li>
                        <li class="text-muted">MySql</li>
                        <li class="text-muted">Framework-Django</li>
                        <li class="text-muted">Framework-Boostrap</li>
                    </ul>

                </div>

            </div>


        </div>
        <div class="col-md-9">
            @if(session('sukses'))
            <div class="alert alert-success">
                {{session('sukses')}}
            </div>
            @endif
            <button style="margin-bottom:10px" type="button" class="btn btn-outline-info" data-toggle="modal"
                    data-target="#modal-info">
                <i class="fas fa-plus"> Nilai</i>
            </button>
            <button style="margin-bottom:10px" type="button" class="btn btn-outline-info" data-toggle="modal"
                    data-target="#modal-info1">
                <i class="fas fa-plus"> Jadwal</i>
            </button>
            <div class="card">
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#nilai" data-toggle="tab">Nilai</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#jadwal" data-toggle="tab">Jadwal</a></li>
                        <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Atur Profil</a></li>
                    </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content">
                        <div class="active tab-pane" id="nilai">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Matakuliah</th>
                                        <th>Semester</th>
                                        <th>Nilai</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(isset($mahasiswa->matakuliah))
                                    @foreach($mahasiswa->matakuliah as $value)
                                    <tr>
                                        <td>{{ $value->kode_matakuliah }}</td>
                                        <td>{{ $value->nama_matakuliah}}</td>
                                        <td>{{ $value->semester }}</td>
                                        <td>{{ $value->pivot->nilai }}</td>
                                    </tr>
                                    @endforeach
                                    @endif
                                    </tbody>

                                </table>


                            </div>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="jadwal">
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
                                    <tr>
                                        <td>{{ $value->matakuliah->kode_matakuliah }}</td>
                                        <td>{{ $value->matakuliah->nama_matakuliah}}</td>
                                        <td>{{ $value->kelas }}</td>
                                        <td>{{ $value->hari }}</td>
                                        <td>{{ $value->jam }}</td>
                                        <td>{{ $value->ruang }}</td>
                                        <td>{{ $value->dosen->nama_depan}} {{$value->dosen->nama_belakang}}</td>
                                    </tr>
                                    @endforeach
                                    </tbody>

                                </table>


                            </div>
                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="settings">
                            <form class="form-horizontal" action="{{ url('mahasiswa/'.$mahasiswa->id.'/update')}}" method="POST"
                                  enctype="multipart/form-data">
                                <div class="card-body">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="foto">Foto</label>
                                        <input type="file" class="form-control" id="foto" name="foto">
                                    </div>
                                    <div class="form-group">
                                        <label for="namadepan">Nama Depan</label>
                                        <input type="text" class="form-control" id="namadepan" name="nama_depan"
                                               value="{{$mahasiswa->nama_depan}}"
                                               placeholder="Masukkan Nama Depan">
                                    </div>
                                    <div class="form-group">
                                        <label for="namabelakang">Nama Belakang</label>
                                        <input type="text" class="form-control" id="namabelakang" name="nama_belakang"
                                               value="{{$mahasiswa->nama_belakang}}"
                                               placeholder="Masukkan Nama Belakang">
                                    </div>
                                    <div class="form-group">
                                        <label for="jeniskelamin">Jenis Kelamin</label>
                                        <select type="text" class="form-control" id="jeniskelamin" name="jenis_kelamin">
                                            <option value="L" @if($mahasiswa->jenis_kelamin == 'L') selected
                                                @endif>Laki-Laki
                                            </option>
                                            <option value="P" @if($mahasiswa->jenis_kelamin == 'P') selected
                                                @endif>Perempuan
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <textarea class="form-control" id="alamat" name="alamat"
                                                  placeholder="Masukkan Alamat"> {{$mahasiswa->alamat}}
                                </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="hp">No Hp</label>
                                        <input type="text" class="form-control" id="hp" name="no_hp"
                                               value="{{$mahasiswa->no_hp}}"
                                               placeholder="Masukkan No Hp">
                                    </div>

                                    <!-- /.card-body -->
                                    <div class="form-group>
                                        <div class=" offset-sm-2 col-sm-10
                                    ">
                                    <button type="submit" class="btn btn-warning">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                <!--                Modal Info Nilai-->
                <div class="modal fade" id="modal-info">
                    <div class="modal-dialog">
                        <div class="modal-content bg-info">
                            <div class="modal-header">
                                <h4 class="modal-title">Nilai</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ url('mahasiswa/'.$mahasiswa->id.'/nilai')}}" method="POST"
                                  enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="kuliah">Matakuliah</label>
                                        <select type="text" class="form-control" id="kuliah" name="nama_matakuliah">
                                            @foreach($matakuliah as $mk)
                                            <option value="{{$mk->id}}">{{$mk->nama_matakuliah}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="nilai">Nilai</label>
                                        <input type="text" class="form-control" id="nilai" name="nilai"
                                               placeholder="Masukkan Nilai">
                                    </div>
                                    <!-- /.card-body -->

                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close
                                    </button>
                                    <button type="submit" class="btn btn-outline-light">Submit</button>
                                </div>
                            </form>
                        </div>

                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!--                Modal Info Jadwal-->
                <div class="modal fade" id="modal-info1">
                    <div class="modal-dialog">
                        <div class="modal-content bg-info">
                            <div class="modal-header">
                                <h4 class="modal-title">Jadwal</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ url('mahasiswa/'.$mahasiswa->id.'/jadwal')}}" method="POST"
                                  enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="kuliah">Matakuliah</label>
                                        <select type="text" class="form-control" id="kuliah" name="nama_matakuliah">
                                            @foreach($matakuliah as $mk)
                                            <option value="{{$mk->id}}">{{$mk->nama_matakuliah}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="kuliah">Dosen</label>
                                        <select type="text" class="form-control" id="kuliah" name="dosen">
                                            @foreach($dosen as $d)
                                            <option value="{{$d->id}}">{{$d->nama_depan}} {{$d->nama_belakang}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="kelas">Kelas</label>
                                        <input type="text" class="form-control" id="kelas" name="kelas"
                                               placeholder="Masukkan Kelas">
                                    </div>
                                    <div class="form-group">
                                        <label for="kelas">Hari</label>
                                        <input type="text" class="form-control" id="kelas" name="hari"
                                               placeholder="Masukkan Hari">
                                    </div>
                                    <div class="form-group">
                                        <label for="kelas">Jam</label>
                                        <input type="text" class="form-control" id="kelas" name="jam"
                                               placeholder="Masukkan Jam">
                                    </div>
                                    <div class="form-group">
                                        <label for="kelas">Ruang</label>
                                        <input type="text" class="form-control" id="kelas" name="ruang"
                                               placeholder="Masukkan Ruang">
                                    </div>
                                    <!-- /.card-body -->

                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close
                                    </button>
                                    <button type="submit" class="btn btn-outline-light">Submit</button>
                                </div>
                            </form>
                        </div>

                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
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
