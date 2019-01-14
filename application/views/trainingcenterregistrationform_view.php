<script type="text/javascript">
	function confirmDelete(id){
       var x =confirm("Do you want to delete this?");
       if(x){
		   $("#deleteId"+id).fadeOut('slow');
		    $.post('<?php echo base_url().'delete/trainingCenterRegForm/'?>', {id:id}, function(){

			});
	   }else{
		    return false;
	   }
	} 
	
	$(document).ready(function(){
		
	});
	
</script>
<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">Training Center Registration Form</h1>
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li class="active">Training Center Registration Form</li>
		</ol>
	</div>
</div>
<!-- END BREADCRUMBS -->
<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-4">
				<?php echo form_open_multipart('trainingcenterregistrationform/add', 'class="form-horizontal"');?>
					<?php if($this->session->flashdata('success')): ?>
					  <div class="success_reg">
						<p class="alert alert-success">Training Center Registration Form has been successfully added!</p>
					  </div>
					<?php endif; ?>
					<div class="form-group error">
						<div class="col-sm-12">
							<?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
						</div>
					</div>
					<div class="form-group error" style="color:red; font-size:18px;">
						<div class="col-sm-12">
							<?php 
								if(isset($error)){
									echo $error;
								}						
							?>
						</div>
					</div>
					<div class="form-group error" style="color:red; font-size:18px;">
						<div class="col-sm-12">
							<?php 
								if(isset($empty)){
									echo $empty;
								}						
							?>
						</div>
					</div>
					<label>Category</label>
					<select name="category" class="form-control">
						<?php foreach($getCategory as $key=>$cat): ?>
							<option value="<?php echo $key; ?>"><?php echo $cat;?></option>
						<?php endforeach;?>
					</select>
					<label>Business Name</label>
					<input type="text" name="businessName" class="form-control" value="<?php echo set_value('businessName')?>" />
					<label>Review/Training/Company Logo</label>
					<input type="file" name="photo" />
					<label>Brand Name</label>
					<input type="text" name="brandName" class="form-control" value="<?php echo set_value('brandName')?>" />
					<label>Address</label>
					<input type="text" name="address" class="form-control" value="<?php echo set_value('address')?>" />
					<label>Province</label>
					<select name="province" class="form-control">
						<?php foreach($getProvince as $key=>$province): ?>
						<option value="<?php echo $key?>"><?php echo $province; ?></option>
						<?php endforeach; ?>
					</select>
					<label>Account Executive</label>
					<input type="text" name="accountExec" class="form-control" value="<?php echo set_value('representative')?>" />
					<label>Date Started</label>
					<input type="text" name="dateStarted" class="form-control" value="<?php echo set_value('yearStarted')?>" />
					<label>Slot</label>
					<input type="text" name="slot" class="form-control" value="<?php echo set_value('slot');?>" />
					<label>Promo</label>
					<input type="text" name="promo" class="form-control" value="<?php echo set_value('promo');?>" />
					<br>
					<input type="submit" value="Submit" class="btn btn-success pull-right" />
				</form>
			</div>
			<div class="col-md-3"></div>
		</div>
		<br>
		<br>
		<div class="row">
			<div class="table-responsive table-responsive-lg col-md-12 col-xs-12">
				<table  class="table table-bordered">
					<thead>
						<tr>
							<th>Category</th>
							<th>Institution</th>
							<th>Amount</th>
							<th>Business Name</th>
							<th>Brand Name</th>
							<th>Address</th>
							<th>Representative</th>
							<th>Year Started</th>
							<th>Promo</th>
							<th>Slot</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($getAllTrainingRegistrationForm as $trainingForm): ?>
						<tr id="deleteId<?php echo $trainingForm->id;?>">
							<td>
								<?php $category = $trainingForm->category;?>
								<?php if($category == 1): ?>
									<?php echo "Training";?>
								<?php elseif($category == 2): ?>
									<?php echo  "Review"; ?>
								<?php elseif($category == 3): ?>
									<?php echo "Manning";?>
								<?php elseif($category == 4): ?>
									<?php echo "Others";?>
								<?php endif;?>
							</td>
							<td><?php echo $trainingForm->institution; ?></td>
							<td><?php echo $trainingForm->amount; ?></td>
							<td><?php echo $trainingForm->business_name; ?></td>
							<td><?php echo $trainingForm->brand_name; ?></td>
							<td><?php echo $trainingForm->address; ?></td>
							
							<td><?php echo $trainingForm->account_executive; ?></td>
							<td><?php echo $trainingForm->year_started; ?></td>
							<td><?php echo $trainingForm->promo; ?></td>
							<td><?php echo $trainingForm->slot; ?></td>
							<td>
								<a onclick="confirmDelete(<?php echo $trainingForm->id;?>);" href="javascript:void(0);"  class="btn btn-danger">Delete</a> 
								<a href="<?php echo base_url().'trainingcenterregistrationform/edit/id/'.$trainingForm->id; ?>" class="btn btn-success">Edit</a>
							</td>
							
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- END PAGE CONTENT -->