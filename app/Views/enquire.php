<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Ansonika">
  <title>Enquire</title>
  
  <!-- Favicons-->
  <link rel="shortcut icon" href="<?=  base_url() ?>/skytour_admin/img/favicons.ico" type="image/x-icon">
  <link rel="apple-touch-icon" type="image/x-icon" href="<?=  base_url() ?>/skytour_admin/img/apple-touch-icon-57x57-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?=  base_url() ?>/skytour_admin/img/apple-touch-icon-72x72-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?=  base_url() ?>/skytour_admin/img/apple-touch-icon-114x114-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?=  base_url() ?>/skytour_admin/img/apple-touch-icon-144x144-precomposed.png">
   <!-- WYSIWYG Editor -->
   <link rel="stylesheet" href="<?=  base_url() ?>/skytour_admin/summernote/summernote-bs4.min.css">
   <link rel="stylesheet" href="<?=  base_url() ?>/skytour_admin/css/sweetalert2.css">

  <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  
  <!-- Bootstrap core CSS-->
  <link href="<?= base_url()?>/skytour_admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Main styles -->
  <link href="<?= base_url()?>/skytour_admin/css/admin.css" rel="stylesheet">
  <!-- Icon fonts-->
  <link href="<?= base_url()?>/skytour_admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Plugin styles -->
  <link href="<?= base_url()?>/skytour_admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Your custom styles -->
  <link href="<?= base_url()?>/skytour_admin/css/custom.css" rel="stylesheet">
  
</head>

<body class="fixed-nav sticky-footer" id="page-top">

  <?= $this->include('includes/sidebar');?>

  <div class="content-wrapper" style="background-color:#062C17;">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Bookings Enquire List</li>
      </ol>
    <div class="box_general" style="background-color:#062C17;">
      <div class="header_box">
        <h2 class="d-inline-block"><p style="color:white;">Enquire list</p></h2>
        <div class="filter">
          <div class="styled-select short">
            <select name="orderby">
              <option value="Any status">Any status</option>
              <option value="Approved">Approved</option>
              <option value="Pending">Pending</option>
              <option value="Cancelled">Cancelled</option>
            </select>
          </div>
        </div>
      </div>
      <div class="">
        <ul>
          <li  style="color:aliceblue">

                <?php if($enquire) { ?>
                <?php foreach($enquire as $cat): ?>

            
            <h4 ><p style="color:red;"><?php echo $cat['enquire']; ?></p></h4>
            <ul class="booking_list">

                <li class="pull-right"><a href="#0" class="btn_1 gray approve"><i class="fa fa-fw fa-check-circle-o"></i> Approve</a></li>
              <li class="pull-right"><a href="#0" class="btn_1 gray delete" data-id="<?php echo $cat['id']; ?>"><i class="fa fa-fw fa-times-circle-o"></i> Delete</a></li>
              <li><strong>Visit date</strong><?php echo $cat['date']; ?></li>
              <li><strong>Number of Peoples</strong><?php echo $cat['persons']; ?></li>
              <li><strong>Client Name</strong><?php echo $cat['name']; ?></li>
              <li><strong>Client Contacts</strong><?php echo $cat['phonenumber']; ?></li>
              <li><strong>Client Email</strong><?php echo $cat['email']; ?></li>
              <li><strong>Client Information</strong><?php echo $cat['message']; ?></li>

            </ul>
          
             <?php endforeach; ?>
                     <?php } 
                      else {

                     } ?>
          </li>

        
          
        </ul>
      </div>
    </div>
    <!-- /box_general-->
    <nav aria-label="...">
      <ul class="pagination pagination-sm add_bottom_30">
        <li class="page-item disabled">
          <a class="page-link" href="#" tabindex="-1">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>
    <!-- /pagination-->
    </div>
    <!-- /container-fluid-->
    </div>
    <!-- /container-wrapper-->
   <?= $this->include('includes/admin_footer');?>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="#0">Logout</a>
          </div>
        </div>
      </div>
    </div>
       <!-- Add User Modal-->
       <div class="modal fade" id="Destinationsmodal" tabindex="-1" role="dialog" aria-labelledby="addUser" aria-hidden="true">
       <div class="modal-dialog modal-lg">
       <form method="post" id="destinations_form" enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add Destinations</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
           <div class="row">
            <div class="col-sm-6">
          <div class="form-group">
            <label>Destinations Title</label>
            <input type="text" name="destinations_title" id="destinations_title" class="form-control" />
            <span id="destinations_title_error" class="text-danger"></span>
          </div>
        </div>
         <div class="col-sm-3">
         <div class="form-group">
            <label>Destinations Image</label>
            <input type="file" name="destinations_image" id="destinations_image" class="form-control" />
            <span id="destination_image" class="text-danger"></span>
          </div>
        </div>
          <div class="col-sm-3">
               <div class="form-group">
            <label>Destination  Areas</label>
            <select class="form-control select2" name="destinations_area" id="destinations_area"  value="" style="width: 100%;">
               <option selected="selected" value="">Select Area</option>
             <option selected="selected" value="nothern">Northen Tanzania</option>
              <option selected="selected" value="southern">Southern Tanzania</option>
               <option selected="selected" value="western">Western Tanzania</option>
                 <option selected="selected" value="coastal">Coastal Tanzania</option>
            
           </select>
            <span id="destinations_area_error" class="text-danger"></span>
          </div>
        </div>
         </div>
         <div class="row">
             <div class="col-sm-12">
             <div class="form-group">
            <label>Destinations Locations</label>
             <textarea class="form-control summernote" rows="5" name="destinations_location" id="destinations_location" value=""></textarea>
            <span id="destinations_location_error" class="text-danger"></span>
          </div>
        </div>
                    </div>
        <div class="row">
        <div class="col-sm-12">
             <div class="form-group">
            <label>Destinations When to Go</label>
             <textarea class="form-control summernote" rows="5" name="destinations_whentogo" id="destinations_whentogo" value=""></textarea>
            <span id="destinations_whentogo_error" class="text-danger"></span>
          </div>
        </div>
        </div>
        
       
        
           <div class="row">
             <div class="col-sm-12">
             <div class="form-group">
            <label>Destinations Description</label>
             <textarea class="form-control summernote" rows="5" name="destinations_description" id="destinations_description" value=""></textarea>
            <span id="destinations_description_error" class="text-danger"></span>
          </div>
        </div>
        </div>
          <div class="row">
           <div class="col-sm-12">
           <div class="form-group">
            <label>Destinations Attractions</label>
             <textarea class="form-control summernote" rows="5" name="destinations_attractions" id="destinations_attractions" value=""></textarea>
            <span id="destinations_attractions_error" class="text-danger"></span>
          </div>
        </div>
        </div>    
        </div>
        <div class="modal-footer">
          <input type="hidden" name="hidden_id" id="hidden_id" />
          <input type="hidden" name="action" id="action" value="Add" />
          <input type="submit" name="submit" id="submit_button" class="btn btn-success" value="Add" />
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </form>
  
  </div>
  </div>
    
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url()?>/skytour_admin/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url()?>/skytour_admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?= base_url()?>/skytour_admin/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?= base_url()?>/skytour_admin/vendor/chart.js/Chart.min.js"></script>
    <script src="<?= base_url()?>/skytour_admin/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?= base_url()?>/skytour_admin/vendor/datatables/dataTables.bootstrap4.js"></script>
  <script src="<?= base_url()?>/skytour_admin/vendor/jquery.magnific-popup.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?= base_url()?>/skytour_admin/js/admin.js"></script>
    <!-- Custom scripts for this page-->
    <script src="<?= base_url()?>/skytour_admin/js/admin-datatables.js"></script>
    <!-- WYSIWYG Editor -->
    <script src="<?=  base_url() ?>/skytour_admin/summernote/summernote-bs4.min.js"></script>
    <script src="<?=  base_url() ?>/skytour_admin/js/sweetalert2.all.min.js"></script>

    <script>
   $(function () {
    
    $('.summernote').summernote()  
  });
  </script>

<script>
 $(document).ready( function () {
 
  $('#addDestinations').click(function(){

    $('#destinations_form')[0].reset();

    $('.modal-title').text('Add Data');

    $('#destinations_title_error').text('');

    $('#destinations_description_error').text('');

    $('#destinations_location_error').text('');

    $('#destinations_attractions_error').text('');

    $('#destinations_area_error').text('');

    $('#destinations_whentogo_error').text('');

    $('#action').val('Add');

    $('#submit_button').val('Add');

    $('#Destinationsmodal').modal('show');
    

  });
    });

 $('#destinations_form').on('submit', function(event){

    event.preventDefault();

    $.ajax({

      url:"destinations/save",

      method:"POST",

      data:new FormData(this),
        contentType: false,  
        cache: false,  
        processData:false,  
        dataType: "json",  
                    

      beforeSend:function(){

        $('#submit_button').val('wait...');

        $('#submit_button').attr('disabled', 'disabled');

      }, 

      success:function(data)
      {

        $('#submit_button').val('Add');

        $('#submit_button').attr('disabled', false);

        if(data.error == 'yes')
        {

          $('#destinations_title_error').text(data.destinations_title_error);
          $('#destinations_description_error').text(data.destinations_description_error);
          $('#destinations_description_error').text(data.destinations_location_error);
          $('#destinations_attractions_error').text(data.destinations_attractions_error);
          $('#destinations_area_error').text(data.destinations_area_error);
          $('#destinations_whentogo_error').text(data.destinations_whentogo_error);

        }
        else
        {

          $('#Destinationsmodal').modal('hide');
          
          Swal.fire(
            'Added!',
            'Your  Destinations data has been Added.',
            'success'
             );

          location.reload();
    

        }

      }

    })

  });

  $(document).on('click', '.edit', function(){

    var id = $(this).data('id');
    
    $.ajax({

      url:"destinations/fetch_single_destinations",

      method:"POST",

      data:{id:id},

      dataType:'JSON',

      success:function(data)
      {
        
         $('#destinations_title').val(data.destinations_title);
          $('#destinations_area').val(data.destinations_area);
         $('#destinations_description').summernote('code',data.destinations_description);
         $('#destinations_attractions').summernote('code',data.destinations_attractions);
         $('#destinations_location').summernote('code',data.destinations_location);
         $('#destinations_whentogo').summernote('code',data.destinations_whentogo);

        $('#destination_image').html(data.destinations_image);

        $('.modal-header').text('Edit Destinations');

        $('#destinations_title_error').text('');


        $('#destinations_location_error').text('');
        $('#destinations_area_error').text('');
        $('#destinations_whentogo_error').text('');

        $('#destinations_attractions_error').text('');

        $('#action').val('Edit');

        $('#submit_button').val('Edit');

        $('#Destinationsmodal').modal('show');

        $('#hidden_id').val(id);

      }

    })

  });

  $(document).on('click', '.delete', function(){

var id = $(this).data('id');

Swal.fire({
title: 'Are you sure?',
text: 'You will not be able to recover Destinations Details',
icon: 'warning',
showCancelButton: true,
confirmButtonText: 'Yes, delete it!',
cancelButtonText: 'No, keep it'
}).then((result) => {
if (result.value) {

  $.ajax({

     url:"enquire/enquire_delete",

    method:"POST",

    data:{id:id},

     success:function(data)
    {
        
             Swal.fire(
        'Deleted!',
        'Your  Destinations data has been deleted.',
        'success'
         )
    
      location.reload();
    }


  })

} else if (result.dismiss === Swal.DismissReason.cancel) {
Swal.fire(
  'Cancelled',
  'Your Destinations data is safe :)',
  'error'
)
}
})


});



    $(document).on('click', '.inactive', function(){

    var id = $(this).data('id');
       
        $.ajax({

        url:"category/category_ctivate",

        method:"POST",

        data:{id:id},

        success:function(data)
        {
            
           Swal.fire(
      'Saved!',
      'Students Details have been deleted.',
      'success'
       )  
          location.reload();
        }

      });
  });

     $(document).on('click', '.active', function(){

    var id = $(this).data('id');
  
       
        $.ajax({

        url:"category/category_inactivate",

        method:"POST",

        data:{id:id},

        success:function(data)
        {
            
           Swal.fire(
      'Saved!',
      'Students Details have been deleted.',
      'success'
       )  
          location.reload();
        }

      });
  });


</script>
  
</body>
</html>
