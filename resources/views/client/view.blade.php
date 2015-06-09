@extends('app')
@section('content')
<div class="container">
	<div class="row">
	<div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
	@include('include.sidebar-list')
	</div>
	<div class="col-md-9 col-lg-9 col-xs-12 col-sm-12">
  <div class="org-main">
    <div class="org-repos repo-list">
      <div class="repo-list-item customer-first-item">
      <div class="row">
        <div class="col-md-4 col-md-offset-8">
          <div class="form-group has-feedback">
              <input type="search" class="form-control search-client" placeholder="Type name and press enter ...">
              <span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
          </div>
        </div>
      </div>
        
      </div>
    @foreach($clients as $each)
      <div class="repo-list-item public source">
        <div class="repo-list-stats">
            <span class="hidden-xs">
             Updated {{App\Date::ago($each->updated_at)}}
            </span>
        </div>
        <h3 class="repo-list-name">
          <a href="{{url('/client/show?key='.$each->id)}}">
           {{$each->name}}</a>
        </h3>
          <p class="repo-list-description">
            <small><span class="glyphicon glyphicon-map-marker"></span></small> {{$each->full_address}}
          </p>
        <p class="repo-list-meta">
            <small><span class="glyphicon glyphicon-envelope"></span></small> {{$each->email}}
        </p>
      </div>
      @endforeach
    </div>
    {!!$clients->render()!!}
  </div>
	</div>
	</div>
</div>
@endsection
