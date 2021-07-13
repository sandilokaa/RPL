  
  <!-- TEMPLATES HEADER -->

    <div class="page-wrapper mdc-toolbar-fixed-adjust">

      <?php if( $this->session->flashdata('flash')) : ?>
         <div class="row mt-3">
            <div class="col-md-6">
               <div class="alert alert-success alert-dismissible fade show" role="alert">
                  Data Pemesanan<strong> Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                  </button>
               </div>
            </div>
          </div>  
      <?php endif; ?>          

      <div class="page-wrapper mdc-toolbar-fixed-adjust">  
        <main class="content-wrapper">
          <h3 class="card-title">Ketentuan Pemesanan</h3>
          <p>1. Pemesanan bisa dilakukan di laman web ini.</p>
          <p>2. Untuk jasa pengantaran barang hanya pada jasa yang telah tertera di bawah ini.</p>
          <p>3. Untuk pemesanan lebih lanjut silahkan tekan tombol lanjut.</p>
          <p>4. Jika terdapat alert berwarna hijau maka pemesanan sudah berhasil.</p>
          <p>5. Cek pemesanan anda pada laporan, diberikan waktu 10 menit untuk mengecek ulang.</p>
          <br>
            <div class="mdc-card">
                  <div class="template-demo">
                    <div class="mdc-layout-grid__inner">
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop">
                        <img src="<?= base_url(); ?>assets/img/jnt.jfif" style="height: 200px; width: 300px;">
                      </div> 
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop">
                        <img src="<?= base_url(); ?>assets/img/jne.jfif" style="height: 200px; width: 300px;">
                      </div>    
                      <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop">
                        <img src="<?= base_url(); ?>assets/img/sicepat.jfif" style="height: 200px; width: 300px;">
                      </div>                                                                 
                    </div>
                  </div>
            </div>        
            <br>
            <a href="<?= base_url();?>pesan/formpemesanan" class="btn btn-success"> Lanjutkan Pemesanan </a>            
        </main>        
      </div>
      <!-- end form -->

      </div>

      <!-- TEMPLATES FOOTER -->