<div class="card mb-3">
    <div class="card-header">
    <i class="fas fa-table"></i>
    Input user</div>
    <div class="card-body">
        <div class="table-responsive">
    <form action="<?php echo base_url() ?>surat/edit" method='post'>
        <table class="table table-bordered">
            <tr>
            <input type="hidden" name="id_surat" value="<?php echo $surat['id_surat'] ?>">
                <td>sifat</td>
                <td>
                    <select name="sifat" class="form-control">
                        <option <?php if( $surat['sifat']=='biasa' ) { echo 'selected';}?> value="biasa">Biasa</option>
                        <option  <?php if( $surat['sifat']=='penting' ) { echo 'selected';}?> value="penting">Penting</option>
                        
                    </select>
                </td>
            </tr>
            
            <tr>
                <td>lampiran</td>
                <td><input type="number" name="lampiran" class="form-control" value="<?php echo $surat['lampiran'] ?>" required></td>
            </tr>
            <tr>
                <td>Perihal</td>
                <td><input type="text" name="perihal" class="form-control" value="<?php echo $surat['perihal'] ?> " required></td>
            </tr>
            <tr>
                <td>Kepada</td>
                <td><input type="text" name="kepada" class="form-control" value="<?php echo $surat['kepada'] ?> " required></td>
            </tr>
            <tr>
                <td>Pembuka</td>
                <td><textarea rows="4" cols="50" name="pembuka" class="form-control"><?php echo $surat['pembuka'] ?></textarea></td>
            </tr>
            <tr>
                <td>Tanggal Undangan</td>
                <td><input type="date" name="tanggal_undangan" class="form-control" value="<?php echo $surat['tanggal_undangan'] ?>" required></td>
            </tr>
            <tr>
                <td>waktu</td>
                <td><input type="time" name="waktu" class="form-control" value="<?php echo $surat['waktu'] ?>"  required></td>
            </tr>
            <tr>
                <td>Tempat</td>
                <td><input type="text" name="tempat" class="form-control" value="<?php echo $surat['tempat'] ?> "  required></td>
            </tr>
            <tr>
                <td>Acara</td>
                <td><input type="text" name="acara" class="form-control" value="<?php echo $surat['acara'] ?> "required></td>
            </tr>
            <tr>
                <td>Penutup</td>
                <td><textarea rows="4" cols="50" name="penutup" class="form-control"><?php echo $surat['penutup'] ?></textarea></td>
            </tr>
            <tr>
            <td colspan='2'>
                <input type="submit" class="btn btn-success float-right" name="update" value="Update Data">
                <a href="<?php echo base_url() ?>/surat" class="btn btn-info float-right"> Kembali</a></<input>
            </td>
            </tr>
           
        </table>
    </form>
        </div>
    </div>
</div>
