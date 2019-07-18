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
    <a href="<?php echo base_url() ?>user/add" class="btn btn-primary"> Tambah Data</a><br> <br>
    <div class="table-responsive">
    
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
        <th>No</th>
        <th>NIK</th>
        <th>nama</th>
        <th>Departemen</th>
        <th>Jabatan</th>
        <th>Username</th>
        <th>action</th>

        </tr>
    </thead>
    <tbody>
            <?php $no=1; ?>
        <?php
            foreach ($user as $d){ 
        
        ?>
        <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $d->nik ?></td>
        <td><?php echo $d->nama ?></td>
        <td><?php echo $d->departemen ?></td>
        <td><?php echo $d->jabatan ?></td>
        <td><?php echo $d->username ?></td>
        <td>
            <a href="<?php echo base_url() ?>user/edit/<?php echo $d->id_user ?>" class="btn btn-primary"> Ubah</a>
            <a href="<?php echo base_url() ?>user/delete/<?php echo $d->id_user ?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger"> Hapus</a>
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
