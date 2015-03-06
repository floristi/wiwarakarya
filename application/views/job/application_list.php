<div class="container">
    <div class="main">
		<div class="company_list">
			<div class="col-sm-12">
				<h1>Application List</h1>
			</div>
			<div class="col-sm-12">
    	
				<table id="list" class="display table table-striped" cellspacing="0" width="100%">
					<thead>
						<tr>
							<td>No</td>
							<td>Applied At</td>
							<td>Applicant Name</td>
							<td>Job Name</td>
							<td>Company Name</td>
							<td>Status</td>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<td>No</td>
							<td>Applied At</td>
							<td>Applicant Name</td>
							<td>Job Name</td>
							<td>Company Name</td>
							<td>Status</td>
						</tr>
					</tfoot>
					
					<tbody>
						<?php $i = 1; foreach($applications as $application) : ?>
						<tr>
							<td><?php echo $i; ?></td>
							<td><?php echo $application->created_at; ?></td>
							<td><?php echo $application->applicant_name; ?></td>
							<td><?php echo $application->job_name; ?></td>
							<td><?php echo $application->company_name; ?></td>
							<td>
							<select onchange="setStatus(this, <?php echo $application->id; ?>)">
								<?php foreach($statuses as $status): ?>
								<option value="<?php echo $status ?>" <?php if($application->status === $status) echo "selected=selected" ?>><?php echo $status ?></option>
								<?php  endforeach; ?>
							</select>
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

					function setStatus(sel, application_id) {
						var form = document.createElement('form');
						form.setAttribute('method', 'post');
						form.setAttribute('action', '<?php echo site_url('c_jobs/set_job_status'); ?>');

						var idField = document.createElement('input');
						idField.setAttribute('type', 'hidden');
						idField.setAttribute('name', 'id');
						idField.setAttribute('value', application_id);

						var statusField = document.createElement('input');
						statusField.setAttribute('type', 'hidden');
						statusField.setAttribute('name', 'status');
						statusField.setAttribute('value', sel.value);

						form.appendChild(idField);
						form.appendChild(statusField);

						document.body.appendChild(form);
						form.submit();
					}
				</script>
			</div>
		</div>
    </div>
</div>

