<html>
<head>
<title> aromecx</title>
</head>
<body>
<center>
    <div class="logo">
            	 <a href="<?php echo base_url(); ?>">
                	<img src="<?php echo base_url('/uploads/logo_image/logo_78.png'); ?>" alt="SuperShop">
             	</a>
            </div>
<?php 
    include('Crypto.php');
	error_reporting(0);

	$working_key='5D02BFBC493C2A594425A50C0B791518';//Shared by CCAVENUES
	$access_code='AVJZ86GF08BP84ZJPB';//Shared by CCAVENUES
	$merchant_data='222982';
	
	foreach ($_POST as $key => $value){
		$merchant_data.=$key.'='.$value.'&';
	}
	
	$encrypted_data=encrypt($merchant_data,$working_key); // Method for encrypting the data.

	$production_url='https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction&encRequest='.$encrypted_data.'&access_code='.$access_code;
?>
<iframe src="<?php echo $production_url?>" id="paymentFrame" width="482" height="450" frameborder="0" scrolling="No" ></iframe>

<script type="text/javascript" src="jquery-1.7.2.js"></script>
<script type="text/javascript">
    	$(document).ready(function(){
    		 window.addEventListener('message', function(e) {
		    	 $("#paymentFrame").css("height",e.data['newHeight']+'px'); 	 
		 	 }, false);
	 	 	
		});
</script>
</center>
</body>
</html>

