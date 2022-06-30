<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <title>Hello, world!</title>
    <style >
      .card{
        min-height: 200px;
      }
    </style>
  </head>
  <body>
     <?php include 'inside/header.php'; ?>
  <!--slider  start here-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Swayambhunath Stupa</h1>
      </div>
    </div>
    <div class="carousel-item">
      <img src="2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Basantapur Durbar Square</h1>
      </div>
    </div>
    <div class="carousel-item">
      <img src="3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Dharahara</h1>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
     <div class="container my-4 ">
      <h2 class="text-center my-4">Elected Official</h2>
      <div class="row my-4">
      <div class="col-md-4 my-2">
                <div class="card" style="width: 20rem;">
                    <img src="balen.jpg" width=300 height=270 class="card-img-top" alt="Image for this category">
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">Balen Shah </a></h5>
                        <p class="card-text">Mayor</p>
                        <a href="#" class="btn btn-primary">About Balen</a>
                    </div>
                </div>
            </div>
<div class="col-md-4 my-2">
                <div class="card" style="width: 20rem;">
                    <img src="sunita.png" width=300 height=270  class="card-img-top  " alt="Image for this category">
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">Sunita Dangol </a></h5>
                        <p class="card-text">Deputy Mayor</p>
                        <a href="#" class="btn btn-primary">About Sunita</a>
                    </div>
                </div>
            </div>

<div class="col-md-4 my-2">
                <div class="card" style="width: 20rem;">
                    <img src="lok.png" width=300 height=270 class="card-img-top" alt="Image for this category">
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">Lok Nath Poudyal</a></h5>
                        <p class="card-text">Chief Administrative Officer</p>
                        <a href="#" class="btn btn-primary">About Lok Nath</a>
                    </div>
                </div>
            </div>

</div>

     </div>
     <?php include 'inside/footer.php';?>
    


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>