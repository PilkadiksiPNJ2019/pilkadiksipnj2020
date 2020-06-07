<html lang="en">
<head>
    <title><?php echo $main['title']; ?></title>
    <?php $this->load->view('layout/head') ?>

    <!-- Google Analytics -->
    <?php $this->load->view('layout/gat')?>
    <!-- END Google Analytics -->
    
</head>
<body id="top">
    <!-- loader -->
    <?php $this->load->view('layout/loader')?>
    <!-- END loader -->

    <!-- navbar -->
    <?php echo $main['navbar']; ?>
    <!-- END navbar -->

    <!-- pages -->
    <?php echo $main['pages']; ?>
    <!-- END pages -->
    
    <!-- footer -->
    <?php $this->load->view('layout/footer')?>
    <!-- END footer -->

    <!-- javascript -->
    <?php $this->load->view('layout/javascript')?>
    <!-- END javascript -->
</body>
</html>
