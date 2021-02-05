@extends('layout_mahasiswa.base')
@section('content')
<div class="container-fluid">
    <div class="row" style="padding-top:20px">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <!--                                        <th>NODOS</th>-->
                                <th>Nama</th>
                                <th>Gelar</th>
                                <th>Alamat</th>
                                <th>Kel</th>
                                <th>No Hp</th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($dosen as $value)
                            <tr>
                                <!--                                        <td>{{ $value->username }}</td>-->
                                <td>{{ $value->nama_depan}} {{$value->nama_belakang}}</td>
                                <td>{{ $value->gelar }}</td>
                                <td>{{ $value->alamat }}</td>
                                <td>{{ $value->jenis_kelamin }}</td>
                                <td>{{ $value->no_hp }}</td>
                            </tr>
                            @endforeach

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
