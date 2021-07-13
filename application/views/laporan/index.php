  
  <!-- TEMPLATES HEADER -->

    <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
            <div class="container">

              <?php if( $this->session->flashdata('flash')) : ?>
                <div class="row mt-3">
                  <div class="col-md-6">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      Data Mahasiswa<strong> Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  </div>
                </div>  
              <?php endif; ?>

              <div class="row mt-3">
                <div class="col-md-12">
                  <h3> Daftar Pembayaran</h3>
                  <?php if( empty($pembayaran)) : ?>
                    <div class="alert alert-danger" role="alert">
                      Data Pembayaran tidak ditemukan!
                    </div>
                  <?php endif; ?>
                    <table class="table">
                      <thead>
                        <tr >
                          <th scope="col" class="text-center">Id</th>
                          <th scope="col" class="text-center">Invoice</th>
                          <th scope="col" class="text-center">Virtual Account</th>
                          <th scope="col" class="text-center">Tanggal Pembayaran</th>
                          <th scope="col"class="text-center">Total Harga</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($pembayaran as $pbr) : ?>
                          <tr>
                            <td class="text-center"><?= $pbr['id']; ?></td>
                            <td class="text-center"><?= $pbr['invoice']; ?></td>
                            <td class="text-center"><?= $pbr['nomor_rekening']; ?></td>
                            <td class="text-center"><?= $pbr['tanggal_pembayaran']; ?></td>
                            <td class="text-center"><?= $pbr['total_harga']; ?></td>
                          </tr>
                      <?php endforeach; ?>
                      </tbody>
                    </table>
                </div>
              </div>

              <br> <br>

              <div class="row mt-3">
                <div class="col-md-12">
                  <h3> Daftar Pemesanan Buku</h3>
                  <?php if( empty($pemesanan)) : ?>
                    <div class="alert alert-danger" role="alert">
                      Data Pemesanan tidak ditemukan!
                    </div>
                  <?php endif; ?>
                    <table class="table">
                      <thead>
                        <tr >
                          <th scope="col" class="text-center">Id</th>
                          <th scope="col" class="text-center">Nama Buku</th>
                          <th scope="col" class="text-center">Nama Penulis</th>
                          <th scope="col" class="text-center">Jumlah Pesanan</th>
                          <th scope="col" class="text-center">Jenjang Buku</th>
                          <th scope="col"class="text-center">Alamat Kantor</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($pemesanan as $pms) : ?>
                          <tr>
                            <td class="text-center"><?= $pms['id']; ?></td>
                            <td class="text-center"><?= $pms['nama_buku']; ?></td>
                            <td class="text-center"><?= $pms['nama_penulis']; ?></td>
                            <td class="text-center"><?= $pms['jumlah_pesanan']; ?></td>
                            <td class="text-center"><?= $pms['jenjang_buku']; ?></td>
                            <td class="text-center"><?= $pms['alamat_kantor']; ?>
                                <a href="<?= base_url();?>laporan/hapus/<?= $pms['id']; ?>" class="badge badge-danger float-right ml-2" onclick="return confirm('yakin?');"> hapus </a>
                                <a href="<?= base_url();?>laporan/ubah/<?= $pms['id']; ?>" class="badge badge-success float-right ml-2"> ubah </a>
                            </td>
                          </tr>
                      <?php endforeach ?>
                      </tbody>
                    </table>
                </div>
              </div>

            </div>
        </main>
      </div>

      <!-- TEMPLATES HEADER -->