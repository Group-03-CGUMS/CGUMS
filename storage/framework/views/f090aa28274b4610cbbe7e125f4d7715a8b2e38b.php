<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Profile Registration</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="/css1/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="/css1/mdb.min.css">

  <!-- Your custom styles (optional) -->
  <style>

  </style>
</head>

<body class="fixed-sn white-skin">

  <!-- include('NAVBAR.PHP') -->
  <!-- Main Navigation -->
  <header>

<!-- Sidebar navigation -->
<div id="slide-out" class="side-nav sn-bg-4 fixed">
  <ul class="custom-scrollbar">
    <!-- Logo -->
    <li class="logo-sn waves-effect py-3">
      <div class="text-center">
        <a href="#" class="pl-0"><img src="\image\CGUMS.png" class="img-fluid" alt="Responsive image"></a>
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
        <li><a href="#" class="collapsible-header waves-effect arrow-r"><i class="fas fa-tachometer-alt"></i>
            My Dashboard</a>
        </li>
        
        <li><a href="/welcome/profile" class="collapsible-header waves-effect arrow-r"><i class="fas fa-user"></i> Profile</a>
          <div class="collapsible-body">

          </div>
        </li>

        <li><a href="#" class="collapsible-header waves-effect arrow-r"><i class="far fa-check-square"></i>Programmes</a>
        </li>
        <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-table"></i> Sessions<i class="fas fa-angle-down rotate-icon"></i></a>
          <div class="collapsible-body">
            <ul>
              <li><a href="/welcome/sessions/cc_session" class="waves-effect">Career Counselling Session</a>
              </li>
              <li><a href="#" class="waves-effect">CV Screening</a>
              </li>
              <li><a href="#" class="waves-effect">Trial interview</a>
              </li>
            </ul>
          </div>
        </li>
        
        <!-- Simple link -->
        <li><a href="../alerts/alerts.html" class="collapsible-header waves-effect"><i class=" far fa-bell"></i>
            Notices</a></li>

        <li><a href="/welcome/job_vacancies" class="collapsible-header waves-effect"><i class=" fas fa-th-large"></i>
            Job Vacancies</a></li>

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
  <b> <?php echo e(session('student_user')); ?></b>
  <div class="d-flex change-mode">



    <!--Navbar links-->
    <ul class="nav navbar-nav nav-flex-icons ml-auto">

    <!-- Dropdown -->
    <li class="nav-item dropdown notifications-nav">
      <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <span class="badge red">3</span> <i class="fas fa-bell"></i>
        <span class="d-none d-md-inline-block">Notifications</span>
      </a>
      <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="#">
          <i class="fas fa-money mr-2" aria-hidden="true"></i>
          <span>New order received</span>
          <span class="float-right"><i class="far  fa-clock" aria-hidden="true"></i> 13 min</span>
        </a>
        <a class="dropdown-item" href="#">
          <i class="fas fa-money mr-2" aria-hidden="true"></i>
          <span>New order received</span>
          <span class="float-right"><i class="far  fa-clock" aria-hidden="true"></i> 33 min</span>
        </a>
        <a class="dropdown-item" href="#">
          <i class="fas fa-line-chart mr-2" aria-hidden="true"></i>
          <span>Your campaign is about to end</span>
          <span class="float-right"><i class="far  fa-clock" aria-hidden="true"></i> 53 min</span>
        </a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link waves-effect"><i class="fas fa-envelope"></i> <span class="clearfix d-none d-sm-inline-block">Contact</span></a>
    </li>

    <li class="nav-item dropdown">
   
      <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Profile</span></a>
      </a>
      </li>

    <li class="nav-item">
      <a href="/logout" class="nav-link waves-effect"><i class="fas fa-sign-out-alt"></i> <span
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
    <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pass): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php $id= Crypt::encrypt($pass->id); ?>
          <form action="/welcome/profile/savedata/<?php echo e($id); ?>" method="POST" enctype="multipart/form-data">
          <?php echo e(csrf_field()); ?>

            <!-- Section: Docs link -->
            <section class="pb-5">
            
              <!-- Panel -->
              <div class="card text-center">
                <h3 class="card-header purple-gradient white-text">Profile Registration</h3>
                <div class="card-body">
                <h5 class="card-header aqua-gradient white-text">Personal Details</h5>
                <div class="row">
                
                  <!-- Grid column -->
                  <div class="col-md-6">
                
                    <div class="md-form form-sm mb-0">
                      <input type="text" id="form5" class="form-control form-control-sm" name="first_name" value="<?php echo e($pass->f_name); ?>">
                      <label for="form5" class="">First name</label>
                      <?php $__errorArgs = ['first_name'];
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
                  <div class="col-md-6">
                
                    <div class="md-form form-sm mb-0">
                      <input type="text" id="form5" class="form-control form-control-sm" name="last_name" value="<?php echo e($pass->l_name); ?>">
                      <label for="form5" class="">Last name</label>
                      <?php $__errorArgs = ['last_name'];
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
                      <input type="text" id="form12" class="form-control form-control-sm" name="per_email" value="<?php echo e($pass->personal_email); ?>">
                      <label for="form12" class="">Personal e-mail address</label>
                      <?php $__errorArgs = ['per_email'];
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
                      <input type="text" id="form3" class="form-control form-control-sm" name="mobile" value="<?php echo e($pass->mobile); ?>">
                      <label for="form3" class="">Mobile Number</label>
                      <?php $__errorArgs = ['mobile'];
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
                      <input type="text" id="form4" class="form-control form-control-sm" name="nic" value="<?php echo e($pass->nic); ?>">
                      <label for="form4" class="disabled">NIC Number</label>
                      <?php $__errorArgs = ['nic'];
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
                      <input type="text" id="padd" class="form-control form-control-sm" name="per_address" value="<?php echo e($pass->per_address); ?>">
                      <label for="padd" class="">Permanant Address</label>
                      <?php $__errorArgs = ['per_address'];
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
                  <div class="col-md-12">
                  
                    <div class="md-form form-sm mb-0">
                      <input type="text" id="tadd" class="form-control form-control-sm" name="mob_address" value="<?php echo e($pass->mob_address); ?>">
                      <label for="tadd" class="">Temporary Address (Ex: Hostel/Boarding Place address)</label>
                      <?php $__errorArgs = ['mob_address'];
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
                    <br>
                    <br>
                    <h5 class="card-header aqua-gradient white-text">University Details</h5>
                                  <div class="row">
                
                  <!-- Grid column -->
                  <div class="col-md-6">
                
                    <div class="md-form form-sm mb-0">
                      <input type="text" id="form5" class="form-control form-control-sm" name="St_id" value="<?php echo e(session('student_id')); ?>" readonly >
                      <label for="form5" class="">Student ID Number (SC/20XX/XXXXX)</label>
                    </div>
                  </div>
                  <!-- Grid column -->
                
                  <!-- Grid column -->
                  <div class="col-md-6">
                
                    <div class="md-form form-sm mb-0">
                      <input type="text" id="form5" class="form-control form-control-sm" name="uni_email" value="<?php echo e(session('student_email')); ?>" readonly >
                      <label for="form5" class="">University e-mail address</label>
                    </div>
                
                  </div>
                  </div>


                  
                  
                  
                            <div class="row mb-5">
                            
                              <!-- Grid column -->
                              <div class="col-md-6">
                            
                                <!-- Name -->
                                <?php $__errorArgs = ['faculty'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <p style="text-align:left; color:red;"><small><?php echo e($message); ?></small></p>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <select class="mdb-select md-form" id='sel_depart' name='faculty'  required>
                                <option value='0'>-- Select Faculty --</option>
                                  <?php $__currentLoopData = $faculty['data']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <?php if($fact->id==$pass->faculty): ?>
                                    <option value='<?php echo e($fact->id); ?>' selected><?php echo e($fact->faculties); ?></option>
                                  <?php else: ?>
                                  <option value='<?php echo e($fact->id); ?>'><?php echo e($fact->faculties); ?></option>  
                                  <?php endif; ?>     
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  
                                </select>
                               
                            
                              </div>
                              <div class="col-md-6">
                            
                                <!-- Name -->
                                <select class="mdb-select md-form" id='sel_emp' name='degree'>
                                  <option value='0'>-- Select Degree --</option>
                                </select>
                                <?php $__errorArgs = ['degree'];
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
                              <!-- Grid column -->
                            
                              <!-- Grid column -->

                              <!-- Grid column -->
                            
                              <!-- Grid column -->
                              <div class="col-md-6">
                            
                                <!-- Name -->
                                <select class="mdb-select md-form"  name='gpa'  value="<?php echo e($pass->gpa); ?>">
                                  <optgroup label="GPA">
                                    <?php if(1==$pass->gpa): ?>
                                    <option value="1" selected>4.00 - 3.70</option>
                                    <option value="2" >3.69 - 3.30</option>
                                      <option value="3" >3.29 - 3.00</option>
                                      <option value="4" >2.99 - 2.70</option>
                                      <option value="5" >2.69 - 2.30</option>
                                      <option value="6" >2.69 - 2.30</option>
                                      <option value="7" >2.29 - 2.00</option>
                                      <option value="8">Below 2.00</option>
                                    <?php elseif(2==$pass->gpa): ?>
                                    <option value="1" >4.00 - 3.70</option>
                                    <option value="2" selected>3.69 - 3.30</option>
                                    <option value="3" >3.29 - 3.00</option>
                                      <option value="4" >2.99 - 2.70</option>
                                      <option value="5" >2.69 - 2.30</option>
                                      <option value="6" >2.69 - 2.30</option>
                                      <option value="7" >2.29 - 2.00</option>
                                      <option value="8">Below 2.00</option>
                                    <?php elseif(3==$pass->gpa): ?>
                                    <option value="1" >4.00 - 3.70</option>
                                      <option value="2" >3.69 - 3.30</option>
                                    <option value="3" selected>3.29 - 3.00</option>
                                    <option value="4" >2.99 - 2.70</option>
                                      <option value="5" >2.69 - 2.30</option>
                                      <option value="6" >2.69 - 2.30</option>
                                      <option value="7" >2.29 - 2.00</option>
                                      <option value="8">Below 2.00</option>
                                    <?php elseif(4==$pass->gpa): ?>
                                    <option value="1" >4.00 - 3.70</option>
                                      <option value="2" >3.69 - 3.30</option>
                                      <option value="3" >3.29 - 3.00</option>
                                    <option value="4" selected>2.99 - 2.70</option>
                                    <option value="5" >2.69 - 2.30</option>
                                      <option value="6" >2.69 - 2.30</option>
                                      <option value="7" >2.29 - 2.00</option>
                                      <option value="8">Below 2.00</option>
                                    <?php elseif(5==$pass->gpa): ?>
                                    <option value="1" >4.00 - 3.70</option>
                                      <option value="2" >3.69 - 3.30</option>
                                      <option value="3" >3.29 - 3.00</option>
                                      <option value="4" >2.99 - 2.70</option>
                                    <option value="5" selected>2.69 - 2.30</option>
                                    <option value="6" >2.69 - 2.30</option>
                                      <option value="7" >2.29 - 2.00</option>
                                      <option value="8">Below 2.00</option>
                                    <?php elseif(6==$pass->gpa): ?>
                                    <option value="1" >4.00 - 3.70</option>
                                      <option value="2" >3.69 - 3.30</option>
                                      <option value="3" >3.29 - 3.00</option>
                                      <option value="4" >2.99 - 2.70</option>
                                      <option value="5" >2.69 - 2.30</option>
                                    <option value="6" selected>2.69 - 2.30</option>
                                    <option value="7" >2.29 - 2.00</option>
                                      <option value="8">Below 2.00</option>
                                    <?php elseif(7==$pass->gpa): ?>
                                    <option value="1" >4.00 - 3.70</option>
                                      <option value="2" >3.69 - 3.30</option>
                                      <option value="3" >3.29 - 3.00</option>
                                      <option value="4" >2.99 - 2.70</option>
                                      <option value="5" >2.69 - 2.30</option>
                                      <option value="6" >2.69 - 2.30</option>
                                    <option value="7" selected>2.29 - 2.00</option>
                                    <option value="8">Below 2.00</option>
                                    <?php elseif(8==$pass->gpa): ?>
                                    <option value="1" >4.00 - 3.70</option>
                                      <option value="2" >3.69 - 3.30</option>
                                      <option value="3" >3.29 - 3.00</option>
                                      <option value="4" >2.99 - 2.70</option>
                                      <option value="5" >2.69 - 2.30</option>
                                      <option value="6" >2.69 - 2.30</option>
                                      <option value="7" >2.29 - 2.00</option>
                                    <option value="8" selected>Below 2.00</option>
                                    <?php else: ?>{
                                      <option value="1" >4.00 - 3.70</option>
                                      <option value="2" >3.69 - 3.30</option>
                                      <option value="3" >3.29 - 3.00</option>
                                      <option value="4" >2.99 - 2.70</option>
                                      <option value="5" >2.69 - 2.30</option>
                                      <option value="6" >2.69 - 2.30</option>
                                      <option value="7" >2.29 - 2.00</option>
                                      <option value="8">Below 2.00</option>
                                    }
                                    <?php endif; ?>
                                  </optgroup>
                                </select>
                                <?php $__errorArgs = ['gpa'];
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
                              <!-- Grid column -->
                            </div>
                            <div class="row">
                            
                              <!-- Grid column -->
                              <div class="col-md-6 mb-4">
                            
                                <form>
                                  <div class="md-form">
                                    <div class="file-field">
                                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="company logo" name="cv" value="<?php echo e($pass->cv); ?>" accept=".pdf,.doc,application/msword"> 
                      <label class="custom-file-label" for="company logo" placeholder="Upload your CV here" ><?php echo e($pass->cv); ?></label>
                    </div>
                                      <?php $__errorArgs = ['cv'];
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
                                </form>
                            
                              </div>

                                                            <div class="col-md-6 mb-4">
                                                            
                                                              
                                                                <div class="md-form">
                                                                  <div class="file-field">
                                                                
                                                                  <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="company logo" name="image" value="<?php echo e($pass->image); ?>" accept="image/png, image/jpeg"> 
                                                                <label class="custom-file-label" for="company logo" placeholder="Upload your photo here" ><?php echo e($pass->image); ?></label>
                                                              </div>
                                                                    <?php $__errorArgs = ['image'];
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
                              <!-- Grid column -->
                            
                  </div>  
    <div class="text-center">
      <button type="submit" class="btn aqua-gradient btn-lg">Submit</button>
    </div>
    </form>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   </div>

                </div>
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
  
   <!-- Script -->
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
   <script type='text/javascript'>
   
   $(document).ready(function(){

      // Department Change
      $('#sel_depart').change(function(){

         // Department id
         var id = $(this).val();

         // Empty the dropdown
         $('#sel_emp').find('option').not(':first').remove();

         // AJAX request 
         $.ajax({
           url: '/request_register/sendemail/confirm/savenumbe/register/profile/getDegree/'+id,
           type: 'get',
           dataType: 'json',
           success: function(response){
            var newid = "<?php echo $pass->degree ?>";
             var len = 0;
             if(response['data'] != null){
                len = response['data'].length;
             }
              
             if(len > 0){
                // Read data and create <option >
                for(var i=0; i<len; i++){

                   var id = response['data'][i].id;
                   var name = response['data'][i].degree;
                    if(id== newid ){
                   var option = "<option value='"+id+"' selected>"+name+"</option>";
                    }else{
                      var option = "<option value='"+id+"'>"+name+"</option>";
                    }
                   $("#sel_emp").append(option); 
                }
             }

           }
         });
      });
   });
   </script>
 
</body>

</html>
<?php /**PATH G:\IJSE\web\Laravel\Final Project\CGUMS\resources\views/studentUI/profile.blade.php ENDPATH**/ ?>