@extends('layouts.adminMaster')

@section('title') Deposit & Rent Settings @endsection

@section('page-title') Deposit & Rent Settings @endsection

@section('deposit-rent-settings-active') start active open @endsection

@section('content')
	<!-- BEGIN ROW -->
    <div class="row"> 
    	<!-- BEGIN COL -->                       
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            
            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title"> Deposit and Rent Settings
                <small>view all</small>
            </h3>
            <!-- END PAGE TITLE-->

            <!-- BEGIN MESSAGES -->
            @include('includes.messages')
            <!-- END MESSAGES -->

        	<!-- BEGIN TABLE -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th></th>              
                        <th> Room </th>
                        <th> Room Deposit </th>
                        <th> Water Deposit </th>
                        <th> Electricity Deposit </th>
                        <th> View </th>
                        <th> Edit </th>
                        <th> Delete </th>
                    </tr>
                </thead>
                <tbody>
                    
                    @if($data)
                        
                        @foreach($data as $datas)
                            <tr>
                                <td> {{ $loop->iteration }} </td>
                                <td> {{ $datas->room_id }} </td>
                                <td> {{ $datas->plot_number }} </td>
                                <td> {{ $datas->county }} </td>
                                <td> {{ $datas->street}} </td>
                                <td>
                                    <a href="{{ route('show-house', $house->id) }}" class='btn green btn-outline sbold uppercase'> <i class='fa fa-eye'></i> </a>
                                </td>
                                <td> 
                                    <a href="{{ route('edit-house', $house->id) }}" class='btn yellow btn-outline sbold uppercase'> <i class='fa fa-edit'></i> </a>
                                </td>
                                <td>
                                    <a href="{{ route('delete-house', $house->id) }}" class='btn red btn-outline sbold uppercase'> <i class='fa fa-trash'></i> </a>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="8"> {{ $houses->links() }} </td>
                        </tr>
                    @else
                        <tr>
                            <td colspan="8"> No records Available! </td>
                        </tr>

                    @endif
                                                                                            
                </tbody>
            </table>
        </div>
    </div>  
    <!-- END ROW -->
@endsection