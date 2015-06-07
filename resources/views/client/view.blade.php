@extends('app')
@section('content')
<div class="container">
	<div class="row">
	<div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
	@include('include.sidebar-list')
	</div>
	<div class="col-md-9 col-lg-9 col-xs-12 col-sm-12">
  <div class="app-form-horizontal form-horizontal-inner">
    <div>
      <ul class="breadcrumb">
        <li>Customer Collection</li>
      </ul>
    </div>
    <div class="table-responsive">
      <table class="table">
        <tr>
          <th>SN</th>
          <th>Full Name</th>
          <th>Address</th>
          <th>Email</th>
          <th>Mobile</th>
        </tr>
      </table>
    </div>
  </div>
	</div>
	</div>
</div>
@endsection
