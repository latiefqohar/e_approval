

<div class="card mb-3">
    <div class="card-header">
    <i class="fas fa-table"></i>
    Data user</div>
    <div class="card-body">
    <a href="<?php echo base_url() ?>surat/add" class="btn btn-primary"> Tambah Data</a> 
    <div class="float-right">
    <form action="<?php echo base_url() ?>surat/printbydate" method="post">
    <input type="date" name="tanggal_mulai" placeholder="tanggal mulai">s/d
    <input type="date" name="tanggal_selesai" placeholder="tanggal Akhir">
    <button type="submit" class="btn btn-primary">Cetak</button>
    <a href="<?php echo base_url() ?>surat/cetak_arsip_keluar" target="blank" class="btn btn-success"> Cetak Seluruh Arsip</a>
    </form>
  
   
    </div>
    
    <br> <br>
    <div class="table-responsive">
    
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
        <th>no surat</th>
        <th>Tanggal Surat</th>
        <th>Perihal</th>
        <th>Bagian</th>
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
        <td>005/<?php echo $d->id_surat ?>-<?php echo $this->session->userdata('departemen')?>/2019</td>
        <td><?php echo $d->tanggal_surat ?></td>
        <td><?php echo $d->perihal ?></td>
        <td><?php echo $d->departemen ?></td>
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
        <td >
                <a href="<?php echo base_url() ?>surat/detail/<?php echo $d->id_surat ?>" class="btn btn-success"> Detail</a>

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
