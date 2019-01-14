<script type="text/javascript">
	function confirmDelete(id){
       var x =confirm("Do you want to delete this?");
       if(x){
		   $("#deleteId"+id).fadeOut('slow');
		    $.post('<?php echo base_url().'delete/enrollmentform/'?>', {id:id}, function(){

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
		<h1 class="page-title pull-left">Enrollment Form</h1>
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li class="active">Enrollment Form</li>
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
				<form action="<?php echo base_url().'enrollmentform/add.html' ?>" method="post">
					<?php if($this->session->flashdata('success')): ?>
					  <div class="success_reg">
						<p class="alert alert-success">Enrollment form has been successfully added!</p>
					  </div>
					<?php endif; ?>
					<div class="form-group error">
						<div class="col-sm-12">
							<?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
						</div>
					</div>
					<label>Category</label>
					<select name="category" class="form-control">
						<?php foreach($getAllTrainingCategory as $category): ?>
							<option value="<?php echo $category->id;?>"><?php echo $category->category;?></option>
						<?php endforeach; ?>
					</select>
					<label>Training</label>
					<input type="text" name="training" class="form-control" />
				
					<label>Name</label>
					<input type="text" name="name" class="form-control" />
					<label>Preferred Month</label>
					<select name="preferredMonth" class="form-control">
						<?php foreach($getMonth as $key=>$month): ?>
							<option value="<?php echo $key;?>"><?php echo $month;?></option>
						<?php endforeach; ?>
					</select>
					<label>Preferred Time</label>
					<select name="preferredTime" class="form-control">
						<?php foreach($getTime as $key=>$time): ?>
							<option value="<?php echo $key;?>"><?php echo $time;?></option>
						<?php endforeach; ?>
					</select>
					<label>Details</label>
					<textarea class="form-control" name="details" cols="10" rows="10"></textarea>
					<label>Reference Number</label>
					<input type="text" name="referenceNumber" class="form-control"  />
					<br>
					<input type="submit" value="Submit" class="btn btn-success pull-right" />
				</form>
			</div>
			<div class="col-md-3"></div>
		</div>
		<br>
		<br>
		<div class="row">
			<div class="col-md-12 col-xs-12">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Category</th>
							<th>Training</th>
							<th>Name</th>
							<th>Preferred Month</th>
							<th>Preferred Time</th>
							<th>Details</th>
							<th>Reference Number</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($getAllEnrollmentForm as $enrollmentForm): ?>
						<tr id="deleteId<?php echo $enrollmentForm->id;?>">
							<td><?php echo $enrollmentForm->category; ?></td>
							<td><?php echo $enrollmentForm->training; ?></td>
							<td><?php echo $enrollmentForm->name; ?></td>
							<td>
								<?php $month = $enrollmentForm->preferred_month;?>
								<?php if($month == "1"):?>
									<?php echo "January";?>
								<?php elseif($month == "2"): ?>
									<?php echo "February"; ?>
								<?php elseif($month == "3"): ?>
									<?php echo "March"; ?>
								<?php elseif($month == "4"): ?>
									<?php echo "April"; ?>
								<?php elseif($month == "5"): ?>
									<?php echo "May"; ?>
								<?php elseif($month == "6"): ?>
									<?php echo "June"; ?>
								<?php elseif($month == "7"): ?>
									<?php echo "July"; ?>
								<?php elseif($month == "8"): ?>
									<?php echo "August"; ?>
								<?php elseif($month == "9"): ?>
									<?php echo "September"; ?>
								<?php elseif($month == "10"): ?>
									<?php echo "October"; ?>
								<?php elseif($month == "11"): ?>
									<?php echo "November"; ?>
								<?php elseif($month == "12"): ?>
									<?php echo "December"; ?>
								<?php endif; ?>
							</td>
							<td>
								<?php $time =  $enrollmentForm->preferred_time; ?>
								<?php if($time == "1"):?>
									<?php echo "6:00";?>
								<?php elseif($time == "2"):?>
									<?php echo "7:00";?>
								<?php elseif($time == "3"):?>
									<?php echo "8:00";?>
								<?php elseif($time == "4"):?>
									<?php echo "9:00";?>
								<?php elseif($time == "5"):?>
									<?php echo "10:00";?>
								<?php elseif($time == "6"):?>
									<?php echo "11:00";?>
								<?php elseif($time == "7"):?>
									<?php echo "12:00";?>
								<?php elseif($time == "8"):?>
									<?php echo "13:00";?>
								<?php elseif($time == "9"):?>
									<?php echo "14:00";?>
								<?php elseif($time == "10"):?>
									<?php echo "15:00";?>
								<?php elseif($time == "11"):?>
									<?php echo "16:00";?>
								<?php elseif($time == "12"):?>
									<?php echo "17:00";?>
								<?php elseif($time == "13"):?>
									<?php echo "18:00";?>
								<?php elseif($time == "14"):?>
									<?php echo "19:00";?>
								<?php elseif($time == "15"):?>
									<?php echo "20:00";?>
								<?php elseif($time == "16"):?>
									<?php echo "21:00";?>
								<?php elseif($time == "17"):?>
									<?php echo "22:00";?>
								<?php elseif($time == "18"):?>
									<?php echo "23:00";?>
								<?php elseif($time == "19"):?>
									<?php echo "00:00";?>
								<?php endif; ?>
							</td>
							<td><?php echo $enrollmentForm->details; ?></td>
							<td><?php echo $enrollmentForm->reference_number;?></td>
							<td>
								<a onclick="confirmDelete(<?php echo $enrollmentForm->id;?>);" href="javascript:void(0);" class="btn btn-danger">Delete</a> | 
								<a href="<?php echo base_url().'enrollmentform/edit/id/'.$enrollmentForm->id; ?>" class="btn btn-success">Edit</a>
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