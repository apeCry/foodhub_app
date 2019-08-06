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
<style>

</style>
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
<h3 style="color:red">Offline Order</h3>
<table class="table">
<tr>
<td style="color:red">ID</td>
<td style="color:red">Name</td>
<td style="color:red">Address</td>
<td style="color:red">City</td>
<td style="color:red">Product</td>
<td style="color:red">Price</td>
<td style="color:red">E-mail</td>
<td style="color:red">Mobile No</td>
</tr>
<?php 
foreach($ofres as $of){
?>
<tr>
<td><?= $of->id; ?></td>
<td><?= $of->cname; ?></td>
<td><?= $of->address; ?></td>
<td><?= $of->city; ?></td>
<td><?= $of->pname; ?></td>
<td><?= $of->price; ?></td>
<td><?= $of->email; ?></td>
<td><?= $of->mno; ?></td>
</tr>
<?php 
}
?>
</table>
</div>
</div>
<div class="container-fluid" style="background:gray;color:white;">
<h2 align="center">Copyright@Shuyi Zhang</h2>
</div>
</body>
</html>