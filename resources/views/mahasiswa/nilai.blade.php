<?php
if (isset($mahasiswa->matakuliah)) {
    foreach ($mahasiswa->matakuliah as $value) {
        if ($value->semester == 'Semester 3') {
            $matkul3[] = $value->sks;
        }
    }
}
if (isset($mahasiswa->matakuliah)) {
    foreach ($mahasiswa->matakuliah as $value) {
        if ($value->semester == 'Semester 2') {
            $matkul2[] = $value->sks;
        }
    }
}

if (isset($mahasiswa->matakuliah)) {
    foreach ($mahasiswa->matakuliah as $value) {
        if ($value->semester == 'Semester 1') {
            $matkul1[] = $value->sks;
        }
    }
}
?>
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
                                        <th>Semester</th>
                                        <th>SKS</th>
                                        <th>Nilai</th>
                                        <th>Bobot</th>
                                        <th>Bobot * SKS</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(isset($mahasiswa->matakuliah))
                                    @foreach($mahasiswa->matakuliah as $value)
                                    @if($value->semester == "Semester 1")
                                    <tr>
                                        <td>{{ $value->kode_matakuliah }}</td>
                                        <td>{{ $value->nama_matakuliah}}</td>
                                        <td>{{ $value->semester }}</td>
                                        <td>{{ $value->sks }}</td>
                                        <td>{{ $value->pivot->nilai }}</td>

                                        <td>@if($value->pivot->nilai == 'A') 4 @endif
                                            @if($value->pivot->nilai == 'B') 3 @endif
                                            @if($value->pivot->nilai == 'C') 2 @endif
                                            @if($value->pivot->nilai == 'D') 1 @endif
                                            @if($value->pivot->nilai == 'E') 0 @endif
                                        </td>
                                        <td>
                                            @if($value->pivot->nilai == 'A') <?php echo 4 * $value->sks; ?> @endif
                                            @if($value->pivot->nilai == 'B') <?php echo 3 * $value->sks; ?> @endif
                                            @if($value->pivot->nilai == 'C') <?php echo 2 * $value->sks; ?> @endif
                                            @if($value->pivot->nilai == 'D') <?php echo 1 * $value->sks; ?> @endif
                                            @if($value->pivot->nilai == 'E') <?php echo 0 * $value->sks; ?> @endif
                                        </td>
                                        @if($value->pivot->nilai == 'A') <?php $bobot1[] = 4 * $value->sks; ?> @endif
                                        @if($value->pivot->nilai == 'B') <?php $bobot1[] = 3 * $value->sks; ?> @endif
                                        @if($value->pivot->nilai == 'C') <?php $bobot1[] = 2 * $value->sks; ?> @endif
                                        @if($value->pivot->nilai == 'D') <?php $bobot1[] = 1 * $value->sks; ?> @endif
                                        @if($value->pivot->nilai == 'E') <?php $bobot1[] = 0 * $value->sks; ?> @endif

                                    </tr>

                                    @endif
                                    @endforeach
                                    @endif
                                    <tr>
                                        <td colspan="3" style="text-align:center; font-weight:bold;">TOTAL</td>
                                        <td><?php echo array_sum($matkul1) ?></td>
                                        <td></td>
                                        <td></td>
                                        <td><?php echo array_sum($bobot1) ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="7"
                                            style="text-align:center; font-weight:bold;"><?php echo 'IPS : ' . array_sum($bobot1) / array_sum($matkul1) ?></td>
                                    </tr>
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
                                        <th>Semester</th>
                                        <th>SKS</th>
                                        <th>Nilai</th>
                                        <th>Bobot</th>
                                        <th>Bobot * SKS</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(isset($mahasiswa->matakuliah))
                                    @foreach($mahasiswa->matakuliah as $value)
                                    @if($value->semester == "Semester 2")
                                    <tr>
                                        <td>{{ $value->kode_matakuliah }}</td>
                                        <td>{{ $value->nama_matakuliah}}</td>
                                        <td>{{ $value->semester }}</td>
                                        <td>{{ $value->sks }}</td>
                                        <td>{{ $value->pivot->nilai }}</td>

                                        <td>@if($value->pivot->nilai == 'A') 4 @endif
                                            @if($value->pivot->nilai == 'B') 3 @endif
                                            @if($value->pivot->nilai == 'C') 2 @endif
                                            @if($value->pivot->nilai == 'D') 1 @endif
                                            @if($value->pivot->nilai == 'E') 0 @endif
                                        </td>
                                        <td>
                                            @if($value->pivot->nilai == 'A') <?php echo 4 * $value->sks; ?> @endif
                                            @if($value->pivot->nilai == 'B') <?php echo 3 * $value->sks; ?> @endif
                                            @if($value->pivot->nilai == 'C') <?php echo 2 * $value->sks; ?> @endif
                                            @if($value->pivot->nilai == 'D') <?php echo 1 * $value->sks; ?> @endif
                                            @if($value->pivot->nilai == 'E') <?php echo 0 * $value->sks; ?> @endif
                                        </td>
                                        @if($value->pivot->nilai == 'A') <?php $bobot2[] = 4 * $value->sks; ?> @endif
                                        @if($value->pivot->nilai == 'B') <?php $bobot2[] = 3 * $value->sks; ?> @endif
                                        @if($value->pivot->nilai == 'C') <?php $bobot2[] = 2 * $value->sks; ?> @endif
                                        @if($value->pivot->nilai == 'D') <?php $bobot2[] = 1 * $value->sks; ?> @endif
                                        @if($value->pivot->nilai == 'E') <?php $bobot2[] = 0 * $value->sks; ?> @endif

                                    </tr>

                                    @endif
                                    @endforeach
                                    @endif
                                    <tr>
                                        <td colspan="3" style="text-align:center; font-weight:bold;">TOTAL</td>
                                        <td><?php echo array_sum($matkul2) ?></td>
                                        <td></td>
                                        <td></td>
                                        <td><?php echo array_sum($bobot2) ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="7"
                                            style="text-align:center; font-weight:bold;"><?php echo 'IPS : ' . array_sum($bobot2) / array_sum($matkul2) ?></td>
                                    </tr>
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
                                        <th>Semester</th>
                                        <th>SKS</th>
                                        <th>Nilai</th>
                                        <th>Bobot</th>
                                        <th>Bobot * SKS</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(isset($mahasiswa->matakuliah))
                                    @foreach($mahasiswa->matakuliah as $value)
                                    @if($value->semester == "Semester 3")
                                    <tr>
                                        <td>{{ $value->kode_matakuliah }}</td>
                                        <td>{{ $value->nama_matakuliah}}</td>
                                        <td>{{ $value->semester }}</td>
                                        <td>{{ $value->sks }}</td>
                                        <td>{{ $value->pivot->nilai }}</td>

                                        <td>@if($value->pivot->nilai == 'A') 4 @endif
                                            @if($value->pivot->nilai == 'B') 3 @endif
                                            @if($value->pivot->nilai == 'C') 2 @endif
                                            @if($value->pivot->nilai == 'D') 1 @endif
                                            @if($value->pivot->nilai == 'E') 0 @endif
                                        </td>
                                        <td>
                                            @if($value->pivot->nilai == 'A') <?php echo 4 * $value->sks; ?> @endif
                                            @if($value->pivot->nilai == 'B') <?php echo 3 * $value->sks; ?> @endif
                                            @if($value->pivot->nilai == 'C') <?php echo 2 * $value->sks; ?> @endif
                                            @if($value->pivot->nilai == 'D') <?php echo 1 * $value->sks; ?> @endif
                                            @if($value->pivot->nilai == 'E') <?php echo 0 * $value->sks; ?> @endif
                                        </td>
                                        @if($value->pivot->nilai == 'A') <?php $bobot3[] = 4 * $value->sks; ?> @endif
                                        @if($value->pivot->nilai == 'B') <?php $bobot3[] = 3 * $value->sks; ?> @endif
                                        @if($value->pivot->nilai == 'C') <?php $bobot3[] = 2 * $value->sks; ?> @endif
                                        @if($value->pivot->nilai == 'D') <?php $bobot3[] = 1 * $value->sks; ?> @endif
                                        @if($value->pivot->nilai == 'E') <?php $bobot3[] = 0 * $value->sks; ?> @endif

                                    </tr>

                                    @endif
                                    @endforeach
                                    @endif
                                    <tr>
                                        <td colspan="3" style="text-align:center; font-weight:bold;">TOTAL</td>
                                        <td><?php echo array_sum($matkul3) ?></td>
                                        <td></td>
                                        <td></td>
                                        <td><?php echo array_sum($bobot3) ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="7"
                                            style="text-align:center; font-weight:bold;"><?php echo 'IPS : ' . array_sum($bobot3) / array_sum($matkul3) ?></td>
                                    </tr>
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
@endsection
