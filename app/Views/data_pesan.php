<!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Data Pesan</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Data Pesanan</h5>
                                <div class="table-responsive">
                                <a href="<?= base_url('home/tambah_barang')?>">
                                          <button type="button" class="btn btn-success m-2">Membuat Pesanan</button>
                                          </a>
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Pesanan</th>
                                                <th>Customer</th>
                                                <th>Tgl</th>
                                                <th>Jenis</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
      $no=1;
      foreach ($clara as $nelson ) {
?>
                                            <tr>
                                        <th scope="row"><?= $no++ ?></th>
                                        <td><?= $nelson->kode_pesan ?></td>
                                        <td><?= $nelson->nama_user ?></td>
                                        <td><?= $nelson->tgl ?></td>
                                        <td><?= $nelson->nama_jenis ?></td>
                                        <td><?= $nelson->status ?></td>
                                        <td>
                                          <a href="<?= base_url('home/detail_pesan/'.$nelson->id_pesan)?>">
                                          <button type="button" class="btn btn-info m-2">Detail</button>
                                          </a>
                                          
                                          <?php if( $nelson->status=='pembayaran'){?>
                                          <button type="button" class="btn btn-success margin-5" data-toggle="modal" data-target="#Modal1">Bayar</button>
                                          <?php } ?>
                                          <?php if( $nelson->status=='selesai'){?>
                                          <a href="<?= base_url('komisi/'.$nelson->gambar) ?>" download="<?= $nelson->gambar ?>">
                                          <button type="button" class="btn btn-danger m-2">Download Foto</button>
                                          </a>
                                          <?php } ?>
                                          
                                          <!-- <?php if(session()->get('level')==2 ){?>
                                          <a href="<?= base_url('home/buka_lelang/'.$nelson->id_barang)?>">
                                          <button type="button" class="btn btn-danger m-2">Membuka Lelang</button>
                                          </a>
                                          <?php } ?> -->
                                        </td>
                                    </tr>
                                    <?php } ?>
                                            
                                        </tbody>
                                        
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true ">
                                    <div class="modal-dialog" role="document ">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true ">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Bayar sesuai dengan harganya
                                                <li>No. Virtual Account BCA : 123456789</li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->




            



