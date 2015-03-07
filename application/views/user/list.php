<div class="container">
    <div class="main">
		<div class="company_list">
			<div class="col-sm-12">
				<h1>List Users</h1>
				<a class="btn btn-primary pull-right buttonpadding" href="<?php echo site_url('c_user/create'); ?>">Create User</a>
			</div>
			<div class="col-sm-12">
				<table id="list" class="display table table-striped" cellspacing="0" width="100%">
					<thead>
						<tr>
							<td>No</td>
							<td>Username</td>
							<!-- <td>Password</td> -->
							<td>Fullname</td>
							<td>Last Education</td>
							<td>PoB</td>
							<td>DoB</td>
							<td>CV</td>
							<!-- <td>Action</td> -->
						</tr>
					</thead>
					<tfoot>
						<tr>
							<td>No</td>
							<td>Username</td>
							<!-- <td>Password</td> -->
							<td>Fullname</td>
							<td>Last Education</td>
							<td>PoB</td>
							<td>DoB</td>
							<td>CV</td>
							<!-- <td>Action</td> -->
						</tr>
					</tfoot>
					
					<tbody>
						<?php $i = 1; foreach($users as $user) : ?>
						<tr>
							<td><?php echo $i; ?> </td>
							<td>
								<a href="<?php echo site_url('c_user/update/'.$user->id); ?>"><?php echo $user->username; ?></a>
							</td>
							<!-- <td><?php echo $user->password; ?> </td> -->
							<td><?php echo $user->name; ?> </td>
							<td><?php echo $user->last_education; ?> </td>
							<td><?php echo $user->pob; ?> </td>
							<td><?php echo $user->dob; ?> </td>
							<td>
								<?php if ($user->cv_path) : ?>
									<a href="<?php echo $user->cv_path; ?>">download CV</a>
								<?php endif; ?>
							</td>
							<!-- <td> -->
								<!-- <a href="<?php echo site_url('c_user/delete/'.$user->id); ?>" style="margin-left:10px">Delete</a> -->
							<!-- </td> -->
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