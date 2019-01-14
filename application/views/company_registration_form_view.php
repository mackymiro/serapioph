<script type="text/javascript">
	function confirmDelete(id){
		var x =confirm("Do you want to delete this?");
		if(x){
			$("#deleteId"+id).fadeOut('slow');
			 $.post('<?php echo base_url().'delete/companyRegistrationForm/'?>', {id:id}, function(){

			}); 
		}else{
			 return false;
		}
	}

</script>
<!-- BREADCRUMBS -->
<div class="page-header">
	<div class="container">
		<h1 class="page-title pull-left">Company Registration Form</h1>
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li class="active">Company Registration Form</li>
		</ol>
	</div>
</div>
<!-- END BREADCRUMBS -->
<!-- PAGE CONTENT -->
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<?php echo form_open_multipart('companyregistrationform/add', 'class="form-horizontal"');?>
					<?php if($this->session->flashdata('success')): ?>
					  <div class="success_reg">
						<p class="alert alert-success">Company Registration Form has been successfully added!</p>
					  </div>
					<?php endif; ?>
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
					<div class="form-group error">
						<div class="col-sm-12">
							<?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
						</div>
					</div>
					<label>Comany Name</label>
					<input type="text" name="companyName" class="form-control" />
					<label>Comany Logo</label>
					<input type="file" name="photo" />
					<label>Company Address</label>
					<input type="text" name="companyAddress" class="form-control" />
					<label>Province</label>
					<select name="province" class="form-control">
						<?php foreach($getProvince as $key=>$province): ?>
						<option value="<?php echo $key?>"><?php echo $province; ?></option>
						<?php endforeach; ?>
					</select>
					<label>Account Executive</label>
					<input type="text" name="accountExecutive" class="form-control" />
					<label>Date Started</label>
					<input type="text" name="dateStarted" class="form-control" />
					<br>
					<input type="submit" class="btn btn-success" value="Submit" />
				</form>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-12">
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Company Logo</th>
							<th>Company Name</th>
							<th>Company Address</th>
							<th>Province</th>
							<th>Account Executive</th>
							<th>Date Started</th>
							<th>Options</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($getCompanyRegistration as $compReg): ?>
						<tr id="deleteId<?php echo $compReg->id; ?>">
							<td><img alt="" class="img-responsive" src="<?php echo base_url()?>assets/uploads/logo/<?php echo "thumb_size_".$compReg->company_photo; ?>" /></td>
							<td><?php echo $compReg->company_name;?></td>
							<td><?php echo $compReg->company_address;?></td>
							<td><?php echo $compReg->province;?></td>
							<td><?php echo $compReg->account_executive;?></td>
							<td><?php echo $compReg->year_started;?></td>
							<td>
								<a href="<?php echo base_url().'companyregistrationform/edit/id/'.$compReg->id;?>" class="btn btn-warning">Edit</a>
								<a onclick="confirmDelete(<?php echo $compReg->id;?>);" href="javascript:void(0);" class="btn btn-danger">Delete</a>
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
