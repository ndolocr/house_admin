

@extends('layouts.adminMaster')

@section('title') Tenants @endsection

@section('page-title') Tenants @endsection

@section('tenants-active') start active open @endsection

@section('content')
    <!-- BEGIN ROW -->
    <div class="row">
        <!-- BEGIN COLUMN -->
        <div class="col-md-12">

            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title"> Tentants
                <small>add</small>
            </h3>
            <!-- END PAGE TITLE-->
            
            <!-- BEGIN MESSAGES -->
            @include('includes.messages')
            <!-- END MESSAGES -->
            
            <!-- BEGIN FORM CREATION -->
            {!! Form::Open( ['action' => 'TenantController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'] ) !!}
                
                <!-- BEGIN FIRST FORM SECTION COLUMN-->
                <div class="col-md-6">
                    
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light bordered" style="height: 380px">
                        
                        <!-- BEGIN FORM TITLE -->
                        <div class="portlet-title">
                            <div class="caption font-red-sunglo">
                                <i class="icon-settings font-red-sunglo"></i>
                                <span class="caption-subject bold uppercase"> Tenant Details </span>
                            </div>                                   
                        </div>
                        <!-- END FORM TITLE -->
                        
                        <!-- CREATE FORM BODY -->
                        <div class="portlet-body form">
                            <div class="form-body">

                                <!-- BEGIN FORM GROUP FOR CLIENT NAME -->
                                <div class="form-group">
                                    
                                    {{ Form::label('name', 'Client Name') }}

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-info"></i>
                                        </span>
                                        {{ Form::text('name', '', ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'Client Name']) }}
                                    </div>

                                </div>
                                <!-- END FORM GROUP FOR CLIENT NAME -->

                                <!-- BEGIN FORM GROUP FOR CLIENT ADDRESS -->
                                <div class="form-group">
                                    
                                    {{ Form::label('address', 'Client Address') }}

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-file"></i>
                                        </span>
                                        {{ Form::text('address', '', ['class' => 'form-control', 'id' => 'address', 'placeholder' => 'Client Address']) }}
                                    </div>

                                </div>
                                <!-- END FORM GROUP FOR CLIENT ADDRESS -->

                                <!-- BEGIN FORM GROUP FOR AREA CODE -->
                                <div class="form-group">
                                    
                                    {{ Form::label('area_code', 'Area Code') }}

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-map"></i>
                                        </span>
                                        {{ Form::text('area_code', '', ['class' => 'form-control', 'id' => 'area_code', 'placeholder' => 'Area Code']) }}
                                    </div>

                                </div>
                                <!-- END FORM GROUP FOR AREA CODE -->

                                <!-- BEGIN FORM GROUP FOR TOWN -->
                                <div class="form-group">
                                    
                                    {{ Form::label('town', 'Town') }}

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-map-pin"></i>
                                        </span>
                                        {{ Form::text('town', '', ['class' => 'form-control', 'id' => 'town', 'placeholder' => 'Town']) }}
                                    </div>

                                </div>
                                <!-- END FORM GROUP FOR TOWN -->

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
                    <div class="portlet light bordered" style="height: 380px">
                        
                        <!-- BEGIN FORM TITLE -->
                        <div class="portlet-title">
                            <div class="caption font-red-sunglo">
                                <i class="icon-settings font-red-sunglo"></i>
                                <span class="caption-subject bold uppercase"> Tenant Contacts </span>
                            </div>                                   
                        </div>
                        <!-- END FORM TITLE -->
                        
                        <!-- CREATE FORM BODY -->
                        <div class="portlet-body form">
                            <div class="form-body">

                                <!-- BEGIN FORM GROUP FOR EMAIL -->
                                <div class="form-group">
                                    
                                    {{ Form::label('email', 'Email') }}

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                        {{ Form::text('email', '', ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Email']) }}
                                    </div>

                                </div>
                                <!-- END FORM GROUP FOR EMAIL -->

                                <!-- BEGIN FORM GROUP FOR PHONE NUMBER -->
                                <div class="form-group">
                                    
                                    {{ Form::label('telephone', 'Phone Number') }}

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-phone"></i>
                                        </span>
                                        {{ Form::number('telephone', '', ['class' => 'form-control', 'id' => 'phone', 'placeholder' => 'Phone Nuber']) }}
                                    </div>

                                </div>
                                <!-- END FORM GROUP FOR PHONE NUMBER -->

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