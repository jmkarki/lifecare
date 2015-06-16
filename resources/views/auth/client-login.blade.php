@extends('auth.default')
@section('content')
<div class="content-holder">
	<div class="container">
		@if(count($errors) > 0)
			<div class="error-container form-box-error">					
	       		<div class="alert app-alert app-alert-danger">
		       		{!!$errors->first('email','<span class="text-danger">:message</span><br>')!!}
		       		{!!($errors->has('password') && $errors->has('email')) ? '<hr>': ''!!}
		        	{!!$errors->first('password','<span class="text-danger">:message</span>')!!}
		        	{!!($errors->has('user_id')) && $errors->has('password') ? '<hr>': ''!!}
		        	{!!$errors->first('user_id','<span class="text-danger">:message</span>')!!}

	   			</div>
	       	</div>
		@endif
		@if($error)        
	    <div class="error-container form-box-error">
	       	<div class="alert app-alert app-alert-danger">
	       		{{$error}}
	       	</div>
	    </div>
       	@endif
		<div class="login-container">
			<div class="legend">
				<h3>User LogIn</h3>
			</div>
			<div id="output"></div>
			<div class="avatar"></div>
			<div class="form-box" ng-controller="LoginFormController">	    
			    <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/client') }}">
			        <input name="email" type="email" placeholder="YOUR EMAIL" value="{{old('email')}}">
			        <input type="password" class="flat-input" name="password" placeholder="PASSWORD">
			        <input type="text" name="user_id" placeholder="SECRET KEY" value="{{old('user_id')}}" autocomplete="off">
			        <input type="hidden" name="_token" value="{{ csrf_token() }}"><p></p>
			        <button class="btn btn-primary btn-block login" ng-click="checkLogin()" type="submit" ng-cloak>@{{buttonText}} <span class="glyphicon glyphicon-log-in"></span></button>
			    </form>
			</div>
		</div> 
	</div>
</div>
@stop