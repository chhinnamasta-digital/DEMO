<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="<?=$root?>">
            <img src="<?= $images ?>logo.png" alt="<?= $name; ?>" class="img-fluid" />
        </a>
        <div class="collapse navbar-collapse justify-content-end" id="navbarToggler">
            <ul class="navbar-nav mb-2 mb-lg-0  ms-auto">
                <li class="nav-item">
                    <a href="<?=$root?>" class="nav-link" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=$root?>strategies.php">Strategies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=$root?>about-us.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=$root?>contact-us.php">Contacts</a>
                </li>
            </ul>
        </div>
    </div>
</nav>