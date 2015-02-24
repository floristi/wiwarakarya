<div class="container">
<div class="main">
<div class="company_list">

    <h1>Company List</h1>
    <a style="font-size:1.5em" href="<?php echo site_url('c_company/create_company') ?>">+Create Company</a>
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
				foreach ($query as $row) {
					echo "<tr>";
					$id = $row->id; 
					echo "<td>". "<a href='". site_url('c_company/data_company/'.$id) . "' data-toggle=\"modal\">". $row->name ."</a>". "</td>";
					echo "<td>". $row->address . "</td>";
					echo "<td>". $row->email . "</td>";
					echo "<td>". $row->phone . "</td>";
					$status = $row->status;
					$stat = "Tidak Aktif";
					if ($status == 't') {
						echo "<td><i class=\"icon-ok-sign\"></i> Aktif</td>";
						$stat = "Aktif";
					} else
						echo "<td><i class=\"icon-remove-sign\"></i> Tidak Aktif</td>";
					echo "</tr>";

					echo 
						"<div id='". $id ."' class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
							<div class=\"modal-header\">
								<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
								<i class=\"icon-edit\"></i>
								<h2>Company : ".$row->name."</h2>
							</div>

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
							<a href='".site_url('c_company/data_company/'.$id)."'><button class=\"btn btn-primary\" name=\"edit-company\">Edit Company</button></a>
							<button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Close</button>
						</div>
					</div>";
				}
			?>
			</tbody>
		</table>
</div>
</div>
</div>