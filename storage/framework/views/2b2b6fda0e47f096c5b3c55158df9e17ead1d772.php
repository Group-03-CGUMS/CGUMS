<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CGU Director Login</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
                background-color:beige;
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

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <script type="text/javascript">
        function clear_task(){
            
                document.getElementById('exampleInputPassword1').value='';
                document.getElementById('exampleInputPassword2').value='';

		
        }
        </script>
        <div class="flex-center position-ref full-height">
           

            <div class="content">
            <div class="col-md-12">
             <?php if(Session::has('message')): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo e(Session::get('message')); ?>

            </div>
            <?php endif; ?>
            
               <div>
               <h4>CGU Director Login</h4>
               <form action="/admin/getdata" method="post"> 
               <?php echo e(csrf_field()); ?>

               <div class="form-group">
    <label for="exampleInputPassword1">User Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="name">
    <?php if($errors->has('name')): ?>
        <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
     <?php endif; ?>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword2">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword2" name="password">
    <?php if($errors->has('password')): ?>
        <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
     <?php endif; ?>
  </div>
 
  <button type="submit" class="btn btn-primary">Log</button>
  <input type="button" class="btn btn-warning"  value="Clear" onclick="clear_task()"> 
  <div id="register-link" class="text-right">
                                <a href="/admin/register" class="text-info">Register here</a>
                            </div>
</form>
               
               
               </div>
            </div>
        </div>
    </body>
</html>
<?php /**PATH G:\IJSE\web\Laravel\Final Project\CGUMS\resources\views/auth/cgu_director_login.blade.php ENDPATH**/ ?>