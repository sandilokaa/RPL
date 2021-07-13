  
  <!-- TEMPLATES HEADER -->

            <div class="container">  
                <div class="row mt-3">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        Form Perubahan Pemesanan
                      </div>
                      <div class="card-body">
                      <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $pemesanan['id'];  ?>">

                        <div class="form-group">
                           <label for="nama_buku">Nama Buku</label>
                           <input type="text" class="form-control" name="nama_buku" id="nama_buku" value="<?= $pemesanan['nama_buku'];  ?>" > 
                           <small class="form-text text-danger"><?= form_error('nama_buku'); ?></small> 
                        </div>

                        <div class="form-group">
                           <label for="nama_penulis">Nama Penulis</label>
                           <input type="text" class="form-control" name="nama_penulis" id="nama_penulis" value="<?= $pemesanan['nama_penulis'];  ?>" >
                           <small class="form-text text-danger"><?= form_error('nama_penulis'); ?></small> 
                        </div>

                        <div class="form-group">
                           <label for="jenjang_buku">Jenjang Buku </label>
                           <input type="text" class="form-control" name="jenjang_buku"  id="jenjang_buku" value="<?= $pemesanan['jenjang_buku'];  ?>" >
                           <small class="form-text text-danger"><?= form_error('jenjang_buku'); ?></small> 
                        </div>

                        <div class="form-group">
                           <label for="jumlah_pesanan">Jumlah Pemesanan</label>
                           <input type="text" class="form-control"  name="jumlah_pesanan" id="jumlah_pesanan" value="<?= $pemesanan['jumlah_pesanan'];  ?>" >
                           <small class="form-text text-danger"><?= form_error('jumlah_pesanan'); ?></small> 
                        </div>

                        <div class="form-group">
                           <label for="alamat_kantor">Alamat Kantor</label>
                           <input type="text" class="form-control"  name="alamat_kantor" id="alamat_kantor" value="<?= $pemesanan['alamat_kantor'];  ?>" >
                           <small class="form-text text-danger"><?= form_error('alamat_kantor'); ?></small> 
                        </div>  

                          <button type="submit" name="tambah" class="btn btn-success float-right ml-3"> Ubah </button>         
                          <button class="btn btn-danger float-right"> Batalkan </button>   

                      </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
 

      <!-- TEMPLATES HEADER -->