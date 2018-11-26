<?php include 'inc/conexao.php'; 

  $query = "SELECT * FROM PRODUCTS";

  $result = mysqli_query($conn, $query);

  $products = mysqli_fetch_all($result, MYSQLI_ASSOC);

  //var_dump($products);

  /*foreach($products as $product){
    echo "This is the name of the item ".$product['name'."<br>"];
  }*/

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- main css -->
  <link rel="stylesheet" href="css/style.css">

  <!-- font awesome -->
  <link rel="stylesheet" href="css/all.css">
  <title>Grandma's Project</title>
  <style>
  </style>
</head>
<body>
<header id="header">
  <nav class="navbar navbar-expand-lg px-4">
    <a href="#" class="navbar-brand">
      <img src="img/logo.svg" alt="main icon">
    </a>
     <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar">
        <span class="toggler-icon">
          <i class="fas fa-bars"></i>
        </span>
      </button>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="navbar-nav text-capitalize mx-auto">
          <li class="nav-item active">
            <a href="#header" class="nav-link">home</a>
          </li>
           <li class="nav-item active">
            <a href="#about" class="nav-link">about</a>
          </li>
              <li class="nav-item active">
            <a href="#store" class="nav-link">store</a>
          </li>
           <li class="nav-item active">
            <a href="#services" class="nav-link">services</a>
          </li>
           <li class="nav-item active">
            <a href="#cakes" class="nav-link">order</a>
          </li>
        </ul>
        <div class="nav-info-items d-none d-lg-flex">
          <!-- Single info -->
          <div class="nav-info align-items-center d-flex justify-content-between mx-lg-5">
            <span class="info-icon mx-lg-3">
              <i class="fas fa-phone">
              </i>
            </span>
            <p class="mb-0">+ 123 456 789</p>  
          </div>
          <!-- single info -->
          <div id="card-info" class="nav-info align-items-center cart-info d-flex justify-content-between mx-lg-5">
            <span class="cart-info__icon mr-lg-3">
              <i class="fas fa-shopping-cart"></i>
                </span>
                <p class="mb-0 text-capitalize">
                  <span id="item-count">2</span>
                  items - $<span class="item-total">10.49</span>
                </p>
              </i>
          </div>
        </div>
      </div>
  </nav>
  <!--end of nav -->
  <!--Banner -->
  <div class="container-fluid">
    <div class="row max-height justify-content-center align-items-center">
      <div class="col-10 mx-auto banner text-center">
        <h1 class="text-capitalize">welcome to <strong class="banner-title">grandma's</strong></h1>
        <a href="#store" class="btn banner-link text-uppercase my-2">explore</a>
      </div>
      <!-- store -->
    </div>
  </div>
  <!--End Banner -->
</header>
<!--end of banner -->
<!--About Us -->
<section class="about py-5" id="about">
  <div class="row">
    <div class="col-10 mx-auto col-md-6 my-5">
      <h1 class="text-capitalize text-center">about <strong class="banner-title">us</strong></h1>
      <p class="mx-auto my-4 text-muted w-75">
        lorem ipsum dolor sit amet consectetur adipisicing elit sit amet consectetur adipisicing elit
        lorem ipsum dolor sit amet consectetur adipisicing elit sit amet consectetur adipisicing elit
      </p>
      <a href="#" class="btn btn-black text-uppercase">explore</a>
    </div>
      <div class="col-10 mx-auto col-md-6 my-5 align-self-center">
        <div class="about-img__container">
          <img src="img/sweets-1.jpeg" class="img-fluid" alt="Sweets 1">
        </div>
    </div>
  </div>
</section>
<!--End About Us -->
<!--Store Section -->
<section id="store" class="store py-5">
  <div class="container">
    <!--Section title -->
    <div class="row">
      <div class="col-10 mx-auto col-sm-6 text-center">
        <h1 class="text-capitalize">our <strong class="banner-title text-capitalize">store</strong></h1>
      </div>
    </div>
      <!--End Section title -->
   <!-- Filter buttons -->
   <div class="row">
     <div class="col-lg-8 mx-auto d-flex justify-content-around sortBtn flex-wrap">
      <button class="btn btn-black text-uppercase filter-btn m-2" data-filter="all">all</button>
       <button class="btn btn-black text-uppercase filter-btn m-2" data-filter="cakes">cakes</button>
       <button class="btn btn-black text-uppercase filter-btn m-2" data-filter="cupcakes">cupcakes</button>
       <button class="btn btn-black text-uppercase filter-btn m-2" data-filter="sweets">sweets</button>
       <button class="btn btn-black text-uppercase filter-btn m-2" data-filter="doughnuts">doughnuts</button>
     </div>
   </div>
   <!-- End Filter -->   
   <!-- Search box -->
   <div class="row">
     <div class="col-10 mx-auto col-md-6">
       <form>
         <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text search-box" id="search-icon">
              <i class="fas fa-search"></i>
            </span>
          </div>
           <input type="text" class="form-control" placeholder="item...">
         </div>
       </form>
     </div>
   </div>
   <!-- End Search box -->
   <!--Store Item -->
   <div class="row store-items" id="store-itemas">
    <!--Single Item -->
      <?php foreach($products as $product): ?>
          <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item <?php echo $product['filter']; ?>">
      <div class="card-single-item">
        <div class="img-container">
        <img src="<?php echo $product['img']; ?>" class="card-img-top store-img" alt="">
        <span class="store-item-icon">
          <i class="fas fa-shopping-cart"></i>
        </span>

      </div>
      <div class="card-body">
        <div class="card-text d-flex justify-content-between text-capitalize">
          <h5 id="store-item-name">
            <?php echo $product['name']; ?>
          </h5>
         <h5 class="store-item-value">$<?php echo $product['price']; ?><strong id="store-item-price" class="font-weight-bold"></strong></h5>
        </div>
      </div>
      
     </div>
   </div>
        <!-- end of store item-->
    <?php endforeach; ?>
  </div>
</section>
<!--End Store Section -->
<!--Services -->
<section id="services" class="services py-5">
  <div class="container">
    <div class="row">
      <!--single service -->
      <div class="col-md-4 text-center my-3">
        <img src="img/bread-icon.png" alt="bread icon">
        <h6 class="text-uppercase my-3 service-title">bread</h6>
        <p class="w-75 mx-auto text-left service-text">
          lorem ipsum dolor sit amet consectetur adipisicing elit sit amet consectetur adipisicing elit
        lorem ipsum dolor sit amet consectetur adipisicing elit
        </p>
      </div>
      <!-- end single service -->
          <!--single service -->
      <div class="col-md-4 text-center my-3">
        <img src="img/cupcake-icon.png" alt="bread icon">
        <h6 class="text-uppercase my-3 service-title">cupcakes</h6>
        <p class="w-75 mx-auto text-left service-text">
          lorem ipsum dolor sit amet consectetur adipisicing elit sit amet consectetur adipisicing elit
        lorem ipsum dolor sit amet consectetur adipisicing elit
        </p>
      </div>
      <!-- end single service -->
          <!--single service -->
      <div class="col-md-4 text-center my-3">
        <img src="img/candy-icon.png" alt="bread icon">
        <h6 class="text-uppercase my-3 service-title">candy</h6>
        <p class="w-75 mx-auto text-left service-text">
          lorem ipsum dolor sit amet consectetur adipisicing elit sit amet consectetur adipisicing elit
        lorem ipsum dolor sit amet consectetur adipisicing elit
        </p>
      </div>
      <!-- end single service -->
    </div>
  </div>
</section>
<!--End Services -->
<!-- Cakes -->
<section id="cakes" class="cakes py-5">
  <div class="container">
    <div class="row">
      <div class="col-10 mx-auto col-sm6 text-center">
        <h1 class="text-capitalize">order <strong class="banner-title">cake</strong></h1>
      </div>
    </div>
    <!--single cake -->
    <div class="row">
      <div class="col-11 mx-auto col-md-6 col-lg-4 my-4 text-capitalize text-center">
        <h3 class="py-2 text-capitalize">custom cake</h3>
        <div class="text-muted">
          <p class="my-3">birthday cake whit a name</p>
          <p class="my-3">birthday cake whit a name</p>
          <p class="my-3">birthday cake whit a name</p>
          <p class="my-3">birthday cake whit a name</p>
          <button type="button" class="btn btn-pink text-capitalize mb-3">order now</button>
          <p class="text-lowercase mb-4">starting at $5</p>
          <img src="img/trans-custom.png" class="img-fluid" alt="">
        </div>
      </div>
    <!--End single cake -->
        <!--single cake -->
      <div class="col-11 mx-auto col-md-6 col-lg-4 my-4 text-capitalize text-center">
        <h3 class="py-2 text-capitalize">wedding cake</h3>
        <div class="text-muted">
          <p class="my-3">birthday cake whit a name</p>
          <p class="my-3">birthday cake whit a name</p>
          <p class="my-3">birthday cake whit a name</p>
          <p class="my-3">birthday cake whit a name</p>
          <button type="button" class="btn btn-pink text-capitalize mb-3">order now</button>
          <p class="text-lowercase mb-4">starting at $5</p>
          <img src="img/trans-wedding.png" class="img-fluid" alt="">
        </div>
      </div>
    <!--End single cake -->
        <!--single cake -->
      <div class="col-11 mx-auto col-md-6 col-lg-4 my-4 text-capitalize text-center">
        <h3 class="py-2 text-capitalize">birthday cake</h3>
        <div class="text-muted">
          <p class="my-3">birthday cake whit a name</p>
          <p class="my-3">birthday cake whit a name</p>
          <p class="my-3">birthday cake whit a name</p>
          <p class="my-3">birthday cake whit a name</p>
          <button type="button" class="btn btn-pink text-capitalize mb-3">order now</button>
          <p class="text-lowercase mb-4">starting at $5</p>
          <img src="img/trans-cake.png" class="img-fluid" alt="">
        </div>
      </div>
      <!--End single cake -->
    </div>
    </div>
  </div>
</section>
<!-- End Cakes -->
<footer>
  <div class="container-fluid">
    <div class="row">
    <div class="col-md-6 footer-title py-5">
      <h1 class="text-capitalize text-center">
        <strong class="banner-title">grandma's</strong>
      </h1>
      <div class="footer-icons mt-3 d-flex justify-content-around flex-wrap">
        <a href="#" class="footer-icon">
          <i class="fab fa-facebook"></i>
        </a>
          <a href="#" class="footer-icon">
          <i class="fab fa-twitter"></i>
        </a>
          <a href="#" class="footer-icon">
          <i class="fab fa-instagram"></i>
        </a>
          <a href="#" class="footer-icon">
          <i class="fab fa-github"></i>
        </a>
      </div>
    </div>
    <div class="col-md-6 footer-contact text-center text-capitalize p-5">
      <h3 class="mb-5">contact</h3>
      <p class="d-flex flex-wrap">
        <span class="mr-4 footer-icon">
          <i class="fas fa-map">
          </i>
        </span>
        <span>
          123 main street, san diego CA-90101
        </span>
      </p>
       <p class="d-flex flex-wrap">
        <span class="mr-4 footer-icon">
          <i class="fas fa-envelope">
          </i>
        </span>
        <span>
          email@email.com
        </span>
      </p>
       <p class="d-flex flex-wrap">
        <span class="mr-4 footer-icon">
          <i class="fas fa-phone">
          </i>
        </span>
        <span>
          123-456-789
        </span>
      </p>
    </div>
  </div>
  </div>
</footer>
  <!-- icons -->
  <!-- 
    https://www.iconfinder.com/icons/2427887/dessert_donut_doughnut_fat_sweets_icon
    Creative Commons (Attribution 3.0 Unported);
    https://www.iconfinder.com/korawan_m
         -->
  <!-- 
    https://www.iconfinder.com/icons/2427860/baguette_bread_bread_loaf_food_toast_icon
    Creative Commons (Attribution 3.0 Unported);
    https://www.iconfinder.com/korawan_m
         -->
  <!-- 
    https://www.iconfinder.com/icons/2427875/cup_cupcake_dessertice_cream_yogurt_icon
    Creative Commons (Attribution 3.0 Unported);
    https://www.iconfinder.com/korawan_m
         -->
  <!-- 
    https://www.iconfinder.com/icons/2671457/candy_sweets_treat_trick_icon
    Creative Commons (Attribution 3.0 Unported);
    https://www.iconfinder.com/bluelabelicons
         -->
  <!--end of icons icons -->



  <!-- jquery -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <!-- script js -->
  <script src="js/app.js"></script>

  <script>

$(document).ready(function(){

    $(".filter-btn").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });

});

</script>

</body>

</html>