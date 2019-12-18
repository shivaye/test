<div id="content-container">

  <div class="tab-base">
    <div class="panel" style="margin-bottom:0px !important;">
      <div class="panel-body">
        <div class="tab-content">
          <div class="col-md-12" style="border-bottom: 1px solid #ebebeb;padding: 5px;">
            <h1 class="page-header text-overflow"><?php echo translate('Import SubCategory');?> <a href="<?php echo base_url('admin/sub_category'); ?>" class="btn btn-info btn-labeled fa fa-step-backward pull-right" 
             ><?php echo translate('back_to_subcategory_list');?>
           </a></h1>


         </div>
         <!-- LIST -->
         <div class="tab-pane fade active in" style="border:1px solid #ebebeb; border-radius:4px;">
          <div class="row" style="padding:75px 50px;">


            <div class="col-sm-6">

              <?php echo form_open_multipart('admin/sub_category_bulk_upload'); ?>            
              <div class="form-group btm_border">
                <label class="col-sm-4 control-label" for="demo-hor-4">Please Select File(Only CSV Formate)</label>
                <div class="col-sm-6">
                  <input type="file" required class="form-control" name="product_file" /> 
                  <input type="hidden" required name="upload_type" value="1" /> 
                </div>
              </div>

              <input type="submit" name="csv_upload" style="color:#fff;" class="btn btn-success" value="Upload Sheet" />
            </form><br/>
            <?php 
            if($message = $this->session->flashdata('message')){?>
              <div class="alert alert-danger">
                <strong>Error !</strong> <?php  echo $message; ?>
              </div>

            <?php } ?>

            <div class="show_resp">

             <?php 
             if($all_upload_file = $this->session->flashdata('all_upload_file')){?>
              <div class="alert alert-warning">
                <strong>All Upload Product </strong> (<?php  echo $all_upload_file; ?>)
              </div> 
            <?php } ?>

            <?php 
            if($success_upload_file = $this->session->flashdata('success_upload_file')){?>
              <div class="alert alert-success">
                <strong>Successful Upload Product </strong> (<?php  echo $success_upload_file; ?>)
              </div> 
            <?php } ?>

            <?php 
            if($error_upload_file = $this->session->flashdata('error_upload_file')){?>
              <div class="alert alert-danger">
                <strong>Error Upload Product </strong> (<?php  echo $error_upload_file; ?>)
              </div>

            <?php } ?>

          </div>
        </div> 
        <div class="col-sm-6">
          <h4>1) First Step <a href="<?php echo base_url('template/sub_category_bulk_upload.csv'); ?>" class="btn btn-xs btn-success">Download</a> CSV File</h4>
          <h4>2) Second Step Fill Data in CSV Sheet</h4>
          <h4>3) Last Step Select CSV File and Upload Then waiting after some time</h4>
          <p>Show Message Successful Upload Products and Error Products</p>
        </div>

      </div>
    </div>
  </div>
</div>
</div>


<div class="panel">
  <div class="panel-body">
    <div class="tab-content">
      <div class="col-md-12" style="border-bottom: 1px solid #ebebeb;padding: 5px;">
        <h1 class="page-header text-overflow"><?php echo translate('Import SubCategory In All Category');?>
        <a target="_blank" href="<?php echo base_url('admin/show_c_s_b_id'); ?>" class="btn btn-danger btn-labeled fa fa-step-backward pull-right">
          <?php echo translate('Get Category ID and Sub Category ID and Brand ID');?>
          </a>
        </h1>


      </div>
      <!-- LIST -->
      <div class="tab-pane fade active in" style="border:1px solid #ebebeb; border-radius:4px;">
        <div class="row" style="padding:75px 50px;">


          <div class="col-sm-6">

            <?php echo form_open_multipart('admin/category_bulk_upload'); ?>

            <div class="form-group btm_border">
              <label class="col-sm-4 control-label" for="demo-hor-4">Please Select File(Only CSV Formate)</label>
              <div class="col-sm-6">
                <input type="file" required class="form-control" name="product_file" /> 
                <input type="hidden" required name="upload_type" value="2" /> 
              </div>
            </div>

            <input type="submit" name="csv_upload" style="color:#fff;" class="btn btn-success" value="Upload Sheet" />
          </form><br/>
          <?php 
          if($message = $this->session->flashdata('message')){?>
            <div class="alert alert-danger">
              <strong>Error !</strong> <?php  echo $message; ?>
            </div>

          <?php } ?>

          <div class="show_resp">

           <?php 
           if($all_upload_file = $this->session->flashdata('all_upload_file2')){?>
            <div class="alert alert-warning">
              <strong>All Upload Product </strong> (<?php  echo $all_upload_file; ?>)
            </div> 
          <?php } ?>

          <?php 
          if($success_upload_file = $this->session->flashdata('success_upload_file2')){?>
            <div class="alert alert-success">
              <strong>Successful Upload Product </strong> (<?php  echo $success_upload_file; ?>)
            </div> 
          <?php } ?>

          <?php 
          if($error_upload_file = $this->session->flashdata('error_upload_file2')){?>
            <div class="alert alert-danger">
              <strong>Error Upload Product </strong> (<?php  echo $error_upload_file; ?>)
            </div>

          <?php } ?>

        </div>
      </div> 
      <div class="col-sm-6">
        <h4>1) First Step <a href="<?php echo base_url('template/sub_category_bulk_upload.csv'); ?>" class="btn btn-xs btn-success">Download</a> CSV File</h4>
        <h4>2) Second Step Fill Data in CSV Sheet</h4>
        <h4>3) Last Step Select CSV File and Upload Then waiting after some time</h4>
        <p>Show Message Successful Upload Products and Error Products</p>
      </div>

    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>


<script>

  function other_forms(){}

  function set_select(){
    $('.demo-chosen-select').chosen();
    $('.demo-cs-multiselect').chosen({width:'100%'});
  }

  $(document).ready(function() {
    set_select();
    set_summer();
    createColorpickers();
  });

  function other(){
    set_select();
    $('#sub').show('slow');
  }
  function get_cat(id,now){
    $('#sub').hide('slow');
    ajax_load(base_url+'admin/product/sub_by_cat/'+id,'sub_cat','other');
  }
  function get_brnd(id){
    $('#brn').hide('slow');
    ajax_load(base_url+'admin/product/brand_by_sub/'+id,'brand','other');
    $('#brn').show('slow');
  }
  function get_sub_res(id){}

</script>

<style>
	.btm_border{
		border-bottom: 1px solid #ebebeb;
    padding-bottom: 43px;
  }
</style>

