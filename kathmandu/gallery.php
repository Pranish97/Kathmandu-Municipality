<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <title>3ello, world!</title>
  </head>
  <style >
    .hover{
      width: 98%;
      height: 100%;
      overflow: hidden;
      position: relative;
      text-align: center;
      cursor: default;
    }
    .hover .overlay{
      width: 100%;
      height: 100%;
      position: absolute;
      overflow: hidden;
      top: 0;
      left: 0;
      opacity: 0;
      background-color: rgba(0, 0, 0, 0.5);
      -webkit-transition: all 0.4s ease-in-out;
      transition: all 0.4s ease-in-out;
    }
    .hover img{
      display: block;
      position: relative;
      -webkit-transition: all 0.4s linear;
      transition: all 0.4s linear;

    }
    .hover h3{
      text-transform: uppercase;
      color: white;
      text-align: center;
      position: relative;
      font-size: 17px;
      background: rgba(0, 0, 0, 0.6);
      -webkit-transform: translateY(-100px);
      -ms-transform: translateY(-100px);
      transform: translateY(-100px);
      -webkit-transition: all .2s ease-in-out;
      transition: all .2s ease-in-out;
      padding: 10px;

    }
    .hover a.info{
      text-decoration: none;
      display: inline-block;
      text-transform: uppercase;
      color: #fff;
      border: 1px solid #fff;
      background-color: transparent;
      opacity: 0;
      filter: alpha(opacity=0);
      -webkit-transition:all .2s ease-in-out; 
      transition:all .2s ease-in-out; 
      margin: 50px 0 0;
      padding:7px 14px ;

    }
    .hover a.info:hover{
      box-shadow: 0 0 5px #fff;

    }
    .hover:hover img{
      -ms-transform: scale(1.2);
      -webkit-transform: scale(1.2);
      transform: scale(1.2);
    }
    .hover:hover .overlay{
      opacity: 1;
      filter: alpha(opacity=100);

    }
    .hover:hover h3,.hover:hover a.info{
      opacity: 1;
      filter: alpha(opacity=100);
      -ms-transform: translateY(0);
      -webkit-transform: translateY(0);
      transform: translateY(0);
    }
    .hover:hover a.info{
      -webkit-transition-delay: -2s;
       transition-delay: -2s;

    }


  </style>
  <body>
      <?php include 'inside/header.php' ?>
      <div class="container">
        <div class="row">
          <h3 class="text-center  mt-3 mb-3" style="font-family:Bradley Hand, cursive;"> <em>GALLERY</em>
        </h3>
          <div class="col-ld-4 col-md-4 col-sm-4 col-12 " >
            <div class="hover">
            <img src="basantapur.jpg" width="370px" height="225px">
            <div class="overlay">
              <h3>Basantapur Durbar Square</h3>
              <a href="#" class="info">More Info</a>
            </div>
            </div>
          </div>
          <div class="col-ld-4 col-md-4 col-sm-4 col-12 " >
            <div class="hover">
            <img src="boudha.jpg" width="370px" height="225px">
            <div class="overlay">
              <h3>Boudha Stupa</h3>
              <a href="#" class="info">More Info</a>
            </div>
            </div>
          </div>
          <div class="col-ld-4 col-md-4 col-sm-4 col-12 " >
            <div class="hover">
            <img src="white.jpg" width="370px" height="225px">
            <div class="overlay">
              <h3>White Gumba</h3>
              <a href="#" class="info">More Info</a>
            </div>
            </div>
          </div>
          <div class="col-ld-4 col-md-4 col-sm-4 col-12 mt-2" >
            <div class="hover">
            <img src="patan.jpg" width="370px" height="225px">
            <div class="overlay">
              <h3>Patan Durbar Square</h3>
              <a href="#" class="info">More Info</a>
            </div>
            </div>
          </div>
          <div class="col-ld-4 col-md-4 col-sm-4 col-12 mt-2" >
            <div class="hover">
            <img src="swyambhu1.jpg" width="370px" height="225px">
            <div class="overlay">
              <h3>Swayambhunath Temple</h3>
              <a href="#" class="info">More Info</a>
            </div>
            </div>
          </div>
          <div class="col-ld-4 col-md-4 col-sm-4 col-12 mt-2 " >
            <div class="hover">
            <img src="stupa.jpg" width="370px" height="225px">
            <div class="overlay">
              <h3>Fulbari Gumba</h3>
              <a href="#" class="info">More Info</a>
            </div>
            </div>
          </div>

          

        </div>
      </div>
      <?php include'inside/footer.php'?>


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