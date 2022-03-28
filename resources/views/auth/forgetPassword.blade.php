@extends('layout')
@section('title', $data->title)
@section('content')
<h1>{{$data->title}}</h1>
<div class="main-agileinfo">
	<div class="agileits-top">
		<form action="#" method="post">
			@csrf
			<input class="text w3lpass" type="email" name="email" placeholder="Your Email" required="" autocomplete="off">
			<input type="submit" value="SEND VERIFICATION CODE">
		</form>
		<p>Don't have an Account? <a href="{{route('register')}}"> Register Now!</a></p>
	</div>
</div>
@endsection