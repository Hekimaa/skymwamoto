<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Ansonika">
  <title>PANAGEA - Admin dashboard</title>
	
  <!-- Favicons-->
  <link rel="shortcut icon" href="<?=  base_url() ?>/skytour_admin/img/favicons.ico" type="image/x-icon">
  <link rel="apple-touch-icon" type="image/x-icon" href="<?=  base_url() ?>/skytour_admin/img/apple-touch-icon-57x57-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?=  base_url() ?>/skytour_admin/img/apple-touch-icon-72x72-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?=  base_url() ?>/skytour_admin/img/apple-touch-icon-114x114-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?=  base_url() ?>/skytour_admin/img/apple-touch-icon-144x144-precomposed.png">

  <!-- GOOGLE WEB FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	
  <!-- Bootstrap core CSS-->
  <link href="<?=  base_url() ?>/skytour_admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Main styles -->
  <link href="<?=  base_url() ?>/skytour_admin/css/admin.css" rel="stylesheet">
  <!-- Icon fonts-->
  <link href="<?=  base_url() ?>/skytour_admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Plugin styles -->
  <link href="<?=  base_url() ?>/skytour_admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Your custom styles -->
  <link href="<?=  base_url() ?>/skytour_admin/css/custom.css" rel="stylesheet">
	
</head>

<body class="fixed-nav sticky-footer" id="page-top">

    <?= $this->include('includes/sidebar');?>

  <!-- /Navigation-->
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My  <?= session('id')?></li>
      </ol>
	  <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card dashboard text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-envelope-open"></i>
              </div>
              <div class="mr-5"><h5>20  Destinations!</h5></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?= base_url('/destinations')?>">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card dashboard text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-star"></i>
              </div>
				<div class="mr-5"><h5>11 Tours and Safaris!</h5></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?= base_url('/tours-and-safaris')?>">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card dashboard text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-calendar-check-o"></i>
              </div>
              <div class="mr-5"><h5>14 Mount Trekking Routes</h5></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?= base_url('/mountainsroute')?>">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card dashboard text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-heart"></i>
              </div>
              <div class="mr-5"><h5>5 Volunteering!</h5></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="<?= base_url('/volunteering')?>">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
		</div>
		<!-- /cards -->
	  </div>
	  <!-- /.container-fluid-->
   	</div>
    <!-- /.container-wrapper-->
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
              <span aria-hidden="true">??</span>
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

    <!-- Bootstrap core JavaScript-->
    <script src="<?=  base_url() ?>/skytour_admin/vendor/jquery/jquery.min.js"></script>
    <script src="<?=  base_url() ?>/skytour_admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?=  base_url() ?>/skytour_admin/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?=  base_url() ?>/skytour_admin/vendor/chart.js/Chart.js"></script>
    <script src="<?=  base_url() ?>/skytour_admin/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?=  base_url() ?>/skytour_admin/vendor/datatables/dataTables.bootstrap4.js"></script>
	   <script src="<?=  base_url() ?>/skytour_admin/vendor/jquery.magnific-popup.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?=  base_url() ?>/skytour_admin/js/admin.js"></script>
	   <!-- Custom scripts for this page-->
    <script src="<?=  base_url() ?>/skytour_admin/js/admin-charts.js"></script>
      <script>
 $(document).ready( function () {
 
  $('#logout').click(function(){

      window.location.href="<?= base_url('UsersController/logout')?>"

    
  });
    });
</script>
	
</body>
</html>
