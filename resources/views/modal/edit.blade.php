  <!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <div class="modal-header">
         <h3 class="panel-title"><strong>Edit</strong> Data</h3>       
      </div>
      
        <form class="form-horizontal" method="post" action="{{ route('shares.update',$share->id) }}">
                               @method('PATCH')
                               @csrf
                            
                                <div class="panel-heading">
                                </div>
                                <div class="panel-body">                                                                        
                              
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12 control-label">Name stock</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <label for="nama"></label>
                                                <input type="text" class="form-control" name="share_name" id="nama"  />
                                            </div>                                            
                                            <span class="help-block">Stock Name</span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Share Price</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-dollar"></span></span>
                                                <input type="text" class="form-control"  name="share_price" id="price" value="{{$share->share_price}}" />
                                            </div>                                            
                                            <span class="help-block">Price</span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <label class="col-md-3 col-xs-12 control-label">Share Quantity</label>
                                        <div class="col-md-6 col-xs-12">                                            
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-shopping-cart"></span></span>
                                                <input type="text" class="form-control" value="{{$share->share_qty}}" name="share_qty" id="qty" />
                                            </div>                                            
                                            <span class="help-block">Quantity</span>
                                        </div>
                                    </div>
                                  </div>
                               
      </form>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

