<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>print</title>
  </head>
  <body>
  <div class="card mb-3">
    <div class="card-header">
    <i class="fas fa-table"></i>
    Data Surat</div>
    <div class="card-body">
   <center><h1>Data Keseluruhan Arsip</h1></center>
    <div class="table-responsive">
    
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
        <th>No</th>
        <th>No surat</th>
        <th>Tanggal Surat</th>
        <th>Perihal</th>
        <th>Bagian</th>
        <th>Tanggal undangan</th>
        <th>Tempat Undangan</th>
        <th>Update Terakhir</th>

        </tr>
    </thead>
    <tbody>
            <?php $no=1; ?>
        <?php
            foreach ($user as $d){ 
        
        ?>
        <tr>
        <td><?php echo $no++ ?></td>
        <td>005/<?php echo $d->id_surat ?>-<?php echo $this->session->userdata('departemen')?>/2019</td>
        <td><?php echo $d->tanggal_surat ?></td>
        <td><?php echo $d->perihal ?></td>
        <td><?php echo $d->departemen ?></td>
        <td><?php echo $d->tanggal_undangan ?></td>
        <td><?php echo $d->tempat ?></td>
        
        <td><?php echo $d->tgl_update ?></td>
        </td>
        </tr>
        <?php
            } 
        ?>
    </tbody>
</table>
</div>
</div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>window.print()</script>
  </body>
</html>
