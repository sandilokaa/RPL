  
  <!-- TEMPLATES HEADER -->

    <div class="page-wrapper mdc-toolbar-fixed-adjust">

      <?php if( $this->session->flashdata('flash')) : ?>
         <div class="row mt-3">
            <div class="col-md-6">
               <div class="alert alert-success alert-dismissible fade show" role="alert">
                  Data Pembayaran<strong> Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                  </button>
               </div>
            </div>
          </div>  
      <?php endif; ?>          

      <div class="page-wrapper mdc-toolbar-fixed-adjust">  
        <main class="content-wrapper">
          <h3 class="card-title">Ketentuan Pembayaran</h3>
          <p>1. Pembayaran bisa dilakukan di laman web ini.</p>
          <p>2. Pembayaran hanya bisa ditransfer pada bank yang telah tertera di bawah ini.</p>
          <p>3. Untuk pembayaran lebih lanjut silahkan tekan tombol lanjut.</p>
          <p>4. Jika terdapat alert berwarna hijau maka pemesanan sudah berhasil.</p>
          <br>
            <div class="mdc-card">
                  <div class="template-demo">
                    <div class="mdc-layout-grid__inner">
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop">
                        <img src="<?= base_url(); ?>assets/img/bni.png" style="height: 200px; width: 300px;">
                      </div> 
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop">
                        <img src="<?= base_url(); ?>assets/img/bri.png" style="height: 200px; width: 300px;">
                      </div>    
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop">
                        <img src="<?= base_url(); ?>assets/img/bca.png" style="height: 200px; width: 300px;">
                      </div>                                                                 
                    </div>
                  </div>
            </div>        
            <br>
            <a href="<?= base_url();?>pay/formpembayaran" class="btn btn-success"> Lanjutkan Pembayaran </a>            
        </main>        
      </div>
      <!-- end form -->

      </div>

      <!-- TEMPLATES FOOTER -->