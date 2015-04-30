<?php
  $products = array();
  $products[0] = array(
    "name" => "Logo Shirt, Gray",
    "price" => 20,
    "img" => "img/shirts/shirt-106.jpg");
  $products[1] = array(
    "name" => "Logo Shirt, Turquoise",
    "price" => 20,
    "img" => "img/shirts/shirt-107.jpg");
  $products[2] = array(
    "name" => "Logo Shirt, Orange",
    "price" => 25,
    "img" => "img/shirts/shirt-108.jpg");
?><?php

  $page_title = "Mike's Shirts";
  include('inc/header.php'); 

?>

  <div class="section page">
    <div class="wrapper">
      <h1>Mike&rsquo;s full catalog of shirts</h1>
      <ul class="products">
          <?php foreach($products as $product) {?>
          <a href="#"><img src="<?php echo $products["img"] ?> alt="<?php echo $product["name"]; ?>>
            <p>view details</p></a>
          <?php } ?>
      </ul>
  </div>
  
<?php include('inc/footer.php'); ?>