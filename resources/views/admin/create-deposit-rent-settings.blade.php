

@extends('layouts.adminMaster')

@section('title') Deposit & Rent Settings @endsection

@section('page-title') Deposit & Rent Settings @endsection

@section('tenants-active') start active open @endsection

@section('content')
    <!-- BEGIN ROW -->
    <div class="row">
        <!-- BEGIN COLUMN -->
        <div class="col-md-12">

            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title"> Deposit & Rent Settings
                <small>add</small>
            </h3>
            <!-- END PAGE TITLE-->
            
            <!-- BEGIN MESSAGES -->
            @include('includes.messages')
            <!-- END MESSAGES -->
            
            <!-- BEGIN FORM CREATION -->
            {!! Form::Open( ['route' => 'store-tenants', 'method' => 'POST', 'enctype' => 'multipart/form-data'] ) !!}

                <!-- BEGIN FIRST FORM SECTION COLUMN-->
                <div class="col-md-6">
                    
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light bordered" style="height: 600px">
                        
                        <!-- BEGIN FORM TITLE -->
                        <div class="portlet-title">
                            <div class="caption font-red-sunglo">
                                <span class="caption-subject bold uppercase"> Room Details </span>
                            </div>                                   
                        </div>
                        <!-- END FORM TITLE -->
                        
                        <!-- CREATE FORM BODY -->
                        <div class="portlet-body form">
                            <div class="form-body">

                                <!-- BEGIN FORM GROUP -->
                                <div class="form-group">
                                    <label name="room_id" >House and Room </label>

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-home"></i>
                                        </span>
        
                                        <select name="room_id" id="room_id" class="form-control">
                                            @foreach($data as $room)
                                                <option value="{{ $room->id }}"> {{ $room->house->name }} - {{ $room->name }} </option>       
                                            @endforeach                             
                                        </select>
        
                                    </div>

                                </div>
                                <!-- END FORM GROUP -->

                                <!-- BEGIN FORM GROUP -->
                                <div class="form-group">
                                    <label name="room_deposit" >Room Deposit Paid</label>

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-money"></i>
                                        </span>
                                        <input type="number" name="room_deposit" id="room_deposit" class="form-control" placeholder="Room Deposit Paid">
                                    </div>

                                </div>
                                <!-- END FORM GROUP -->

                                <!-- BEGIN FORM GROUP -->
                                <div class="form-group">
                                    <label name="electricity_deposit" >Electricity Deposit Paid</label>

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-bolt"></i>
                                        </span>
                                        <input type="number" name="electricity_deposit" id="electricity_deposit" class="form-control" placeholder="Electricity Deposit Paid">
                                    </div>

                                </div>
                                <!-- END FORM GROUP -->

                                <!-- BEGIN FORM GROUP -->
                                <div class="form-group">
                                    <label name="water_deposit" >Water Deposit Paid</label>

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-tint"></i>
                                        </span>
                                        <input type="number" name="water_deposit" id="water_deposit" class="form-control" placeholder="Water Deposit Paid">
                                    </div>

                                </div>
                                <!-- END FORM GROUP -->

                                <!-- BEGIN FORM ACTION SECTION -->
                                <div class="form-actions" style="border: none !important">
                                    {{  Form::submit('Save', ['class' => 'btn blue uppercase']) }}
                                    {{ Form::reset('Cancel', ['class' => 'btn red uppercase']) }}
                                </div>
                                <!-- BEGIN FORM ACTION SECTION -->

                            </div>
                        
                        </div>
                        <!-- END FORM BODY -->

                    </div>
                    <!-- END SAMPLE FORM PORTLET-->

                </div>
                <!-- END FIRST FORM SECTION COLUMN -->

                <!-- BEGIN THIRD FORM SECTION COLUMN-->
                <div class="col-md-6">
                    
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light bordered" style="height: 600px">
                        
                        <!-- BEGIN FORM DESCRIPTION -->
                        <div class="portlet-title">
                            <div class="caption font-red-sunglo">
                                <i class="fa fa-info"></i>
                                <span class="caption-subject bold uppercase"> More Details </span>
                            </div>                                   
                        </div>
                        <!-- END FORM DESCRIPTION -->
                        
                        <!-- CREATE FORM BODY -->
                        <div class="portlet-body form">
                            <div class="form-body">

                                <!-- BEGIN FORM GROUP FOR EVENTS DESCRIPTION -->
                                <div class="form-group">
                                    
                                    <div class="input-group">
                                        {{ Form::textarea('details', '', ['class' => 'ckeditor form-control', 'id' => 'details']) }}
                                    </div>

                                </div>
                                <!-- END FORM GROUP FOR EVENTS DESCRIPTION -->

                            </div>
                        
                        </div>
                        <!-- END FORM BODY -->

                    </div>
                    <!-- END SAMPLE FORM PORTLET-->

                </div>
                <!-- END SECOND FORM SECTION COLUMN -->

            {!! Form::close() !!}
            <!-- END FORM CREATION -->
        
        </div>
        <!-- END COLUMN -->
    </div> 
    <!-- END ROW --> 

@endsection