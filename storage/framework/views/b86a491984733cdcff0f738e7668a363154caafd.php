<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CGU Admin Dashbord </title>
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
    <div id="loggedin"><b>Welcome <?php echo e(session('username')); ?></b> <a href="/admin/logout" class="text-info">logout</a></div>
    </header>
    <h1>Welcome CGU Admin Dashbord</h1>
    <div>
    <a href="/admin/cgu_director_dashbord/update/<?php echo e(session('userId')); ?>" class="text-info">update profile</a>
    </div>
</body>
</html><?php /**PATH G:\IJSE\web\Laravel\Final Project\CGUMS\resources\views/cgu_director_dashbord.blade.php ENDPATH**/ ?>