<!-- Menu -->
<?php include_once 'Views/template-principal/header.php'; ?>

<!-- Start Banner Hero -->
<div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="./<?php echo BASE_URL; ?>assets/img/banner_img_01.jpg" alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left align-self-center">
                            <h1 class="h1 text-success"><b>YGO_TCG</b>_Cards</h1>
                            <h3 class="h2">Venda online</h3>
                            <p style="text-align: justify">
                                ¡Bienvenidos a la tienda de cartas de Yu-Gi-Oh! Donde la emoción y la estrategia se unen en
                                un mundo de duelos de cartas llenos de magia y monstruos.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="<?php echo BASE_URL; ?>assets/img/about.png" alt="About Hero">
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="./<?php echo BASE_URL; ?>assets/img/banner_img_02.jpg" alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left">
                            <h1 class="h1 text-success"><b>YGO_TCG</b>_Cards</h1>
                            <h3 class="h2">Venda online</h3>
                            <p style="text-align: justify">
                                Ya seas un principiante o un veterano
                                buscando las cartas más raras y poderosas, estás en el lugar adecuado. Nuestra tienda es el punto
                                de encuentro para todos los duelistas apasionados, y nuestro equipo está listo para ayudarte a
                                encontrar las cartas que necesitas para construir tu mazo perfecto y enfrentarte a desafíos épicos.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <img src="<?php echo BASE_URL; ?>assets/img/about.png" alt="About Hero">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="./<?php echo BASE_URL; ?>assets/img/banner_img_03.jpg" alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left">
                            <h1 class="h1 text-success"><b>YGO_TCG</b>_Cards</h1>
                            <h3 class="h2">Venda online</h3>
                            <p style="text-align: justify">
                                ¡Así que prepárate para librar batallas emocionantes y descubrir el poder de las cartas en nuestra
                                tienda de Yu-Gi-Oh!
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="<?php echo BASE_URL; ?>assets/img/about.png" alt="About Hero">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
        <i class="fas fa-chevron-left"></i>
    </a>
    <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
        <i class="fas fa-chevron-right"></i>
    </a>
</div>
<!-- End Banner Hero -->

<!-- Start Categories of The Month -->
<section class="container py-5">
    <div class="row text-center pt-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Categorias</h1>
        </div>
    </div>
    <div class="row">
        <?php foreach ($data['categorias'] as $categoria) { ?>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="<?php echo BASE_URL . 'principal/categorias/' . $categoria['id']; ?>"><img src="./<?php echo $categoria['imagen']; ?>" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3"><?php echo $categoria['categoria']; ?></h5>
            </div>
        <?php } ?>
    </div>
</section>
<!-- End Categories of The Month -->

<!-- Footer -->
<?php include_once 'Views/template-principal/footer.php'; ?>

</body>

</html>