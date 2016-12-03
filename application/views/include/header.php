<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url();  ?>dist/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/bootstrap-theme.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>dist/css/bootstrap.min.css">

	<title>Registration page</title>

	<!--  -->

	<style>

	</style>

</head>

<body>
	<br/>
<div class="container theme-showcase" role="main">
	
	<nav class="navbar navbar-inverse">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Basic Login Page </a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="<?php echo base_url('index.php/welcome'); ?>">Registration</a></li>
              <li><a href="<?php echo base_url('index.php/login'); ?>">Login</a></li>
              <li><a href="<?php echo base_url('index.php/contact'); ?>">Contact</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>