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
<h1>Product Insert</h1>
<?= form_open('admin_welcome/product_update2'); ?>
<input type="hidden" name="id" value="<?= $data->id; ?>" />
<table class="table">
<tr>
<td>Enter Name</td>
<td><?= form_input(['name'=>'name','placeholder'=>'Enter Name','class'=>'form-control','value'=>$data->name]); ?></td>
<td><?=  form_error('name'); ?></td>
</tr>
<tr>
<td>Enter Price</td>
<td><?= form_input(['name'=>'price','placeholder'=>'Enter Price','class'=>'form-control','value'=>$data->price]); ?></td>
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
