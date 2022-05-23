<?php
$cakeDescription = 'KIN';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $full_url_base ?>/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $full_url_base ?>/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $full_url_base ?>/img/favicon-16x16.png">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Lora:wght@600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <script src="https://kit.fontawesome.com/dc5e7787b6.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="https://kin-vzw.be/site/lib/animate/animate.min.css" rel="stylesheet">
    <link href="https://kin-vzw.be/site/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Template Stylesheet -->
    <link href="https://kin-vzw.be/site/css/style.css" rel="stylesheet">
    <?= $this->Html->css('kin'); ?>
    <style>

        .pulse {
            border-radius: 10%;
            background: rgba(227, 227, 227, 0.56);
            cursor: pointer;
            box-shadow: 0 0 0 rgba(169, 25, 25, 0.4);
            animation: pulse 2s infinite;
        }
        @-webkit-keyframes pulse {
            0% {
                -webkit-box-shadow: 0 0 0 0 rgba(236, 4, 4, 0.4);
            }
            70% {
                -webkit-box-shadow: 0 0 0 10px rgba(227, 12, 12, 0);
            }
            100% {
                -webkit-box-shadow: 0 0 0 0 rgba(204, 44, 44, 0);
            }
        }
        @keyframes pulse {
            0% {
                -moz-box-shadow: 0 0 0 0 rgba(236, 21, 21, 0.4);
                box-shadow: 0 0 0 0 rgba(204, 44, 44, 0.4);
            }
            70% {
                -moz-box-shadow: 0 0 0 10px rgba(204, 44, 44, 0);
                box-shadow: 0 0 0 10px rgba(204, 44, 44, 0);
            }
            100% {
                -moz-box-shadow: 0 0 0 0 rgba(204, 44, 44, 0);
                box-shadow: 0 0 0 0 rgba(204, 44, 44, 0);
            }
        }
    </style>
</head>

<body>
<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" role="status"></div>
</div>
<!-- Spinner End -->

<?= $this->element('nav'); ?>

<div class="container" style="padding-top:10rem !important;padding-bottom:6rem !important">
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
</div>

<!-- Footer Start -->
<?= $this->element('foot'); ?>
<!-- Footer End -->


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kin-vzw.be/site/lib/wow/wow.min.js"></script>
<script src="https://kin-vzw.be/site/lib/easing/easing.min.js"></script>
<script src="https://kin-vzw.be/site/lib/waypoints/waypoints.min.js"></script>
<script src="https://kin-vzw.be/site/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="https://kin-vzw.be/site/js/main.js"></script>
</body>

</html>
