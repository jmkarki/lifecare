<ul class="list-group">
 <!--  <a href="#" class="list-group-item active">
    <b><small>NAVIGATE</small></b>
  </a> -->
    <li class="list-group-item {{ ($url == 'home') ? 'selected-option': ''}}">
    {!! ($url == 'home') ? '<span class="badge"><i class="fa fa-angle-right"></i></span>': '' !!}    
    <a href="{{url('home')}}"><i class="fa fa-home"></i> Home</a>
  </li>
  <li class="list-group-item {{ ($url == 'client/create') ? 'selected-option': ''}}">
    {!! ($url == 'client/create') ? '<span class="badge"><i class="fa fa-angle-right"></i></span>': '' !!}
    
    <a href="{{url('client/create')}}"><i class="fa fa-plus-circle"></i> New Client</a>
  </li>
<!--   <li class="list-group-item">
{!! ($url == 'client/attach') ? '<span class="badge"><i class="fa fa-angle-right"></i></span>': '' !!}
    <a href="{{url('client/attach')}}"><i class="fa fa-link"></i> Attach Report</a>
  </li> -->
  <li class="list-group-item {{ ($url == 'client/view') ? 'selected-option': ''}}">
    {!! ($url == 'client/view') ? '<span class="badge"><i class="fa fa-angle-right"></i></span>': '' !!}
    <a href="{{url('client/view')}}"><i class="fa fa-file"></i> Show Reports</a>
  </li>
</ul>

