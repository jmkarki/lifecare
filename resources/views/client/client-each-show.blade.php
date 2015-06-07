@extends('app')
@section('content')
<div class="container">
  <div class="row">
  <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
    @include('include.sidebar-list')
  </div>
  <div class="col-md-9 col-lg-9 col-xs-12 col-sm-12" ng-controller="showEachController" ng-cloak>
      <div>
      <ul class="breadcrumb">
        <li>Home</li> 
        <li>Show Each</li>
      </ul>     
    </div>  
    <div class="app-form-horizontal form-horizontal-inner">
      <div> 
      <div class="heading-title">
        <small><span class="glyphicon glyphicon-user"></span></small> Personal Information
      </div>  
      <p></p> 
    </div>
    <div class="each-holder">
      {{$client->name}}     
    </div> 
    <div class="row">
        <div class="col-md-6"><small><span class="glyphicon glyphicon-map-marker"></span></small> <b>Address:</b> {{$client->full_address}}</div>
        <div class="col-md-6"><small><span class="glyphicon glyphicon-envelope"></span></small> <b>Email:</b> {{$client->email}}</div>
    </div>
    <p></p>
    <div class="row">
      <div class="col-md-6"><small><span class="glyphicon glyphicon-phone"></span></small> <b>Cell Phone:</b> {{$client->phone}}</div>
      <div class="col-md-6"><small><span class="glyphicon glyphicon-phone-alt"></span></small> <b>Home Phone:</b> {{$client->phone_home}}</div>
    </div>
    <p></p> 
    <div class="report-list">
      <div class="heading-title">
        Attached Reports
        <div class="attach-report">
          <a class="show-attach" href=""><span class="glyphicon glyphicon-link"></span> Attach Report</a>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-hover" align="center">
          <tr>
            <th>SN</th>
            <th>File Name</th>
            <th>Size</th>
            <th>Uploaded Date</th>
            <th style="width:89px">Action</th>
          </tr>
          <?php $sn = 1 ?>
          @foreach($client['reports'] as $each)
            <tr>
              <td>{{$sn}}</td>
              <td>{{$each->file_name}}</td>
              <td>{{round($each->file_size/1024, 1)}} KB</td>
              <td>{{date('F j, Y g:m a',strtotime($each->updated_at))}}</td>
              <td style="width:89px">
                <button class="btn btn-danger btn-sm">
                  <span class="glyphicon glyphicon-remove-circle"></span>
                </button>
               <!--  <button class="btn btn-success btn-sm">
                  <span class="glyphicon glyphicon-download-alt"></span>
                </button> -->
              </td>
            </tr>
            <?php $sn++ ?>
          @endforeach
        </table>
        <p></p>
      </div>
    </div>
    <div class="attach-from none">
      <form name="attachForm" method="POST" action="{{url('/client/attach')}}" ng-submit="doLoad(attachForm)" accept-charset="utf-8" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="attach-report-container">
      <div class="heading-title">
        <span class="glyphicon glyphicon-file"></span>
        Attach Reports
        <div class="attach-report">
          <a class="show-list" href="">Show Reports</a>
        </div>
      </div>
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
          <div class="col-md-9 col-lg-10 col-sm-8 col-xs-8"></div>
          <div class="col-md-2 col-lg-2 col-sm-2 col-xs-2">
            <input type="hidden" value="{{$client->id}}" name="client_id">
            <span ng-if="loading" class="running-now">@include('include.svg-dot')</span>
            <button class="btn btn-primary" type="submit" ng-disabled="loading"> <span class="glyphicon glyphicon-link"></span> @{{btn}}</button>
          </div>
        </div>
        <p></p>
      </form>
    </div>
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
