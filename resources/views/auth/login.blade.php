@extends('layout')
@section('title', $data->title)
@section('content')
<h1>{{$data->title}}</h1>
<div class="main-agileinfo">
	<div class="agileits-top">
		{{-- {{$errors}} --}}
		<form action="{{route('loginUser')}}" method="POST">
			@csrf
			<input class="text" type="text" name="username" placeholder="Username" required="" autocomplete="off">
			<input class="text w3lpass" type="password" name="password" placeholder="Password" required="" autocomplete="off">
			<div class="wthree-text">
				<label class="anim">
					<input type="checkbox" class="checkbox" name="remember">
					<span>Remember Me?</span>
				</label>
				<div class="clear"> </div>
			</div>
			<input type="submit" value="LOGIN">
			<p>
				<a href="{{route('forgetPwd')}}">Forget Password</a>
			</p>
		</form>
		<p>Don't have an Account? <a href="{{route('register')}}"> Register Now!</a></p>
	</div>
</div>
@endsection