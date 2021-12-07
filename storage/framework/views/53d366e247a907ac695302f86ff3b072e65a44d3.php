<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="../../css/mdb.min.css">

  <!-- Your custom styles (optional) -->
  <style>

  </style>
</head>

<body class="fixed-sn light-blue-skin">

  <!-- include('NAVBAR.PHP') -->
  <!-- Main Navigation -->
    <header>
    
<div id="slide-out" class="side-nav sn-bg-4 fixed">
  <ul class="custom-scrollbar">
    <!-- Logo -->
    <li class="logo-sn waves-effect py-3">
      <div class="text-center">
        <a href="#" class="pl-0"><img src="E:\New folder\Temp\Admin Dashboard Template\img\CGUMS.png" class="img-fluid"
            alt="Responsive image"></a>
      </div>
    </li>
    <!--/. Logo -->

    <!--Search Form-->
    <li>
      <form class="search-form" role="search">
        <div class="md-form mt-0 waves-light">
          <input type="text" class="form-control py-2" placeholder="Search">
        </div>
      </form>
    </li>
    <!--/.Search Form-->
    <!-- Side navigation links -->
    <li>
      <ul class="collapsible collapsible-accordion">
        <li><a href="../dashboards/v-3.html" class="collapsible-header waves-effect arrow-r"><i
              class="fas fa-tachometer-alt"></i>
            Company Dashboard</a>
        </li>

        <li><a
            href="file:///E:/New%20folder/Temp/Admin%20Dashboard%20Template/html%20-%20CGUMS/profile/basic-1%20-%20CGUMS.html"
            class="collapsible-header waves-effect arrow-r"><i class="fas fa-user"></i> Company Profile</a>
          <div class="collapsible-body">

          </div>
        </li>

        <li><a href="../forms/extended.html" class="collapsible-header waves-effect arrow-r"><i
              class="far fa-check-square"></i>Add Job Vacancy</a>
        </li>

        <li><a href="../forms/extended.html" class="collapsible-header waves-effect arrow-r"><i
              class="fas fa-table"></i>Job Appicants</a>
        </li>

        <li><a href="../forms/extended.html" class="collapsible-header waves-effect arrow-r"><i
              class="fas fa-th-large"></i>Schedule Interviews</a>
        </li>

        <!-- Simple link -->
        <li><a href="../alerts/alerts.html" class="collapsible-header waves-effect"><i class=" far fa-comments"></i>
            Messages</a></li>


      </ul>
    </li>
    <!--/. Side navigation links -->
  </ul>
  <div class="sidenav-bg mask-strong"></div>
</div>
<!--/. Sidebar navigation -->

<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">
  <!-- SideNav slide-out button -->
  <div class="float-left">
    <a href="#" data-activates="slide-out" class="button-collapse black-text"><i class="fas fa-bars"></i></a>
  </div>
  <!-- Breadcrumb-->
  <div class="breadcrumb-dn mr-auto">
    <p><b>Career Guidance Unit Management System [CGUMS]</b></p>
  </div>

  <div class="d-flex change-mode">

    <div class="ml-auto mb-0 mr-3 change-mode-wrapper">

    </div>

    <!--Navbar links-->
    <ul class="nav navbar-nav nav-flex-icons ml-auto">

      <!-- Dropdown -->

      </li>
      <li class="nav-item">
        <a class="nav-link waves-effect"><i class="fas fa-envelope"></i> <span
            class="clearfix d-none d-sm-inline-block">Contact</span></a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Profile</span></a>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link waves-effect"><i class="fas fa-sign-out-alt"></i> <span
            class="clearfix d-none d-sm-inline-block">Log Out</span></a>
      </li>

    </ul>
    <!--/Navbar links-->
  </div>
</nav>
<!-- /.Navbar -->

</header>
<!-- Main Navigation -->

<!-- Main layout -->
<main>
  <div class="container-fluid">

            <!-- Section: Docs link -->
            <section class="pb-5">
            
              <!-- Panel -->
              <form action="/company/company_dashbord/profile_registration/savedata" method="POST" enctype="multipart/form-data">
              <?php echo e(csrf_field()); ?> 
              <div class="card text-center">
                <h3 class="card-header blue-gradient white-text">Company Profile Registration</h3>
                <div class="card-body">
                <h5 class="card-header aqua-gradient white-text">Company Details</h5>
                <div class="row">
                
                  <!-- Grid column -->
                  <div class="col-md-6">
                
                    <div class="md-form form-sm mb-0">
                      <input type="text" id="form5" class="form-control form-control-sm" name="comp_name" value="<?php echo e(session('company_user')); ?>" readonly>
                      <label for="form5" class="">Company Name</label>
                      
                    </div>
                
                  </div>
                  <!-- Grid column -->
                
                  <!-- Grid column -->
                  <div class="col-md-6">
                
                    <div class="md-form form-sm mb-0">
                      <input type="text" id="form5" class="form-control form-control-sm" name="web_site">
                      <label for="form5" class="">Company Website - URL</label>
                      <?php $__errorArgs = ['web_site'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <p style="text-align:left; color:red;"><small><?php echo e($message); ?></small></p>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                
                  </div>
                  <!-- Grid column -->
                
                </div>
                <div class="row">

                  <!-- Grid column -->
                  <div class="col-lg-4">

                    <div class="md-form form-sm mb-0">
                      <input type="text" id="form12" class="form-control form-control-sm" name="email">
                      <label for="form12" class="">Company E-mail Address</label>
                      <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <p style="text-align:left; color:red;"><small><?php echo e($message); ?></small></p>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-lg-4">

                    <div class="md-form form-sm mb-0">
                      <input type="text" id="form3" class="form-control form-control-sm" name="contact_number">
                      <label for="form3" class="">Company Contact Number</label>
                      <?php $__errorArgs = ['contact_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <p style="text-align:left; color:red;"><small><?php echo e($message); ?></small></p>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-lg-4">

                    <div class="md-form form-sm mb-0">
                      <input type="text" id="form4" class="form-control form-control-sm" name="reg_number">
                      <label for="form4" class="disabled">Company Registration Number</label>
                      <?php $__errorArgs = ['reg_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <p style="text-align:left; color:red;"><small><?php echo e($message); ?></small></p>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                  </div>
                  <!-- Grid column -->

                </div>                
                <div class="row">
                
                  <!-- Grid column -->
                  <div class="col-md-12">
                  
                    <div class="md-form form-sm mb-0">
                      <input type="text" id="tadd" class="form-control form-control-sm" name="address">
                      <label for="tadd" class="">Office Address(Corprate Office/Head Office)</label>
                      <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <p style="text-align:left; color:red;"><small><?php echo e($message); ?></small></p>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                  
                  </div>

                  <div class="col-md-12">
                  
                    <div class="md-form md-outline">
                      <textarea type="text" id="form101" class="form-control" rows="3" name="description"></textarea>
                      <label for="form101">Company Description</label>
                      <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <p style="text-align:left; color:red;"><small><?php echo e($message); ?></small></p>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                  
                  </div>

                  <!-- <div class="col-md-12">
                  
                    <div class="custom-file">
                      <input type="file" class="custom-file-input"  name="logo" multiple> 
                      <label class="custom-file-label" for="company logo">Upload your company logo here [Maximum File Size - 2MB]</label>
                    </div>
                    <?php $__errorArgs = ['logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <p style="text-align:left; color:red;"><small><?php echo e($message); ?></small></p>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div> -->
                    <div class="md-form">
                                                                  <div class="file-field">
                                                                    <div class="btn btn-primary btn-sm float-left">
                                                                      <span>Choose photo</span>
                                                                      <input type="file" name="image" multiple>
                                                                    </div>
                                                                    <div class="file-path-wrapper">
                                                                      <input class="file-path validate" type="text" placeholder="Upload your photo here">
                                                                    </div>
                                                                    <?php $__errorArgs = ['logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                                    <p style="text-align:left; color:red;"><small><?php echo e($message); ?></small></p>
                                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                                  </div>
                                                                </div>

                    </div>
                   
                    <div class="text-center">
                    <button type="submit"  class="btn blue-gradient btn-lg">Submit</button>
                    </div>
                   </div>

                </div>
              <!-- Panel -->
              </form>
            
            </section>
            <!-- Section: Docs link -->


    </div>
  </main>

    <footer class="page-footer pt-0 mt-5">
    
      <!-- Copyright -->
      <div class="footer-copyright py-3 text-center">
        <div class="container-fluid">
          © 2021 Copyright: Career Guidance Unit - <a href="https://ruh.ac.lk" target="_blank"> University of Ruhuna </a>
    
        </div>
      </div>
      <!-- Copyright -->
    
    </footer>
  <!-- Main layout -->


  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script src="../../js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../../js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../../js/bootstrap.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../../js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script>
    // SideNav Initialization
    $(".button-collapse").sideNav();

    var container = document.querySelector('.custom-scrollbar');
    var ps = new PerfectScrollbar(container, {
      wheelSpeed: 2,
      wheelPropagation: true,
      minScrollbarLength: 20
    });

        // Material Select Initialization
          $(document).ready(function () {
            $('.mdb-select').materialSelect();
          });

  </script>
</body>

</html>
<?php /**PATH G:\IJSE\web\Laravel\Final Project\CGUMS\resources\views/compantUI/profile_register.blade.php ENDPATH**/ ?>