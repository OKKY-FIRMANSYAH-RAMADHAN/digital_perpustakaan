<?php $this->load->view($header)?>
<div class="container mt-4">
   <h1 class="text-center fw-bolder">List Data Buku</h1>
   <div class="text-end my-3">
      <a href="<?= base_url('tambah-buku') ?>" class="btn btn-primary">Tambah Data</a>
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
                     <th>No</th>
                     <th>Judul</th>
                     <th>Kategori</th>
                     <th>Deskripsi</th>
                     <th>Jumlah</th>
                     <th>File PDF</th>
                     <th>Cover</th>
                     <th class="no-export">Aksi</th>
                  </tr>
               </thead>
               <tbody>
                  <?php $no = 1; foreach ($buku as $row):?>
                  <tr>
                     <th><?= $no++ ?></th>
                     <td><?= $row->judul ?></td>
                     <td><?= $row->kategori ?></td>
                     <td><?= $row->deskripsi ?></td>
                     <td><?= $row->	jumlah ?></td>
                     <td><a href="">Download</a></td>
                     <td><img src="" alt=""></td>
                     <td><a href="<?= base_url('update-buku/'.$row->idbuku) ?>" class="btn btn-sm btn-warning">Update</a> &nbsp; <a href="<?= base_url('delete-buku/'.$row->idbuku) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Buku Ini?')">Hapus</a>
                     </td>
                  </tr>
                  <?php endforeach;?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
   <?php $this->load->view($footer)?>