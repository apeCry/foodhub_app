<script>
$('document').ready(function(){
	$('#pro').click(function(){
		$('#adminproduct').slideToggle();
		$('#adminorder').hide();
		$('#adminpay').hide();
	});
	
	$('#order').click(function(){
		$('#adminorder').slideToggle();
		$('#adminproduct').hide();
		$('#adminpay').hide();
	});
	
	$('#pay').click(function(){
		$('#adminpay').slideToggle();
		$('#adminorder').hide();
		$('#adminproduct').hide();
	});
});
</script>



<ul>
    <li><b><?php echo anchor('Welcome/home','Home'); ?></b></li>
    <li><b><?php echo anchor('Welcome/product','Product'); ?></b></li>
	<li><a href="#" id="order"><b>Comment</b></a><br>
		<div class="col-sm-12" id="adminorder" style="background:gray;color:white;z-index:50;">
			<p><center><?= anchor('Welcome/write_comment','Write Comment') ?></center></p>
			<p><center><?= anchor('Welcome/comment_dis','Comment Display') ?></center></p>
		</div>
	</li>
    <!-- <li><b><?php echo anchor('Welcome/contect','Contact Us'); ?></b></li> -->
    <li><b><?php echo anchor('admin/index','Login'); ?></b></li>
    <li><b><?php echo anchor('Register/index','Register'); ?></b></li>
</ul>
