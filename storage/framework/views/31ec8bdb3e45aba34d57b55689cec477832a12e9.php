<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Student User Update</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            header{
                background: #EAEAEA;
                overflow: auto;
                padding: 10px;
            }
            #loggedin{
                float: right;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <header>
        <div id="appname"> <b>CGUMS</b></div>
    <div id="loggedin"><b>Welcome <?php echo e(session('student_user')); ?></b> <a href="/logout" class="text-info">logout</a></div>
    </header>
    <script type="text/javascript">
        function clear_task(){
            
                document.getElementById('exampleInputPassword1').value='';
                document.getElementById('exampleInputPassword2').value='';
                document.getElementById('exampleInputEmail1').value='';
		
        }
        </script>
        <div class="flex-center position-ref full-height">
            

            <div class="content">
            <div class="col-md-12">
            <?php if(Session::has('message')): ?>
            <div class="alert alert-success text-center" role="alert">
                <?php echo e(Session::get('message')); ?>

            </div>
            <?php endif; ?>
            <?php if(Session::has('error_message')): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo e(Session::get('error_message')); ?>

            </div>
            <?php endif; ?>
               <div>
               <h4>Student User Update</h4>
               <form action="/welcome/update/savedata/<?php echo e($student_user_data->id); ?>" method="post"> 
               <?php echo e(csrf_field()); ?>

               <div class="form-group">
    <input type="hidden" class="form-control " id="exampleInputPassword1" value="<?php echo e($student_user_data->id); ?>" name="name">
  </div>
               <div class="form-group">
    <label for="exampleInputPassword1">Student Number</label>
    <input type="text" class="form-control " id="exampleInputPassword1" value="<?php echo e($student_user_data->student_id); ?>" name="student_id">
    <?php if($errors->has('student_id')): ?>
        <span class="text-danger"><?php echo e($errors->first('student_id')); ?></span>
     <?php endif; ?>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Full Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"   value="<?php echo e($student_user_data->student_name); ?>" name="student_name">
    
    <?php if($errors->has('student_name')): ?>
        <span class="text-danger"><?php echo e($errors->first('student_name')); ?></span>
     <?php endif; ?>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"   value="<?php echo e($student_user_data->email); ?>" name="email">
    
    <?php if($errors->has('email')): ?>
        <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
     <?php endif; ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword2">Password</label>
    <label for="exampleInputPassword2"> <span><b>************</b></span> &nbsp <a href="/welcome/update/change_password/<?php echo e($student_user_data->id); ?>"><b>Change Password</b></a>
    </label>
   
  </div>
  
  <button type="submit" class="btn btn-primary">Update</button>
  <input type="button" class="btn btn-warning"  value="Clear" onclick="clear_task()"> 
</form>
               
               
               </div>
            </div>
        </div>
    </body>
</html>
<?php /**PATH G:\IJSE\web\Laravel\Final Project\CGUMS\resources\views/auth/update.blade.php ENDPATH**/ ?>