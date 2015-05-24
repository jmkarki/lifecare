@extends('app')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3 col-md-offset-4 col-sm-4 col-sm-offset-3 col-xs-7 col-xs-offset-3 login-section">
		
			<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
			  <legend class="text-center">User Authentication </legend>
			  <div class="avatar"></div>
			  <fieldset>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					@if(count($errors) > 0)
					<div class="form-group">
						<div class="col-md-10 col-md-offset-1">							
				       		<div class="alert app-alert app-alert-danger">
				       		{!!$errors->first('email','<span class="app-text-danger">:message</span>')!!}
				       		{!!($errors->has('password') && $errors->has('email')) ? '<hr class="login-divider">': ''!!}
				        	{!!$errors->first('password','<span class="app-text-danger">:message</span>')!!}
				       	</div>
				       	
						</div>		
					</div>
					@endif
					<div class="form-group">						
						<div class="col-md-10 col-md-offset-1">
						<label class=" control-label">Email</label>
							<input type="text" class="form-control" placeholder="Email" name="email" value="{{old('username')}}">								
							<!-- {!!$errors->first('email','<span class="app-text-danger">:message</span>')!!} -->
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-10 col-md-offset-1">
							<label class="control-label">Password</label>	
							<input type="password" class="form-control" placeholder="Password" name="password">
							<!-- {!!$errors->first('password','<span class="app-text-danger">:message</span>')!!}  -->
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-10 col-md-offset-1">
							<div class="checkbox">
								<label>
									<input type="checkbox" name="remember"> Remember Me
								</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-10 col-md-offset-1">
							<button type="submit" class="btn btn-primary btn-block">Sign In</button> -->

							<!-- <a class="btn btn-link" href="{{ url('/password/email') }}"><small>Forgot Your Password?</small></a>	 -->
							
						</div>
					</div>
			  </fieldset>
			</form>
		</div>
	</div>
</div>
@endsection