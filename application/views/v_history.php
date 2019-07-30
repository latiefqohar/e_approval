<?php
  if(isset($_GET['pesan']))
  { 
    if($_GET['pesan'] == "berhasil_input")
      { 
        echo "<div class='alert alert-success'>Data Berhasil ditambah.</div>"; 
      }else if($_GET['pesan'] == "berhasil_edit")
      { 
                          echo "<div class='alert alert-success'>Data Berhasil Diubah.</div>";
      }else if($_GET['pesan'] == "berhasil_hapus")
      { 
          echo "<div class='alert alert-danger'>Data Berhasil dihapus.</div>";
      } else { 
                      echo "<div class='alert alert-danger'>Data Gagal Disimpan.</div>";
                  }
  } 
?>

<div class="card mb-3">
    <div class="card-header">
    <i class="fas fa-table"></i>
    Data History Surat</div>
    <div class="card-body">
    <!-- <a href="<?php echo base_url() ?>surat/add" class="btn btn-primary"> Tambah Data</a><br> <br> -->
    <div class="table-responsive">
    
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
        <th>No_surat</th>
        <th>Status</th>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Waktu</th>
       

        </tr>
    </thead>
    <tbody>
            <?php $no=1; ?>
        <?php
            foreach ($history as $d){ 
        
        ?>
        <tr>
        <td>005/<?php echo $d->id_surat ?>-<?php echo $this->session->userdata('departemen')?>/2019</td>
        <?php if($d->status=='approve') {?>
        <td><span class="badge badge-success">Approved</span></td>
        <?php }else if($d->status=='reject') {?>
        <td><span class="badge badge-danger">Rejected</span></td>
        <?php
            } 
        ?>
        <td><?php echo $d->nama ?></td>
        <td><?php echo $d->jabatan ?></td>
        <td><?php echo $d->waktu ?></td>
        </tr>
        <?php
            } 
        ?>
    </tbody>
</table>
</div>
</div>
</div>
