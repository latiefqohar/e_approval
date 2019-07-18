
      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

 
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="<?php echo base_url() ?>assets/vendor/chart.js/Chart.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/datatables/jquery.dataTables.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url() ?>assets/js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="<?php echo base_url() ?>assets/js/demo/datatables-demo.js"></script>
  <script src="<?php echo base_url() ?>assets/js/demo/chart-area-demo.js"></script>

  <script>
function data(){
    $.ajax({
        type:'POST',
        url:'<?php echo base_url()."surat/get_notif" ?>',
        dataType:'json',
        success:function(data){
            console.log(data)
            $('#total').html('<span class="badge badge-danger">'+data.total+'</span>');
           $('#kasubag').html('Approve Kasubag <span class="badge badge-danger">'+data.kasubag+'</span>');
           $('#kabag').html('Approve kabag <span class="badge badge-danger">'+data.kabag+'</span>');
           $('#asda').html('Approve asda <span class="badge badge-danger">'+data.asda+'</span>');
           $('#sekda').html('Approve sekda <span class="badge badge-danger">'+data.sekda+'</span>');
           $('#reject').html('Approve Kasubag <span class="badge badge-danger">'+data.reject+'</span>');
        }
    });
  }
  setInterval(data, 1000);
  </script>
</body>

</html>
