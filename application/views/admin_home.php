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
<div class="container-fluid" style="background:gray;color:white;">
<div class="col-sm-3">
<h1>Online Food HUB</h1>
</div>
<div class="col-sm-9"><br>
<button id="btn" >--</button>
<div id='nav'>
<?php 
include('manu.php');
?>
</div>
</div>
</div>

<div class="container-fluid" id="banner">
<div id="form" class="col-sm-7">
<?php echo form_open('admin/login') ?>
<table class="table">
	<?php
		if($this->session->flashdata('message'))
		{
			echo '
			<div class="alert alert-success">
				'.$this->session->flashdata("message").'
			</div>
			';
		}
	?>
<tr>
<td>Enter Username</td>
<td><?php echo form_input(['name'=>'un','placeholder'=>'Enter Username','class'=>'form-control','value'=>set_value('un')]) ?></td>
<td><?= form_error('un'); ?></td>
</tr>

<tr>
<td>Enter EmailAddress</td>
<td><?php echo form_input(['name'=>'user_email','placeholder'=>'Enter email address','class'=>'form-control','value'=>set_value('user_email')]) ?></td>
<td><?= form_error('user_email'); ?></td>
</tr>

<tr>
<td>Enter Password</td>
<td><?php echo form_password(['name'=>'ps','placeholder'=>'Enter Password','class'=>'form-control','value'=>set_value('ps')]) ?></td>
<td><?= form_error('ps'); ?></td>
</tr>
<tr>
<td colspan="2"><input type="submit" title="Login" value="Login" class="btn btn-primary"></td>
<td> <a href="forgot_password">Forgot your password ?</a> </td>
</tr>
</table>
</div>
</div>
<div class="container-fluid" style="background:gray;color:white;">
<h2 align="center">Copyright@Shuyi Zhang</h2>
</div>
</body>
</html>
