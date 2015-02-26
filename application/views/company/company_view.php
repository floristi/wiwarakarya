<div class="container">
<div class="main">
<div class="company_list">

    <h1>Company List</h1>
    <a style="font-size:1.5em" href="<?php echo site_url('c_company/create_company') ?>">+Create Company</a>
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
					<td><a href='#' data-toggle="modal" data-target="#detail-<?php echo $id; ?>"><?php echo $row->name; ?></a></td>
					<td><?php echo $row->address; ?></td>
					<td><?php echo $row->email; ?></td>
					<td><?php echo $row->phone; ?></td>
					<?php if ($status == 't') { ?>
						<td><i class="icon-ok-sign"></i> Aktif</td>"
						<?php $stat = "Aktif"; ?>
					<?php } else { ?>
						<td><i class="icon-remove-sign"></i> Tidak Aktif</td>
						<?php $stat = "Tidak Aktif"; ?>
					<?php } ?>
				</tr>;

				<div id="detail-<?php echo $id; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="detailCompany" aria-hidden="true">
				<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<i class="icon-edit"></i>
						<h2 class="modal-title" id="detailCompany">Company : <?php echo $row->name; ?></h2>
					</div>
					<div class="modal-body">
					<dl>
						<dt>Alamat<dt>
						<dd><?php echo $row->address; ?></dd>

						<dt>Kota<dt>
						<dd><?php echo $row->city; ?></dd>

						<dt>Contact Person<dt>
						<dd><?php echo $row->contact_name; ?></dd>

						<dt>E-Mail<dt>
						<dd><?php echo $row->email; ?></dd>

						<dt>Status<dt>
						<dd><?php echo $stat; ?></dd>
					</dl>
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