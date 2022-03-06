<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Ansonika">
  <title>SKYMWAMOTO - Admin dashboard Hotels</title>
	
  <!-- Favicons-->
  <link rel="shortcut icon" href="<?= base_url()?>/skytour_admin/img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" type="image/x-icon" href="<?= base_url()?>/skytour_admin/img/apple-touch-icon-57x57-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?= base_url()?>/skytour_admin/img/apple-touch-icon-72x72-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?= base_url()?>/skytour_admin/img/apple-touch-icon-114x114-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?= base_url()?>/skytour_admin/img/apple-touch-icon-144x144-precomposed.png">
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

  <!-- /Navigation-->
  <!-- /Navigation-->
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Hotels</li>
      </ol>
		<!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
        <div class="col text-left">
            <button type="button" name="addDestinations" id="addDestinations" class="btn_1">Add Hotels</button>
          </div>
        <div class="card-body">
         
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>SN</th>
                  <th>Image</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Features </th>
                  <th>Price </th>
                  <th>Destinations</th>
                  <th>Action</th>
                  
                </tr>
              </thead>
           
              <tbody>
                      <?php $sn =1;?>
                      <?php if($hotels) { ?>
                      <?php foreach($hotels as $cat): ?>
                      <tr>
                         <td><?php echo $sn++; ?></td>
                        <td><img src="<?= base_url('uploads/hotels_image/'.$cat['hotels_image']) ?>" alt="image" width="50px" height="50px"></td> 
                        
                        <td><?php echo $cat['hotels_title']; ?></td> 
                        <td><?php echo $cat['hotels_description']; ?></td> 
                        <td><?php echo $cat['hotels_features']; ?></td>
                        <td><?php echo $cat['hotels_price']; ?></td> 
                        <td><?php echo $cat['hotels_destinations']; ?></td> 
                        <td>
                              <button class="btn btn-warning  edit" data-id="<?php echo $cat['id']; ?>">Edit</button>
                              <button class="btn btn-danger  delete" data-id="<?php echo $cat['id']; ?>" >Delete</button>

                          </td>
                       
                         
                      </tr>
                     <?php endforeach; ?>
                     <?php } 
                      else {

                     } ?>

                   </tbody>
            </table>
          </div>
        </div>
        
      </div>
	  <!-- /tables-->
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
          <h4 class="modal-title">Add Hotels</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
           <div class="row">
            <div class="col-sm-6">
          <div class="form-group">
            <label>Hotels Title</label>
            <input type="text" name="hotels_title" id="hotels_title" class="form-control" />
            <span id="hotels_title_error" class="text-danger"></span>
          </div>
        </div>
    
          <div class="col-sm-6">
         <div class="form-group">
            <label>Hotels Destinations</label>
            <select class="form-control select2" name="hotels_destinations" id="hotels_destinations"  value="" style="width: 100%;">
             
             <?php if($destinations):?>
             <?php foreach($destinations as $inst):?>
             <option selected="selected" value="<?= $inst['id']?>"><?= $inst['destinations_title']?></option>
              <?php endforeach; ?>
              <?php endif; ?>
           </select>
            <span id="hotels_destinations_error" class="text-danger"></span>
          </div>
        </div>
         </div>
         <div class="row">
            <div class="col-sm-4">
          <div class="form-group">
            <label>Hotels Price</label>
            <input type="text" name="hotels_price" id="hotels_price" class="form-control" />
            <span id="hotels_price_error" class="text-danger"></span>
          </div>
        </div>
    
          <div class="col-sm-4">
         <div class="form-group">
            <label>Hotels Image</label>
            <input type="file" name="hotels_image" id="hotels_image" class="form-control" />
            <span id="hotels_images" class="text-danger"></span>
          </div>
        </div>
            <div class="col-sm-4">
         <div class="form-group">
            <label>Hotels Levels</label>
            <select class="form-control select2" name="hotels_level" id="hotels_level"  value="" style="width: 100%;">
               <option selected="selected" value="">Select Level</option>
             <option selected="selected" value="luxury">Luxury</option>
              <option selected="selected" value="midrange">Mid Range</option>
               <option selected="selected" value="comfortable">Comfortable</option>
            
           </select>
            <span id="hotels_level_error" class="text-danger"></span>
          </div>
        </div>
         </div>
           <div class="row">
             <div class="col-sm-12">
             <div class="form-group">
            <label>Hotels Description</label>
             <textarea class="form-control summernote" rows="5" name="hotels_description" id="hotels_description" value=""></textarea>
            <span id="hotels_description_error" class="text-danger"></span>
          </div>
        </div>
        </div>
          <div class="row">
           <div class="col-sm-12">
           <div class="form-group">
            <label>Hotels Features</label>
             <textarea class="form-control summernote" rows="5" name="hotels_features" id="hotels_features" value=""></textarea>
            <span id="hotels_features_error" class="text-danger"></span>
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

    $('#hotels_title_error').text('');

    $('#hotels_destinations_error').text('');

    $('#hotels_price_error').text('');

    $('#hotels_description_error').text('');

    $('#hotels_features_error').text('');

    $('#action').val('Add');

    $('#submit_button').val('Add');

    $('#Destinationsmodal').modal('show');
    

  });
    });

 $('#destinations_form').on('submit', function(event){

    event.preventDefault();

    $.ajax({

      url:"hotels/save",

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

          $('#hotels_title_error').text(data.hotels_title_error);
          $('#hotels_destinations_error').text(data.hotels_destinations_error);
          $('#hotels_price_error').text(data.hotels_price_error);

          $('#hotels_description_error').text(data.hotels_description_error);
          $('#hotels_features_error').text(data.hotels_features_error);
          $('#hotels_level_error').text(data.hotels_level_error);
        

        }
        else
        {

          $('#Destinationsmodal').modal('hide');
          
          Swal.fire(
            'Updated!',
            'Your  Destinations data has been updated.',
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

      url:"hotels/fetch_single_hotels",

      method:"POST",

      data:{id:id},

      dataType:'JSON',

      success:function(data)
      {
        
         $('#hotels_title').val(data.hotels_title);
         $('#hotels_destinations').val(data.hotels_destinations);
          $('#hotels_level').val(data.hotels_level);
         $('#hotels_price').val(data.hotels_price);
         $('#hotels_features').summernote('code',data.hotels_features);
         $('#hotels_description').summernote('code',data.hotels_description);

        $('#hotels_images').html(data.hotels_image);

        $('.modal-header').text('Edit Destinations');

        $('#destinations_title_error').text('');

        $('#destinations_description_error').text('');

        $('#destinations_attractions_error').text('');

         $('#hotels_level_error').text('');

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
text: 'You will not be able to recover Hotels Details',
icon: 'warning',
showCancelButton: true,
confirmButtonText: 'Yes, delete it!',
cancelButtonText: 'No, keep it'
}).then((result) => {
if (result.value) {

  $.ajax({

     url:"hotels/hotels_delete",

    method:"POST",

    data:{id:id},

     success:function(data)
    {

             Swal.fire(
        'Deleted!',
        'Your  Hotels data has been deleted.',
        'success'
         )
    
      location.reload();
    }


  })

} else if (result.dismiss === Swal.DismissReason.cancel) {
Swal.fire(
  'Cancelled',
  'Your Hotels data is safe :)',
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
