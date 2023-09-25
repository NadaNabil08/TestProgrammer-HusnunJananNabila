<nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo site_url('produk/tambah'); ?>">Tambah Produk Utama</a>
            <a class="navbar-brand" href="<?php echo site_url('produk/hapus'); ?>">Hapus Produk Utama</a>
        </div>
    </div>
</nav>
<div class="page-content">
  <div class="key" id="produk">
        
          <?php foreach( $produkutama as $key ) : ?>
            <div class="col-sm-4">  
              <div class="card" style="width: 450px; border-style: outset; ">
                <div class="card-body">
                  <img src="<?= base_url('assets/JenisProduk/') . $key["Gambar"]; ?>" style="width:100%" class="card-img-top" alt="card-image">
                  <center>
                    <h4 class="card-title"><?= $key["Nama"]; ?></h4>
                    <p class="card-text">Kumpulan Produk</p>
                    <a href="<?php echo site_url('produk/tambah1'); ?>" class="btn btn-primary">Tambah Produk</a>
                    <br>
                    <a href="" class="btn btn-primary">Lihat Produk</a>
                  </center>
                </div>
              </div>
              <br>
            </div> 
          <?php endforeach; ?>
          
        </div>
        </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>

 