@extends('app')
@section('content')
<div class="container">
  <div class="row">
  <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
    @include('include.sidebar-list')
  </div>
  <div class="col-md-9 col-lg-9 col-xs-12 col-sm-12" ng-controller="showEachController" ng-cloak>
  <header class="org-header">
    <div class="container">
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
      @forelse($client['reports'] as $each)
      <div class="repo-list-items">
        <div class="repo-list-stats">
             <button class="btn btn-danger btn-sm">
                  <span class="glyphicon glyphicon-remove-circle"></span>
                </button>
        </div>
        <h3 class="repo-list-name">
          <a href="#">
           {{$each->file_name}}</a>
        </h3>
          <p class="repo-list-description">
            <small><span class="glyphicon glyphicon-link"></span></small> {{App\Date::ago($each->updated_at)}}
          </p>
        <p class="repo-list-meta">
            <small><span class="glyphicon glyphicon-file"></span></small>
            Size - {{round(($each->file_size/1024)/1024, 2)}} MB
        </p>
       
      </div>
      @empty
        <p class="no-reports">No Reports</p>
      @endforelse
    </div> 
    <div class="attach-from none">
      <div class="files-heading-title">
        <h4>Attached Files</h4>
      </div> 
      <p></p>
      <form name="attachForm" method="POST" action="{{url('/client/attach')}}" ng-submit="doLoad(attachForm)" accept-charset="utf-8" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <div class="attach-report-container">
        
          <p></p>
          <div class="row">
            <div class="col-lg-2 col-md-3 col-xs-3 col-sm-3">
            <!-- <label class="hidden-xs hidden-sm"><b>Choose File</b></label> -->
            <div class="choose-file-wrap">
                <span>Choose a File</span>
                <input type="file" name="files[]" class="each-file" required>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">
              <!-- <label><b>File Name</b></label> -->
            </div>
            <div class="col-lg-5 col-md-3 col-xs-3 col-sm-3">
              <input type="text" class="form-control" placeholder="Lab No" name="labno[]" required>
            </div>
            <div class="col-lg-1 col-md-1 col-xs-1 col-sm-1">
              <button class="btn btn-primary btn-sm more-file" ng-disabled="loading"><span class="glyphicon glyphicon-plus-sign"></span></button>
            </div>
          </div>
          </div>
          <p></p>
          <div class="row">
            <div class="col-md-9 col-lg-9 col-sm-10 col-xs-10"></div>
            <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1">
                <span ng-if="loading" class="running-now">@include('include.svg-dot')</span>
                <button type="button" class="btn btn-sm btn-default show-list" ng-disabled="loading">Cancel</button>
            </div>
            <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2">&nbsp;&nbsp;
              <input type="hidden" value="{{$client->id}}" name="client_id">

              <button class="btn btn-primary btn-sm" type="submit" ng-disabled="loading"> <span class="glyphicon glyphicon-link"></span> @{{btn}}</button>
              
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
          '<div class="col-lg-2 col-md-3 col-xs-3 col-sm-3">'+
          
          '<div class="choose-file-wrap">'+
              '<span>Choose a File</span>'+
              '<input type="file" name="files[]" class="each-file" required>'+
            '</div>'+
          '</div>'+
          '<div class="col-lg-4 col-md-4 col-xs-4 col-sm-4">'+
            
          '</div>'+
          '<div class="col-lg-5 col-md-3 col-xs-3 col-sm-3">'+
            '<input type="text" class="form-control" placeholder="Lab No" name="labno[]" required>'+
          '</div>'+
          '<div class="col-lg-1 col-md-1 col-xs-1 col-sm-1">'+
            '<button type="button" class="btn btn-danger btn-sm remove-file" ng-disabled="loading"><span class="glyphicon glyphicon-remove-circle"></span></button>'+
          '</div>'+
        '</div>';

        $('.attach-report-container').append(html);
      return false;
    });

     $('.attach-report-container').on('change','.each-file' ,function(e){      
      var name = e.target.files[0].name;
      console.log(e.target.files[0].size);  
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
