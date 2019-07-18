<div class="card mb-3">
    <div class="card-header">
    <i class="fas fa-table"></i>
    Input user</div>
    <div class="card-body">
        <div class="table-responsive">
    <form action="<?php echo base_url() ?>user/edit" method='post'>
        <table class="table table-bordered" width="100%" cellspacing="0">
            <input type="hidden" name="id" value="<?php echo $user['id_user']; ?>">
            <tr>
                <td>NIK</td>
                <td><input type="number" name="nik" class="form-control" value="<?php echo $user['nik']; ?>" required></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" class="form-control" value="<?php echo $user['nama']; ?>" required></td>
            </tr>
            <tr>
                <td>Departemen</td>
                <td><input type="text" name="departemen" class="form-control" value="<?php echo $user['departemen']; ?>" required readonly></td>
            </tr>
            
            
            
            <tr>
                <td>Jabatan</td>
                <td>
                    <select name="jabatan" class="form-control">
                        <option value="">-Silahkan Pilih-</option>
                        <option <?php if($user['jabatan']=='staff'){echo 'selected';} ?> value="staff">Staff</option>
                        <option <?php if($user['jabatan']=='kasubag'){echo 'selected';} ?> value="kasubag">Kasubag</option>
                        <option <?php if($user['jabatan']=='kabag'){echo 'selected';} ?> value="kabag">Kabag</option>
                        <option <?php if($user['jabatan']=='asisten'){echo 'selected';} ?> value="asisten">Asisten</option>
                        <option <?php if($user['jabatan']=='sekda'){echo 'selected';} ?> value="sekda">Sekda</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" class="form-control" value="<?php echo $user['username']; ?>" required></td>
            </tr>
            <tr>
            <tr>
            <td colspan='2'>
                <input type="submit" class="btn btn-success float-right" name="update" value="Update">
                <a href="<?php echo base_url() ?>user" class="btn btn-info float-right"> Kembali</a></<input>
            </td>
            </tr>
        </table>
    </form>
        </div>
    </div>
</div>
