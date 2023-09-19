<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title', 'Home') &mdash; {{ config('app.name') }}</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> -->
  <link rel="stylesheet" href="https://cdn.tendik.id/css/app.css">
  <link rel="stylesheet" href="https://cdn.tendik.id/mews/captcha">
  @stack('stylesheet')
</head>

<body class="layout-3"  data-new-gr-c-s-check-loaded="14.1119.0" data-gr-ext-installed="">
<div id="app">
  @yield('app')
</div>
<script src="https://cdn.tendik.id/js/manifest.js"></script>
<script src="https://cdn.tendik.id/js/vendor.js"></script>
<script src="https://cdn.tendik.id/js/app.js"></script>
@stack('javascript')
</body>
</html>
