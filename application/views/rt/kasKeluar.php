        <!-- PAGE CONTENT-->
		<div class="page-content--bgf7">    
			<!-- DATA TABLE-->
            <section class="p-t-60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
							<div class="table-data__tool">
								<div class="table-data__tool-left">
									<h3 class="title-5 m-b-35">data kas keluar</h3>                                    
                                </div>
                                <!-- <div class="table-data__tool-right">
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#addKasKeluarModal">
                                        <i class="zmdi zmdi-plus"></i>pemasukan</button>
                                </div> -->
                            </div>
                            <!-- DATA TABLE-->
							<div class="table-responsive m-b-40">
                                <table class="table table-borderless table-data3">
                                    <thead>
                                        <tr>
                                            <th>nomor</th>
                                            <th>keterangan</th>
                                            <th>tanggal</th>
                                            <th>jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php foreach ($keluar as $kel) { ?>
                                        <tr>
                                            <td><?= $kel->idKas;?></td>
                                            <td><?= $kel->keterangan;?></td>
                                            <td><?= date('d-m-Y', strtotime($kel->tanggal));?></td>
                                            <td class="process">Rp <?= rupiah($kel->jumlah);?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
									<thead>
									<?php
										$sum=0;
										foreach ($ttl as $total){
										$sum += $total->total;
										}
									?>
										<tr>
											<th colspan="3" scope="col">TOTAL <small>(Keluaran)</small></th>
											<th scope="col">Rp <?= rupiah($sum);?></th>
										</tr>
									</thead>
                                </table>
                            </div>
                            <!-- END DATA TABLE-->
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->
