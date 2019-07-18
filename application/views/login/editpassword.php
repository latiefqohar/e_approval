<?php
  if(isset($_GET['pesan']))
  { 
    if($_GET['pesan'] == "sukses")
      { 
        echo "<div class='alert alert-success'>Password berhasil dirubah</div>"; 
      }
  } 
?>
<?php echo validation_errors()?>

<form action="<?php echo base_url() ?>login/proseseditpass" method="post">
    <div class="form-group">
      <label for="newpass">New Password:</label>
      <input type="password" class="form-control" name="new" placeholder="Enter New Password">
    </div>
    <div class="form-group">
      <label for="pwd">Confirm Password:</label>
      <input type="password" class="form-control" name="confirm" placeholder="Enter Confirm password" >
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>