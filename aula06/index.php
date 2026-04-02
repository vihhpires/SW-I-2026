<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Página inicial</title>


</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Dropdown
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="meuCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000" data-bs-wrap="true"
            data-bs-pause="false">

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/buner1.PNG" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="img/bunner3.jpg" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="img/bunner3.PNG" class="d-block w-100">
                </div>
            </div>

        </div>
    </header>

    <div class="container">
        <?php
           $personagens = [
              ["nm" => "Twilight","img" => "img/twilight.png", "desc" => "Lider e estudiosa"],
              ["nm" => "Rainbow Dash","img" => "img/rainbowdash.png", "desc" => "Rápida e corajosa"],
              ["nm" => "Pinkie Pie","img" => "img/pinkiepie.png", "desc" => "Ama festas"],
              ["nm" => "Rarity", "img" => "img/rarity.png", "desc" => "Elegante"],
              ["nm" => "Applejack","img" => "img/applejack.png", "desc" => "Elegante"],
              ["nm" => "Fluttershy","img" => "img/fluttershy.png", "desc" => "Trabalhadora"],
           ];
        ?>

        <div class="container text-center mt-5">
    <h2 class="mb-5">Personagens</h2>

    <div class="d-flex flex-wrap justify-content-center gap-5">
        <?php foreach($personagens as $p): ?>

            <div>
                <img src="<?= $p['img'] ?>">
                <p><?= $p['nm'] ?></p>
            </div>

        <?php endforeach; ?>
    </div>
</div>
        





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>