        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- DATA TABLE-->
            <section class="p-t-60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-data__tool">
                                <h3 class="title-5 m-b-35">laporan data kas</h3>
                                <div class="table-data__tool-right">
                                    <a href="<?= base_url(); ?>kasrt/lapkas" class="au-btn au-btn-icon au-btn--blue au-btn--small" data-toggle="top">
                                        <i class="zmdi zmdi-print"></i>print</a>
                                </div>
                            </div>
                            <!-- DATA TABLE-->
                            <div class="table-responsive m-b-40">
                                <table class="table table-borderless table-data3">
                                    <thead>
                                        <tr>
                                            <th>nomor</th>
                                            <th>tanggal</th>
                                            <th>keterangan</th>
                                            <th>debit</th>
                                            <th>kredit</th>
                                            <th>saldo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($kas as $kas) { ?>
                                            <tr>
                                                <td><?= $kas->idKas; ?></td>
                                                <td><?= date('d-m-Y', strtotime($kas->tanggal)); ?></td>
                                                <td><?= $kas->keterangan; ?></td>
                                                <td>Rp <?= $kas->jumlah; ?></td>
                                                <td>Rp <?= rupiah($kas->jumlah); ?></td>
                                                <td>Rp <?= rupiah($kas->jumlah); ?></td>
                                                <!-- <td class="process">Rp <?= rupiah($kas->jumlah); ?></td> -->
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                    <thead>
                                        <?php
                                        $sum_masuk = 0;
                                        foreach ($masuk as $total_masuk) {
                                            $sum_masuk += $total_masuk->total;
                                        }
                                        $sum_keluar = 0;
                                        foreach ($keluar as $total_keluar) {
                                            $sum_keluar += $total_keluar->total;
                                        }
                                        $saldo = $sum_masuk - $sum_keluar;
                                        ?>
                                        <tr>
                                            <th colspan="4" scope="col">TOTAL <small>(Saldo)</small></th>
                                            <th scope="col">Rp <?= rupiah($saldo); ?></th>
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