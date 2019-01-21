@extends('layout')

@section('content')


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
                    <li><a href="{{ route('shares.index')}}">Home</a></li>                    
                    <li class="active">Create</li>
                </ul>
                <!-- END BREADCRUMB -->                
                               
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">




                      <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" method="post" action="{{ route('shares.store') }}">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Input</strong> Data</h3>
                                    
                                </div>
                                <div class="panel-body">                                                                        
                                    @csrf
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Name stock</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input type="text" class="form-control" name="share_name"/>
                                            </div>                                            
                                            <span class="help-block">Stock Name</span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Share Price</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-dollar"></span></span>
                                                <input type="text" class="form-control" name="share_price"/>
                                            </div>                                            
                                            <span class="help-block">Price</span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Share Quantity</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-shopping-cart"></span></span>
                                                <input type="text" class="form-control" name="share_qty"/>
                                            </div>                                            
                                            <span class="help-block">Quantity</span>
                                        </div>
                                    </div>
                                  </div>
                                </div>

          
                                <div class="panel-footer">
                                    <a href="{{ route('shares.index')}}" class="btn btn-default">Back</a>


                                    <button type="Submit" class="btn btn-primary pull-right">Submit</button>
                                </div>
      </form>
     
    </div>
  </div>
</div>
</div>


@endsection