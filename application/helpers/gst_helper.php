<?php 

 
 function get_include_price($price,$tax,$tax_type){
                               //check gst status and amount
                                if(!empty($tax)){
                                    if($tax_type=="percent"){
                                        $gst_income = ($price*$tax/100);
                                    }else{
                                        $gst_income = $tax;
                                    }
                                   $include_gst_price = ($price+$gst_income);    
                                }else{
                                   $include_gst_price = $price;     
                                }    
                                return currency($include_gst_price);
           }
 
 
  
 function get_price($price,$gst_amount){
                               //check gst status and amount
                if(!empty($gst_amount)){
                    if($tax_type=="percent"){
                        $gst_income = ($price*$gst_amount/100);
                    }else{
                        $gst_income = $gst_amount;
                    }
                    $include_gst_price = ($price+$gst_income);    
                }else{
                    $include_gst_price = $price;     
                }    
            return currency($include_gst_price);
            
           }
    
?>