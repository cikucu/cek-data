@extends('layouts.app2')

@section('content')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
<section class="section">
  <div class="col-12">
    <div class="section-header">
      <h1>PORTAL Pengecekan Data untuk Seleksi PPPK Guru 2023</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Diperbarui September 2023</a></div>
        <!-- <div class="breadcrumb-item"><a href="#">Layout</a></div> -->
        <!-- <div class="breadcrumb-item">Top Navigation</div> -->
      </div>
    </div>
  
    <div class="card">
      <div class="card-header"></div>
      <div class="card-body">
        <form action="cek-pppk/search" method="POST">
          <div class="form-group">
            <label>Masukkan Nomor Induk Kependudukan (NIK)</label>
            <div class="input-group">
              @csrf
              <input id="search-nik" name="nik_sscn" type="text" class="form-control" placeholder="Search NIK SSCASN" />
            </div>
        @error('nik_sscn')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
           
          </div>

          <div class="form-group">
            <span id="captcha-image-container" data-captcha-url="">
              {!! NoCaptcha::renderJs() !!}
              {!! NoCaptcha::display() !!}
            </span>
          </div>

          <button class="btn btn-primary" id="cek-data-button">Cek Data</button>
        </form>
      </div>
      @if(session()->has('message'))
            <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
    </div>
  </div>
  </div>
</section>
@endsection

@push('javascript')
<script src="https://www.google.com/recaptcha/api.js"></script>
@endpush