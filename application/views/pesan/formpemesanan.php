  
  <!-- TEMPLATES HEADER -->

            <div class="container">  
                <div class="row mt-3">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        Form Pemesanan
                      </div>
                      <div class="card-body">
                      <form action="" method="post">
                        <div class="form-group">
                           <label for="nama_buku">Nama Buku</label>
                           <input type="text" class="form-control" name="nama_buku" id="nama_buku" autocomplete="off"> 
                           <small class="form-text text-danger"><?= form_error('nama_buku'); ?></small> 
                        </div>
                        <div class="form-group">
                           <label for="nama_penulis">Nama Penulis</label>
                           <input type="text" class="form-control" name="nama_penulis" id="nama_penulis" autocomplete="off">
                           <small class="form-text text-danger"><?= form_error('nama_penulis'); ?></small> 
                        </div>
                        <div class="form-group">
                           <label for="jenjang_buku">Jenjang Buku </label>
                           <input type="text" class="form-control" name="jenjang_buku"  id="jenjang_buku" autocomplete="off">
                           <small class="form-text text-danger"><?= form_error('jenjang_buku'); ?></small> 
                        </div>
                        <div class="form-group">
                           <label for="jumlah_pesanan">Jumlah Pemesanan</label>
                           <input type="text" class="form-control"  name="jumlah_pesanan" id="jumlah_pesanan" autocomplete="off">
                           <small class="form-text text-danger"><?= form_error('jumlah_pesanan'); ?></small> 
                        </div>
                        <div class="form-group">
                           <label for="alamat_kantor">Alamat Kantor</label>
                           <input type="text" class="form-control"  name="alamat_kantor" id="alamat_kantor" autocomplete="off">
                           <small class="form-text text-danger"><?= form_error('alamat_kantor'); ?></small> 
                        </div>                        
                          <button type="submit" name="pesan" class="btn btn-success float-right ml-3"> Pesan </button>         
                          <button class="btn btn-danger float-right"> Batalkan </button>             
                      </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
 

      <!-- TEMPLATES HEADER -->