<div id="content-container">
	<div id="page-title">
		<h1 class="page-header text-overflow" ><?php echo translate('manage_sub_categories_(_physical_product_)');?></h1>
	</div>
	<div class="tab-base">
		<div class="panel">
			<div class="panel-body">
				<div class="tab-content">
                    <div class="col-md-12" style="border-bottom: 1px solid #ebebeb;padding:10px;">
                        <button class="btn btn-primary btn-labeled fa fa-plus-circle pull-right" 
                        onclick="ajax_modal('add','<?php echo translate('add_sub-category_(_physical_product_)'); ?>','<?php echo translate('successfully_added!'); ?>','sub_category_add','')">
                        <?php echo translate('create_sub_category');?>
                    </button>
                    <a href="<?php echo base_url('admin/sub_category_bulk_upload'); ?>" class="btn btn-success btn-labeled fa fa-plus-circle pull-right" 
                    ><?php echo translate('Upload SubCategory in Bulk');?>
                </a>
                </div>
                <!-- LIST -->
                <div class="tab-pane fade active in" id="list" style="border:1px solid #ebebeb; border-radius:4px;">
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>
	var base_url = '<?php echo base_url(); ?>'
	var user_type = 'admin';
	var module = 'sub_category';
	var list_cont_func = 'list';
	var dlt_cont_func = 'delete';
</script>
