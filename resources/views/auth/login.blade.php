@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-7 col-xs-offset-3 login-section">
			<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
			  <fieldset>
			    <legend class="text-center">Sign In</legend>
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your credentials.<br><br>
							<ol>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ol>
						</div>
					@endif

					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="form-group">
						<label class="col-md-4 control-label">Email</label>
						<div class="col-md-6">
							<input type="text" class="form-control" placeholder="Username" name="email" value="{{ old('username') }}">								
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label">Password</label>
						<div class="col-md-6">
							<input type="password" class="form-control" placeholder="Password" name="password">
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<div class="checkbox">
								<label>
									<input type="checkbox" name="remember"> Remember Me
								</label>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-md-6 col-md-offset-4">
							<button type="submit" class="btn btn-primary">Sign In</button>

							<a class="btn btn-link" href="{{ url('/password/email') }}"><small>Forgot Your Password?</small></a>
						</div>
					</div>
			  </fieldset>
			</form>
		</div>
	</div>
</div>
@endsection
