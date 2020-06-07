<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Free coming soon template with jQuery countdown">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <meta name="theme-color" content="#70b2e2">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="application-name" content="Pilkadiksi PNJ 2019">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-title" content="Pilkadiksi PNJ 2019">
  <meta property="og:locale" content="id_ID">
  <meta property="og:image:width" content="100">
  <meta property="og:image:height" content="100">
  <meta property="og:image" content="<?php echo base_url();?>assets/img/core-img/favicon.png">
  <meta property="og:title" content="Pilkadiksi PNJ 2019">
  <meta property="og:description" content="Pemilihan Ketua Bidikmisi PNJ 2019">

  <title>Pilkadiksi PNJ 2019</title>
  
  <link rel="icon" href="<?php echo base_url();?>assets/img/core-img/favicon.png">

  <!-- Bootstrap -->
  <link href="<?php echo base_url();?>assets/coming_soon/assets/css/bootstrap.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/coming_soon/assets/css/bootstrap-theme.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/coming_soon/assets/css/font-awesome.css" rel="stylesheet">

  <!-- siimple style -->
  <link href="<?php echo base_url();?>assets/coming_soon/assets/css/style.css" rel="stylesheet">
</head>

<body>

  <div id="wrapper_tutup">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Terima Kasih sudah menyempatkan waktu dan menentukan pilihan</h1>
          <h2 class="subtitle"><b>Evote Pilkadiksi PNJ 2019 ditutup</b></h2>
          <!-- <div id="countdown"></div> -->
          <div class="social">
            <a href="https://www.instagram.com/pilkadiksipnj/" target="__BLANK"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
          <p class="copyright"><b>Copyright &copy;2019 || Pilkadiksi PNJ.</b></p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="<?php echo base_url();?>assets/coming_soon/assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets/coming_soon/assets/js/jquery.countdown.min.js"></script>
  <script type="text/javascript">
    $('#countdown').countdown('2019/07/08 16:00', function(event) {
      $(this).html(event.strftime('<b>%w weeks %d days</b> <br /> <b>%H:%M:%S</b>'));
    });
  </script>

</body>

</html>