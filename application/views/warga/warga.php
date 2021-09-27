        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
        	<!-- DATA TABLE-->
        	<section class="p-t-60">
        		<div class="container">
        			<div class="row">
        				<div class="col-md-12">
        					<div class="table-data__tool">
        						<div class="table-data__tool-left">
        							<h3 class="title-5 m-b-35">data warga</h3>
        						</div>
        						<div class="table-data__tool-right">
        							<a href="<?= base_url(); ?>warga/lapwarga" class="au-btn au-btn-icon au-btn--blue au-btn--small" data-toggle="top">
        								<i class="zmdi zmdi-print"></i>print</a>
        						</div>
        					</div>
        					<!-- DATA TABLE-->
        					<div class="table-responsive m-b-40">
        						<table class="table table-borderless table-data3">
        							<thead>
        								<tr>
        									<th>NIK</th>
        									<th>nama</th>
        									<th>jenis kelamin</th>
        									<th>tgl lahir</th>
        									<th>alamat</th>
        								</tr>
        							</thead>
        							<tbody>
        								<?php foreach ($warga as $val) : ?>
        									<tr>
        										<td><?= $val->nik; ?></td>
        										<td><?= $val->nama; ?></td>
        										<td><?= $val->jekel; ?></td>
        										<td class="process"><?= $val->tempat_lahir; ?>, <?= date('d-m-Y', strtotime($val->tanggal_lahir)); ?></td>
        										<td><?= $val->alamat; ?></td>
        									</tr>
        								<?php endforeach; ?>
        							</tbody>
        						</table>
        					</div>
        					<!-- END DATA TABLE-->
        				</div>
        			</div>
        		</div>
        	</section>
        	<!-- END DATA TABLE-->