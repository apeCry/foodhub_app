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
<div id="form" class="col-sm-7"><br>
<?= form_open('Welcome/online_order'); ?>
<input type="hidden" value="ofline" name="type" >
<table class="table">
<tr>
<td>Product Name</td>
<td><?= form_input(['name'=>'pname','class'=>'form-control','value'=>$d->name]);?></td>
</tr>
<tr>
<td>Product Price</td>
<td><?= form_input(['name'=>'price','class'=>'form-control','value'=>$d->price]);?></td>
</tr>
<tr>
<td>Enter Coustemar Name</td>
<td><?= form_input(['name'=>'cname','class'=>'form-control','value'=>set_value('cname')]);?></td>
</tr>
<tr>
<td>Enter E-Mail</td>
<td><?= form_input(['name'=>'email','class'=>'form-control','value'=>set_value('email')]);?></td>
</tr>
<tr>
<td>Enter Mobile No</td>
<td><?= form_input(['name'=>'mno','class'=>'form-control','value'=>set_value('mno')]);?></td>
</tr>
<tr>
<td>Enter Address</td>
<td><?= form_input(['name'=>'address','class'=>'form-control','value'=>set_value('address')]);?></td>
</tr>
<tr>
<td>Enter City</td>
<td><?= form_input(['name'=>'city','class'=>'form-control','value'=>set_value('city')]);?></td>
</tr>
<tr>
<td><?= form_submit(['name'=>'sub','class'=>'btn btn-primary','value'=>'Book Now']) ?></td>
</tr>
</table>
</div>
</div>
<div class="container-fluid" style="background:gray;color:white;">
<h2 align="center">Copyright@Shuyi Zhang</h2>
</div>
</body>
</html>