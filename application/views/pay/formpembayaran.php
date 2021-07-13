  
  <!-- TEMPLATES HEADER -->

            <div class="container">  
                <div class="row mt-3">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        Form Pembayaran
                      </div>
                      <div class="card-body">
                      <form action="" method="post">
                        <div class="form-group">
                           <label for="invoice">Invoice</label>
                           <input type="text" class="form-control" name="invoice" id="invoice" autocomplete="off"> 
                           <small class="form-text text-danger"><?= form_error('invoice'); ?></small> 
                        </div>
                        <div class="form-group">
                           <label for="nomor_rekening">Virtual Account</label>
                           <input type="text" class="form-control" name="nomor_rekening" id="nomor_rekening" autocomplete="off">
                           <small class="form-text text-danger"><?= form_error('nomor_rekening'); ?></small> 
                        </div>
                        <div class="form-group">
                           <label for="tanggal_pembayaran">Tanggal Pembayaran</label>
                           <input type="text" class="form-control" name="tanggal_pembayaran"  id="tanggal_pembayaran" autocomplete="off">
                           <small class="form-text text-danger"><?= form_error('tanggal_pembayaran'); ?></small> 
                        </div>
                        <div class="form-group">
                           <label for="total_harga">Total Harga</label>
                           <input type="text" class="form-control"  name="total_harga" id="total_harga" autocomplete="off">
                           <small class="form-text text-danger"><?= form_error('total_harga'); ?></small> 
                        </div>
                          <button type="submit" name="bayar" class="btn btn-success float-right ml-3"> Bayar </button>         
                          <button class="btn btn-danger float-right"> Batalkan </button>             
                      </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
 

      <!-- TEMPLATES HEADER -->