<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>CGUMS</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="/css/mdb.min.css">
  <!-- DataTables.net  -->
  <link rel="stylesheet" type="text/css" href="/css/addons/datatables.min.css">
  <link rel="stylesheet" href="/css/addons/datatables-select.min.css">
  <!-- Selected/Not Selected  -->
  <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
    rel="stylesheet">


  <!-- Your custom styles (optional) -->
  <style>
    .th {
      background-color: rgb(24, 41, 136);
      color: white;
    }

  </style>
</head>

<body class="fixed-sn deep-purple-skin">

  <!-- include('NAVBAR.PHP') -->
  <!-- Main Navigation -->
  <header>
  
    <!-- Sidebar navigation -->
    <div id="slide-out" class="side-nav sn-bg-4 fixed">
      <ul class="custom-scrollbar">
        <!-- Logo -->
        <li class="logo-sn waves-effect py-3">
          <div class="text-center">
            <a href="#" class="pl-0"><img src="E:\New folder\Temp\Admin Dashboard Template\img\CGUMS.png"
                class="img-fluid" alt="Responsive image"></a>
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
                CGU Dashboard</a>
            </li>
  

              
            </li -->
  
            <li><a
                href="file:///E:/New%20folder/Temp/Admin%20Dashboard%20Template/html%20-%20CGUMS/dashboards/Programmes.html"
                class="collapsible-header waves-effect arrow-r"><i class="far fa-check-square"></i>Programme Management</a>
            </li>
            <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-table"></i>Session Management<i
                  class="fas fa-angle-down rotate-icon"></i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="../tables/basic.html" class="waves-effect">Career Counselling Session</a>
                  </li>
                  <li><a href="../tables/extended.html" class="waves-effect">CV Screening</a>
                  </li>
                  <li><a href="../tables/datatables.html" class="waves-effect">Mock interview</a>
                  </li>
                </ul>
              </div>
            </li>
  
            <li><a href="#"
                class="collapsible-header waves-effect arrow-r"><i class="far fa-building"></i>Company Management</a>
            </li>
            <!-- Simple link -->
            <li><a href="../alerts/alerts.html" class="collapsible-header waves-effect"><i class=" far fa-bell"></i>
                Manage Notices</a></li>
  
            <li><a href="../sections/sections.html" class="collapsible-header waves-effect"><i
                  class=" fas fa-th-large"></i>
                Job Vacancies</a></li>
            
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
  
  
  
        <!--Navbar links-->
        <ul class="nav navbar-nav nav-flex-icons ml-auto">
  
          <!-- Dropdown -->
  
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Profile</span></a>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="#">User Account</a>
            </div>
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
      <div class="card text-center">
        <h3 class="card-header blue-gradient white-text">Edit Programme</h3>
        <div class="card-body">
        <form action="/cc/career_counsellor_dashbord/programme/edit/savedata/<?php echo e($programme_data->id); ?>" method="post">
                          <?php echo csrf_field(); ?>
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-6">

              <div class="md-form form-sm mb-0">
                <input type="text" id="tadd" class="form-control form-control-sm" name="name" value="<?php echo e($programme_data->P_name); ?>">
                <label for="tadd" class="">Programme Name</label>
                <?php $__errorArgs = ['name'];
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

            <div class="col-md-6">
            
              <select class="mdb-select md-form"  name="type" value="<?php echo e($programme_data->P_type); ?>">
                <?php if($programme_data->P_type=="Career Development"): ?>
                <option value="" >Select Programme Type</option>
                  <option value="Career Development" selected>Career Development</option>
                  <option value="Entrepreneurship Skills Development">Entrepreneurship Skills Development</option>
                  <option value="Leadership Training">Leadership Training</option>
                  <option value="Soft Skills Development">Soft Skills Development</option>
                  <option value="Team Builidng">Team Builidng</option>
                  <option value="Public Speaking">Public Speaking</option>
                  <?php elseif($programme_data->P_type=="Entrepreneurship Skills Development"): ?>
                  <option value="" >Select Programme Type</option>
                  <option value="Career Development" >Career Development</option>
                  <option value="Entrepreneurship Skills Development" selected>Entrepreneurship Skills Development</option>
                  <option value="Leadership Training">Leadership Training</option>
                  <option value="Soft Skills Development">Soft Skills Development</option>
                  <option value="Team Builidng">Team Builidng</option>
                  <option value="Public Speaking">Public Speaking</option>
                  <?php elseif($programme_data->P_type=="Leadership Training"): ?>
                  <option value="" >Select Programme Type</option>
                  <option value="Career Development" >Career Development</option>
                  <option value="Entrepreneurship Skills Development">Entrepreneurship Skills Development</option>
                  <option value="Leadership Training" selected>Leadership Training</option>
                  <option value="Soft Skills Development">Soft Skills Development</option>
                  <option value="Team Builidng">Team Builidng</option>
                  <option value="Public Speaking">Public Speaking</option>
                  <?php elseif($programme_data->P_type=="Soft Skills Development"): ?>
                  <option value="" >Select Programme Type</option>
                  <option value="Career Development" >Career Development</option>
                  <option value="Entrepreneurship Skills Development">Entrepreneurship Skills Development</option>
                  <option value="Leadership Training">Leadership Training</option>
                  <option value="Soft Skills Development" selected>Soft Skills Development</option>
                  <option value="Team Builidng">Team Builidng</option>
                  <option value="Public Speaking">Public Speaking</option>
                  <?php elseif($programme_data->P_type=="Team Builidng"): ?>
                  <option value="" >Select Programme Type</option>
                  <option value="Career Development" >Career Development</option>
                  <option value="Entrepreneurship Skills Development">Entrepreneurship Skills Development</option>
                  <option value="Leadership Training">Leadership Training</option>
                  <option value="Soft Skills Development">Soft Skills Development</option>
                  <option value="Team Builidng"   selected>Team Builidng</option>
                  <option value="Public Speaking">Public Speaking</option>
                  <?php else: ?>
                  <option value="" >Select Programme Type</option>
                  <option value="Career Development" >Career Development</option>
                  <option value="Entrepreneurship Skills Development"  selected>Entrepreneurship Skills Development</option>
                  <option value="Leadership Training">Leadership Training</option>
                  <option value="Soft Skills Development">Soft Skills Development</option>
                  <option value="Team Builidng">Team Builidng</option>
                  <option value="Public Speaking"  disabled selected>Public Speaking</option>
                  <?php endif; ?>
                </optgroup>

              </select>
              <?php $__errorArgs = ['type'];
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

            <div class="col-md-4">
            
              <div class="md-form form-sm mb-0">
                <input placeholder="Selected date" type="text" id="date-picker-example" class="form-control datepicker"  name="date" value="<?php echo e($programme_data->P_date); ?>"> 
                <label for="date-picker-example" class="active">Select date</label>
                <?php $__errorArgs = ['date'];
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

            <div class="col-md-4">
            
              <div class="md-form form-sm mb-0">
                <input type="time" id="default-picker" class="form-control" placeholder="Select time" name="time" value="<?php echo e($programme_data->P_time); ?>">
                <label for="default-picker">Select Time</label>
              </div>
              <?php $__errorArgs = ['time'];
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

            <div class="col-md-4">
            
              <div class="md-form form-sm mb-0">
                <input type="text" id="tadd" class="form-control form-control-sm" name="venue" value="<?php echo e($programme_data->P_venue); ?>">
                <label for="tadd" class="">Programme Venue</label>
                <?php $__errorArgs = ['venue'];
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
                <textarea type="text" id="form101" class="form-control" rows="3" name="details"><?php echo e($programme_data->P_details); ?></textarea>
                <label for="form101">Programme Description</label>
                <?php $__errorArgs = ['details'];
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

            <div class="col-md-6">

              <div class="md-form form-sm mb-0">
                <input type="text" id="tadd" class="form-control form-control-sm" name="resource_person" value="<?php echo e($programme_data->P_resourceperson); ?>">
                <label for="tadd">Resource Person/Company</label>
                <?php $__errorArgs = ['resource_person'];
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

            <div class="col-md-6">
            
              <div class="md-form form-sm mb-0">
                <input type="number" id="tadd" class="form-control form-control-sm" name="capacity" value="<?php echo e($programme_data->capacity); ?>">
                <label for="tadd">Programme Capacity (# of Participants)</label>
                <?php $__errorArgs = ['capacity'];
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
              <br>
              <div class="text-center">
                <button  type="submit" class="btn purple-gradient ">Edit Programme</button>
              </div>
            </div>

          </div>
          </div>
          <!-- Panel -->
          </form>
          <!-- Panel -->


    </section>
    <!-- Section: Docs link -->


  </div>
</main>


  <footer class="page-footer pt-0 mt-5">

    <!-- Copyright -->
    <div class="footer-copyright py-3 text-center">
      <div class="container-fluid">
        ?? 2021 Copyright: Career Guidance Unit - <a href="https://ruh.ac.lk" target="_blank"> University of Ruhuna </a>

      </div>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Main layout -->


  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script src="/js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="/js/bootstrap.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="/js/mdb.min.js"></script>
  <!-- DataTables  -->
  <script type="text/javascript" src="/js/addons/datatables.min.js"></script>
  <!-- DataTables Select  -->
  <script type="text/javascript" src="/js/addons/datatables-select.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
  <!-- Custom scripts -->
  <script>
    // SideNav Initialization
    $(".button-collapse").sideNav();

    $(document).ready(function () {
      $('#dtBasicExample').DataTable();
      $('.dataTables_length').addClass('bs-select');
    });

    var container = document.querySelector('.custom-scrollbar');
    var ps = new PerfectScrollbar(container, {
      wheelSpeed: 2,
      wheelPropagation: true,
      minScrollbarLength: 20
    });

    $('.datepicker').pickadate({
        disable: [], min: +1, max: +60


      })

    $('#dtMaterialDesignExample').DataTable();

    $('#dt-material-checkbox').dataTable({

      columnDefs: [{
        orderable: false,
        className: 'select-checkbox',
        targets: 0
      }],
      select: {
        style: 'os',
        selector: 'td:first-child'
      }
    });

    $('#dtMaterialDesignExample_wrapper, #dt-material-checkbox_wrapper').find('label').each(function () {
      $(this).parent().append($(this).children());
    });
    $('#dtMaterialDesignExample_wrapper .dataTables_filter, #dt-material-checkbox_wrapper .dataTables_filter').find(
      'input').each(function () {
        $('input').attr("placeholder", "Search");
        $('input').removeClass('form-control-sm');
      });
    $('#dtMaterialDesignExample_wrapper .dataTables_length, #dt-material-checkbox_wrapper .dataTables_length').addClass(
      'd-flex flex-row');
    $('#dtMaterialDesignExample_wrapper .dataTables_filter, #dt-material-checkbox_wrapper .dataTables_filter').addClass(
      'md-form');
    $('#dtMaterialDesignExample_wrapper select, #dt-material-checkbox_wrapper select').removeClass(
      'custom-select custom-select-sm form-control form-control-sm');
    $('#dtMaterialDesignExample_wrapper select, #dt-material-checkbox_wrapper select').addClass('mdb-select');
    $('#dtMaterialDesignExample_wrapper .mdb-select, #dt-material-checkbox_wrapper .mdb-select').materialSelect();
    $('#dtMaterialDesignExample_wrapper .dataTables_filte, #dt-material-checkbox_wrapper .dataTables_filterr').find(
      'label').remove();

    // Material Select Initialization
    $(document).ready(function () {
      $('.mdb-select').materialSelect();
    });

  </script>
</body>

</html>

<?php /**PATH G:\IJSE\web\Laravel\Final Project\CGUMS\resources\views/cgu/CGU Edit Programmes.blade.php ENDPATH**/ ?>