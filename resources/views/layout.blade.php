<!DOCTYPE html>
<html lang="en">
<head>        
@include('shares.header')      
</head>
 <style>
        .container-fluid
         {
            padding-right:0;
            padding-left:0;
            margin-right:auto;
            margin-left:auto
         }
 </style>
<body>
<div class="container-fluid">	
<!-- START PAGE CONTAINER -->
    <div class="page-container">
            
    @include('shares.sidebar')


    @yield('content')

    
     </div>
</div>



<script>
 $('#edit').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget);
  console.log('hai');
  var modal=$(this);
  var nama = button.data("myname");
  var price = button.data("myprice");
  var qty = button.data("myqty");
      modal.find('#nama').val(nama);
      modal.find('#price').val(price);
      modal.find('#qty').val(qty);

})   
</script>

/*--  var nama = button.data('myname')
  var price = button.data('myprice')
  var nqty = button.data('myqty')
 console.log("worked");
   // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-body #nama').val(nama);
  modal.find('.modal-body #price').val(price);
  modal.find('.modal-body #qty').val(qty);
  */  
@include('shares.loader')
  	
</body>

</html>