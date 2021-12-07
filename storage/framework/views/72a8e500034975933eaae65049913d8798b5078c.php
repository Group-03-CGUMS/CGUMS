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
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="../../css/mdb.min.css">

  <!-- Your custom styles (optional) -->
  <style>

  </style>
</head>

<body class="fixed-sn white-skin">

   <!--Main Navigation-->
   
  <!--Main Navigation-->

  <!-- Main layout -->
  <main>
    <div class="container-fluid">

<section class="mb-5">
  <div class="row">
    <?php $__currentLoopData = $programme_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-12">

      <!-- Card -->
      <div class="card card-image"
        style="background-image: url('/img/Leadership.jpg');">

        <!-- Content -->
        <div class="text-white text-center align-items-center rgba-black-strong py-5 px-4">
          <div>
            <h5 class="text-center"> <?php echo e($data->P_type); ?></h5>
            <h3 class="card-title pt-4 pb-3 font-weight-bold "><strong>"<?php echo e($data->P_name); ?>"</strong></h3>
            <hr style="height:1px;border-width:0;color:gray;background-color:rgb(255, 255, 255)">
            <p>Date : <?php echo e($data->P_date); ?><br>Time : <?php echo e($data->P_time); ?><br>Venue : <?php echo e($data->P_venue); ?><br>Conducted by : <?php echo e($data->P_resourceperson); ?></p>
            <?php
            $datas= DB::select('select id from  enrollments  where St_id=? and P_id=?  LIMIT 1',[session('student_id'),$data->id]);
            $id=$data->id;
            if($datas){
              $e_id=DB::table('enrollments')->where(['P_id'=>$id,'St_id'=>session('student_id')])->value('id');
              echo "<a class='btn btn-primary'>Enrolled</a>&nbsp;<a  href='/welcome/programmes/enroll/cancle/$e_id' class='btn btn-danger'>Cancel</a>";
            }else{
              $capacity=(int)count(DB::table('enrollments')->where('P_id',$id)->get());
              
                  if($capacity < $data->capacity){
                    echo "<a  href='/welcome/programmes/enroll/$id'  class='btn purple-gradient btn-rounded waves-effect waves-light'>Enroll Now</a>";
                  }
                  else{
                    echo "<a class='btn btn-primary'>Enroll full</a>";
                  }
             
    
            }
           
            ?>
            
          </div>
        </div>
        <!-- Content -->
      </div>
      <!-- Card -->
      <br>
    </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  
  </div>

</section>

    </div>
  </main>
  <!-- Main layout -->

  <!-- Footer -->
  <footer class="page-footer pt-0 mt-5">

    <!-- Copyright -->
    <div class="footer-copyright py-3 text-center">
      <div class="container-fluid">
        © 2021 Copyright: Career Guidance Unit - <a href="https://ruh.ac.lk" target="_blank"> University of Ruhuna </a>

      </div>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->



  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script src="/js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="/js/bootstrap.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="/js/mdb.min.js"></script>
  <!--Custom scripts-->
  <script>
    // SideNav Initialization
    $(".button-collapse").sideNav();

    var container = document.querySelector('.custom-scrollbar');
    var ps = new PerfectScrollbar(container, {
      wheelSpeed: 2,
      wheelPropagation: true,
      minScrollbarLength: 20
    });

        $(function () {
            $('#dark-mode').on('click', function (e) {

              e.preventDefault();

              $('footer, .card').toggleClass('dark-card-admin');
              $('body, .navbar').toggleClass('white-skin navy-blue-skin');
              $(this).toggleClass('white text-dark btn-outline-black');
              $('body').toggleClass('dark-bg-admin');
              $('h6, .card, p, td, th, i, li a, h4, input, label').not(
                '#slide-out i, #slide-out a, .dropdown-item i, .dropdown-item').toggleClass('text-white');
              $('.btn-dash').toggleClass('grey blue').toggleClass('lighten-3 darken-3');
              $('.gradient-card-header').toggleClass('white black lighten-4');
              $('.list-panel a').toggleClass('navy-blue-bg-a text-white').toggleClass('list-group-border');

            });
          });

  </script>
</body>

</html>

<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\IJSE\web\Laravel\Final Project\CGUMS\resources\views/studentUI/Programmes.blade.php ENDPATH**/ ?>