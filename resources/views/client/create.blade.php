@extends('app')
@section('content')
<div class="container container-centered" ng-controller="CreateController">
	<div class="row">
	<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
	  <div class="org-main new-client-holder">
	    <div class="org-repos repo-list">
	      <div class="repo-list-item customer-first-item">
	        <div class="row">
	          <div class="col-md-6">
	            <span class="heading-collection"><i class="fa fa-user"></i> Create Client</span>
	          </div>
	          <div class="col-md-6"></div>
	        </div>        
	      </div>
			<form class="form-horizontal" name="createForm" ng-submit="doPost(createForm, '{{url('/')}}')" novalidate ng-cloak>
			  <fieldset>
			    <div class="form-horizontal-inner">
			    <div class="row">
					<div class="col-md-12">
						<div ng-if="has && !createForm.$valid" class="alert " ng-class="{'alert-danger text-danger app-alert-danger': has}">
						  	@{{notallvalid}}
							<a href="#" class="pull-right" style="text-decoration: none!important;"><span class="danger-close">&times;</span></a>
						</div>
					</div>          
			    </div>
				<div class="form-group">
					<label for="inputName" class="col-lg-3 control-label">Name <span class="text-danger">*</span></label>
					<div class="col-lg-9">
					  <div class="customer-name-wrap">
					    <input type="text" ng-minlength ="1" class="form-control" ng-change="showFeed(client.name)" ng-model="client.name" placeholder="Name" required autocomplete="off">
					    <div ng-class="{'searched-result': available}" ng-show="available">
						  <ul id="results" data-ng-repeat="people in peoples">
						    <li class="result">
						      <a class="each-result" ng-click="selectEach($index)">
						        <h6>
						          <i class="fa fa-user"></i> &nbsp;
						          <span class="customer-name">@{{people.name}}</span>
						          <span class="glyphicon glyphicon-map-marker"></span> 
						          <span class="searched-address">@{{people.full_address}}</span> 
						        </h6>
						      </a>
						    </li>
						  </ul>
					  </div>
					  </div>              
					</div>
				</div>
				<input type="hidden" ng-model="client._token" ng-init="client._token='{{csrf_token()}}'">
				<input type="hidden" ng-model="client.exists" ng-init="client.exists='0'">
				<div class="form-group">
				<label for="inputEmail" class="col-lg-3 control-label">Email <span class="text-danger">*</span></label>
				<div class="col-lg-9">
				  <input type="email" name="email" class="form-control" ng-change="confirmEmail(client.email)" ng-model="client.email" placeholder="Email" required unique>
				<span ng-if="!unique" ng-class="{'app-text-danger': !unique}">@{{emailText}}</span>           
				</div>
				</div>
			      <div class="form-group" ng-if="!isOld">
			        <label for="inputPassword" class="col-lg-3 control-label">Password <span class="text-danger">*</span></label>
			        <div class="col-lg-9">
			          <input type="password" class="form-control" ng-model="client.password" placeholder="Password" required>
			        </div>
			      </div>
			      <div class="form-group" ng-if="!isOld">
			        <label for="inputPassword" class="col-lg-3 control-label">Re-password <span class="text-danger">*</span></label>
			        <div class="col-lg-9">
			          <input type="password" class="form-control" name="repassword" ng-change="check(client.repassword)" ng-model="client.repassword" placeholder="Confirm Password" required match>
			          <span ng-if="match" class="help-block">Please remember the password you entered above ..</span>
			          <span ng-if="!match" ng-class="{'app-text-danger': !match}">@{{donotmatch}}</span>
			        </div>
			      </div>
			      <div class="form-group">
			        <label for="textArea" class="col-lg-3 control-label">Full Address <span class="text-danger">*</span></label>
			        <div class="col-lg-9">
			          <textarea class="form-control" rows="3" ng-model="client.full_address" required></textarea>
			          <span class="help-block">Please enter the client's full address above for our record to properly recognize if needed in future...</span>
			        </div>
			      </div>
			    <div class="form-group">
			        <label for="inputPhone" class="col-lg-3 control-label"><i class="fa fa-phone"></i> Phone (Home)</label>
			        <div class="col-lg-9">
			          <input type="text" class="form-control" ng-model="client.phone_home" ng-pattern="/^0|[1-9][0-9]*$/" placeholder="Phone No (Home)">
			        </div>
			      </div>
			    <div class="form-group">
			        <label for="inputPhone" class="col-lg-3 control-label"><i class="fa fa-mobile-phone"></i> Phone (Cell) <span class="text-danger">*</span></label>
			        <div class="col-lg-9">
			          <input type="text" class="form-control" ng-model="client.phone" ng-pattern="/^0|[1-9][0-9]*$/" placeholder="Phone No (Cell)" required>
			        </div>
			      </div>
			      <div class="form-group">
			        <div class="col-lg-9 col-lg-offset-3">
			          <button type="reset" class="btn btn-default" ng-click="doReset()">Cancel</button>
			          <button type="submit" class="btn btn-primary" ng-disabled="running">@{{btn}}</button>
			          <span ng-if="running" class="running-state">@include('include.svg-dot')</span>
			        </div>
			      </div>
			    </div>
			  </fieldset>
			</form>
	    </div>
	  </div>
	</div>
	</div>
</div>
@endsection