<div class="card mb-3">
    <div class="card-header">
    <i class="fas fa-table"></i>
    Input Surat</div>
    <div class="card-body">
        <div class="table-responsive">
    <form action="<?php echo base_url() ?>surat/add" method='post'>
        <table class="table table-bordered">
            <tr>
                <td>sifat</td>
                <td>
                    <select name="sifat" class="form-control">
                        <option value="">-Silahkan Pilih-</option>
                        <option  value="biasa">Biasa</option>
                        <option  value="penting">Penting</option>
                        
                    </select>
                </td>
            </tr>
            
            <tr>
                <td>lampiran</td>
                <td><input type="number" name="lampiran" class="form-control"  required></td>
            </tr>
            <tr>
                <td>Perihal</td>
                <td><input type="text" name="perihal" class="form-control"  required></td>
            </tr>
          
            <tr>
                <td>Kepada</td>
                <td><input type="text" name="kepada" class="form-control"  required></td>
            </tr>
            <tr>
                <td>Pembuka</td>
                <td><textarea rows="4" cols="50" name="pembuka" class="form-control"></textarea></td>
            </tr>
            <tr>
                <td>Tanggal Undangan</td>
                <td><input type="date" name="tanggal_undangan" class="form-control" required></td>
            </tr>
            <tr>
                <td>waktu</td>
                <td><input type="time" name="waktu" class="form-control" required></td>
            </tr>
            <tr>
                <td>Tempat</td>
                <td><input type="text" name="tempat" class="form-control"  required></td>
            </tr>
            <tr>
                <td>Acara</td>
                <td><input type="text" name="acara" class="form-control"  required></td>
            </tr>
            <tr>
                <td>Penutup</td>
                <td><textarea rows="4" cols="50" name="penutup" class="form-control"></textarea></td>
            </tr>
            <tr>
            <td colspan='2'>
                <input type="submit" class="btn btn-success float-right" name="simpan" value="simpan">
                <a href="<?php echo base_url() ?>/surat" class="btn btn-info float-right"> Kembali</a></<input>
            </td>
            </tr>
           
        </table>
    </form>
        </div>
    </div>
</div>
