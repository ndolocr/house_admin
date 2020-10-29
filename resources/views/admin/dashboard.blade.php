
@extends('layouts.adminMaster')

@section('title') Dashboard @endsection

@section('page-title') Dashboard @endsection

@section('dashboard-active') start active open @endsection

@section('content')

<!-- BEGIN DASHBOARD STATS 1-->
<div class="row">
	<!-- BEGIN COLUMN -->
        <div class="col-md-12">

            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title"> Dashboard
                <small>Statistics</small>
            </h3>
            <!-- END PAGE TITLE-->
        </div>
  

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat blue">
            <div class="visual">
                <i class="fa fa-home"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="{{ $house_count }}">0</span>
                </div>
                <div class="desc"> Our Houses </div>
            </div>
            <a class="more" href=""> View more
                <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat red">
            <div class="visual">
                <i class="fa fa-bed"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="{{ $room_count }}">0</span> 
                </div>
                <div class="desc"> Our Rooms </div>
            </div>
            <a class="more" href=""> View more
                <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat green">
            <div class="visual">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="1200"></span>
                </div>
                <div class="desc"> Tenants </div>
            </div>
            <a class="more" href=""> View more
                <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat purple">
            <div class="visual">
                <i class="fa fa-globe"></i>
            </div>
            <div class="details">
                <div class="number"> +
                    <span data-counter="counterup" data-value="89"></span>% </div>
                <div class="desc"> Transactions </div>
            </div>
            <a class="more" href="javascript:;"> View more
                <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="dashboard-stat red">
            <div class="visual">
                <i class="fa fa-bed"></i>
            </div>
            <div class="details">
                <div class="number">
                    <span data-counter="counterup" data-value="{{ $vacant_rooms_count }}">0</span> 
                </div>
                <div class="desc"> Vacant Rooms </div>
            </div>
            <a class="more" href=""> View more
                <i class="m-icon-swapright m-icon-white"></i>
            </a>
        </div>
    </div>

</div>
<div class="clearfix"></div>
<!-- END DASHBOARD STATS 1-->    

@endsection