<div id="content-container">
	<div class="panel-body">
		<table class="table table-bordered">

			<thead>
				<tr>
					<th><?php echo translate('Category ID and Name ');?></th>
					<th><?php echo translate('Sub Category ID and Name');?></th>
                    
					
				</tr>
			</thead> 
				
			<tbody >
			<?php
				
            	foreach($all_categories as $row){
            		
			?>
			<tr>
				 
                <td><h5>( <?php echo $row['category_id']; ?> ) <?php echo $row['category_name']; ?></h5></td>
                <td>
                    <?php 
                    $all_sub_category = $this->db->get_where('sub_category', array('category' =>$row['category_id']))->result_array();
                    foreach($all_sub_category as $asc){?>
                       <h5 style="margin-bottom: 15px;margin-right: 5px;">(<?php echo $asc['sub_category_id']; ?>) <?php echo $asc['sub_category_name'];?></h5>
                       <p><b>Brand Id and Name </b></p>
                       <?php
            	        $brands = json_decode($asc['brand'],true);
		            	?>
		            	<?php 
					foreach($brands as $row1){
				?>
                    <span class="label label-info" style="margin-right: 5px;">
                        ( <?php echo $row1; ?> ) <?php echo $this->crud_model->get_type_name_by_id('brand',$row1,'name');?>
                    </span>
               	<?php 
					} 
				?>
                       <hr>
                    <?php } ?>
                </td>
                 
			 
			</tr>
            <?php
            	}
			?>
			</tbody>
		</table>
	</div>
  
	</div>

