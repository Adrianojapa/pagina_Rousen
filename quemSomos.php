<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">

    <title>Rousen Plantas</title>


</head>


<body>

    <div class="p-5 mb-2 bg-success text-light" id="inicio">
        <h1>Rousen Plantas</h1>
        <li class="link">
            <a class="link bg-warning"  href="index.php">Início</a>
        </li>
    </div>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" id="#destaques" href="destaques.php">Destaques</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="quemSomos.php">Quem somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Produto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contato</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container" >
        <img id="paragrafoQuemSomos" src="data:image/jpeg;base64,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" class="img-fluid" alt="blackCacto">
        <p> <h2>Somos uma empresa comprometida na produção e revenda de plantas ornamentais. Nosso objetivo é dar vida ao seu ambiente
            com plantas que exigem pouca manutenção, para quem não tem tempo para jardinagem mas gosta de um espaço verde.</h2>
        </p>


    </div>




</body>

</html>