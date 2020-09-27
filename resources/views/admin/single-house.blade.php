
@extends('layouts.adminMaster')

@section('title') Houses @endsection

@section('page-title') Houses @endsection

@section('houses-active') start active open @endsection

@section('content')
	<!-- BEGIN ROW -->
    <div class="row"> 
    	<!-- BEGIN COL -->                       
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            
            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title"> House
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
                            <th> House Name </th>
                            <th> Plot Number </th>
                            <th> County </th>
                            <th> Street </th>
                            <th> Section </th>
                            <th> Reference Number </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> {{ $house->name }} </td>
                            <td> {{ $house->plot_number }} </td>
                            <td> {{ $house->county }} </td>
                            <td> {{ $house->street }} </td>
                            <td> {{ $house->section }} </td>
                            <td> {{ $house->land_reference }} </td>
                        </tr>
                        <tr> <th colspan="6"> House Details </th></tr>
                        <tr> <td colspan="6"> {!! $house->details !!} </td></tr>
                        <tr>
                            <td colspan="3" style="text-align: center;">
                                <a href="{{ route('edit-house', $house->id) }}" class='btn yellow btn-outline sbold uppercase'> <i class='fa fa-edit'></i> Edit House Information </a>
                            </td>
            
                            <td colspan="3" style="text-align: center;">
                                <a href="{{ route('delete-house', $house->id) }}" class='btn red btn-outline sbold uppercase'> <i class='fa fa-trash'></i> Delete House Information </a>
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