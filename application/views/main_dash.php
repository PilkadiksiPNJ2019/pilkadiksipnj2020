<html lang="en">
<head>
    <title><?php echo $main['title']; ?></title>
    <?php $this->load->view('layout/dash_balon/head') ?>
</head>
<body id="top" class="hold-transition sidebar-mini skin-red-light">

<div class="wrapper">

    <!-- header -->
    <?php $this->load->view('layout/dash_balon/header')?>
    <!-- END header -->

    <!-- sidebar -->
    <?php echo $main['sidebar']; ?>
    <!-- END sidebar -->

    <div class="content-wrapper">
        <!-- pages -->
        <?php echo $main['pages']; ?>
        <!-- END pages -->
    </div>
    
    <!-- footer -->
    <?php $this->load->view('layout/dash_balon/footer')?>
    <!-- END footer -->
</div>

    <!-- javascript -->
    <?php $this->load->view('layout/dash_balon/javascript')?>
    <!-- END javascript -->
</body>
</html>
