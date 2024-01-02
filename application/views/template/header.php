<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>List Data Buku</title>
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <!-- DataTables CSS -->
   <link href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap5.min.css" rel="stylesheet">
   <link href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.bootstrap5.min.css" rel="stylesheet">
   <link href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css" rel="stylesheet">
</head>

<body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
         <a class="navbar-brand" href="#">Digital Perpustakaan</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link <?= ($this->uri->segment(1) == 'list-buku' || $this->uri->segment(1) == 'tambah-buku' || $this->uri->segment(1) == 'update-kategori') ? 'active' : '' ?>" href="<?= base_url('list-buku') ?>" href="<?= base_url('list-buku') ?>" aria-current="page"
                     href="<?= base_url('list-buku') ?>">List Buku</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link <?= ($this->uri->segment(1) == 'list-kategori' || $this->uri->segment(1) == 'tambah-kategori' || $this->uri->segment(1) == 'update-kategori') ? 'active' : '' ?>" href="<?= base_url('list-kategori') ?>">Kategori Buku</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">Logout</a>
               </li>
            </ul>
         </div>
      </div>
   </nav>