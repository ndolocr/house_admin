

@extends('layouts.adminMaster')

@section('title') Houses @endsection

@section('page-title') Houses @endsection

@section('houses-active') start active open @endsection

@section('content')
    <!-- BEGIN ROW -->
    <div class="row">
        <!-- BEGIN COLUMN -->
        <div class="col-md-12">

            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title"> House
                <small>add</small>
            </h3>
            <!-- END PAGE TITLE-->
            
            <!-- BEGIN MESSAGES -->
            @include('includes.messages')
            <!-- END MESSAGES -->
            
            <!-- BEGIN FORM CREATION -->
            {!! Form::Open( ['route' => 'store-house', 'method' => 'POST', 'enctype' => 'multipart/form-data'] ) !!}
                
                <!-- BEGIN FIRST FORM SECTION COLUMN-->
                <div class="col-md-6">
                    
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light bordered" style="height: 320px">
                        
                        <!-- BEGIN FORM TITLE -->
                        <div class="portlet-title">
                            <div class="caption font-red-sunglo">
                                <i class="icon-settings font-red-sunglo"></i>
                                <span class="caption-subject bold uppercase"> House Details </span>
                            </div>                                   
                        </div>
                        <!-- END FORM TITLE -->
                        
                        <!-- CREATE FORM BODY -->
                        <div class="portlet-body form">
                            <div class="form-body">

                                <!-- BEGIN FORM GROUP -->
                                <div class="form-group">
                                    
                                    {{ Form::label('house_name', 'House Name') }}

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-info"></i>
                                        </span>
                                        {{ Form::text('house_name', '', ['class' => 'form-control', 'id' => 'house_name', 'placeholder' => 'House Name']) }}
                                    </div>

                                </div>
                                <!-- END FORM GROUP -->

                                <!-- BEGIN FORM GROUP -->
                                <div class="form-group">
                                    
                                    {{ Form::label('street', 'Street') }}

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-road"></i>
                                        </span>
                                        {{ Form::text('street', '', ['class' => 'form-control', 'id' => 'street', 'placeholder' => 'Street']) }}
                                    </div>

                                </div>
                                <!-- END FORM GROUP -->

                                <!-- BEGIN FORM GROUP -->
                                <div class="form-group">
                                    
                                    {{ Form::label('county', 'County') }}

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-map"></i>
                                        </span>
                                        {{ Form::text('county', '', ['class' => 'form-control', 'id' => 'county', 'placeholder' => 'County']) }}
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
                                <span class="caption-subject bold uppercase"> House Details </span>
                            </div>                                   
                        </div>
                        <!-- END FORM TITLE -->
                        
                        <!-- CREATE FORM BODY -->
                        <div class="portlet-body form">
                            <div class="form-body">

                                <!-- BEGIN FORM GROUP -->
                                <div class="form-group">
                                    
                                    {{ Form::label('section', 'Section') }}

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-stop"></i>
                                        </span>
                                        {{ Form::text('section', '', ['class' => 'form-control', 'id' => 'section', 'placeholder' => 'Section']) }}
                                    </div>

                                </div>
                                <!-- END FORM GROUP -->

                                <!-- BEGIN FORM GROUP -->
                                <div class="form-group">
                                    
                                    {{ Form::label('plot_number', 'Plot Number') }}

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-sort-numeric-asc"></i>
                                        </span>
                                        {{ Form::number('plot_number', '', ['class' => 'form-control', 'id' => 'plot_number', 'placeholder' => 'Plot Number']) }}
                                    </div>

                                </div>
                                <!-- END FORM GROUP -->

                                <!-- BEGIN FORM GROUP -->
                                <div class="form-group">
                                    
                                    {{ Form::label('land_reference', 'Land Reference') }}

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-address-card"></i>
                                        </span>
                                        {{ Form::text('land_reference', '', ['class' => 'form-control', 'id' => 'land_reference', 'placeholder' => 'Land Reference']) }}
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
                                <span class="caption-subject bold uppercase"> House Details </span>
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