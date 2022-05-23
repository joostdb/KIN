<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-0 gx-5 align-items-end">
            <div class="col-lg-6">
                <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-5 mb-3">Laatste toevoegingen</h1>
                    <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
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
                <nav class="row g-4">
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

                    <div class="row mt-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="col-4"></div>
                    <div class="col-4 text-center">
                        <ul class="pagination">
                            <li class="page-item"><?= $this->Paginator->prev(' << ' . __('vorige'), ['class' => 'page-link']) ?></li>
                            <li class="page-item"><?= $this->Paginator->numbers() ?></li>
                            <li class="page-item"><?= $this->Paginator->next(' >> ' . __('volgende')) ?></li>
                        </ul>
                    </div>
                        <div class="col-4"></div>
                </div>
            </div>
        </div>
    </div>
</div>
