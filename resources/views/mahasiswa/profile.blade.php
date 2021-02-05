@extends('layout_mahasiswa.base')
@section('content')
<div class="container-fluid">
    <div class="row" style="padding-top:20px">
        <div class="col-md-12">
            <div class="card card-primary card-outline card-shadow">
                <div class="card-body ">
                    <div class="text-center">
                        <img class=" profile-user-img img-circle box-profile"
                             src="{{ asset('image/'.$mahasiswa->foto)}}" alt="Aldi Susanto"
                             style="width: 150px;height:150px">
                        <h3 class="profile-username text-center">{{$user->username}} | {{$mahasiswa->nama_depan}}
                            {{$mahasiswa->nama_belakang}}</h3>
                        <p class="text-muted text-center">{{$jurusan -> nama_jurusan}}</p>
                    </div>
                </div>
            </div>
            <br>


        </div>
    </div>
</div>
@endsection
