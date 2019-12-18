	<div class="panel-body" id="demo_s">
		<table id="demo-table" class="table table-striped"  data-pagination="true" data-show-refresh="true" data-ignorecol="0,4" data-show-toggle="true" data-show-columns="false" data-search="true" >

			<thead>
				<tr>
					<th><?php echo translate('no');?></th>
					<th><?php echo translate('category');?></th>
					<th><?php echo translate('sub category');?></th>
					<th><?php echo translate('name');?></th>
					<th><?php echo translate('brands');?></th>
					<th class="text-right"><?php echo translate('options');?></th>
				</tr>
			</thead>
				
			<tbody >
			<?php
				$i=0;
            	foreach($all_subsubcat as $row){
            		$i++;
            		 $query1 = $this->db->get_where('category', array('category_id' =>$row['category_id']));
                            foreach ($query1->result() as $row1)
                            {
                                $row1->category_name;

                            }

                             $query2 = $this->db->get_where('sub_category', array('sub_category_id' =>$row['subsubcat_id']));
                            foreach ($query2->result() as $row2)
                            {
                                $row2->sub_category_name;

                            }
                           
			?>
                <tr>
                    <td><?php echo $i; ?></td>
                     <td><?php echo $row1->category_name; ?></td>
                      <td><?php echo $row2->sub_category_name; ?></td>
                    <td><?php echo $row['subsubcat_name']; ?></td>
                      <?php
            	$brands=json_decode($row['brand'],true);
			?>
            <td>
				<?php 
					foreach($brands as $row1){
				?>
                    <span class="label label-info" style="margin-right: 5px;">
                        <?php echo $this->crud_model->get_type_name_by_id('brand',$row1,'name');?>
                    </span>
               	<?php 
					} 
				?>
          	</td> 
                    <td class="text-right">
                        <a class="btn btn-success btn-xs btn-labeled fa fa-wrench" data-toggle="tooltip" 
                            onclick="ajax_modal('edit','<?php echo translate('edit_sub_sub-category_(_physical_product_)'); ?>','<?php echo translate('successfully_edited!'); ?>','subsubcat_edit','<?php echo $row['sub_id']; ?>')" 
                                data-original-title="Edit" 
                                    data-container="body"><?php echo translate('edit');?>
                        </a>
                        
                        <a onclick="delete_confirm('<?php echo $row['sub_id']; ?>','<?php echo translate('really_want_to_delete_this?'); ?>')" 
                            class="btn btn-danger btn-xs btn-labeled fa fa-trash" 
                                data-toggle="tooltip" data-original-title="Delete" 
                                    data-container="body"><?php echo translate('delete');?>
                        </a>
                        
                    </td>
                </tr>
            <?php
            	}                                                
			?>
			</tbody>
		</table>
	</div>
           
	<div id='export-div'>
		<h1 style="display:none;"><?php echo translate('subsubcat'); ?></h1>
		<table id="export-table" data-name='brand' data-orientation='p' style="display:none;">
				<thead>
					<tr>
						<th><?php echo translate('no');?></th>
						<th><?php echo translate('name');?></th>
						<th><?php echo translate('category');?></th>
					</tr>
				</thead>
					
				<tbody >
				<?php
					$i = 0;
	            	foreach($all_subsubcat as $row){
	            		$i++;
				?>
				<tr>
					<td><?php echo $i; ?></td>
					<td><?php echo $row['subsubcat_name']; ?></td>
					<td><?php echo $this->crud_model->get_type_name_by_id('category',$row['category'],'category_name'); ?></td>
				</tr>
	            <?php
	            	}
				?>
				</tbody>
		</table>
	</div>

<style>
	.highlight{
		background-color: #E7F4FA;
	}
</style>







           