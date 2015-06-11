@extends('app')
@section('content')
<div class="container container-centered">
  <div class="row"> 
  <div class="col-md-12 col-lg-12" ng-controller="showEachController" ng-cloak>
  <header class="org-header">
    <div class="org-container">
      <div class="org-header-wrapper">
        <div class="org-header-info">
          <h1 class="org-name">
            <span>{{$client->name}}</span>
          </h1>
            <p class="org-description"><small><span class="glyphicon glyphicon-map-marker"></span></small> {{$client->full_address}}</p>
            <ul class="org-header-meta has-location has-blog has-email">
                <li class="meta-item">
                  <small>
                    <span class="glyphicon glyphicon-envelope"></span>
                  </small>
                  <span>{{$client->email}}</span>
                </li>
                <li class="meta-item">
                  <small><span class="glyphicon glyphicon-phone"></span></small>
                  <span>{{$client->phone}}</span>
                </li>
                <li class="meta-item">
                  <span class="glyphicon glyphicon-phone-alt"></span>
                  <span>{{$client->phone_home}}</span>
                </li>
                <li class="meta-item">
                  <span class="glyphicon glyphicon-link"></span>
                  <span>{{App\Date::ago($client->updated_at)}}</span>
                </li>
                 <li class="meta-item">
                <span class="glyphicon glyphicon-paperclip"></span>
                <a href="#" class="meta-link show-attach">Attach more Files ..</a>
              </li>
            </ul>
      </div>
    </div>
    </div>
  </header>
  <p></p>
  <div class="report-list">
    <div class="files-heading-title">
      <h4>Attached Files</h4>
    </div>    
      @forelse($reports as $index => $each)
        <div class="repo-list-item public source">
          <div class="repo-list-stats remove-file-section">
            <span ng-if="reports[{{$index}}].removing" class="remove-running">@include('include.svg-dot')</span>
            <button class="btn btn-orange btn-sm" ng-disabled="removing" ng-click="removeFile({{$each->id}},{{$index}})">
              <span class="glyphicon glyphicon-remove-circle"></span>
            </button>
          </div>
          <h3 class="repo-list-name">
            <a href="#">{{$each->file_name}}</a>
          </h3>
            <span ng-init="reports[{{$index}}].removing=false"></span>
            <p class="repo-list-description">
              <small><span class="glyphicon glyphicon-link"></span></small> {{App\Date::ago($each->updated_at)}}
              &nbsp;<small><span class="glyphicon glyphicon-file"></span></small>
              Size - {{App\Date::size($each->file_size)}}
            </p>
            <div class="participation-graph app-custom-graph">
              <svg class="bars" width="640" height="100">
                <g transform="translate(0.0, 0)">
                  <rect width="11.31" height="3.0" y="97.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(12.31, 0)">
                  <rect width="11.31" height="3.0" y="97.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(24.62, 0)">
                  <rect width="11.31" height="4.0" y="96.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(49.24, 0)">
                  <rect width="11.31" height="2.0" y="98.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(61.55, 0)">
                  <rect width="11.31" height="2.0" y="98.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(73.86, 0)">
                  <rect width="11.31" height="10.0" y="90.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(98.48, 0)">
                  <rect width="11.31" height="2.0" y="98.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(110.79, 0)">
                  <rect width="11.31" height="1.0" y="99.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(123.1, 0)">
                  <rect width="11.31" height="22.0" y="78.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(135.41, 0)">
                  <rect width="11.31" height="2.0" y="98.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(147.72, 0)">
                  <rect width="11.31" height="2.0" y="98.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(160.03, 0)">
                  <rect width="11.31" height="6.0" y="94.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(172.34, 0)">
                  <rect width="11.31" height="2.0" y="98.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(184.65, 0)">
                  <rect width="11.31" height="7.0" y="93.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(209.27, 0)">
                  <rect width="11.31" height="3.0" y="97.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(221.58, 0)">
                  <rect width="11.31" height="15.0" y="85.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(233.89, 0)">
                  <rect width="11.31" height="18.0" y="82.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(246.2, 0)">
                  <rect width="11.31" height="26.0" y="74.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(258.51, 0)">
                  <rect width="11.31" height="8.0" y="92.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(270.82, 0)">
                  <rect width="11.31" height="2.0" y="98.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(283.13, 0)">
                  <rect width="11.31" height="6.0" y="94.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(295.44, 0)">
                  <rect width="11.31" height="1.0" y="99.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(307.75, 0)">
                  <rect width="11.31" height="9.0" y="91.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(332.37, 0)">
                  <rect width="11.31" height="7.0" y="93.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(344.68, 0)">
                  <rect width="11.31" height="15.0" y="85.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(356.99, 0)">
                  <rect width="11.31" height="2.0" y="98.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(369.3, 0)">
                  <rect width="11.31" height="1.0" y="99.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(393.92, 0)">
                  <rect width="11.31" height="3.0" y="97.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(406.23, 0)">
                  <rect width="11.31" height="2.0" y="98.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(418.54, 0)">
                  <rect width="11.31" height="6.0" y="94.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(430.85, 0)">
                  <rect width="11.31" height="8.0" y="92.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(443.16, 0)">
                  <rect width="11.31" height="13.0" y="87.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(455.47, 0)">
                  <rect width="11.31" height="1.0" y="99.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(467.78, 0)">
                  <rect width="11.31" height="4.0" y="96.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(480.09, 0)">
                  <rect width="11.31" height="47.0" y="53.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(492.4, 0)">
                  <rect width="11.31" height="13.0" y="87.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(504.71, 0)">
                  <rect width="11.31" height="8.0" y="92.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(517.02, 0)">
                  <rect width="11.31" height="9.0" y="91.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(529.33, 0)">
                  <rect width="11.31" height="2.0" y="98.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(553.95, 0)">
                  <rect width="11.31" height="1.0" y="99.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(566.26, 0)">
                  <rect width="11.31" height="3.0" y="97.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(578.57, 0)">
                  <rect width="11.31" height="1.0" y="99.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(590.88, 0)">
                  <rect width="11.31" height="1.0" y="99.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(603.19, 0)">
                  <rect width="11.31" height="5.0" y="95.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(615.5, 0)">
                  <rect width="11.31" height="3.0" y="97.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
                <g transform="translate(627.81, 0)">
                  <rect width="11.31" height="37.0" y="63.0" fill="#f8f8f8"></rect>
                  <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
                </g>
              </svg>
            </div>
        </div>
      @empty
        <p class="no-reports">No Reports</p>
      @endforelse
      <p></p>
      {!!$reports->appends(['key' => $client->id])->render()!!}
    </div> 
    <div class="attach-from none">
      <div class="files-heading-title">
        <h4>Attach Other Files</h4>
      </div> 
      <p></p>
      <form name="attachForm" method="POST" action="{{url('/client/attach')}}" ng-submit="doLoad(attachForm)" accept-charset="utf-8" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <div class="attach-report-container">        
          <p></p>
          <div class="row">
            <div class="col-lg-2 col-md-3 col-xs-12 col-sm-12">
            <div class="choose-file-wrap">
                <span class="file-label">Choose a File</span>
                <input type="file" name="files[]" class="each-file" required>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
              <span class="text-muted">File name</span>
            </div>
            <div class="col-lg-5 col-md-4 col-xs-12 col-sm-6">
              <input type="text" class="form-control" placeholder="Lab No" name="labno[]" required>
            </div>
            <div class="col-lg-1 col-md-1 col-xs-12 col-sm-12">
              <button class="btn btn-primary btn-sm more-file" ng-disabled="loading"><span class="glyphicon glyphicon-plus-sign"></span></button>
            </div>
          </div>
          </div>
          <p></p>
          <div class="row">
            <div class="col-md-9 col-lg-9 col-sm-8 col-xs-12"></div>
            <div class="col-md-1 col-lg-1 col-sm-1 col-xs-12">
                <span ng-if="loading" class="running-now">@include('include.svg-dot')</span>
                <button type="button" class="btn btn-sm btn-default show-list" ng-disabled="loading">Cancel</button>
            </div>
            <div class="col-md-2 col-lg-2 col-sm-3 col-xs-12">
              <input type="hidden" value="{{$client->id}}" name="client_id">
              <button class="btn btn-primary btn-sm" type="submit" ng-disabled="loading"> <span class="attach-before"><span class="glyphicon glyphicon-link"></span> @{{btn}}</span></button>              
            </div>
          </div>
          <p></p>
        </form>
    </div>   
  </div>
  </div>
</div>
@endsection
@section('script')
  <script type="text/javascript">
  $(document).ready(function(){
    $('.more-file').on('click', function(){
      var html = '<hr><div class="row">'+
          '<div class="col-lg-2 col-md-3 col-xs-12 col-sm-12">'+          
          '<div class="choose-file-wrap">'+
              '<span class="file-label">Choose a File</span>'+
              '<input type="file" name="files[]" class="each-file" required>'+
            '</div>'+
          '</div>'+
          '<div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">'+
            '<span class="text-muted">File name</span>'+
          '</div>'+
          '<div class="col-lg-5 col-md-4 col-xs-12 col-sm-6">'+
            '<input type="text" class="form-control" placeholder="Lab No" name="labno[]" required>'+
          '</div>'+
          '<div class="col-lg-1 col-md-1 col-xs-12 col-sm-12">'+
            '<button type="button" class="btn btn-orange btn-sm remove-file" ng-disabled="loading"><span class="glyphicon glyphicon-remove-circle"></span></button>'+
          '</div>'+
        '</div>';

        $('.attach-report-container').append(html);
        return false;
    });

     $('.attach-report-container').on('change','.each-file' ,function(e){      
      var name = e.target.files[0].name;
      var length = name.length;
      if(length > 30)
      {
        var name1 = name.substr(0, 20);
        var name2 = name.substr(length - 8, length);
        name = name1+' ... ' + name2;
      }
      $(this).parent().parent().next().html(name);
      return false;
    });

    $('.attach-report-container').on('click','.remove-file' ,function(e){
      e.preventDefault();
      var thissel = $(this).parent().parent();
        thissel.prev('hr').remove();
        thissel.remove();
        return false;
    });
    $('.show-attach').on('click', function(){
      $('.report-list').toggleClass('none');
      $('.attach-from').toggleClass('none');

    });

    $('.show-list').on('click', function(){
        $('.report-list').toggleClass('none');
      $('.attach-from').toggleClass('none');
    });

  });
  </script>
@stop
