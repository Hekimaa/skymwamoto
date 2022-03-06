

 <!-- Navigation-->
 <nav class="navbar navbar-expand-lg navbar-dark bg-default fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html"><img src="<?= base_url()?>/skytour_admin/img/logo.png" alt="" width="150" height="36"></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?= base_url('/dashboard')?>">
            <i class="fa fa-fw fa-home"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Messages">
          <a class="nav-link" href="<?= base_url('/users')?>">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">Users</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Messages">
          <a class="nav-link" href="<?= base_url('/destinations')?>">
            <i class="fa fa-fw fa-envelope-open"></i>
            <span class="nav-link-text">Destinations</span>
          </a>
        </li>
		<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Messages">
    <a class="nav-link" href="<?= base_url('/tours-and-safaris')?>">
            <i class="fa fa-fw fa-gear"></i>
            <span class="nav-link-text">Tours & Safaris</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Messages">
    <a class="nav-link" href="<?= base_url('/tours-and-safaris-routes')?>">
            <i class="fa fa-fw fa-gear"></i>
            <span class="nav-link-text">Tours & Safaris Routes</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Messages">
    <a class="nav-link" href="<?= base_url('/enquire')?>">
            <i class="fa fa-fw fa-calendar-check-o"></i>
            <span class="nav-link-text">Enquire</span>
          </a>
        </li>
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Messages">
    <a class="nav-link" href="<?= base_url('/hotels')?>">
            <i class="fa fa-fw fa-envelope-open"></i>
            <span class="nav-link-text">Hotels</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Messages">
    <a class="nav-link" href="<?= base_url('/mountains')?>">
            <i class="fa fa-fw fa-plus-circle"></i>
            <span class="nav-link-text">Mountains</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Messages">
    <a class="nav-link" href="<?= base_url('/mountainsroute')?>">
            <i class="fa fa-fw fa-envelope-open"></i>
            <span class="nav-link-text">Mountains Route</span>
          </a>
        </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Messages">
    <a class="nav-link" href="<?= base_url('/volunteering')?>">
            <i class="fa fa-fw fa-heart"></i>
            <span class="nav-link-text">Volunteering </span>
          </a>
        </li>
    
		
      </ul>
    
      <ul class="navbar-nav ml-auto">
      
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
