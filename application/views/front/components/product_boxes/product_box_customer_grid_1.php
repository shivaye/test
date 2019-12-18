<div class="thumbnail box-style-2 no-padding">
    <div class="media">
    	<div class="cover"></div>
     
    <div class="media-link image_delay" data-src="<?php echo $this->crud_model->file_view('product',$product_id,'','','thumb','src','multi','one'); ?>" style="background-image:url('<?php echo img_loading(); ?>');background-size:cover;">
 
            <div class="quick-view-sm hidden-xs hidden-sm">
                <span class="icon-view middle" data-toggle="tooltip" data-original-title="<?php  echo translate('quick_view'); ?>" onclick="quick_view('<?=base_url()?>home/quick_view_cp/<?=$customer_product_id?>')">
                        <strong><i class="fa fa-eye"></i></strong>
                </span>
            </div>
        </div>
    </div>
    <div class="caption text-center">
        <h4 class="caption-title">
        	<a href="<?php echo $this->crud_model->customer_product_link($customer_product_id); ?>">
				<?php echo substr($title,0,20); ?>
            </a>
        </h4>
        <div class="price">
            <ins> <?php echo get_include_price($row['sale_price'],$row['tax'],$row['tax_type']); ?></ins> 
        </div> 
        <div class="vendor">
            <?php echo translate('seller:').' '.$this->db->get_where('user', array('user_id' => $added_by))->row()->username; ?>
        </div>
    </div>
</div>