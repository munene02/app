<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>FutbolPunter | Ultimate Betting Tips</title> 
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


<link rel="stylesheet" href="{{ asset("/assets/css/bootstrap.min.css") }}">
<link rel="stylesheet" href="{{ asset("/assets/css/material-kit.css") }}">
<link rel="stylesheet" href="{{ asset("/assets/css/style.css") }}">
<link rel="stylesheet" href="{{ asset("/sweetalert/dist/sweetalert.css") }}">
<link rel="stylesheet" href="{{ asset("/assets/css/fresh-bootstrap-table.css") }}">
<link rel="stylesheet" href="{{ asset("/assets/css/pricing.css") }}">
<!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->

</head>

<body class="index-page">
@include('header')

<div class="wrapper">
	@yield('content')
</div>

@include('footer')
</body>

<script src="{{ asset("/assets/js/jquery.min.js") }}"></script>
<script src="{{ asset("/assets/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("/assets/js/material.min.js") }}"></script>
<script src="{{ asset("/assets/js/nouislider.min.js") }}"></script>
<script src="{{ asset("/assets/js/bootstrap-datepicker.js") }}"></script>
<script src="{{ asset("/assets/js/material-kit.js") }}"></script>
<script src="{{ asset("/sweetalert/dist/sweetalert-dev.js") }}"></script>
<script type="text/javascript" src="{{ asset("/assets/js/bootstrap-table.js") }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.js"></script>
<script src="/js/main.js"></script>

@include('flash')
@yield('scripts')
</html>

