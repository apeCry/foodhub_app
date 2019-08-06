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
<h1>Product Display</h1>
<table class="table">
<tr>
<td><center>ID</center></td>
<td><center>Name</center></td>
<td><center>Price</center></td>
<td><center>Delete</center></td>
<td><center>Update</center></td>
</tr>
<?php 
			if($res)
			{
			?>
			<?php foreach($res as $res2){ ?>
<tr>
<td><center><?php echo $res2->id; ?></center></td>
<td><center><?= $res2->name; ?></center></td>
<td><center><?= $res2->price; ?></center></td>
<td><center><?= anchor('admin_welcome/delete_product/'.$res2->id,'Delete',['class'=>'btn btn-primary']); ?></center></td>
<td><center><?= anchor('admin_welcome/update_product/'.$res2->id,'Update',['class'=>'btn btn-primary']); ?></center></td>
</tr>
			<?php } } ?>
</table>
</div>
</div>
<div class="container-fluid" style="background:gray;color:white;">
<h2 align="center">Copyright@Shuyi Zhang</h2>
</div>
</body>
</html>