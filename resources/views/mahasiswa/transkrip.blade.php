<?php
if (isset($mahasiswa->matakuliah)) {
    foreach ($mahasiswa->matakuliah as $value) {
        $matkul1[] = $value->sks;
    }
}
?>
@extends('layout_mahasiswa.base')
@section('content')
<br>
<div class="col-md-12">
    <div class="card card-primary card-outline">
        <div class=" card-header">
            <h3>Transkrip </h3>
        </div>
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
                        style="text-align:center; font-weight:bold;"><?php echo 'IPK : ' . array_sum($bobot1) / array_sum($matkul1) ?></td>
                </tr>
                </tbody>

            </table>


        </div>
    </div>
</div>
@endsection
