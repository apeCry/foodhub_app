<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE-edge" />
<meta name="viewport" content="width=device-width" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Home</title>
<link type="text/css" rel="stylesheet" href="<?=base_url('tool/css/s2.css'); ?>">
<link type="text/css" rel="stylesheet" href="<?= base_url('tool/css/bootstrap.min.css') ?>" >
<script src="<?= base_url('tool/js/bootstrap.js') ?>"> </script>
<script src="<?= base_url('tool/js/jquery-3.2.1.min.js')?>"></script>
<script src="<?= base_url('tool/js/myjs.js') ?>"></script>
<script>

</script>
</head>
<body>
<div class="container-fluid" style="background:blue;color:white;">
<div class="col-sm-3">
<h1>Online Food HUB</h1>
</div>
<div class="col-sm-9"><br>
<button id="btn" >--</button>
<div id='nav'>
<ul>
<li><a href="#"><b>Home</b></a></li>
<li><a href="#"><b>Product</b></a></li>
<li><a href="#"><b>Contect Us</b></a></li>
<li><a href="#"><b>Login</b></a></li>
</ul>
</div>
</div>
</div>

<div class="container-fluid" id="banner">
<div id="form" class="col-sm-7">
<?php echo form_open('admin/login') ?>
<table class="table">
<tr>
<td>Enter Username</td>
<td><?php echo form_input(['name'=>'un','placeholder'=>'Enter Username','class'=>'form-control','value'=>set_value('un')]) ?></td>
<td><?= form_error('un'); ?></td>
</tr>
<tr>
<td>Enter Password</td>
<td><?php echo form_password(['name'=>'ps','placeholder'=>'Enter Password','class'=>'form-control','value'=>set_value('ps')]) ?></td>
<td><?= form_error('ps'); ?></td>
</tr>
<tr>
<td colspan="2"><input type="submit" title="Login" value="Login" class="btn btn-primary"></td>
</td>
</table>
</div>
</div>
<div class="container-fluid" style="background:blue;color:white;">
<h2 align="center">Copyright@Shuyi Zhang</h2>
</div>
</body>
</html>