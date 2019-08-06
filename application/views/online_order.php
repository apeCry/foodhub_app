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
<h2>Order Booking</h2>
<table class="table">
<tr>
<td style="color:green"><center>Product</center></td>
<td style="color:green"><center>Price</center></td>
<td style="color:green"><center>Coustmer Name</center></td>
<td style="color:green"><center>E-Mail </center></td>
<td style="color:green"><center>Mobile No</center></td>
<td style="color:green"><center>Address</center></td>
<td style="color:green"><center>City</center></td>
</tr>
<?php foreach($data as $d1) { ?>
<tr>
<td><center><?= $d1->pname; ?></center></td>
<td><center><?= $d1->price; ?></center></td>
<td><center><?= $d1->cname; ?></center></td>
<td><center><?= $d1->email; ?></center></td>
<td><center><?= $d1->mno; ?></center></td>
<td><center><?= $d1->address; ?></center></td>
<td><center><?= $d1->city; ?></center></td>
</tr>
<?php } ?>
</table>
</div>
</div>
<div class="container-fluid" style="background:gray;color:white;">
<h2 align="center">Copyright@Shuyi Zhang</h2>
</div>
</body>
</html>