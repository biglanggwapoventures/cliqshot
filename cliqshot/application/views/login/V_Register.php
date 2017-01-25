<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>Cliqshot Register</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="<?php echo base_url();?>assets/login/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url();?>assets/login/assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url();?>assets/login/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url();?>assets/login/assets/css/style-metro.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url();?>assets/login/assets/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url();?>assets/login/assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url();?>assets/login/assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="<?php echo base_url();?>assets/login/assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/login/assets/plugins/select2/select2_metro.css" />
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link href="<?php echo base_url();?>assets/login/assets/css/pages/login-soft.css" rel="stylesheet" type="text/css"/>
	<!-- END PAGE LEVEL STYLES -->
	<link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
	<!-- BEGIN LOGO -->
	<div class="logo">
			<img src="<?php echo base_url();?>assets/login/assets/img/cliqshot_white.png" style="width:350px;height:55px;">
	</div>
	<!-- END LOGO -->
	<!-- BEGIN LOGIN -->
	<div class="content">
		<!-- BEGIN LOGIN FORM -->
    <?php echo form_open("C_Main/register"); ?>
		<form class="form-vertical login-form" action="" method="post">
      <font color="red"><?php echo validation_errors();?></font>
      <h3 >Sign Up</h3>
      <p>Enter your personal details below:</p>
      <div class="control-group">
        <label class="control-label visible-ie8 visible-ie9">Full Name</label>
        <div class="controls">
          <div class="input-icon left">
            <i class="icon-font"></i>
            <input class="m-wrap placeholder-no-fix" type="text" placeholder="Full Name" name="fullname"/>
          </div>
        </div>
      </div>
      <div class="control-group">
        <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
        <label class="control-label visible-ie8 visible-ie9">Email</label>
        <div class="controls">
          <div class="input-icon left">
            <i class="icon-envelope"></i>
            <input class="m-wrap placeholder-no-fix" type="text" placeholder="Email" name="email"/>
          </div>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label visible-ie8 visible-ie9">Address</label>
        <div class="controls">
          <div class="input-icon left">
            <i class="icon-ok"></i>
            <input class="m-wrap placeholder-no-fix" type="text" placeholder="Address" name="address"/>
          </div>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label visible-ie8 visible-ie9">Birthday</label>
        <div class="controls">
          <div class="input-icon left">
            <i class="icon-calendar"></i>
            <input class="m-wrap placeholder-no-fix" type="date" placeholder="Birthday" name="birthdate"/>
          </div>
        </div>
      </div>

      <p>Enter your account details below:</p>
      <div class="control-group">
        <label class="control-label visible-ie8 visible-ie9">Username</label>
        <div class="controls">
          <div class="input-icon left">
            <i class="icon-user"></i>
            <input class="m-wrap placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"/>
          </div>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label visible-ie8 visible-ie9">Password</label>
        <div class="controls">
          <div class="input-icon left">
            <i class="icon-lock"></i>
            <input class="m-wrap placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password"/>
          </div>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
        <div class="controls">
          <div class="input-icon left">
            <i class="icon-ok"></i>
            <input class="m-wrap placeholder-no-fix" type="password" autocomplete="off" placeholder="Re-type Your Password" name="passconf"/>
          </div>
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
          <label class="checkbox">
          <input type="checkbox" name="tnc"/> I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
          </label>
          <div id="register_tnc_error"></div>
        </div>
      </div>
      <div class="form-actions">
        <button id="register-back-btn" type="button" class="btn">
        <i class="m-icon-swapleft"></i>  Back
        </button>
        <button type="submit" id="register-submit-btn" class="btn green pull-right">

        Sign Up <i class="m-icon-swapright m-icon-white"></i>
        </button>
      </div>
    </form>
    <?php echo form_close(); ?>



		<!-- END LOGIN FORM -->


	</div>
	<!-- END LOGIN -->
	<!-- BEGIN COPYRIGHT -->
	<div class="copyright">
		2017 Capstone Project
	</div>
	<!-- END COPYRIGHT -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->   <script src="<?php echo base_url();?>assets/login/assets/plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/login/assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="<?php echo base_url();?>assets/login/assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/login/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/login/assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
	<!--[if lt IE 9]>
	<script src="assets/plugins/excanvas.min.js"></script>
	<script src="assets/plugins/respond.min.js"></script>
	<![endif]-->
	<script src="<?php echo base_url();?>assets/login/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/login/assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/login/assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/login/assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="<?php echo base_url();?>assets/login/assets/plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/login/assets/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/login/assets/plugins/select2/select2.min.js"></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="<?php echo base_url();?>assets/login/assets/scripts/app.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/login/assets/scripts/login-soft.js" type="text/javascript"></script>
	<!-- END PAGE LEVEL SCRIPTS -->
	<script>
		jQuery(document).ready(function() {
		  App.init();
		  Login.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->

</body>
<!-- END BODY -->
</html>