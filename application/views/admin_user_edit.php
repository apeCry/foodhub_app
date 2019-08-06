<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE-edge" />
<meta name="viewport" content="width=device-width" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Home</title>
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
echo $un=$this->session->userdata('un');
?>
<?php 
include('amanu.php');
?>
</div>
</div>
</div>

<div class="container-fluid" id="banner">
<div id="form" class="col-sm-7">
<h1>Update your profile</h1>
<?= form_open('admin_welcome/update_admin2'); ?>
<input type="hidden" name="id" value="<?= $data->id; ?>" />
<table class="table">
<tr>
<td>Enter New Username</td>
<td><?= form_input(['name'=>'un','placeholder'=>'Enter New Username','class'=>'form-control','value'=>$data->un]); ?></td>
<td><?=  form_error('name'); ?></td>
</tr>
<tr>
<td>Enter New Email</td>
<td><?= form_input(['name'=>'email','placeholder'=>'Enter New Email','class'=>'form-control','value'=>$data->email]); ?></td>
<td><?= form_error('price') ?></td>
</tr>
<td><?= form_submit(['name'=>'sub','value'=>'Save','class'=>'btn btn-primary']); ?></td>
<td><br>
<?php 
/*if($fb=$this->session->flashdata('fb'));
{
	echo $fb;
}*/
?>
</td>
</tr>
</table>
</div>
</div>
<div class="container-fluid" style="background:gray;color:white;">
<h2 align="center">Copyright@Shuyi Zhang</h2>
</div>
</body>
</html>
