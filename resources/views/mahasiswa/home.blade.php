@extends('layout_mahasiswa.base')
@section('content')
<div class="container">
    <p align="left">
        <font size="5" color="red">Untuk Di Perhatikan</font>
    </p>

    <ol>
        <li>
            Download KRS masing-masing sebagai panduan input Matakuliah, dan perhatikan Transkrip Nilai Sementara
            agar tidak salah program.
        </li>
        <li>
            Mahasiswa semester 1 dan 3 tidak perlu Input KRS kecuali mahasiswa Pindahan karena akan diposting secara
            otomatis sesuai dengan paketnya jika sudah menyelesaian pembayaran BPP
        </li>
        <li>
            Batas Input KRS Reguler s.d tanggal 3 Oktober 2020.
        </li>
        <li style="color:red">
            Bagi Mahasiswa yang programkan KKLP, maksimum matakuliah diperbolehkan 4 di luar SKIPSI dan SEMINAR
            PROPOSAL.
        </li>
        <li>
            Perkuliahan dimulai pada tanggal 12 Oktober 2020 via Daring.
        </li>
        <li>
            Jadwal kuliah, masing-masing dapat dilihat pada menu KRS/Kelas mulai tanggal 5 Oktober 2020.
        </li>
        <li>
            Mahasiswa normal/paket semester 1,2,3,4 matakuliah yang disajikan adalah sama baik kurikulum REGULER
            maupun kurikulum MERDEKA (percabangan kurikulum mulai semester 5).
        </li>
        <li>
            Untuk Mahasiswa normal Semeser 5 bisa mengambil/Mengikuti <font color="red">Kurikulum Reguler</font>
            atau <font color="red"> Kurikulum Merdeka.</font> Jika
            Seorang Mahasiswa sudah menetukan pilihan Krikulum (Reguler/Merdeka), maka semester 6,7,8 juga harus
            memprogramkan KRS kurikulum Reguler/Merdeka (tidak bisa silang).
        </li>
        <li>
            Mahasiswa yang memilih kurikulum merdeka harus disetujui oleh Ka. Jurusan/Ka. Prodi.
        </li>
        <li>
            Pada kurilulum Merdeka Semester 5 disajikan matakuliah lintas Prodi dalam PT sendiri, pada semester 6,7
            disajikan matakuliah lintas PT atau Magang 6 bln, Penelitian, Pengabdian Masyarakat, Proyek Wirausaha,
            dan Proyek Kemanusiaan.
        </li>
    </ol>
    <p align="left"><font color="red" size="5">KRS REGULER</font></p>
    <div class="card-body table-responsive p-0">
        <table border="0" align="center">
            <tbody>
            <tr align="center" style="font-size: 15pt">
                <th>KRS SI</th>
                <th>KRS TI</th>
                <th>KRS RPL</th>
                <th>KRS D3</th>
            </tr>
            <tr>
                <td>
                    <a href="{{ asset('unduh/KRS_Ganjil_SI.pdf')}}" target="_blank"><img
                            src="{{ asset('admin/assets/image/KRS_Ganjil_SI.jpg')}}" width="250" height="420"></a>

                </td>
                <td>
                    <a href="{{ asset('unduh/KRS_Ganjil_TI.pdf')}}" target="_blank"><img
                            src="{{ asset('admin/assets/image/KRS_Ganjil_TI.jpg')}}" width="250" height="420"></a>

                </td>
                <td>
                    <a href="{{ asset('unduh/KRS_Ganjil_RPL.pdf')}}" target="_blank"><img
                            src="{{ asset('admin/assets/image/KRS_Ganjil_RPL.jpg')}}" width="250" height="420"></a>

                </td>
                <td>
                    <a href="{{ asset('unduh/KRS_Ganjil_D3.pdf')}}" target="_blank"><img
                            src="{{ asset('admin/assets/image/KRS_Ganjil_D3.jpg')}}" width="250" height="420"></a>

                </td>
            </tr>
            </tbody>
        </table>
        <!-- /.row -->
    </div>
    <br>

    <p align="left"><font color="red" size="5">KRS MERDEKA</font></p>
    <div class="card-body table-responsive p-0">
        <table border="0" align="center">
            <tbody>
            <tr align="center" style="font-size: 15pt">
                <th>KRS SI</th>
                <th>KRS TI</th>
                <th>KRS RPL</th>
            </tr>
            <tr>
                <td>
                    <a href="{{ asset('unduh/KRSM_Ganjil_SI.pdf')}}" target="_blank"><img
                            src="{{ asset('admin/assets/image/KRSM_Ganjil_SI.jpg')}}" width="250" height="420"></a>

                </td>
                <td>
                    <a href="{{ asset('unduh/KRSM_Ganjil_TI.pdf')}}" target="_blank"><img
                            src="{{ asset('admin/assets/image/KRSM_Ganjil_TI.jpg')}}" width="250" height="420"></a>

                </td>
                <td>
                    <a href="{{ asset('unduh/KRSM_Ganjil_RPL.pdf')}}" target="_blank"><img
                            src="{{ asset('admin/assets/image/KRS_Ganjil_RPL.jpg')}}" width="250" height="420"></a>

                </td>
            </tr>
            </tbody>
        </table>
        <!-- /.row -->
    </div>

</div>
@endsection
