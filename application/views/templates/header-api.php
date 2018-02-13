<html>
<head>
    <title>Internal tools Programmatics MEX</title>
    <link href="<?php echo base_url('assets/api/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/api/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/api/css/custom.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/api/css/style.css'); ?>" rel="stylesheet">
    <link rel="icon" href="<?= base_url() ?>/favicon.gif" type="image/gif">
    <link href="https://fonts.googleapis.com/css?family=Smythe" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.2.1.js'); ?>"></script>

</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url('dashboard'); ?>""><span class="glyphicon glyphicon-home"></span> Home</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Tools<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Logs</a></li>
                        <li><a href="#">Products IDS</a></li>
                        <li><a href="<?php echo base_url('api-rest'); ?>">Http Requests</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li> <a href="<?php echo base_url('/about/'); ?>"><span class="icon-question"></span> About</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<script type="text/javascript" src="<?php echo base_url('assets/api/js/bootstrap.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/api/js/jquery-3.2.1.js'); ?>"></script>

