<!-- Icon Cards-->
<div class="row">
	<div class="col-xl-3 col-sm-6 mb-3">
		<div class="card text-white bg-primary o-hidden h-100">
			<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-archive"></i>
				</div>
				<div class="mr-5"><?php echo $total_surat ?> Total Surat</div>
			</div>
			<a class="card-footer text-white clearfix small z-1" href="#">
				<span class="float-left"></span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
			</a>
		</div>
	</div>
	<div class="col-xl-3 col-sm-6 mb-3">
		<div class="card text-white bg-danger o-hidden h-100">
			<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-archive"></i>
				</div>
				<div class="mr-5"><?php echo $total_reject ?> Total Reject </div>
			</div>
			<a class="card-footer text-white clearfix small z-1" href="#">
				<span class="float-left"></span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
			</a>
		</div>
	</div>
	<div class="col-xl-3 col-sm-6 mb-3">
		<div class="card text-white bg-success o-hidden h-100">
			<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-archive"></i>
				</div>
				<div class="mr-5"><?php echo $total_arsip ?> Total Arsip </div>
			</div>
			<a class="card-footer text-white clearfix small z-1" href="#">
				<span class="float-left"></span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
			</a>
		</div>
	</div>
	<div class="col-xl-3 col-sm-6 mb-3">
		<div class="card text-white bg-warning o-hidden h-100">
			<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-archive"></i>
				</div>
				<div class="mr-5"><?php echo $tunggu_approve ?> Menunggu Approve</div>
			</div>
			<a class="card-footer text-white clearfix small z-1" href="#">
				<span class="float-left"></span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
			</a>
		</div>
	</div>
	<div class="col-xl-6 col-sm-12 mb-3">
		<div class="card">
			<P>
				<center><strong>Data Surat</strong></center>
			</P>
			<div class="card-body">
				<table class="table">
					<thead class="table table-striped">
						<tr>
							<th scope="col">No</th>
							<th scope="col">No surat</th>
							<th scope="col">Departemen</th>
							<th scope="col">Status</th>
						</tr>
					</thead>
					<tbody>

						<?php $no=1;
						foreach($data_total_surat as $row){ ?>

						<tr>
							<td><?php echo $no ?></td>
							<td><?php echo '005/'.$row->id_surat.'-'.$row->departemen.'/'.date('Y') ?></td>
							<td><?php echo $row->departemen ?></td>
							<td><?php
								if ($row->status_approve==0) {
										echo 'Menunggu Approve';
									}else if ($row->status_approve==1) {
										echo '<span class="badge badge-success">Kasubag Approved</span>';
									}elseif ($row->status_approve==2) {
										echo '<span class="badge badge-success">Kabag Approved</span>';
									}elseif ($row->status_approve==3) {
										echo '<span class="badge badge-success">Asda Approved</span>';
									}elseif ($row->status_approve==4) {
										echo '<span class="badge badge-success">Sekda Approved</span>';
									}elseif ($row->status_approve==6) {
										echo '<span class="badge badge-danger">Rejected By '.$row->penolak.'</span> ';
									}
									?>
							</td>
							<td><?php echo $no++ ?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>

			</div>
		</div>

	</div>
	<div class="col-xl-6 col-sm-12 mb-3">
		<div class="card">
			<P>
				<center><strong>Data Surat Reject</strong></center>
			</P>
			<div class="card-body">
				<table class="table">
					<thead class="table table-striped">
						<tr>
							<th scope="col">No</th>
							<th scope="col">No surat</th>
							<th scope="col">Departemen</th>
							<th scope="col">Status</th>
						</tr>
					</thead>
					<tbody>

						<?php $no=1;
							foreach($data_surat_reject as $row){ ?>

						<tr>
							<td><?php echo $no ?></td>
							<td><?php echo '005/'.$row->id_surat.'-'.$row->departemen.'/'.date('Y') ?></td>
							<td><?php echo $row->departemen ?></td>
							<td><?php
									if ($row->status_approve==0) {
											echo 'Menunggu Approve';
										}else if ($row->status_approve==1) {
											echo '<span class="badge badge-success">Kasubag Approved</span>';
										}elseif ($row->status_approve==2) {
											echo '<span class="badge badge-success">Kabag Approved</span>';
										}elseif ($row->status_approve==3) {
											echo '<span class="badge badge-success">Asda Approved</span>';
										}elseif ($row->status_approve==4) {
											echo '<span class="badge badge-success">Sekda Approved</span>';
										}elseif ($row->status_approve==6) {
											echo '<span class="badge badge-danger">Rejected By '.$row->penolak.'</span> ';
										}
										?>
							</td>
							<td><?php echo $no++ ?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>

			</div>
		</div>

	</div>
	<div class="col-xl-12	 col-sm-12 mb-3">
		<div class="card">
			<P>
				<center><strong>Data Surat Menunggu Approve</strong></center>
			</P>
			<div class="card-body">
				<table class="table">
					<thead class="table table-striped">
						<tr>
							<th scope="col">No</th>
							<th scope="col">No surat</th>
							<th scope="col">Departemen</th>
							<th scope="col">Status</th>
						</tr>
					</thead>
					<tbody>

						<?php $no=1;
								foreach($data_menunggu_approve as $row){ ?>

						<tr>
							<td><?php echo $no ?></td>
							<td><?php echo '005/'.$row->id_surat.'-'.$row->departemen.'/'.date('Y') ?></td>
							<td><?php echo $row->departemen ?></td>
							<td><?php
										if ($row->status_approve==0) {
												echo 'Menunggu Approve';
											}else if ($row->status_approve==1) {
												echo '<span class="badge badge-success">Kasubag Approved</span>';
											}elseif ($row->status_approve==2) {
												echo '<span class="badge badge-success">Kabag Approved</span>';
											}elseif ($row->status_approve==3) {
												echo '<span class="badge badge-success">Asda Approved</span>';
											}elseif ($row->status_approve==4) {
												echo '<span class="badge badge-success">Sekda Approved</span>';
											}elseif ($row->status_approve==6) {
												echo '<span class="badge badge-danger">Rejected By '.$row->penolak.'</span> ';
											}
											?>
							</td>
							<td><?php $no++ ?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>

			</div>
		</div>

	</div>
</div>
