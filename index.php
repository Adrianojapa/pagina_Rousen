<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <title>Rousen Plantas</title>
  <link rel="stylesheet" href="styles.css">
</head>


<body>
  <!-- Cabeçalho-->
  <div class="p-5 mb-2 bg-success text-white" id="faixaDeCima">
    <h1>Rousen Plantas</h1>
  </div>
  <!-- Buttons-->
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
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <!-- Slides-->
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="http://4.bp.blogspot.com/_oP53zcKKbdc/TQaBIuBCKMI/AAAAAAAAEGc/JsKsqIZAnqw/s1600/cactos-e-suculentas.jpg" id="vasosEPlantas" class="d-block w-100" alt="image01VasosEPlantas">

      </div>
      <div class="carousel-item">
        <img src="https://imagens-revista.vivadecora.com.br/uploads/2019/10/IMG_20180226_135235_374_Easy-Resize.com_-1024x701.jpg" id="jardimSuculentas" class="d-block w-100" alt="image02JardimSuculentas">
      </div>
      <div class="carousel-item">
        <img src="https://media.istockphoto.com/photos/succulents-cactus-in-desert-botanical-garden-for-decoration-and-picture-id966225938" id="VasosFamilia"
         class="d-block w-100" alt="image03VasosFamilia">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>




</body>

</html>