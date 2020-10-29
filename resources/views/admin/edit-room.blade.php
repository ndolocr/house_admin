

@extends('layouts.adminMaster')

@section('title') Room @endsection

@section('page-title') Room @endsection

@section('rooms-active') start active open @endsection

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
            {!! Form::Open( ['route' => ['update-room', $data->id], 'method' => 'POST', 'enctype' => 'multipart/form-data'] ) !!}
                
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
                                        <input type="text" name="room_name" id="room_name" class="form-control" placeholder="Room Name" value="{{ $data->name }}">
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
                                            <option value="{{$data->status}}"> {{$data->status}} </option>
                                            <option value="Vacant"> Vacant </option>
                                            <option value="Occupied"> Occupied </option>
                                            <option value="Not Renovated"> Not Renovation </option>
                                            <option value="Under Renovation"> Under Renovation </option>
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
                                    
                                    {{ Form::label('house_id', 'Select House') }}

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-home"></i>
                                        </span>
                                        <select name="house_id" id="house_id" class="form-control">
                                            <option value="{{ $data->house_id }}"> {{ $data->house->name }} </option>
                                            @if($house)
                                                @foreach($house as $houses)
                                                    <option value="{{ $houses->id }}"> {{ $houses->name }} </option>
                                                @endforeach
                                            @else
                                                <option>No Houses Available</option>
                                            @endif
                                        </select>

                                        <span class="input-group-addon">
                                            <a href="{{ route('create-house') }}" style="color: #069C06;"> <i class="fa fa-plus"></i> </a>
                                        </span>
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
                                        {{ Form::textarea('details', $data->details, ['class' => 'ckeditor form-control', 'id' => 'details']) }}
                                    </div>

                                </div>
                                <!-- END FORM GROUP FOR EVENTS DESCRIPTION -->
                                
                                <!-- BEGIN FORM ACTION SECTION -->
                                <div class="form-actions" style="border: none !important">
                                    {{ Form::hidden('_method', 'PUT') }}
                                    {{ Form::submit('Save', ['class' => 'btn blue uppercase']) }}
                                    <a href="{{ route('all-rooms') }}" class='btn red sbold uppercase'> Cancel  </a>
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