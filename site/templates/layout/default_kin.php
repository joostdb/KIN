<?php
$cakeDescription = 'Kunst in Nazareth vzw';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        <?= $cakeDescription ?>

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
    <?= $this->Html->css('kin'); ?>
    <?= $this->Html->css('style'); ?>

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

        <style>
             /* Carousel styling */
         #introCarousel,
         .carousel-inner,
         .carousel-item,
         .carousel-item.active {
             height: 100vh;
         }

        .carousel-item:nth-child(1) {
            background-image: url('https://kin-vzw.be/site/img/carousel-1a.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            height: 100vh;
        }

        .carousel-item:nth-child(2) {
            background-image: url('https://kin-vzw.be/site/img/carousel-2.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            height: 100vh;
        }

        .carousel-item:nth-child(3) {
            background-image: url('https://kin-vzw.be/site/img/carousel-3.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            height: 100vh;
        }

        /* Height for devices larger than 576px */
        @media (min-width: 992px) {
            #introCarousel {

            }
        }
    </style>
    </style>
</head>

<body>
<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" role="status"></div>
</div>
<!-- Spinner End -->


<?= $this->element('nav'); ?>

<div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong" data-bs-ride="carousel" data-bs-interval="6500">


    <!-- Inner -->
    <div class="carousel-inner">
        <!-- Single item -->
        <div class="carousel-item active">
            <div class="container" style="margin-left: 0;">
                <div class="row justify-content-start mx-auto" style="margin-top: 30vh;">
                    <div class="col-lg-6">
                        <figure class="text-end animated slideInDown">
                            <blockquote  class="display-2 mb-3 text-dark fw-normal text-uppercase"><span style="text-shadow: 1px 1px 0px #FFFFFF;">Kunst wast het stof van onze ziel.</span></blockquote >
                            <span class="bg-dark ps-4 pe-4 display-6 text-light">Pablo Picasso</span>
                        </figure>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
            <div class="container" style="margin-left: 0;">
                <div class="row justify-content-start mx-auto" style="margin-top: 30vh;">
                    <div class="col-lg-6">
                        <figure class="text-end animated slideInDown">
                            <blockquote  class="display-2 mb-3 text-dark fw-normal text-uppercase"><span style="text-shadow: 1px 1px 0px #FFFFFF;">Kunst is liefde in elke daad.</span></blockquote >
                            <span class="bg-dark ps-4 pe-4 display-6 text-light">Paul van Ostaijen</span>
                        </figure>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">

                <div class="container" style="margin-left: 0;">
                    <div class="row justify-content-start mx-auto" style="margin-top: 30vh;">
                        <div class="col-lg-6">
                            <figure class="text-end animated slideInDown">
                                <blockquote  class="display-2 mb-3 text-dark fw-normal text-uppercase"><span style="text-shadow: 1px 1px 0px #FFFFFF;">De kunst troost omdat zij bezielt.</span></blockquote >
                                <span class="bg-dark ps-4 pe-4 display-6 text-light">Diane de Beausacq</span>
                            </figure>
                        </div>
                    </div>

            </div>
        </div>
        </div>
        </div>




<!-- About Start -->
<div class="container-xxl py-5" id="over">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="about-img position-relative overflow-hidden p-5 pe-0">
                    <img class="img-fluid w-100" src="<?= $full_url_base ?>img/KIN_LOGO.png">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn lh-base" data-wow-delay="0.5s" >
                De voorbije tien jaar organiseerde <b>Kunst In Nazareth (KIN)</b> cultureel hoogstaande evenementen en kocht deze vzw met de opbrengst een aantal kunstwerken die ondertussen prominente en herkenbare bakens zijn geworden in Nazareth en Eke. Denk maar aan het monumentale beeldhouwwerk 'In stilte gehuld' op het kerkhof van Nazareth of ‘Le Grand Parleur’ op het dak van CC De Brouwerij in Eke.
                <br><br>Vorig jaar droeg het bestuur van KIN de fakkel over aan een nieuwe, enthousiaste groep kunstliefhebbers die kunst nóg dichter bij de inwoners wil brengen. Om dat te kunnen bereiken, vraagt de nieuwe vereniging de hulp van alle inwoners! Welk voorwerp uit jouw omgeving beschouw jij als een echt kunstwerk? Welk object raakt jou op een bijzondere manier? Dat kan een eigen creatie zijn, een gevonden voorwerp, een gekocht kunstwerk of gewoon een mooi ding uit uw omgeving waar u heel veel van houdt. Via het web platform kin-vzw.be kan iedereen een foto uploaden van het voorwerp dat hij als kunst ervaart.
                <br><br>Aan de hand van deze inzendingen wil Kunst In Nazareth een beeld krijgen van alles wat de Nazarener en Ekenaar raakt en mooi vindt. Hopelijk wordt dit het begin van een mooie ontdekkingstocht naar kunst binnen de gemeente en vooral ook de start van een bijzonder netwerk voor en door mensen met een hart voor kunst.
                <br><br>Wil je meewerken aan Kunst in Nazareth en haar eerste project ? Registreer je dan op deze website en bouw samen met ons aan een nieuwe stroming in de gemeente!

            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Feature Start -->
<div class="container-fluid bg-light bg-icon my-5 py-6">
    <div class="container">
        <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-5 mb-3">Onze opdracht</h1>
            <p>Kunst in Nazareth. Is er kunst in Nazareth? En wat aanziet de Nazarener nu precies als 'kunst'? Dát willen wij onderzoeken, samen met de inwoners van Eke-Nazareth. Ons project verloopt in drie fases.</p>

        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="img/icon-1.png" alt="">
                    <h4 class="mb-3">1. De Oproep</h4>
                    <p class="mb-4">Via dit platform willen we al het 'moois' in Nazareth verzamelen. Hiermee willen we een zicht krijgen op wat er leeft én op de schouw staat bij de inwoners van onze gemeente. Een souvenir, een eigen werk, een gevonden voorwerp of een erfstuk. Je kan het allemaal hier (anoniem) online plaatsen.</p>
                    <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Lees meer</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="img/icon-2.png" alt="">
                    <h4 class="mb-3">2. De Collectie</h4>
                    <p class="mb-4">Deze voorwerpen wellen we catalogeren én tonen. We vragen kunstenaar en curatoren om met al deze werken een tentoonstelling te maken. Dit doen we steeds in overleg met de eigenaars van alle objecten.</p>
                    <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Lees meer</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="img/icon-3.png" alt="">
                    <h4 class="mb-3">3. Nieuw Werk</h4>
                    <p class="mb-4">Uit de samenwerking tussen de Nazareners en kunstenaars ontstaan nieuwe kunstwerken die een eigen plaats kunnen krijgen en voor het publiek domein kunnen aangekocht worden. Zo krijgt de gemeente nieuwe kunstwerken, in samenspraak met de inwoners.</p>
                    <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Lees meer</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->


<!-- Product Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-0 gx-5 align-items-end">
            <div class="col-lg-6">
                <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-5 mb-3">Laatste toevoegingen</h1>
                    <p>Deze kunstwerken werden recent aan onze collectie toegevoegd.</p>
                </div>
            </div>
<!--            <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary border-2 active" data-bs-toggle="pill" href="#tab-1">01</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-2">02 </a>
                    </li>
                    <li class="nav-item me-0">
                        <a class="btn btn-outline-primary border-2" data-bs-toggle="pill" href="#tab-3">03</a>
                    </li>
                </ul>
            </div>-->
        </div>
        <div class="tab-content">
            <div id="tab-1" class="tab-pane fade show p-0 active">
                <div class="row g-4">
                    <?php
                    foreach ($items AS $item){
                        ?>

                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="product-item">
                            <div class="position-relative bg-light overflow-hidden" style="height: 200px;">
                                <img class="img-fluid w-100" src="<?= $full_url_base ?>files/articles/photo/<?= $item['photo_dir'] ?>/square_<?= $item['photo'] ?>" alt="">
                            </div>
                            <div class="d-flex border-top">
                                <small class="w-100 text-center py-2">
                                    <a class="text-body" href=""><i class="fa fa-eye text-primary me-2"></i>Bekijk</a>
                                </small>
                            </div>
                        </div>
                    </div>
                        <?php
                    }
                    ?>

                    <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="<?= $full_url_base ?>pages/overzicht">Belijk alle toevoegingen</a>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>

<!-- Product End -->


<!-- Firm Visit Start -->
<div class="container-fluid bg-primary bg-icon mt-5 py-6" id="help">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-md-7 wow fadeIn" data-wow-delay="0.1s">
                <h1 class="display-5 text-white mb-3">Word lid van KIN</h1>
                <p class="text-white mb-0">Kin is nieuw. Daarom zijn we op zoek naar enthousiaste inwoners van Nazareth die deel willen uitmaken van deze vereniging. Heb je interesse? Stuur ons dan een mailtje en misschien zien we elkaar binnenkort.</p>
            </div>
            <div class="col-md-5 text-md-end wow fadeIn" data-wow-delay="0.5s">
                <a class="btn btn-lg btn-secondary rounded-pill py-3 px-5" href="mailto:info@kin-vzw.be">Contacteer ons!</a>
            </div>
        </div>
    </div>
</div>
<!-- Firm Visit End -->


<!-- Testimonial Start -->
<div class="container-fluid bg-light bg-icon py-2">
    <div class="container">
        <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-5 mb-3">Dankzij</h1>
            <p>De werking van KIN wordt mogelijk gemaakt dankzij deze partners</p>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="p-5 mt-4">
                <p class="mb-4">Cultuurregio Leie Schelde</p>
                <div class="d-flex align-items-center">
                    <a href="https://cultuurregioleieschelde.be/" target="_blank">
                    <img class="img-fluid" src="<?= $full_url_base ?>img/cultuurregio.png" alt="Cultuurregio Leie Schelde" style="width: 50%">
                    </a>
                </div>
            </div>
            <div class="p-5 mt-4">
                <p class="mb-4">Gemeentebestuur Nazareth</p>
                <div class="d-flex align-items-center">
                    <a href="https://www.nazareth.be" target="_blank">
                    <img class="img-fluid" src="<?= $full_url_base ?>img/nazareth_logo.png" alt="" style="width: 50%">
                    </a>
                </div>
            </div>
            <div class=" p-5 mt-4">
                <p class="mb-4">ID/ photo agency</p>
                <div class="d-flex align-items-center">
                    <a href="https://www.idphotoagency.com" target="_blank">
                    <img class="" src="<?= $full_url_base ?>img/ID_logo.png" alt="" style="width: 100%">
                    </a>
                </div>
            </div>
            <div class="p-5 mt-4">

                <p class="mb-4">Instituut voor Volkswarmte</p>
                <div class="d-flex align-items-center">
                    <a href="https://www.instituutvoorvolkswarmte.be/" target="_blank">
                    <img class="flex-shrink-0 rounded-circle" src="<?= $full_url_base ?>img/IVV_logo.png" alt="" style="width: 40%">
                    </a>
                </div>
            </div>
            <div class="p-5 mt-4">

                <p class="mb-4">KDIV Consult</p>
                <div class="d-flex align-items-center">
                    <a href="https://www.adxneurosciences.com" target="_blank">
                    <img class="flex-shrink-0 rounded-circle" src="<?= $full_url_base ?>img/KDIVConsult_logo.jpg" alt="" style="width: 100%">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Blog Start -->
<!--<div class="container-xxl py-5">
    <div class="container">
        <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-5 mb-3">Latest Blog</h1>
            <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <img class="img-fluid" src="img/blog-1.jpg" alt="">
                <div class="bg-light p-4">
                    <a class="d-block h5 lh-base mb-4" href="">How to cultivate organic fruits and vegetables in own firm</a>
                    <div class="text-muted border-top pt-4">
                        <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                        <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>01 Jan, 2045</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <img class="img-fluid" src="img/blog-2.jpg" alt="">
                <div class="bg-light p-4">
                    <a class="d-block h5 lh-base mb-4" href="">How to cultivate organic fruits and vegetables in own firm</a>
                    <div class="text-muted border-top pt-4">
                        <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                        <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>01 Jan, 2045</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <img class="img-fluid" src="img/blog-3.jpg" alt="">
                <div class="bg-light p-4">
                    <a class="d-block h5 lh-base mb-4" href="">How to cultivate organic fruits and vegetables in own firm</a>
                    <div class="text-muted border-top pt-4">
                        <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                        <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>01 Jan, 2045</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->
<!-- Blog End -->


<!-- Footer Start -->
<?= $this->element('foot'); ?>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


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
