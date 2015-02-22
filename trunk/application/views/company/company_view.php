<?php $this->load->view('layout/header'); ?>

<div class="company_list">

    <h1>Company List</h1>
    <table class="table table-striped">
			<thead>
				<tr>
					<th>Company Name</th>
					<th>Address</th>
					<th>Email</th>
					<th>Phone Number</th>
					<th>Status</th>
				</tr>
			</thead>
			
			<tbody>

				<?php
					//$query = $this->m_company->get_list_company();
					foreach ($query as $row) {
						echo "<tr>";
						$id = $row->id; 
						echo "<td>". "<a href='#". $id. "' data-toggle=\"modal\">". $row->name ."</a>". "</td>";
						
						echo "<td>". $row->address . "</td>";
						echo "<td>". $row->email . "</td>";
						echo "<td>". $row->phone . "</td>";
						$status = $row->status;
						$stat = "Tidak Aktif";
						if ($status == 't') {
							echo "<td><i class=\"icon-ok-sign\"></i> Aktif</td>";
							$stat = "Aktif";
						} else
							echo "<td><i class=\"icon-remove-sign\"></i> Non Aktif</td>";
						echo "</tr>";

						echo 
						"<div id='". $id ."' class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
							<div class=\"modal-header\">
								<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
								<i class=\"icon-edit\"></i>
								<h2>Nama Supplier : ".$row->name."</h2>
							</div>

							<div class=\"modal-body\">
								<dl>
									<dt>Nomor Telepon<dt>
									<dd>".$row->phone."</dd>

									<dt>Alamat<dt>
									<dd>".$row->address."</dd>

									<dt>Kota<dt>
									<dd>".$row->city."</dd>

									<dt>Contact Person<dt>
									<dd>".$row->contact_name."</dd>

									<dt>E-Mail<dt>
									<dd>".$row->email."</dd>

									<dt>Status<dt>
									<dd>".$stat."</dd>
								</dl>
							</div>

							<div class=\"modal-footer\">
								<a href='".site_url('c_supplier/data_supplier/'.$id)."'><button class=\"btn btn-primary\" name=\"edit-supplier\">Edit Supplier</button></a>
								<button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Close</button>
							</div>
						</div>";
					}
				?>
			</tbody>
		</table>
</div>

<?php $this->load->view('layout/footer'); ?>