<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Página inicial</title>


</head>



<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">

                <a class="navbar-brand" href="#">
                    <img src="img/logie.png" alt="Logo">
                </a>

                
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
                                <li><a class="dropdown-item" href="#perso">Personagens</a></li>
                                <li><a class="dropdown-item" href="#enr">História</a></li>
                                <li><a class="dropdown-item" href="#ser">Produções</a></li>
                                <li><a class="dropdown-item" href="form.php">visitar</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
    </header>

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
    

    <div id="perso" class="container">
        <?php
        $personagens = [
            ["nm" => "Twilight", "img" => "img/twilight.png", "desc" => "Líder e estudiosa"],
            ["nm" => "Rainbow Dash", "img" => "img/rainbowdash.png", "desc" => "Rápida e corajosa"],
            ["nm" => "Pinkie Pie", "img" => "img/pinkiepie.png", "desc" => "Ama festas"],
            ["nm" => "Rarity", "img" => "img/rarity.png", "desc" => "Elegante"],
            ["nm" => "Applejack", "img" => "img/applejack.png", "desc" => "Trabalhadora"],
            ["nm" => "Fluttershy", "img" => "img/fluttershy.png", "desc" => "Ama os animais"],
        ];
        ?>

        <h1 class="perso">Personagens</h1>

        <div class="galeria">

            <?php foreach ($personagens as $index => $p): ?>

                <div class="item cor-<?= strtolower(str_replace(' ', '', $p['nm'])) ?>" data-bs-toggle="modal"
                    data-bs-target="#modal<?= $index ?>">

                    <div class="circulo">
                        <img src="<?= $p['img'] ?>">
                    </div>

                    <p>
                        <?= $p['nm'] ?>
                    </p>
                </div>

            <?php endforeach; ?>
        </div>

        <section id="enr" class="enredo">
            <div class="overlay">
                <h2 class="enr">Enredo de My Little Pony</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur soluta consectetur
                    in hic sit aliquid velit nisi voluptate earum modi? Placeat repellendus qui pariatur iusto
                    cum expedita, nisi minima facilis? Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Consequuntur soluta consectetur
                    in hic sit aliquid velit nisi voluptate earum modi? Placeat repellendus qui pariatur iusto
                    cum expedita, nisi minima facilis? Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Consequuntur soluta consectetur
                    in hic sit aliquid velit nisi voluptate earum modi? Placeat repellendus qui pariatur iusto
                    cum expedita, nisi minima facilis?
                </p>
            </div>
        </section>

        <section class="series container mt-5">
            <h2 class="text-center mb-5">Séries da Franquia</h2>

            <div class="serie-item">
                <img src="img/img11.webp">
                <div>
                    <h3>My Little Pony: Friendship is Magic</h3>
                    <p>Série principal que acompanha Twilight e suas amigas em Equestria.</p>
                </div>
            </div>

            <div class="serie-item reverse">
                <img src="img/equestriagirls.png">
                <div>
                    <h3>Equestria Girls</h3>
                    <p>Versão alternativa onde as personagens vivem como humanas em um colégio.</p>
                </div>
            </div>

            <div id="ser" class="serie-item">
                <img src="img/generationnew.jpg">
                <div>
                    <h3>My Little Pony: A New Generation</h3>
                    <p>Nova fase da franquia com novos personagens e história.</p>
                </div>
            </div>

        </section>

        
        <?php foreach ($personagens as $index => $p): ?>
            <div class="modal fade" id="modal<?= $index ?>" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title">
                                <?= $p['nm'] ?>
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body text-center">
                            <img src="<?= $p['img'] ?>" style="width:150px; border-radius:50%;">
                            <p class="mt-3">
                                <?= $p['desc'] ?>
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <script>
            document.querySelectorAll(".circulo").forEach(card => {
                card.addEventListener("mousemove", e => {
                    const rect = card.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;

                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;

                    const rotateX = -(y - centerY) / 10;
                    const rotateY = (x - centerX) / 10;

                    card.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.05)`;
                });

                card.addEventListener("mouseleave", () => {
                    card.style.transform = "rotateX(0) rotateY(0) scale(1)";
                });
            });
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

<footer class="footer">
    <div class="container-fluid px-4">
        <div class="row text-center text-md-start">

            
            <div class="col-md-6 mb-2">
                <p>Um site incrível feito por Vitoria Moreira 💜</p>
            </div>

            
            <div class="col-md-6 mb-2">
                <h5>Contato</h5>
                <p>Email: contato@email.com</p>
                <p>Telefone: (11) 99999-9999</p>
            </div>

        </div>

        
        <div class="footer-bottom">
            <p>© 2026 SuaMarca - Todos os direitos reservados</p>
        </div>
    </div>
</footer>

</html>