<?php $this->load->view($header)?>
<div class="container mt-4">
   <h1 class="text-center fw-bolder">Form Tambah Data Buku</h1>
   <div class="text-start mt-3">
      <a href="<?= base_url('list-buku') ?>" class="btn btn-outline-danger">Kembali</a>
   </div>
   <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
         <div class="card mt-5">
            <div class="card-body">
               <form action="" method="post" enctype="multipart/form-data">
                  <div class="mb-3">
                     <label class="form-label">Judul Buku</label>
                     <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul Buku" required>
                  </div>
                  <div class="mb-3">
                     <label class="form-label">Kategori Buku</label>
                     <select name="idkategori" class="form-control" required>
                        <option selected disabled>Pilih Kategori</option>
                        <?php foreach ($kategori as $k):?>
                        <option value="<?= $k->idkategori?>"><?= $k->kategori?></option>
                        <?php endforeach?>
                     </select>
                  </div>
                  <div class="mb-3">
                     <label class="form-label">Deskripsi</label>
                     <textarea name="deskripsi" cols="30" class="form-control" rows="10" placeholder="Masukkan Deskripsi"></textarea>
                  </div>
                  <div class="mb-3">
                     <label class="form-label">Jumlah</label>
                     <input type="number" class="form-control" name="jumlah" placeholder="Masukkan Jumlah" required>
                  </div>
                  <div class="mb-3">
                     <label class="form-label">Upload File Buku</label>
                     <input type="file" class="form-control" name="file" accept=".pdf" required>
                     <small class="form-text text-muted">Hanya file PDF yang diperbolehkan.</small>
                  </div>
                  <div class="mb-3">
                     <label class="form-label">Upload Cover Buku</label>
                     <input type="file" class="form-control" name="cover" accept="image/jpeg, image/jpg, image/png" required>
                     <small class="form-text text-muted">Hanya file gambar dengan format jpeg, jpg, atau png yang diperbolehkan.</small>
                  </div>
                  <div class="mb-3">
                     <input type="submit" class="form-control btn-primary btn" value="Simpan">
                  </div>
               </form>
            </div>
         </div>
         <div class="col-2"></div>
      </div>
   </div>
</div>
<?php $this->load->view($footer)?>