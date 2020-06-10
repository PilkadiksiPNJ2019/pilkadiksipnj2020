<script src="<?php echo base_url();?>assets/dash_balon/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script src="<?php echo base_url();?>assets/dash_balon/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/dash_balon/plugins/chartjs/Chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url();?>assets/dash_balon/plugins/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url();?>assets/dash_balon/plugins/fastclick/fastclick.js"></script>
<script src="<?php echo base_url();?>assets/dash_balon/js/app.min.js"></script>
<script src="<?php echo base_url();?>assets/dash_balon/plugins/knob/jquery.knob.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/dash_balon/plugins/daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url();?>assets/dash_balon/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url();?>assets/dash_balon/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="<?php echo base_url();?>assets/dash_balon/plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url();?>assets/dash_balon/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url();?>assets/dash_balon/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?php echo base_url();?>assets/dash_balon/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url();?>assets/dash_balon/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>assets/dash_balon/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- <script src="<?php echo base_url();?>assets/js/pages/dashboard.js"></script> -->
<script src="<?php echo base_url();?>assets/dash_balon/js/demo.js"></script>
<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
    $("#example1").DataTable();
    $('#datepicker').datepicker({
      autoclose: true
    });
    $('#myModal').on('shown.bs.modal', function () {
      $('#myInput').focus()
    });
    CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');
  });
  function close_window() {
    if (confirm("Apakah Anda yakin?")) {
      close();
    }
  }
	$(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
  });
</script>
