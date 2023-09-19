@extends('layouts.app2')


@section('content')
<section class="section">
<div class="col-12">
          <div class="section-header">
            <h1>PORTAL Pengecekan Data untuk Seleksi PPPK Guru 2023</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Diperbarui Agustus 2023</a>
              </div>
              <!-- <div class="breadcrumb-item"><a href="#">Layout</a></div> -->
              <!-- <div class="breadcrumb-item">Top Navigation</div> -->
            </div>
          </div>
          <div class="card" >
                  <div class="card-header">Data Guru berdasarkan DAPODIK</div>
                  <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody>
                        
                        <tr>
                           <th>NIK </th><td class="align-middle" id="">: {{$get_data_exist->nik_valid_pusdatin}}</td>
                        </tr>
                        <tr>
                          <th>NUPTK</th><td class="align-middle" id="">: {{$get_data_exist->nuptk}}</td>
                        </tr>
                        <tr>
                          <th>Nama</th><td class="align-middle" id="">: {{$get_data_exist->nama}}</td>
                        </tr>
                        <tr>
                          <th>Tanggal Lahir</th><td class="align-middle" id="">: {{$get_data_exist->tanggal_lahir}}</td>
                        </tr>
                        <tr>
                          <th>No. THK-II</th><td class="align-middle" id="">: {{$get_data_exist->no_thk2}}</td>
                        </tr>
                        <tr>
                          <th>Status 3 tahun</th><td class="align-middle" id="">: @if($get_data_exist->is_3tahun =='1') Terdata pada 3 tahun ajaran @else Tidak @endif</td>
                        </tr>
                        <tr>
                          <th>Status Sekolah</th><td class="align-middle" id="">: @if($get_data_exist->status_sekolah =='1') Negeri @else Swasta @endif</td>
                        </tr>
                        <tr>
                          <th>Program Studi Verval Ijazah</th><td class="align-middle" id="">: {{$get_data_exist->prodi}}</td>
                        </tr>
                        <tr>
                          <th>Kode Sertifikat Pendidik 1</th><td class="align-middle" id="">: {{$get_data_exist->kode_sertif_1}}</td>
                        </tr>
                        <tr>
                          <th>Kode Sertifikat Pendidik 2</th><td class="align-middle" id="">: {{$get_data_exist->kode_sertif_2}}</td>
                        </tr>
                        <tr>
                            <th>Status Prioritas</th><td class="align-middle" id="">: {{$get_data_exist->status_prioritas}}</td>
                        </tr>
                        
                        </tbody>
                      </table>
                    </div>
                  </div>
          </div>
          <div class="card" >
                  <div class="card-header">Jabatan yang Linier</div>
                  <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped">
                    <thead>
                       <tr>
                         <th>Kode Jabatan</th>
                         <th>Nama Jabatan</th>
                         <th>Formasi Tersedia</th>
                       </tr>
                     </thead>
                     <tbody id="list-formasi">
                       @forelse ($referensi_jabatan as $key => $item)
                       <tr>
                         <td>{{$item->kode_baru}}</td>
                         <td>{{$item->jabatan}}</td>
                         <td>@if($item->is_formasi_tersedia =='1') Ya @else Tidak @endif</td>
                         @empty
                         <p>Tidak ada data </p>
                       </tr>
                       @endforelse
                     </tbody>
                      </table>
                    </div>
                  </div>
          </div>

          <button class="btn btn-primary btn-lg btn-block" onclick="location.href='https://gurupppk.kemdikbud.go.id/cek-pppk'" type="button">
         Kembali</button>
</div>
</div>
</section>
@endsection
