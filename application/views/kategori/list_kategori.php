<?php $this->load->view($header)?>
<div class="container mt-4">
   <h1 class="text-center fw-bolder">List Data Kategori</h1>
   <div class="text-end my-3">
      <a href="<?= base_url('tambah-kategori') ?>" class="btn btn-primary">Tambah Data Kategori</a>
   </div>
   <?php if ($this->session->flashdata('msg')) : ?>
   <div class="alert alert-success alert-dismissible fade show" role="alert">
      <?= $this->session->flashdata('msg') ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>
   <?php endif;?>
   <div class="card">
      <div class="card-body">
         <div class="table-responsive mt-2">
            <table id="data-table" class="table table-striped table-bordered" style="width:100%">
               <thead>
                  <tr>
                     <th width="10%">No</th>
                     <th width="70%">Nama Kategori</th>
                     <th width="20%" class="no-export">Aksi</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $no = 1; foreach ($kategori as $row):?>
                  <tr>
                     <th><?= $no++ ?></th>
                     <td><?= $row->kategori ?></td>
                     <td><a href="<?= base_url('update-kategori/'.$row->idkategori) ?>" class="btn btn-sm btn-warning">Update</a> &nbsp; <a href="<?= base_url('delete-kategori/'.$row->idkategori) ?>" class="btn btn-sm btn-danger"
                           onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Kategori?')">Hapus</a></td>
                  </tr>
                  <?php endforeach;?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
<?php $this->load->view($footer)?>