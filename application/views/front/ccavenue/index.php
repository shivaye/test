<?php 
$da = json_decode($del_address);

?>
<html>
<head>
<script>
	window.onload = function() {
		var d = new Date().getTime();
		document.getElementById("tid").value = d;
		
	    document.forms['customerData'].submit();
	};
	
	
</script>
</head>
<body>
	<center><h2>..........  Loading Please wait not refresh this page ...........</h2></center>
	  <?php echo form_open('home/ccavRequestHandler',array("name"=>"customerData","id"=>"customerData","style"=>"display:none;")); ?>
		 <input type="text" name="tid" id="tid" readonly /> 
		 <input type="text" name="merchant_id" value="<?php echo $merchant_data; ?>"/> 
		 <input type="text" name="order_id" value="<?php echo $sale_code; ?>"/>
		 <input type="text" name="amount" value="<?php echo $amount; ?>"/>
		 <input type="text" name="currency" value="INR"/>
		 <input type="text" name="redirect_url" value="<?php echo base_url('index.php/home/ccavresponseHandler'); ?>"/>
		 <input type="text" name="cancel_url" value="<?php echo base_url('index.php/home/ccavresponseHandler'); ?>"/>
		 <input type="text" name="language" value="EN"/>
		 <input type="text" name="billing_name" value="<?php echo $firstname; ?>"/> 
		 <input type="text" name="billing_address" value="<?php echo $address1; ?>"/> 
		 <input type="text" name="billing_city" value="<?php echo $city; ?>"/> 
		 <input type="text" name="billing_state" value="<?php echo $state; ?>"/> 
		 <input type="text" name="billing_zip" value="<?php echo $zip; ?>"/>
		 <input type="text" name="billing_country" value="<?php echo $country; ?>"/>
		 <input type="text" name="billing_tel" value="<?php echo $phone; ?>"/> 
		 <input type="text" name="billing_email" value="<?php echo $email; ?>"/>
		 <input type="text" name="delivery_name" value="<?php echo $da->firstname; ?>"/>
		 <input type="text" name="delivery_address" value="<?php echo $da->address1; ?>"/>
		 <input type="text" name="delivery_city" value="<?php echo $da->address1; ?>"/>
		 <input type="text" name="delivery_state" value="<?php echo $da->address1; ?>"/>
		 <input type="text" name="delivery_zip" value="<?php echo $da->zip; ?>"/>
		 <input type="text" name="delivery_country" value="India"/>
		 <input type="text" name="delivery_tel" value="<?php echo $da->phone; ?>"/>
		 <input type="text" name="merchant_param1" value="<?php echo $sale_id; ?>"/>
		 <input type="text" name="merchant_param2" value="additional Info."/>
		 <input type="text" name="merchant_param3" value="additional Info."/>
		 <input type="text" name="merchant_param4" value="additional Info."/>
		 <input type="text" name="merchant_param5" value="additional Info."/>
		 <input type="text" name="promo_code" value=""/>
		 <input type="text" name="customer_identifier" value=""/>
		 <input type="text" name="integration_type" value="iframe_normal"/>
		 <input type="submit" value="CheckOut"> 
	      <?php echo form_close(); ?>
	</body>
</html>

