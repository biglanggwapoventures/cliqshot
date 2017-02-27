<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cliqshot Register</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/form-elements.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
            
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <img src="<?php echo base_url(); ?>assets/img/cliqshot_white.png" style="width:250px;height:55px;">
                            
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-4 form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Sign Up <i class="fa fa-lock"></i> </h3>
                                    <div class="alert alert-error" role="alert">
                                    <button class="close" data-dismiss="alert"></button>
                                     <span><?php echo validation_errors();?></span>
                                     </div>
                                    
                                </div>
                                
                            </div>

                            <div class="form-bottom">
                                <form role="form" action="register" method="post" class="login-form">
                                <p>Enter your personal details below:</p>
                                    <div class="form-group">
                                        <label class="sr-only" for="fullname">Full Name</label>
                                        <input type="text" name="fullname" placeholder="Full Name..." class="form-username form-control" id="form-username">
                                    </div>

                                     <div class="form-group">
                                        <label class="sr-only" for="email">Email Address</label>
                                        <input type="text" name="email" placeholder="Email Address..." class="form-username form-control" id="form-username">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="sr-only" for="contact_number">Contact Number</label>
                                        <input type="text" name="contact_number" placeholder="Contact Number..." class="form-username form-control" id="form-username">
                                    </div>

                                    <div class="form-group">
                                        <label class="sr-only" for="address">Address</label>
                                        <input type="text" name="address" placeholder="Address..." class="form-username form-control" id="form-username">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="birthdate">Birthdate</label>
                                        <input type="date" name="birthdate" placeholder="Birthdate..." class="form-username form-control" id="form-username">
                                    </div>
                                   
                                    <hr>
                                    <p>Enter your account details below:</p>
                                    <div class="form-group">
                                        <label class="sr-only" for="username">Username</label>
                                        <input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="password">Password</label>
                                        <input type="password" name="password" placeholder="Password..." class="form-username form-control" id="form-username">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="passconf">Re-Type your Password</label>
                                        <input type="password" name="passconf" placeholder="Re-Type your Password..." class="form-password form-control" id="form-password">
                                    </div>
                                    <button type="submit" class="btn">Sign in!</button>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.backstretch.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>