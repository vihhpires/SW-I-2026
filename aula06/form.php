<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visto</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="bodyformulario">
    <div class="container form-container">
        <form action="processa.php" method="POST">
            <h2 class="titulo-form">✨ Solicitação para ir à Ponyville ✨</h2>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control input-pony" id="exampleInputEmail1" name="email"
                    aria-describedby="emailHelp">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">senha</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="senha">
                </div>

                <input class="btn btn-primary btn-pony w-100" type="submit" value="LOGAR 💜">

        </form>
    </div>

    <div class="modal fade" id="erroModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content" style="background: linear-gradient(135deg,#ffb6ff,#d9b3ff); border-radius:20px;">

                <div class="modal-header border-0">
                    <h5 class="modal-title text-dark">❌ Login incorreto, acesso negado!</h5>
                </div>

                <div class="modal-body text-dark">
                    Email ou senha estão errados ! <br>
                    Tente outra vez.
                </div>

                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-pony" data-bs-dismiss="modal">
                        Tentar novamente 💔
                    </button>
                </div>

            </div>
        </div>
    </div>

    <script>
        const params = new URLSearchParams(window.location.search);

        if (params.get("erro") === "1") {
            const modal = new bootstrap.Modal(document.getElementById('erroModal'));
            modal.show();
        }
    </script>

</body>

</html>