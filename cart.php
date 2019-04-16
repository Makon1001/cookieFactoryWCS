<?php session_start(); ?>
<?php if (!isset($_SESSION['login'])){
    header('location:login.php');
}
else{?>
<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
      <?php
      $product = array('Pecan nuts','Chocolate chips','Chocolate cookie','M&M\'s&copy; cookies');
      $description = array( 'Cooked by Penny !','Cooked by Bernadette !','Cooked by Bernadette !', 'Cooked by Penny !');
      for($nbProd = 1; $nbProd <= 4; $nbProd++){
     ?>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src=<?="assets/img/product-".$nbProd.".jpg"?> alt="cookies" class="img-responsive">
        <figcaption class="caption">
          <h3><?= $product[$nbProd-1]?></h3>
          <p><?= $description[$nbProd-1]?></p>
            <p><?= "Quantité : " . $_SESSION['cart'.$nbProd] ?></p>
        </figcaption>
      </figure>
    </div>
     <?php };?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
<?php } ?>










