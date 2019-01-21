@extends('layout')

@section('content')


            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->                    
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a>Home</a></li>                   
                </ul>
                <!-- END BREADCRUMB -->                
                
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Home Page</h2>
                </div>                   
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                                               
                                <div class="panel-body">
                                    <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Data Tabel</h3>
                                </div>
                              
                                    <div class="panel-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                              <th data-class="expand">Stock Name</th>
                                              <th data-class="expand">Stock Price</th>
                                              <th data-class="expand">Stock Quantity</th>
                                              <th data-class="expand"><i class="fa fa-fw fa-cogs hidden-md hidden-sm hidden-xs"></i>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($shares as $share)
                                        <tr>
                                            <td>{{$share->id}}</td>
                                            <td>{{$share->share_name}}</td>
                                            <td>{{$share->share_price}}</td>
                                            <td>{{$share->share_qty}}</td>
                                            <td> 
                                                <a href="" title="Detail"  class="btn btn-primary fa fa-search"></a>
                                                <a href="{{route('shares.edit',$share->id)}}" title="Edit"  class="btn btn-info fa fa-pencil"></a>
                                                <a href="{{ route('shares.destroy', $share->id) }}" title="Delete" class="btn btn-danger fa fa-trash-o"></a>
                                                        <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-info fa fa-pencil" data-myname="{{$share->share_name}}" data-myprice="{{$share->share_price}}" data-myqty="{{$share->share_qty}}" data-toggle="modal" data-target="#edit" name="edit" title="Edit"></button>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>        
                                    {{ $shares->links() }}        
                                    <br>
                                    <a href="{{ route('shares.create')}}" class="btn btn-primary pull-right" title="add" > <i class="fa fa-plus-square"></i> add</a>
                                </div>
                            </div>
                                </div>
                         

                        </div>
                    </div>
                
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

      @include('modal.edit')





@endsection