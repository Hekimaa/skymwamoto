<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Ansonika">
  <title>SKYWAMOTO - Admin dashboard</title>
	
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
        <li class="breadcrumb-item active">Destinations</li>
      </ol>
		<!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
        <div class="col text-left">
            <button type="button" name="addDestinations" id="addDestinations" class="btn btn-info btn-sm">Add Tours & Safaris Route</button>
          </div>
        <div class="card-body">
         
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>SN</th>
                  <th>Title</th>
                
                  <th>Route Day</th>
                  <th>Description </th>
                  <th>Actions </th>
                  
                </tr>
              </thead>
           
              <tbody>
                      <?php $sn =1;?>
                      <?php if($mounttrakkingroute) { ?>
                      <?php foreach($mounttrakkingroute as $cat): ?>
                        <tr>
                         <td><?php echo $sn++; ?></td>
                       
                        
                        <td><?php echo $cat->mountain_title; ?></td> 
                     
                        <td><?php echo $cat->mountaintrekingroute_description; ?></td> 
                        <td><?php echo $cat->mountaintrekingroute_day; ?></td> 
                        <td>
                              <button class="btn btn-warning btn-sm  edit" data-id="<?php echo $cat->id; ?>">Edit</button>
                              <button class="btn btn-danger btn-sm  delete" data-id="<?php echo $cat->id; ?>" >Delete</button>

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
            <a class="btn btn-primary" id="logout" href="#0">Logout</a>
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
          <h4 class="modal-title">Add Mount Trekking  Route</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
           <div class="row">
            <div class="col-sm-6">
          <div class="form-group">
            <label>Mount Trekking Route Title</label>
            
             <select class="form-control select2" name="mountaintreking_id" id="mountaintreking_id"  value="" style="width: 100%;">
             <option selected="selected" value=""> Select Tour Name</option>
              <?php if($mountains):?>
              <?php foreach($mountains as $inst):?>
              <option selected="selected" value="<?= $inst['id']?>"><?= $inst['mountain_days']?></option>
               <?php endforeach; ?>
               <?php endif; ?>
               
            </select>
            <span id="mountaintreking_id_error" class="text-danger"></span>
          </div>
        </div>
       
        <div class="col-sm-6">
         <div class="form-group">
            <label>Mount Trekking Route Day</label>
            <input type="text" name="mounttrekking_route_day" id="mounttrekking_route_day" class="form-control" />
            <span id="mounttrekking_route_day_error" class="text-danger"></span>
          </div>
        </div>
         </div>
           <div class="row">
             <div class="col-sm-12">
             <div class="form-group">
            <label>Mount Trekking Description</label>
             <textarea class="form-control summernote" rows="5" name="mounttrekking_route_description" id="mounttrekking_route_description" value=""></textarea>
            <span id="mounttrekking_route_description_error" class="text-danger"></span>
          </div>
        </div>
        </div>
        <div class="row">
             <div class="col-sm-12">
             <div class="form-group">
            <label>Mount Trekking Inclusive</label>
             <textarea class="form-control summernote" rows="5" name="mounttrekking_route_inclusive" id="mounttrekking_route_inclusive" value=""></textarea>
            <span id="mounttrekking_route_inclusive_error" class="text-danger"></span>
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
 $(document).ready( function () {
 
  $('#logout').click(function(){

      window.location.href="<?= base_url('UsersController/logout')?>"

    
  });
    });
</script>

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

    $('#mountaintreking_id_error').text('');

    $('#mounttrekking_route_day_error').text(''); 

    $('#mounttrekking_route_inclusive_error').text('');


    $('#mounttrekking_route_description_error').text('');

    $('#action').val('Add');

    $('#submit_button').val('Add');

    $('#Destinationsmodal').modal('show');
    

  });
    });

 $('#destinations_form').on('submit', function(event){

    event.preventDefault();

    $.ajax({

      url:"MountainTrekkingRoute/save",

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

          $('#mountaintreking_id_error').text(data.mountaintreking_id_error);
          $('#mounttrekking_route_inclusive_error').text(data.mounttrekking_route_inclusive_error);
          $('#mounttrekking_route_day_error').text(data.mounttrekking_route_day_error); 
          $('#mounttrekking_route_description_error').text(data.mounttrekking_route_description_error);

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

      url:"MountainTrekkingRoute/fetch_single_mountaintrekking_route",

      method:"POST",

      data:{id:id},

      dataType:'JSON',

      success:function(data)
      {
        
         $('#mountaintreking_id').val(data.mountaintreking_id);
         $('#mounttrekking_route_inclusive').val(data.mounttrekking_route_inclusive);
         $('#mounttrekking_route_day').val(data.mounttrekking_route_day); 
         $('#mounttrekking_route_description').summernote('code',data.mounttrekking_route_description);
         

        $('.modal-header').text('Edit Destinations');

        $('#mountaintreking_id_error').text('');

        $('#mounttrekking_route_inclusive_error').text('');
        $('#mounttrekking_route_day_error').text('');

        $('#mounttrekking_route_description_error').text('');

        $('#action').val('Edit');

        $('#submit_button').val('Edit');

        $('#Destinationsmodal').modal('show');

        $('#hidden_id').val(id);

      }

    })

  });

  $(document).on('click', '.delete', function(){

var id = $(this).data('id');
alert(id)


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

     url:"MountainTrekkingRoute/mountaintrekking_route_delete",

    method:"POST",

    data:{id:id},

     success:function(data)
    {
        alert(data)
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
