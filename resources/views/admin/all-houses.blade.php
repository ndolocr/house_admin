
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
            <h3 class="page-title"> Houses
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
                        <th> House Name </th>
                        <th> Plot Number </th>
                        <th> County </th>
                        <th> Street </th>
                        <th> View </th>
                        <th> Edit </th>
                        <th> Delete </th>
                    </tr>
                </thead>
                <tbody>
                    
                    @if($houses)
                        
                        @foreach($houses as $house)
                            <tr>
                                <td> {{ $loop->iteration }} </td>
                                <td> {{ $house->name }} </td>
                                <td> {{ $house->plot_number }} </td>
                                <td> {{ $house->county }} </td>
                                <td> {{ $house->street}} </td>
                                <td>
                                    <a href="" class='btn green btn-outline sbold uppercase'> <i class='fa fa-eye'></i> </a>
                                </td>
                                <td> 
                                    <a href="" class='btn yellow btn-outline sbold uppercase'> <i class='fa fa-edit'></i> </a>
                                </td>
                                <td>
                                    <a href="" class='btn red btn-outline sbold uppercase'> <i class='fa fa-trash'></i> </a>
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