@extends('app')
@section('content')
<div class="container">
  <div class="row">
  <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
  @include('include.sidebar-list')
  </div>
  <div class="col-md-9 col-lg-9 col-xs-12 col-sm-12" ng-controller="AttachController" ng-cloak>
      <div>
      <ul class="breadcrumb">
        <li>Home</li> 
        <li>Attach Report</li>
      </ul>     
    </div>  
    <form class="form-horizontal app-form-horizontal" name="attachForm" ng-submit="save(attachForm)" novalidate>
      <fieldset>
        <div class="form-horizontal-inner">
          <div class="row">
          <div class="col-md-12" ng-cloak>
            <div ng-if="has && !attachForm.$valid" class="alert " ng-class="{'alert-danger text-danger app-alert-danger': has}" ng-cloak>
              @{{notallvalid}}
            <a href="#" class="pull-right" style="text-decoration: none!important;"><span class="danger-close">&times;</span></a>
            </div>
            <div ng-if="nofiles" class="alert " ng-class="{'alert-danger text-danger app-alert-danger': nofiles}" ng-cloak>
              @{{notallvalid}}
            <a href="#" class="pull-right" style="text-decoration: none!important;"><span class="danger-close">&times;</span></a>
            </div>
          </div>          
        </div>
          <div class="form-group">
            <label for="inputName" class="col-lg-4 control-label">Choose Customer <span class="text-danger">*</span></label>
            <div class="col-lg-8">
              <div class="customer-name-wrap">
                  <select class="form-control chosen-select" ng-model="client.client_id" required>
                    <option disabled selected value="">&nbsp;&nbsp;&nbsp;Choose Customer</option>
                    @foreach($clients as $each)
                      <option value="{{$each->id}}">{{$each->name}} <span class="hidden-xs">, {{$each->full_address}}</span></option>
                    @endforeach
                  </select>
              </div>              
            </div>
          </div>
          <div class="form-group">
            <label for="inputLabno" class="col-lg-4 control-label">Lab No. <span class="text-danger">*</span></label>
            <div class="col-lg-8">
              <input type="text" id="inputLabno" class="form-control" ng-model="client.labno" placeholder="Lab No" required>
            </div>
          </div>
          <input type="hidden" ng-model="client._token" ng-init="client._token='{{csrf_token()}}'">
          <div class="form-group">
            <label for="inputEmail" class="col-lg-4 control-label">Report Files <span class="text-danger">*</span></label>
            <div class="col-lg-8">
              <div class="choose-file-wrap">
                <span>Choose a File</span>
                  <input type="file" file-upload multiple>
              </div>
              <div class="files-holder table-responsive" ng-if="files.length > 0">
                <table class="table" width="100%">
                  <tr>
                  <th style="width: 30px;">SN</th>
                    <th>File Name</th>
                    <th style="width: 100px;">Size</th>
                    <th style="width: 30px;">Action</th>
                  </tr>
                  <tr ng-repeat="file in files">
                    <td align="center" style="width: 30px;">@{{$index + 1}}</td>
                    <td>@{{file.name}} </td>
                    <td style="width: 100px;">@{{fileSize(file.size)}}</td>
                    <td align="center" style="width: 30px;"><a href="" class="app-text-danger" ng-click="removeFile(file)">&times;</a></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-lg-8 col-lg-offset-4">
              <button type="reset" class="btn btn-default">Cancel</button>
              <button type="submit" class="btn btn-primary" ng-disabled="loading" ng-cloak>@{{btn}}</button>
              <span ng-if="loading" class="running-state">@include('include.svg-dot')</span>
            </div>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
  </div>
</div>
@endsection
