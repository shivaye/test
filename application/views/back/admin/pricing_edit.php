<?php
foreach($pricing_data as $row){
	?>
	<div class="tab-pane fade active in" id="edit">
		<?php
		echo form_open(base_url() . 'admin/pricing/update/' . $row['id'], array(
			'class' => 'form-horizontal',
			'method' => 'post',
			'id' => 'pricing_edit',
			'enctype' => 'multipart/form-data'
		));
		?>
		<div class="panel-body">
			<div class="form-group">
				<label class="col-sm-4 control-label" for="demo-hor-1">
					<?php echo translate('category_name');?>
				</label>
				<div class="col-sm-6">
					<input type="text" name="category_name"  
					value="<?php echo $row['category_name'];?>" id="demo-hor-1" 
					class="form-control required" placeholder="" >
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label" for="demo-hor-1">
					<?php echo translate('parking_charge');?>
				</label>
				<div class="col-sm-6">
					<input type="text" name="parking_charge" id="demo-hor-1" 
					class="form-control required" placeholder="<?php echo translate('parking_charge');?>" value="<?php echo $row['parking_charge'];?>">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label" for="demo-hor-1">
					<?php echo translate('status');?>
				</label>
				<div class="col-sm-6">
					<select class="form-control" name="status">
						<option value="choose status">choose value</option>
						<option value="1" <?php if($row['status']==1){echo "selected";}?>>Activate</option>
						<option value="0" <?php if($row['status']==0){echo "selected";}?>>Deactivate</option>
					</select>
				</div>
			</div>
		</div>
	</form>
</div>
<?php
}
?>

<script>
	$(document).ready(function() {
		$("form").submit(function(e) {
			return false;
		});
	});
	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			
			reader.onload = function(e) {
				$('#wrap').hide('fast');
				$('#blah').attr('src', e.target.result);
				$('#wrap').show('fast');
			}
			reader.readAsDataURL(input.files[0]);
		}
	}
	
	$("#imgInp").change(function() {
		readURL(this);
	});
	
</script>