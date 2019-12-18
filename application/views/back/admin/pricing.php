<div id="content-container">
	<div id="page-title">
		<h1 class="page-header text-overflow" ><?php echo translate('manage_Pricing');?></h1>
	</div>
	<div class="tab-base">
		<div class="panel">
			<div class="panel-body">
				<div class="tab-content">
					<div style="border-bottom: 1px solid #ebebeb;padding: 25px 5px 5px 5px;"
					class="col-md-12" >
					<button class="btn btn-primary btn-labeled fa fa-plus-circle pull-right mar-rgt" 
					onclick="ajax_modal('add','<?php echo translate('add_Pricing'); ?>','<?php echo translate('successfully_added!'); ?>','pricing_add','')">
					<?php echo translate('create_pricing');?>
				</button>
				<a href="<?php echo base_url('admin/category_bulk_upload'); ?>" class="btn btn-success btn-labeled fa fa-plus-circle pull-right" 
					><?php echo translate('Upload Pricing in Bulk');?>
				</a>
			</div>
			<br>
			<div class="tab-pane fade active in" 
			id="list" style="border:1px solid #ebebeb; border-radius:4px;">
		</div>
	</div>
</div>
</div>
</div>
</div>

<script>
	var base_url = '<?php echo base_url(); ?>'
	var user_type = 'admin';
	var module = 'pricing';
	var list_cont_func = 'list';
	var dlt_cont_func = 'delete';
</script>

