

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
            {!! Form::Open( ['route' => 'store-tenants', 'method' => 'POST', 'enctype' => 'multipart/form-data'] ) !!}
                
                <!-- BEGIN FIRST FORM SECTION COLUMN-->
                <div class="col-md-6">
                    
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light bordered" style="height: 450px">
                        
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

                                <!-- BEGIN FORM GROUP -->
                                <div class="form-group">
                                    <label name="first_name" >First Name</label>

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-info"></i>
                                        </span>
                                        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name">
                                    </div>

                                </div>
                                <!-- END FORM GROUP -->

                                <!-- BEGIN FORM GROUP -->
                                <div class="form-group">
                                    <label name="middle_name" >Middle Name</label>

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-info"></i>
                                        </span>
                                        <input type="text" name="middle_name" id="middle_name" class="form-control" placeholder="Middle Name">
                                    </div>

                                </div>
                                <!-- END FORM GROUP -->

                                <!-- BEGIN FORM GROUP -->
                                <div class="form-group">
                                    <label name="last_name" >Last Name</label>

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-info"></i>
                                        </span>
                                        <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
                                    </div>

                                </div>
                                <!-- END FORM GROUP -->

                                <!-- BEGIN FORM GROUP -->
                                <div class="form-group">
                                    <label name="phone_number" >Phone Number</label>

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-phone"></i>
                                        </span>
                                        <input type="number" name="phone_number" id="phone_number" class="form-control" placeholder="Phone Number">
                                    </div>

                                </div>
                                <!-- END FORM GROUP -->

                                <!-- BEGIN FORM GROUP -->
                                <div class="form-group">
                                    <label name="email" >Email Address</label>

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                                        <input type="text" name="email" id="email" class="form-control" placeholder="Email Address">
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
                    <div class="portlet light bordered" style="height: 450px">
                        
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

                                <!-- BEGIN FORM GROUP -->
                                <div class="form-group">
                                    <label name="id_number" >National ID Number</label>

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-file"></i>
                                        </span>
                                        <input type="number" name="id_number" id="id_number" class="form-control" placeholder="National ID Number">
                                    </div>

                                </div>
                                <!-- END FORM GROUP -->

                                <!-- BEGIN FORM GROUP -->
                                <div class="form-group">
                                    
                                    {{ Form::label('passport_picture', 'Passport Picture - (Image size 200 x 200 pixels)') }}

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-image"></i>
                                        </span>
                                        {{ Form::file('passport_picture', ['class' => 'form-control']) }}
                                    </div>

                                </div>
                                <!-- END FORM GROUP -->

                                <!-- BEGIN FORM GROUP -->
                                <div class="form-group">
                                    
                                    {{ Form::label('id_scan', 'National ID Card Scan - (Image size 300 x 150 pixels)') }}

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-image"></i>
                                        </span>
                                        {{ Form::file('id_scan', ['class' => 'form-control']) }}
                                    </div>

                                </div>
                                <!-- END FORM GROUP -->

                                <!-- BEGIN FORM GROUP -->
                                <div class="form-group">
                                    
                                    {{ Form::label('contract', 'Contract')}}

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-file"></i>
                                        </span>
                                        {{ Form::file('contract', ['class' => 'form-control']) }}
                                    </div>

                                </div>

                            </div>
                        
                        </div>
                        <!-- END FORM BODY -->

                    </div>
                    <!-- END SAMPLE FORM PORTLET-->

                </div>
                <!-- END SECOND FORM SECTION COLUMN -->

                <!-- BEGIN FIRST FORM SECTION COLUMN-->
                <div class="col-md-6">
                    
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light bordered" style="height: 330px">
                        
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
                                    <label name="tenancy_begins_on" >Date of Tenancy Begin</label>

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                        <input type="date" name="tenancy_begins_on" id="tenancy_begins_on" class="form-control">
                                    </div>

                                </div>
                                <!-- END FORM GROUP -->

                                <!-- BEGIN FORM GROUP -->
                                <div class="form-group">
                                    <label name="rent_payable_on" >Rent Payable On</label>

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </span>
                                        <input type="date" name="rent_payable_on" id="rent_payable_on" class="form-control">
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
                    <div class="portlet light bordered" style="height: 330px">
                        
                        <!-- BEGIN FORM TITLE -->
                        <div class="portlet-title">
                            <div class="caption font-red-sunglo">                            
                                <span class="caption-subject bold uppercase"> Deposits And Rent Payment  </span>
                            </div>                                   
                        </div>
                        <!-- END FORM TITLE -->
                        
                        <!-- CREATE FORM BODY -->
                        <div class="portlet-body form">
                            <div class="form-body">

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
                                <i class="fa fa-info"></i>
                                <span class="caption-subject bold uppercase"> Details </span>
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