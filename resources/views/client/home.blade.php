@extends('app')
@section('content')
<div class="container">
	<div class="row">
	<!-- <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
	
	</div>
	<div class="col-md-9 col-lg-9 col-xs-12 col-sm-12"> -->
		<!-- <form class="form-horizontal app-form-horizontal" name="createForm" ng-submit="doPost(createForm, '{{url('/')}}')" novalidate>
		  <fieldset>
		    <legend class="text-center legend-title"><i class="fa fa-user"></i> <b>Create New Client</b></legend> -->
		<!--     <div class="form-horizontal-inner">
			    <div class="row">
					<div class="col-md-12">
						<div ng-if="has && !createForm.$valid" class="alert " ng-class="{'alert-danger text-danger app-alert-danger': has}">
						Not all required fields are valid.
						<a href="#" class="pull-right" style="text-decoration: none!important;"><span class="danger-close">&times;</span></a>
						</div>
					</div>		  		
				</div>
		   		<div class="form-group">
			      <label for="inputName" class="col-lg-2 control-label">Name <span class="text-danger">*</span></label>
			      <div class="col-lg-10">
			        <input type="text" class="form-control" ng-model="client.name" placeholder="Name" required>
			      </div>
			    </div>
			    <input type="hidden" ng-model="client._token" ng-init="client._token='{{csrf_token()}}'">
			    <div class="form-group">
			      <label for="inputEmail" class="col-lg-2 control-label">Email <span class="text-danger">*</span></label>
			      <div class="col-lg-10">
			        <input type="email" class="form-control" ng-model="client.email" placeholder="Email" required>
			      </div>
			    </div>
			    <div class="form-group">
			      <label for="textArea" class="col-lg-2 control-label">Full Address <span class="text-danger">*</span></label>
			      <div class="col-lg-10">
			        <textarea class="form-control" rows="3" ng-model="client.full_address" required></textarea>
			        <span class="help-block">Please enter the client's full address above for our record to properly recognize if needed in future...</span>
			      </div>
			    </div>
				<div class="form-group">
			      <label for="inputPhone" class="col-lg-2 control-label"><i class="fa fa-phone"></i> Phone (Home)</label>
			      <div class="col-lg-10">
			        <input type="text" class="form-control" ng-model="client.phone_home" ng-pattern="/^0|[1-9][0-9]*$/" placeholder="Phone No (Home)">
			      </div>
			    </div>
				<div class="form-group">
			      <label for="inputPhone" class="col-lg-2 control-label"><i class="fa fa-mobile-phone"></i> Phone (Cell) <span class="text-danger">*</span></label>
			      <div class="col-lg-10">
			        <input type="text" class="form-control" ng-model="client.phone" ng-pattern="/^0|[1-9][0-9]*$/" placeholder="Phone No (Cell)" required>
			      </div>
			    </div>
			    <div class="form-group">
			      <div class="col-lg-10 col-lg-offset-2">
			        <button type="reset" class="btn btn-default">Cancel</button>
			        <button type="submit" class="btn btn-primary">[[btn]]</button>
			        <span ng-if="running" class="running-state">@include('include.svg-dot')</span>
			      </div>
			    </div>
		    </div> 
		  </fieldset>
		</form>-->
	</div>
	</div>
</div>
@endsection


