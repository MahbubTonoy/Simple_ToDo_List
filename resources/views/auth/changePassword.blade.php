@extends('layout')
@section('title', $data->title)
@section('content')
<h1>{{$data->title}}</h1>
<div class="main-agileinfo">
	<div class="agileits-top">
		<form action="#" method="post">
			@csrf
			<input class="text" type="password" name="oldpass" placeholder="Old Password" required="" autocomplete="off">
			<input class="text w3lpass" type="password" name="newpass" placeholder="New Password" required="" autocomplete="off">
			<input class="text w3lpass" type="password" name="newpass" placeholder="Confirm Password" required="" autocomplete="off">

			<input type="submit" value="LOGIN">
			<p>
				<a href="{{route('forgetPwd')}}">Forget Password</a>
			</p>
		</form>
		<p>Don't have an Account? <a href="{{route('register')}}"> Register Now!</a></p>
	</div>
</div>
@endsection