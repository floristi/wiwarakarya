<div class="container">
	<div class="main">
		<div class="company_list">	
			<div class="col-sm-12">
				<h1>Company List</h1>
				<a class="btn btn-primary pull-right buttonpadding" href="<?php echo site_url('c_company/create_company');?>">Create Company</a>
			</div>
			<div class="col-sm-12">
					<table id="list" class="display table table-striped" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>Company Name</th>
								<th>Address</th>
								<th>Email</th>
								<th>Phone Number</th>
								<th>Status</th>
							</tr>
						</thead>
						
						<tfoot>
							<tr>
								<th>Company Name</th>
								<th>Address</th>
								<th>Email</th>
								<th>Phone Number</th>
								<th>Status</th>
							</tr>
						</tfoot>
						
						<tbody>
							<?php foreach ($query as $row) {
								$id = $row->id; 
								$status = $row->status;
							?>
								<tr>	
									<td><a href='#' data-toggle="modal" data-target="#detail-<?php echo $id; ?>"><?php echo $row->name;?></a></td>
									<td><?php echo $row->address; ?></td>
									<td><?php echo $row->email; ?></td>
									<td><?php echo $row->phone; ?></td>
									<?php 
										if ($status == 't')
										{ 
									?>
										<td><i class="icon-ok-sign"></i> Aktif</td>
									<?php 
										$stat = "Aktif";
									?>
									<?php 
										} else { 
									?>
										<td><i class="icon-remove-sign"></i>Tidak Aktif</td>
									<?php 
										$stat = "Tidak Aktif";
									?>
									<?php } ?>
								</tr>

								<div id="detail-<?php echo $id; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="detailCompany" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
												<i class="icon-edit"></i>
												<h3 class="modal-title" id="detailCompany">Company : <?php echo $row->name; ?></h3>
											</div>
											<div class="modal-body">
												<div class="container">
													<label class="col-sm-2">
														Alamat
													</label>
													<div class="col-sm-10">
														<?php echo $row->address; ?>
													</div>
													<label class="col-sm-2">
														Kota
													</label>
													<div class="col-sm-10">
														<?php echo $row->city; ?>
													</div>
													<label class="col-sm-2">
														Contact Person
													</label>
													<div class="col-sm-10">
														<?php echo $row->contact_name; ?>
													</div>
													
													<label class="col-sm-2">
														E-Mail
													</label>
													<div class="col-sm-10">
														<?php echo $row->email; ?>
													</div>
													<label class="col-sm-2">
														Status
													</label>
													<div class="col-sm-10">
														<?php echo $stat; ?>
													</div>
													
													
												</div>
											</div>
											<div class="modal-footer">
												<a href="<?php echo site_url('c_company/data_company/'.$id); ?>"><button class="btn btn-primary" name="edit-company">Edit Company</button></a>
												<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
											</div>
										</div>
									</div>
								</div>
							<?php } ?>
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