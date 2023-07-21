<?php


?>

<!DOCTYPE html>
<html>

<?php include('header.php'); ?>
   

<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  
  <div class="carousel-inner">
    <div class="carousel-item active">
    <div class="carousel-caption d-none d-md-block">
        <h5 class="slides1-h5">MacBook Air 15"</h5>
        <p class="slides1-p">Impressively big. Impossibly thin.</p>
        <a href="" type="button" class="btn btn-outline-dark rounded-pill custom-btn1">Learn More</a>
      </div>
      <img src="image/sliderpic2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/sliderpic1.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h5   class="slides2-h5" >iPhone 14 Pro Max</h5>
        <p class="slides2-p">PRO. BEYOND.</p>
        <button type="button" class="btn btn-outline-light rounded-pill custom-btn2">Learn More</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/sliderpic3.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="slides3-h5">iPad</h5>
        <h5 class="slides3-h55"> 10th Generation</h5>
        <p class="slides3-p">The power of lightness</p>
        <button type="button"  class="btn btn-outline-dark rounded-pill custom-btn3">Learn More</button>
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


<div class="container-card1">
  <div class="row">
    <div class="col-md-4">
      <div class="card">
      <div class="card-bg">
      <a href="Iphone.php"> <img src="image/iPhone14prmax.png" class="card-img-top" alt="Image 1"></a>
        </div>
        <div class="card-body">
          <h5 class="card-title">iPhone</h5>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
      <div class="card-bg">
      <a href="Ipad.php"><img src="image/ipadindex.png" class="card-img-top" alt="Image 2"></a>
        </div>
        <div class="card-body">
          <h5 class="card-title">Ipad</h5>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
      <div class="card-bg">
      <a href="Mac.php"><img href="Mac.php" src="image/Mac.png" class="card-img-top" alt="Image 3"></a>
        </div>
        <div class="card-body">
          <h5 class="card-title">Mac</h5>
        </div>
      </div>
    </div>
  </div>

  <!--------------- Second Row --------------->

  <div class="row">
    <div class="col-md-4">
      <div class="card">
      <div class="card-bg">
      <a href="Watch.php"> <img src="image/Watch.png" class="card-img-top" alt="Image 1"></a>
        </div>
        <div class="card-body">
          <h5 class="card-title">Watch</h5>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
      <div class="card-bg">
      <a href="Audio.php"><img src="image/Airpods3rdgen.png" class="card-img-top" alt="Image 2"></a>
        </div>
        <div class="card-body">
          <h5 class="card-title">Audio</h5>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
      <div class="card-bg">
      <a href="Accessories.php"><img href="" src="image/accessories.png" class="card-img-top" alt="Image 3"></a>
        </div>
        <div class="card-body">
          <h5 class="card-title">Accessories</h5>
        </div>
      </div>
    </div>
  </div>
</div>


<?php include('footer.php'); ?>
</html>