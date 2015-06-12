@extends('app')
@section('content')
<div class="container container-centered" ng-controller="ViewAllController">
	<div class="row">
	<div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
  <div class="org-main">
    <div class="org-repos repo-list">
      <div class="repo-list-item customer-first-item">
        <div class="row">
          <div class="col-md-6 heading-column-text">
            <span class="heading-collection"><i class="fa fa-users"></i> Collections</span>
          </div>
          <div class="col-md-6">
            <div class="form-group has-feedback">
                <input type="search" class="form-control search-client" ng-model="search.query" ng-change="showFeed(search.query)" placeholder="Type name and press enter, Updates in real time ...">
                <span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
                <div ng-class="{'searched-result': available}" ng-show="available" ng-cloak>
                  <div class="search-found">
                    <span ng-if="peoples.length > 0">Found results for "@{{search.query}}"</span>
                        <span ng-show="!peoples.length > 0">No match found for "@{{search.query}}"</span>
                  </div>
                  <ul id="results" data-ng-repeat="people in peoples">
                    <li class="result">
                      <a class="each-result" ng-click="selectEach($index)" href="{{url('client/show?key=')}}@{{people.id}}">
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
      </div>
    @foreach($clients as $each)
      <div class="repo-list-item public source">
        <div class="repo-list-stats">
            <span class="hidden-xs">             
            <p><small><span class="glyphicon glyphicon-file"></span></small> Reports {{$each->reports->count()}}</p>
            </span>
            <span class="hidden-xs">
             <p><small><i class="fa fa-cloud"></i></small> {{App\Date::ago($each->updated_at)}}</p>
            </span>            
        </div>
        <h3 class="repo-list-name">
          <a href="{{url('/client/show?key='.Vinkla\Hashids\Facades\Hashids::encode($each->id))}}">
           {{$each->name}}</a>
        </h3>
          <p class="repo-list-description">
            <small><span class="glyphicon glyphicon-map-marker"></span></small> {{$each->full_address}}
          </p>
        <p class="repo-list-meta">
            <small><span class="glyphicon glyphicon-envelope"></span></small> {{$each->email}}
        </p>
        <div class="participation-graph">
          <svg class="bars" width="640" height="100">
          <g transform="translate(0.0, 0)">
            <rect width="11.31" height="8.0" y="92.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(12.31, 0)">
            <rect width="11.31" height="5.0" y="95.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(24.62, 0)">
            <rect width="11.31" height="22.0" y="78.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(36.93, 0)">
            <rect width="11.31" height="19.0" y="81.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(49.24, 0)">
            <rect width="11.31" height="54.0" y="46.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(61.55, 0)">
            <rect width="11.31" height="5.0" y="95.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(73.86, 0)">
            <rect width="11.31" height="2.0" y="98.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(86.17, 0)">
            <rect width="11.31" height="17.0" y="83.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(98.48, 0)">
            <rect width="11.31" height="33.0" y="67.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(110.79, 0)">
            <rect width="11.31" height="8.0" y="92.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(123.1, 0)">
            <rect width="11.31" height="2.0" y="98.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(135.41, 0)">
            <rect width="11.31" height="2.0" y="98.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(147.72, 0)">
            <rect width="11.31" height="10.0" y="90.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(160.03, 0)">
            <rect width="11.31" height="38.0" y="62.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(172.34, 0)">
            <rect width="11.31" height="16.0" y="84.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(184.65, 0)">
            <rect width="11.31" height="11.0" y="89.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(196.96, 0)">
            <rect width="11.31" height="2.0" y="98.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(209.27, 0)">
            <rect width="11.31" height="35.0" y="65.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(221.58, 0)">
            <rect width="11.31" height="16.0" y="84.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(246.2, 0)">
            <rect width="11.31" height="12.0" y="88.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(258.51, 0)">
            <rect width="11.31" height="17.0" y="83.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(270.82, 0)">
            <rect width="11.31" height="31.0" y="69.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(295.44, 0)">
            <rect width="11.31" height="20.0" y="80.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(307.75, 0)">
            <rect width="11.31" height="17.0" y="83.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(320.06, 0)">
            <rect width="11.31" height="8.0" y="92.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(332.37, 0)">
            <rect width="11.31" height="23.0" y="77.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(344.68, 0)">
            <rect width="11.31" height="1.0" y="99.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(381.61, 0)">
            <rect width="11.31" height="21.0" y="79.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(393.92, 0)">
            <rect width="11.31" height="49.0" y="51.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(406.23, 0)">
            <rect width="11.31" height="58.0" y="42.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(418.54, 0)">
            <rect width="11.31" height="3.0" y="97.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(430.85, 0)">
            <rect width="11.31" height="6.0" y="94.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(443.16, 0)">
            <rect width="11.31" height="7.0" y="93.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(455.47, 0)">
            <rect width="11.31" height="1.0" y="99.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(467.78, 0)">
            <rect width="11.31" height="1.0" y="99.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(480.09, 0)">
            <rect width="11.31" height="8.0" y="92.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(492.4, 0)">
            <rect width="11.31" height="40.0" y="60.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(504.71, 0)">
            <rect width="11.31" height="32.0" y="68.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(517.02, 0)">
            <rect width="11.31" height="3.0" y="97.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(529.33, 0)">
            <rect width="11.31" height="10.0" y="90.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(541.64, 0)">
            <rect width="11.31" height="14.0" y="86.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(553.95, 0)">
            <rect width="11.31" height="14.0" y="86.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(566.26, 0)">
            <rect width="11.31" height="11.0" y="89.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(578.57, 0)">
            <rect width="11.31" height="17.0" y="83.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(590.88, 0)">
            <rect width="11.31" height="4.0" y="96.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(615.5, 0)">
            <rect width="11.31" height="2.0" y="98.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          <g transform="translate(627.81, 0)">
            <rect width="11.31" height="5.0" y="95.0" fill="#f8f8f8"></rect>
            <rect width="11.31" height="0.0" y="100.0" fill="#dedede"></rect>
          </g>
          </svg>
        </div>
      </div>
      @endforeach
    </div>
    {!!$clients->render()!!}
  </div>
	</div>
	</div>
</div>
@endsection
