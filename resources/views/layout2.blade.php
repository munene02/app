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

<link rel="stylesheet" href="{{ asset("/assets/css/material-kit.css") }}">
<link rel="stylesheet" href="{{ asset("/assets/css/bootstrap.min.css") }}">
<link rel="stylesheet" href="{{ asset("/assets/css/style.css") }}">
<meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body class="signup-page">
@include('header')

<div class="wrapper">
	@yield('content')
</div>

</body>

<script src="{{ asset("/assets/js/jquery.min.js") }}"></script>
<script src="{{ asset("/assets/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("/assets/js/material.min.js") }}"></script>
<script src="{{ asset("/assets/js/nouislider.min.js") }}"></script>
<script src="{{ asset("/assets/js/bootstrap-datepicker.js") }}"></script>
<script src="{{ asset("/assets/js/material-kit.js") }}"></script>

</html>

