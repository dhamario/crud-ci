                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>
                        
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <dive class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Jumlah Coin</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jcoin ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </dive>
                        </div>
                    
                    </div>

             <a class="btn btn-sm btn-success mb-3" href="<?php echo base_url('coin/DataCoin/tambahData') ?>">Tambah Data</a>

            <?php echo $this->session->flashdata('pesan') ?>
            <table class="table table-striped table-striped table-bordered mt-2">
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Coin</th>
                    <th class="text-center">Harga Entry</th>
                    <th class="text-center">Harga TP</th>
                    <th class="text-center">Moonbag</th>
                    <th class="text-center">Photo</th>
                    <th class="text-center">Action</th>
                </tr>

                <?php $no=1; foreach ($coin as $i) : ?>
                    <tr class="text-center">
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $i->nama_coin ?></td>
                        <td><?php echo $i->harga_entry ?></td>
                        <td><?php echo $i->harga_tp ?></td>
                        <td><?php echo $i->moonbag ?></td>
                        <td><img src="<?php echo base_url().'assets/photo/'.$i->photo ?>" width="75px" alt=""></td>
                        <td>
                            <center>
                                <a class="btn btn-sm btn-primary" href="<?php echo base_url('coin/dataCoin/updateData/'.$i->id_coin) ?>"><i class="fas fa-edit"></i></a>
                                <a onclick="return confirm('Yakin Hapus')" class="btn btn-sm btn-danger" href="<?php echo base_url('coin/dataCoin/deleteData/'.$i->id_coin) ?>"><i class="fas fa-trash"></i></a>
                            
                            </center>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


