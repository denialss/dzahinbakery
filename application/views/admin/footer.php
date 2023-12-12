<!-- footer content -->
<footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>




    <!-- /Ini dari Colorlib -->

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/admin/vendors/jquery/jquery.min.js');?>"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url('assets/admin/vendors/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('assets/admin/vendors/fastclick/fastclick.js');?>"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url('assets/admin/vendors/nprogress/nprogress.js');?>"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url('assets/admin/vendors/Chart/Chart.min.js');?>"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url('assets/admin/vendors/gauge/gauge.min.js');?>"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url('assets/admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js');?>"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url('assets/admin/vendors/iCheck/icheck.min.js');?>"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url('assets/admin/vendors/skycons/skycons.js');?>"></script>
    <!-- Flot -->
    <script src="<?php echo base_url('assets/admin/vendors/Flot/jquery.flot.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/vendors/Flot/jquery.flot.pie.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/vendors/Flot/jquery.flot.time.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/vendors/Flot/jquery.flot.stack.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/vendors/Flot/jquery.flot.resize.js');?>"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url('assets/admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/vendors/flot-spline/js/jquery.flot.spline.min.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/vendors/flot.curvedlines/curvedLines.js');?>"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url('assets/admin/vendors/DateJS/date.js');?>"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url('assets/admin/vendors/jqvmap/jquery.vmap.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/vendors/jqvmap/maps/jquery.vmap.world.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/vendors/jqvmap/examples/jquery.vmap.sampledata.js');?>"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url('assets/admin/vendors/moment/min/moment.min.js');?>"></script>
    <script src="<?php echo base_url('assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.js');?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url('assets/admin/build/js/custom.min.js');?>"></script>

       <!-- Preview Gambar -->
       <script>
      function bacaGambar(input){
        if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function(e) {
            $('#edit_gambar') .attr('src', e.target.result);
          }
          reader.readAsDataURL(input.files[0]);
        }
      }

      $("#edit_preview").change(function(){
        bacaGambar(this);
      });
    </script>
     <!-- /Preview Gambar -->
    <!-- Preview Gambar -->
    <script>
      function bacaGambar(input){
        if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function(e) {
            $('#gambar_load') .attr('src', e.target.result);
          }
          reader.readAsDataURL(input.files[0]);
        }
      }

      $("#preview_gambar").change(function(){
        bacaGambar(this);
      });
    </script>
     <!-- /Preview Gambar -->

    <!-- /Raja Ongkir -->
    <script>
          $(document).ready(function() {
            
            // Masukkan data provinsi
              $.ajax({
                  type: "POST",
                  url: "<?= base_url('rajaongkir/provinsi') ?>",
                  success: function(hasil_provinsi){
                      // console.log(hasil_provinsi);
                      $("select[name=provinsi]").html(hasil_provinsi);
                  }
              });

            // Masukkan data kota
              $("select[name=provinsi]").on("change", function(){
                var id_provinsi_terpilih = $("option:selected",this).attr("id_provinsi");
                $.ajax({
                  type: "POST",
                  url: "<?= base_url('rajaongkir/kota') ?>",
                  data : 'id_provinsi=' + id_provinsi_terpilih,
                  success: function(hasil_kota){
                    $("select[name=kota]").html(hasil_kota);
                  }
                });
              });

              // Masukkan data Ekspedisi
              $("select[name=kota]").on("change", function(){
                $.ajax({
                  type: "POST",
                  url: "<?= base_url('rajaongkir/ekspedisi') ?>",
                  success: function(hasil_ekspedisi){
                    $("select[name=ekspedisi]").html(hasil_ekspedisi);
                  }
                });
              });

              // Retrieve data Paket
              $("select[name=ekspedisi]").on("change", function(){
                $.ajax({
                  type: "POST",
                  url: "<?= base_url('rajaongkir/paket') ?>",
                  success: function(hasil_paket){
                  //console.log(hasil_paket);
                    $("select[name=paket]").html(hasil_paket);
                  }
                });
              });

          });
    </script>
    <!-- /Raja Ongkir -->
	
  </body>
</html>