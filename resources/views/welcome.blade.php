@extends('app')
<head>
	<title>Laravel</title>
	
	<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

	<style>
		body {
			margin: 0;
			padding: 0;
			width: 100%;
			height: 100%;
			color: #B0BEC5;
			display: table;
			font-weight: 100;
			font-family: 'Lato';
		}		

		.title {
			text-align: center;
			font-size: 96px;				
		}

		.footer {
			font-size: 24px;
			text-align: center;
			vertical-align: bottom;
		}

		.img1 {
			text-align: center;
		}
	</style>
</head>
@section('content')

<div class="container">
	
	<div class="title">Nickycenzino</div>
	<div class="img1">
		<img src="../images/zephyr.jpeg" alt=":( picture not found">
	</div>
	<div class="footer">Coming Soon!!</div>
</div>
@endsection