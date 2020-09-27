

@extends('layouts.adminMaster')

@section('title') Room @endsection

@section('page-title') Room @endsection

@section('room-active') start active open @endsection

@section('content')
    <!-- BEGIN ROW -->
    <div class="row">
        <!-- BEGIN COLUMN -->
        <div class="col-md-12">

            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title"> Room
                <small>add</small>
            </h3>
            <!-- END PAGE TITLE-->
            
            <!-- BEGIN MESSAGES -->
            @include('includes.messages')
            <!-- END MESSAGES -->
            
            <!-- BEGIN FORM CREATION -->
            {!! Form::Open( ['route' => 'store-room', 'method' => 'POST', 'enctype' => 'multipart/form-data'] ) !!}
                
                <!-- BEGIN FIRST FORM SECTION COLUMN-->
                <div class="col-md-6">
                    
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light bordered" style="height: 320px">
                        
                        <!-- BEGIN FORM TITLE -->
                        <div class="portlet-title">
                            <div class="caption font-red-sunglo">
                                <i class="icon-settings font-red-sunglo"></i>
                                <span class="caption-subject bold uppercase"> Room Details </span>
                            </div>                                   
                        </div>
                        <!-- END FORM TITLE -->
                        
                        <!-- CREATE FORM BODY -->
                        <div class="portlet-body form">
                            <div class="form-body">

                                <!-- BEGIN FORM GROUP -->
                                <div class="form-group">
                                    <label name="room_name" >Room Name</label>

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-info"></i>
                                        </span>
                                        <input type="text" name="room_name" id="room_name" class="form-control" placeholder="Room Name">
                                    </div>

                                </div>
                                <!-- END FORM GROUP -->

                                <!-- BEGIN FORM GROUP -->
                                <div class="form-group">
                                    
                                    {{ Form::label('status', 'Room Status') }}

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-question"></i>
                                        </span>
                                        <select name="status" id="status" class="form-control" >
                                            <option value="open"> Open </option>
                                            <option value="renovation"> Under Renovation </option>
                                            <option value="occupied"> Occupied </option>
                                        </select>
                                    </div>

                                </div>
                                <!-- END FORM GROUP -->

                            </div>
                        
                        </div>
                        <!-- END FORM BODY -->

                    </div>
                    <!-- END SAMPLE FORM PORTLET-->

                </div>
                <!-- END FIRST FORM SECTION COLUMN -->


                <!-- BEGIN SECOND FORM SECTION COLUMN-->
                <div class="col-md-6">
                    
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light bordered" style="height: 320px">
                        
                        <!-- BEGIN FORM TITLE -->
                        <div class="portlet-title">
                            <div class="caption font-red-sunglo">
                                <i class="icon-settings font-red-sunglo"></i>
                                <span class="caption-subject bold uppercase"> Room Details </span>
                            </div>                                   
                        </div>
                        <!-- END FORM TITLE -->
                        
                        <!-- CREATE FORM BODY -->
                        <div class="portlet-body form">
                            <div class="form-body">

                                <!-- BEGIN FORM GROUP -->
                                <div class="form-group">
                                    
                                    {{ Form::label('house', 'Select House') }}

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-home"></i>
                                        </span>
                                        <select name="house" id="house" class="form-control">
                                            <option value=""></option>
                                        </select>
                                    </div>

                                </div>
                                <!-- END FORM GROUP -->

                            </div>
                        
                        </div>
                        <!-- END FORM BODY -->

                    </div>
                    <!-- END SAMPLE FORM PORTLET-->

                </div>
                <!-- END SECOND FORM SECTION COLUMN -->


                <!-- BEGIN THIRD FORM SECTION COLUMN-->
                <div class="col-md-12">
                    
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light bordered" style="height: 600px">
                        
                        <!-- BEGIN FORM DESCRIPTION -->
                        <div class="portlet-title">
                            <div class="caption font-red-sunglo">
                                <i class="icon-info font-red-sunglo"></i>
                                <span class="caption-subject bold uppercase"> Room Details </span>
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
                <!-- END SECOND FORM SECTION COLUMN -->

            {!! Form::close() !!}
            <!-- END FORM CREATION -->
        
        </div>
        <!-- END COLUMN -->
    </div> 
    <!-- END ROW --> 

@endsection