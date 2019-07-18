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
    Data user</div>
    <div class="card-body">
    <a href="<?php echo base_url() ?>surat/add" class="btn btn-primary"> Tambah Data</a><br> <br>
    <div class="table-responsive">
    
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
        <th>no surat</th>
        <th>Tanggal Surat</th>
        <th>Perihal</th>
        <th>Tujuan Undangan</th>
        <th>Tanggal undangan</th>
        <th>Tempat Undangan</th>
        <th>Status</th>
        <th>Update Terakhir</th>
        <th>action</th>

        </tr>
    </thead>
    <tbody>
            <?php $no=1; ?>
        <?php
            foreach ($user as $d){ 
        
        ?>
        <tr>
        <td>005/<?php echo $d->id_surat ?>-SETDA/2019</td>
        <td><?php echo $d->tanggal_surat ?></td>
        <td><?php echo $d->perihal ?></td>
        <td><?php echo $d->kepada ?></td>
        <td><?php echo $d->tanggal_undangan ?></td>
        <td><?php echo $d->tempat ?></td>
        <td ><?php 
        if ($d->status_approve==0) {
            echo 'Menunggu Approve';
        }else if ($d->status_approve==1) {
            echo '<span class="badge badge-success">Kasubag Approved</span>';
        }elseif ($d->status_approve==2) {
            echo '<span class="badge badge-success">Kabag Approved</span>';
        }elseif ($d->status_approve==3) {
            echo '<span class="badge badge-success">Asda Approved</span>';
        }elseif ($d->status_approve==4) {
            echo '<span class="badge badge-success">Sekda Approved</span>';
        }elseif ($d->status_approve==6) {
            echo '<span class="badge badge-danger">Rejected By</span> '.$d->penolak;
        }
        
        ?>
        <td><?php echo $d->tgl_update ?></td>
        </td>
        <td width="250px">
            <?php if($d->status_approve==0||$d->status_approve==6) {?>
                <a href="<?php echo base_url() ?>surat/edit/<?php echo $d->id_surat ?>" class="btn btn-primary"> Ubah</a>
                <a href="<?php echo base_url() ?>surat/delete/<?php echo $d->id_surat ?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger"> Hapus</a>
                <a href="<?php echo base_url() ?>surat/detail/<?php echo $d->id_surat ?>" class="btn btn-success"> Detail</a>
            <?php }else{ ?>
                <a href="<?php echo base_url() ?>surat/detail/<?php echo $d->id_surat ?>" class="btn btn-success"> Detail</a>
              
            <?php } ?>
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
