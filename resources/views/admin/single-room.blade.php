
@extends('layouts.adminMaster')

@section('title') Rooms @endsection

@section('page-title') Rooms @endsection

@section('rooms-active') start active open @endsection

@section('content')
	<!-- BEGIN ROW -->
    <div class="row"> 
    	<!-- BEGIN COL -->                       
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            
            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title"> Room
                <small>view details</small>
            </h3>
            <!-- END PAGE TITLE-->

            <!-- BEGIN MESSAGES -->
            @include('includes.messages')
            <!-- END MESSAGES -->
            
            <!-- BEGIN ROW -->
            <div class="row">
                <!-- BEGIN TABLE -->
                <table class="table table-striped">
                    <thead>
                        <tr>             
                            <th> Room Name </th>
                            <th> House it Belongs to </th>
                            <th> Status </th>                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> {{ $data->name }} </td>
                            <td> {{ $data->house->name }} </td>
                            <td> {{ $data->status }} </td>
                        </tr>
                        <tr> <th colspan="3"> Room Details </th></tr>
                        <tr> <td colspan="3"> {!! $data->details !!} </td></tr>
                        <tr>
                            <td style="text-align: center;">
                                <a href="{{ route('edit-room', $data->id) }}" class='btn yellow btn-outline sbold uppercase'> <i class='fa fa-edit'></i> Edit Room Information </a>
                            </td>
                            
                            <td></td>
                            
                            <td style="text-align: center;">
                                <a href="{{ route('delete-room', $data->id) }}" class='btn red btn-outline sbold uppercase'> <i class='fa fa-trash'></i> Delete Room Information </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- END TABLE -->
            </div>
            <!-- END ROW -->
            
        </div>
    </div>  
    <!-- END ROW -->
@endsection