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
include('manu.php');
?>
</div>
</div>
</div>

<div class="container-fluid" id="banner">
<div id="form" class="col-sm-7">
<h3>Receipt</h3>
<table class="table">
<tr>
<td>Order ID</td>
<td><?= $res->id; ?></td>
<td>Name</td>
<td><?= $res->cname; ?></td>
</tr>
<tr>
<td>Product</td>
<td><?= $res->pname; ?></td>
<td>Price</td>
<td><?= $res->price; ?></td>
</tr>
<tr>
<td>E-Mail</td>
<td><?= $res->email; ?></td>
<td>Mobile No.</td>
<td><?= $res->mno; ?></td>
</tr>
<tr>
<td>Address</td>
<td><?= $res->address; ?></td>
<td>City</td>
<td><?= $res->city; ?></td>
</tr>
<tr>
<td><button class="btn btn-primary" onclick="window.print()">Print Now</button></td>
</tr>
</table>
</div>
</div>
<div class="container-fluid" style="background:gray;color:white;">
<h2 align="center">Copyright@Shuyi Zhang</h2>
</div>
</body>
</html>
