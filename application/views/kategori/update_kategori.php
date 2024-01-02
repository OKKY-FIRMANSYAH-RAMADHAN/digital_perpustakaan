<?php $this->load->view($header)?>
<div class="container mt-4">
   <h1 class="text-center fw-bolder">Form Update Data Kategori</h1>
   <div class="row">
      <div class="col-2"></div>
      <div class="col-8">
         <div class="card mt-5">
            <div class="card-body">
               <form action="" method="post">
                  <div class="mb-3">
                     <label class="form-label">Nama Kategori</label>
                     <input type="text" class="form-control" name="kategori" placeholder="Masukkan Nama Kategori" value="<?= $kategori[0]->kategori ?>" required>
                  </div>
                  <div class="mb-3">
                     <input type="submit" class="form-control btn-primary btn" value="Update Data">
                  </div>
               </form>
            </div>
         </div>
         <div class="col-2"></div>
      </div>
   </div>
</div>
<?php $this->load->view($footer)?>