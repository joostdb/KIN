

<!-- Navbar Start -->
<div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
        <div class="col-lg-6 px-5 text-start">
            <small class="ms-4"><i class="fa fa-envelope me-2"></i>info@kin-vzw.be</small>
        </div>
        <div class="col-lg-6 px-5 text-end">
            <small>We hebben ook:</small>
            <a class="text-body ms-3" href=""><i class="fab fa-facebook-f"></i></a>
            <a class="text-body ms-3" href=""><i class="fab fa-instagram"></i></a>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="<?= $full_url_base ?>" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="fw-bolder text-primary m-0">KIN</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarText">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-dark" aria-current="page"
                       href="<?= $full_url_base ?>#over"><?= __('Over ons') ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-dark" aria-current="page"
                       href="<?= $full_url_base ?>#help"><?= __('Help ons') ?></a>
                </li>
            </ul>
            <?php
            if ($this->Identity->isLoggedIn()) {
                ?>

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page"
                           href="<?= $this->Url->build('/articles/dashboard') ?>"><?= __('Dashboard') ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                           href="<?= $this->Url->build('/articles/myindex') ?>"><?= __('Mijn items') ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                           href="<?= $this->Url->build('/articles/add') ?>"><?= __('Item toevoegen') ?></a>
                    </li>
                    <?php
                    if ($this->Identity->get('user_type') == 'king') {
                        ?>
                        <li class="nav-item">
                            <span class="nav-link">/</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="<?= $this->Url->build('/articles') ?>"><?= __('Alle items') ?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="<?= $this->Url->build('/users') ?>"><?= __('Gebruikers') ?></a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
                <span class="navbar-text">
<div class="dropdown">
      <?php
      $session = $this->request->getSession();
      if($session->read('contract') != true){
          echo '<a href="/site/users/account" title="Ga akkoord met de gebruikersvoorwaarden."><i class="fa-solid fa-file-contract btn pulse" style="color: #ec0505;"></i></a>';
      }

      if ($this->Identity->get('user_type') == 'king') {
          echo '<i class="fa-solid fa-crown btn"></i>';
      }
      if ($this->Identity->get('user_type') == 'slave') {
          echo '<i class="fa-solid fa-chess-pawn btn"></i>';
      }
      ?>
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
          aria-expanded="false">
    <?= $this->Identity->get('first_name') ?>
  </button>
  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">

      <li><a class="dropdown-item" href="/site/users/account"><?= __('Mijn gegevens') ?></a></li>
      <li><a class="dropdown-item" href="/site/logout">Logout</a></li>
  </ul>
</div>

      </span>

                <?php
            }
            else{
                echo $this->Html->link(
                    'Log in',
                    ['controller' => 'Users', 'action' => 'login', '_full' => true],['class' => 'btn btn-primary ']
                );
            }
            ?>
        </div>
    </nav>
</div>
<!-- Navbar End -->
