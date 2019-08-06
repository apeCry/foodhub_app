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
<li><?= anchor('admin_welcome/home_open','Home',['un'=>'un']);?></li>
<li><a href="#" id='pro'><b>Product Manage</b></a><br>
<div class="col-sm-12" id="adminproduct" style="background:gray;color:white;z-index:50;">
<p><center><?= anchor('admin_welcome/insert_pro_page','Insert Product'); ?></center></p>
<p><center><?= anchor('admin_welcome/disp_pro_page','Product Display'); ?></center></p>
<p><center><?= anchor('admin_welcome/sell_pro_list_page','Sell Product List'); ?></center></p>
</div>
</li>
<li><a href="#" id="order"><b>Order Manage</b></a><br>
<div class="col-sm-12" id="adminorder" style="background:gray;color:white;z-index:50;">
<p><center><?= anchor('admin_welcome/order_booking_page','Order Booking') ?></center></p>
<p><center><?= anchor('admin_welcome/online_order_page','Online Order') ?></center></p>
<p><center><?= anchor('admin_welcome/ofline_order_page','Offline Order') ?></center></p>
</div>
</li>
<li><?= anchor('admin_welcome/user_profile','Profile');?></li>
<li><?= anchor('Private_area/logout','Logout');?></li>
</ul>
