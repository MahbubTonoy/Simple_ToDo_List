@extends('layout')
@section('title', $data->title)
@section('content')
<h1>{{$data->title}}</h1>
<div class="main-agileinfo">
	<div class="agileits-top">
		<form action="{{route('saveUser')}}" method="POST">
			@csrf
			<input class="text" type="text" name="name" placeholder="Full Name" required="" autocomplete="off">
			<input class="text email" type="text" name="username" placeholder="Username" required="" autocomplete="off">
			<input class="text email" type="email" name="email" placeholder="Email" required="" autocomplete="off">
			<input class="text" type="password" name="password" placeholder="Password" required="" autocomplete="off">
			<input class="text w3lpass" type="password" name="password" placeholder="Confirm Password" required="" autocomplete="off">
			<div class="wthree-text">
				<label class="anim">
					<input type="checkbox" class="checkbox" name="tos" required="">
					<span>I Agree To The Terms & Conditions</span>
				</label>
				<div class="clear"> </div>
			</div>
			<input type="submit" value="SIGNUP">
		</form>
		<p>Already have an Account? <a href="{{route('login')}}"> Login Now!</a></p>
	</div>
</div>
@endsection