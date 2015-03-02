<?php //var_dump($jobs);?>
<div class="container">
    <div class="main">
		<div class="company_list">
			<div class="col-sm-12">
				<h1>List Jobs</h1>
				<a class="btn btn-primary pull-right buttonpadding" href="<?php echo site_url('c_jobs/create'); ?>">Create Jobs</a>
			</div>
			<div class="col-sm-12">
    	
				<table id="list" class="display table table-striped" cellspacing="0" width="100%">
					<thead>
						<tr>
							<td>No</td>
							<td>Name</td>
							<td>Position</td>
							<td>Category</td>
							<td>Due Date</td>
							<td>Major</td>
							<td>Last Education</td>
							<td>Salary</td>
							<td>TNC</td>
							<td>Company</td>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<td>No</td>
							<td>Name</td>
							<td>Position</td>
							<td>Category</td>
							<td>Due Date</td>
							<td>Major</td>
							<td>Last Education</td>
							<td>Salary</td>
							<td>TNC</td>
							<td>Company</td>
						</tr>
					</tfoot>
					
					<tbody>
						<?php $i = 1; foreach($jobs as $job) : ?>
						<tr>
							<td><?php echo $i; ?> </td>
							<td><?php echo $job->name; ?> </td>
							<td><?php echo $job->position; ?> </td>
							<td><?php echo $job->position_category; ?> </td>
							<td><?php echo $job->due_date; ?> </td>
							<td><?php echo $job->major; ?> </td>
							<td><?php echo $job->last_education; ?> </td>
							<td><?php echo $job->salary; ?> </td>
							<td><?php echo $job->tnc; ?> </td>
							<td>
								<?php echo $job->company_name; ?> 
							</td>
							
						</tr>
						<?php $i++; endforeach; ?>
					</tbody>
				</table>
				<script type="text/javascript" src="<?php echo base_url();?>resources/DataTables-1.10.5/media/js/jquery.dataTables.js"></script>
				<script>
					$(document).ready(function() {
						$('#list').DataTable();
					} );
				</script>
			</div>
		</div>
    </div>
</div>

