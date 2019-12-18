<div>
    <?php
		echo form_open(base_url() . 'admin/pricing/do_add/', array(
			'class' => 'form-horizontal',
			'method' => 'post',
			'id' => 'pricing_add',
			'enctype' => 'multipart/form-data'
		));
	?>
        <div class="panel-body">
            <div class="form-group">
                <label class="col-sm-4 control-label" for="demo-hor-1">
                	<?php echo translate('category_name');?>
                </label>
                <div class="col-sm-6">
                    <input type="text" name="category_name" id="demo-hor-1" 
                    	class="form-control required" placeholder="<?php echo translate('category_name');?>" >
                </div>
            </div>
             <div class="form-group">
                <label class="col-sm-4 control-label" for="demo-hor-1">
                    <?php echo translate('parking_charge');?>
                </label>
                <div class="col-sm-6">
                    <input type="text" name="parking_charge" id="demo-hor-1" 
                        class="form-control required" placeholder="<?php echo translate('parking_charge');?>" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label" for="demo-hor-1">
                    <?php echo translate('status');?>
                </label>
                <div class="col-sm-6">
                    <select class="form-control" name="status">
                        <option value="choose status">choose value</option>
                        <option value="1">Activate</option>
                        <option value="0">Deactivate</option>
                    </select>
                </div>
            </div>
        </div>
	</form>
</div>

<script>
	$(document).ready(function() {
		$("form").submit(function(e){
			event.preventDefault();
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