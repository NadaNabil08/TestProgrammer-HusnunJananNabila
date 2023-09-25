<div class="page-content" action="<?php echo site_url('produk/hapus') ?>">
  <div class="key" id="produk">
    <?php foreach( $produkutama as $key ) : ?>
      <div class="col-sm-4">
        <div class="card">
                    
          <div class="card-body">
            <h4 class="card-title"><img src="<?= base_url('assets/JenisProduk/') . $key["Gambar"]; ?>" width="120" height="120" class="rounded-circle"></h4>
            <p class="card-text"><?= $key["Nama"]; ?></p>
            <a href="" class="btn btn-primary">Hapus Produk</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>