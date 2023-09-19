@extends('layouts.skeleton2')

@section('app')
<meta name="csrf-token" content="{{ csrf_token() }}">
  <div class="main-wrapper container">
    <div class="navbar-bg"></div>
    <nav class="navbar navbar-expand-lg main-navbar">
      @include('partials.topnav')
    </nav>
    <!-- Main Content -->
    <div class="main-content" style="min-height: 680px;">
      @yield('content')
    </div>
    <footer class="main-footer">
      @include('partials.footer')
    </footer>
  </div>
@endsection
    