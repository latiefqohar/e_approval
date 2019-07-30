<?php function namahari($tanggal){
    //fungsi mencari namahari
    //format $tgl YYYY-MM-DD
    //harviacode.com
    $tgl=substr($tanggal,8,2);
    $bln=substr($tanggal,5,2);
    $thn=substr($tanggal,0,4);
    $info=date('w', mktime(0,0,0,$bln,$tgl,$thn));
    switch($info){
        case '0': return "Minggu"; break;
        case '1': return "Senin"; break;
        case '2': return "Selasa"; break;
        case '3': return "Rabu"; break;
        case '4': return "Kamis"; break;
        case '5': return "Jumat"; break;
        case '6': return "Sabtu"; break;
    };
} ?>
<div style="position:absolute;float:left;"><img src="<?php echo base_url() ?>assets/img/tangerang.png" width="100" height="100" class="mb-3" alt=""></div>
<center>
<H3>PEMERINTAH KABUPATEN TANGERANG</H3>
<h1>SEKERTARIS DAERAH</h1>
<H6>JL. H.SOMAWINATA NO.1 TIGARAKSA-TANGERANG</H6>
<H6>TELP.(021)5994530-5994531-5994532(HUNTING) FAX (021)5990604</H6>
</center>

<hr><hr>
<P style="text-align:right;">Tigaraksa, <?php echo $surat['tanggal_surat'] ?></P>
<p>Kepada Yth : <?php echo $surat['kepada'] ?></p>
<p>Di Tempat</p>

<table>
    <tr>
        <td>Nomor</td>
        <td>: 005/<?php echo $surat['id_surat'] ?>-<?php echo $this->session->userdata('departemen')?>/2019</td>
    </tr>
    <tr>
        <td>Lampiran</td>
        <td>: <?php echo $surat['lampiran'] ?></td>
    </tr>
    <tr>
        <td>Perihal</td>
        <td>: <?php $surat['perihal'] ?></td>
    </tr>

</table><br>
<?php echo '<p style="text-align:justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'. $surat['pembuka'] .'</p>' ?>
<br>
<table>
    <tr>
        <td>Hari</td>
        <td>:<?php echo namahari($surat['tanggal_undangan']) ?></td>
    </tr>
    <tr>
        <td>Tanggal</td>
        <td>: <?php echo $surat['tanggal_undangan'] ?></td>
    </tr>
    <tr>
        <td>Waktu</td>
        <td>: <?php echo $surat['waktu'] ?></td>
    </tr>
    <tr>
        <td>Tempat</td>
        <td>: <?php echo $surat['tempat'] ?></td>
    </tr>
    <tr>
        <td>Acara</td>
        <td>: <?php echo $surat['acara'] ?></td>
    </tr>

</table><br>
<?php echo '<p style="text-align:justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$surat['penutup'].'</p>' ?><br><br>
<table align="right">

<tr><td><strong> <P style="text-align:center;">SEKERTARIS DAERAH</P>   </strong></td></tr>
<tr><td><strong><P style="text-align:center;">KABUPATEN TANGERANG</P></strong></td></tr>
<tr>
    <td>
        <?php if($surat['status_approve']==4){?>
        <img src="<?php echo base_url() ?>assets/img/ttd.png" width="200px" height="100px">
        <?php } ?>
    </td>
</tr>
<tr><td><strong><P style="text-align:center;">Drs. MOCH MAESAL RASYID, M.Si</P></strong></td></tr>
<tr height="-2px"><td><strong><P style="text-align:center;">NIP. 19650517196603</P></strong></td></tr>
</table>
<br><br>

<?php if ($surat['status_approve']==4) { ?>
        <a href="<?php echo base_url() ?>surat/print/<?php echo $surat['id_surat'] ?>" target="blank" class="btn btn-success">Cetak</a>
        <a href="<?php echo base_url() ?>surat" class="btn btn-primary">Kembali</a>
<?php }elseif ($surat['status_approve']==6){ ?>
        <form action="<?php echo base_url() ?>surat/proses" method="post">
        <input type="hidden" name="id_surat" value="<?php echo $surat['id_surat'] ?>">
        <input type="hidden" name="jabatan" value="<?php echo $this->session->userdata('jabatan'); ?>">
        <p>Note For Reject</p>
        <textarea name="keterangan" id="" cols="30" rows="5"<?php if($this->session->userdata('jabatan')=='staff'){ echo 'readonly' ;} ?>> <?php if($this->session->userdata('jabatan')=='staff'){ echo $surat['note'] ;} ?></textarea><br>
        <?php if($this->session->userdata('jabatan')!='staff'){ ?>
        <input type="submit" class="btn btn-success" value="APPROVE" name="approve">
        <input type="submit" class="btn btn-danger" value="REJECT" name="reject">
        <?php } ?>
        </form>
<?php }else{?>
            <form action="<?php echo base_url() ?>surat/proses" method="post">
        <input type="hidden" name="id_surat" value="<?php echo $surat['id_surat'] ?>">
        <input type="hidden" name="jabatan" value="<?php echo $this->session->userdata('jabatan'); ?>">
        <p>Note For Reject</p>
        <textarea name="keterangan" id="" cols="30" rows="5"<?php if($this->session->userdata('jabatan')=='staff'){ echo 'readonly' ;} ?>> <?php if($this->session->userdata('jabatan')=='staff'){ echo $surat['note'] ;} ?></textarea><br>
        <?php if($this->session->userdata('jabatan')!='staff'){ 
            if($this->session->userdata('jabatan')=='sekda'){
                echo "Dengan menekan tombol <strong>APPROVE</strong> anda bersedia memberikan tanda tangan anda dalam surat ini dan dengan penuh kesadaran tanpa paksaan siapaun";
            }
            ?>
        <br><br>
        <input type="submit" class="btn btn-success"  value="APPROVE" name="approve">
        <input type="submit" class="btn btn-danger" value="REJECT" name="reject">
        <a href="<?php echo base_url() ?>surat" class="btn btn-primary">Kembali</a>
        <?php } ?>
        </form>
        
<?php } ?>
