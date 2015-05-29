<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>E-Goverment Working Area</title>
		


		<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    	<link href="<?php echo base_url(); ?>assets/css/flexslider.css" rel="stylesheet" >
    	<link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">
    	<link href="<?php echo base_url(); ?>assets/css/queries.css" rel="stylesheet">
    	<link href="<?php echo base_url(); ?>assets/css/animate.css" rel="stylesheet">

    	<!-- Push & slide css -->
    	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/default.css" />
    	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/component.css" />
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/frontpage.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/task.css" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
	</head>

	<body id="top" class="cbp-spmenu-push">
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
        <h3>Menu</h3>
        <?php echo anchor('', 'Home') ?>
        <a href="#">Wiki</a>
        <a href="#">Forum</a>
        <a href="#">Links</a>
        <a href="#">About</a>
        <a href="#">FAQ</a>
        </nav>
        

        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
        <h3>Join</h3>
            <?php echo form_open("auth/login");?>
            <div class="form-group">
            <a for="user">e-mail</a>
            <input class="login-margin" type="text" name="identity" value="" id="identity">
            <a for="password">Password</a>
            <input class="login-margin" type="password" name="password" value="" id="password">
            <div class="login-margin">
            <div class="checkbox">
            <label> <input type="checkbox" name="remember" value="1" id="remember"><font style="color: white;"> Remember me</font></label>
            </div>
            </div>
            </div>

      <!-- <button type="button" class="btn btn-primary maxwidth">Sign in</button> -->
            <input type="submit" class="btn btn-primary maxwidth login-margin" name="submit" value="Login">
            <?php echo form_close();?>
            <button type="button" class="btn btn-warning maxwidth login-margin">Forgot Password ?</button>
            <button type="button" class="btn btn-success maxwidth login-margin">New Account</button>

        </nav>