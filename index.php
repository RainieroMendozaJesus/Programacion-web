<!DOCTYPE html>
<html data-bs-theme="light" lang="es" dir="ltr">

  <head>
    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Librería Informativa</title>

    <?php
      include ("templeate/head.php");
    ?>    
  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">

          <!--Navegador-->
          <?php
            include("templeate/Navegador.php");
          ?>

          <!--Contenido de la Pagina de Inicios-->
          <div class="container" data-bs-target="#navbar-top" data-bs-spy="scroll" tabindex="0">
            <section class="mb-9 mb-lg-10 mb-xxl-11 text-center text-lg-start mt-9" id="home">
              <div>
                <div class="row g-4 g-lg-6 g-xl-7 mb-6 mb-lg-7 mb-xl-10 align-items-center">
                  <div class="col-12 col-lg-6"><img class="img-fluid w-50 w-lg-100" src="assets/img/Hero/pexels-ricky-esquivel-1907785.jpg" alt="" /></div>
                  <div class="col-12 col-lg-6">
                    <h1 class="fs-5 fs-md-3 fs-xxl-2 text-black fw-light mb-4"><span class="fw-bold">Tu Libreria </span>Informativa <br class="d-sm-none d-md-block d-xxl-none" />favorita <span class="text-gradient fw-bold">Aranyak</span></h1>
                    <p class="fs-8 fs-md-11 fs-xxl-7 text-primary mb-5 mb-lg-6 mb-xl-7 fw-light">
                      En nuestra librería, las páginas se convierten en portales hacia aventuras inexploradas. Cada libro es un pasaporte a mundos lejanos, personajes entrañables y conocimientos infinitos. Sumérgete en la calidez de nuestras estanterías, donde las palabras danzan y los sueños toman forma. Descubre la magia de las letras, el consuelo de las historias y la inspiración que solo los libros pueden brindar. Bienvenido a un lugar donde el tiempo se detiene y las posibilidades son infinitas.
                    </p>
                    <button class="btn btn-gradient fs-8 mt-1 d-inline-flex"><span>Explorar Libros</span><span class="uil uil-arrow-right"></span></button>
                  </div>
                </div>
                <div class="row g-4 g-lg-6 g-xl-7 align-items-center">
                  <div class="col-12 col-lg-6 order-1 order-lg-0">
                    <p class="fs-8 fs-md-7 fs-xxl-6 text-success fw-bold mb-x1 text-capitalize">Tenemos una gran variedad de autores</p>
                    <h1 class="fs-5 fs-md-3 fs-xxl-2 text-secondary text-capitalize fw-light mb-4">Encuentra tu <br class="d-none d-md-block d-lg-none" /><span class="fw-bold">favorito </span><br class="d-none d-xl-block d-xxl-none" /><br class="d-sm-none" /></h1>
                    <p class="fs-8 fs-md-11 fs-xxl-7 text-primary mb-5 mb-lg-6 mb-xl-7 fw-light">
                      Sumérgete en las páginas de un buen libro mientras el aroma del café se entrelaza con las palabras. En cada sorbo, descubres nuevos mundos y te sumerges en las historias de tus autores favoritos. En esta librería, el café y los libros se fusionan en un abrazo cálido y mágico. Bienvenido al rincón donde las letras se mezclan con la cafeína, y cada lectura es un viaje inolvidable. 
                    </p>
                    <button class="btn btn-gradient fs-8 d-inline-flex"><span>Explorar Autores</span><span class="uil uil-arrow-right"></span></button>
                  </div>
                  <div class="col-12 col-lg-6 order-0 order-lg-1"><img class="img-fluid w-50 w-lg-100" src="assets/img/Hero/pexels-andrea-piacquadio-3808904.jpg" alt="" /></div>
                </div>
              </div>
            </section>

            <!--Tercer Apartado, numeros cambiantes y emojis-->
            
            <section class="mb-9 mb-lg-10 mb-xxl-11">
              <div class="row g-4">
                <div class="col-12 col-lg-4 text-center"><img class="mb-3" src="assets/img/icons/icons8-libros-emoji-48.png" alt="libros" />
                  <h1 class="text-secondary fs-4 fs-lg-3 fs-xl-2 counter-delivared" data-countup='{"endValue":9124201,"autoIncreasing":true}' style="font-variant-numeric: lining-nums proportional-nums;">0</h1>
                  <p class="text-success fs-7 fs-xl-6 fw-bold mb-0">
                    Libros <br class="d-none d-xl-block d-xxl-none" />Vendidos</p>
                </div>
                <div class="col-12 col-lg-4 text-center"><img class="mb-3" src="assets/img/icons/icons8-cara-de-alivio-48.png" alt="cara de alivio" />
                  <h1 class="text-secondary fs-4 fs-lg-3 fs-xl-2" data-countup='{"endValue":36487}' style="font-variant-numeric: lining-nums proportional-nums;"> 0</h1>
                  <p class="text-success fs-7 fs-xl-6 fw-bold mb-0">
                    Clientes <br class="d-none d-xl-block d-xxl-none" />Satisfechos </p>
                </div>
                <div class="col-12 col-lg-4 text-center"><img class="mb-3" src="assets/img/icons/icons8-visita-48.png" alt="visitas" />
                  <h1 class="text-secondary fs-4 fs-lg-3 fs-xl-2" data-countup='{"endValue":400,"suffix":"+"}' style="font-variant-numeric: lining-nums proportional-nums;"> 0</h1>
                  <p class="text-success fs-7 fs-xl-6 fw-bold mb-0">
                    Visitas <br class="d-none d-xl-block d-xxl-none" />Mensuales</p>
                </div>
              </div>
            </section>


            <!--Acera de Nosotros, cuarto apartado-->

            
            <section class="mb-9 mb-lg-10 mb-xxl-11 text-center text-lg-start" id="about">
              <h4 class="mb-x1 fs-8 fs-md-7 fs-xxl-6 text-success fw-bold pt-6 text-capitalize">Acerca de Nosotros </h4>
              <h1 class="fs-5 fs-lg-3 fs-xl-2 text-secondary text-capitalize fw-light mb-x1">Nuestro <span class="fw-bold">equipo </span>y<br />su principal <span class="fw-bold">filosofia</span></h1>
              <div class="row mb-7 mb-lg-8 mb-xl-9 gap-3">
                <div class="col-12 col-lg">
                  <p class="text-black fs-10 fs-md-9 fs-xxl-8 lh-xl mb-0 line-clamp-5">Nuestra Ubicación
                  📍 Dirección: Sector 24 de abril, Los Alcarrizos, Santo Domingo, República Dominicana. 📧 Correo Electrónico: libros@libreria.com 
                    Nos encanta conocer a nuestros clientes. Ven a charlar con nosotros, Organizamos clubes de lectura, presentaciones de autores y eventos literarios. Estamos aquí para guiarte.
                  </p>
                </div>
                <div class="col-12 col-lg">
                  <p class="text-black fs-10 fs-md-9 fs-xxl-8 lh-xl mb-0 line-clamp-5">Somos un refugio para las mentes curiosas, un faro para los soñadores y un encuentro para aquellos que buscan respuestas. Nuestro equipo está formado por apasionados bibliófilos, creemos que los libros son ventanas hacia otros mundos. Ofrecemos una amplia selección de títulos, desde clásicos atemporales hasta las últimas novedades.
                  </p>
                </div>
              </div>
            </section>




            
            <section class="mb-9 mb-lg-10 mb-xxl-11 text-center text-md-start" id="products">
              <h3 class="mb-x1 fs-8 fs-md-7 fs-xxl-6 text-success fw-bold pt-6">Our Products </h3>
              <div class="mb-6 mb-lg-7 mb-xl-10" id="slider-1">
                <h1 class="fs-5 fs-md-3 fs-xxl-2 text-secondary text-capitalize fw-light mb-13 mb-lg-7"> <span class="fw-bold">New </span>Arrivals</h1>
                <div class="mb-4 mb-lg-0">
                  <div class="swiper-theme-container position-relative">
                    <div class="swiper-container theme-slider" data-swiper='{"spaceBetween":32,"loop":true,"loopedSlides":5,"breakpoints":{"0":{"slidesPerView":1},"768":{"slidesPerView":2},"1024":{"slidesPerView":3}}}'>
                      <div class="swiper-wrapper">
                        <div class="product-card swiper-slide">
                          <div class="product-card-top" style="background-image: url('assets/img/products/products/1.png')">
                            <div class="add-section"><a class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center" href="#!"><span class="uil uil-file-heart me-1 align-middle"></span>add to wishlist </a><a class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center text-success fw-bold" href="#!"><span class="uil uil-shopping-cart me-1 align-middle"></span>add to cart</a></div>
                          </div>
                          <div class="d-flex flex-column gap-x1 p-x1 pb-5 product-card-body">
                            <h3 class="text-success fw-semi-bold text-center line-clamp-1 fs-8 fs-md-11 fs-xxl-7">Philodendron</h3>
                            <p class="text-dark fs-10 fs-md-9 fs-xl-8 text-capitalize lh-xl mb-0 line-clamp-3">The Philodendron White Princess has been around for some time in private collections. But they have hit the market now in full big potted plants.</p>
                          </div>
                        </div>
                        <div class="product-card swiper-slide">
                          <div class="product-card-top" style="background-image: url('assets/img/products/products/2.png')">
                            <div class="add-section"><a class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center" href="#!"><span class="uil uil-file-heart me-1 align-middle"></span>add to wishlist </a><a class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center text-success fw-bold" href="#!"><span class="uil uil-shopping-cart me-1 align-middle"></span>add to cart</a></div>
                          </div>
                          <div class="d-flex flex-column gap-x1 p-x1 pb-5 product-card-body">
                            <h3 class="text-success fw-semi-bold text-center line-clamp-1 fs-8 fs-md-11 fs-xxl-7">Monstera Obliqua Peruvian</h3>
                            <p class="text-dark fs-10 fs-md-9 fs-xl-8 text-capitalize lh-xl mb-0 line-clamp-3">aS it is a small species, Monstera Obliqua is uncommon. Another reason for its scarcity is that it grows slowly and has short selling seasons</p>
                          </div>
                        </div>
                        <div class="product-card swiper-slide">
                          <div class="product-card-top" style="background-image: url('assets/img/products/products/3.png')">
                            <div class="add-section"><a class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center" href="#!"><span class="uil uil-file-heart me-1 align-middle"></span>add to wishlist </a><a class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center text-success fw-bold" href="#!"><span class="uil uil-shopping-cart me-1 align-middle"></span>add to cart</a></div>
                          </div>
                          <div class="d-flex flex-column gap-x1 p-x1 pb-5 product-card-body">
                            <h3 class="text-success fw-semi-bold text-center line-clamp-1 fs-8 fs-md-11 fs-xxl-7">Norfolk Island Pine</h3>
                            <p class="text-dark fs-10 fs-md-9 fs-xl-8 text-capitalize lh-xl mb-0 line-clamp-3">Although a lively addition to your home all year round—the Norfolk Island Pine shines as a live holiday tree during the winter season</p>
                          </div>
                        </div>
                        <div class="product-card swiper-slide">
                          <div class="product-card-top" style="background-image: url('assets/img/products/products/5.png')">
                            <div class="add-section"><a class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center" href="#!"><span class="uil uil-file-heart me-1 align-middle"></span>add to wishlist </a><a class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center text-success fw-bold" href="#!"><span class="uil uil-shopping-cart me-1 align-middle"></span>add to cart</a></div>
                          </div>
                          <div class="d-flex flex-column gap-x1 p-x1 pb-5 product-card-body">
                            <h3 class="text-success fw-semi-bold text-center line-clamp-1 fs-8 fs-md-11 fs-xxl-7">Bromeliad Aechmea Pink</h3>
                            <p class="text-dark fs-10 fs-md-9 fs-xl-8 text-capitalize lh-xl mb-0 line-clamp-3">Featuring colorful, long-lasting blooms, the Bromeliad Aechmea Pink is a unique flowering plant to add a touch of tropics With lasting blooms</p>
                          </div>
                        </div>
                        <div class="product-card swiper-slide">
                          <div class="product-card-top" style="background-image: url('assets/img/products/products/8.png')">
                            <div class="add-section"><a class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center" href="#!"><span class="uil uil-file-heart me-1 align-middle"></span>add to wishlist </a><a class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center text-success fw-bold" href="#!"><span class="uil uil-shopping-cart me-1 align-middle"></span>add to cart</a></div>
                          </div>
                          <div class="d-flex flex-column gap-x1 p-x1 pb-5 product-card-body">
                            <h3 class="text-success fw-semi-bold text-center line-clamp-1 fs-8 fs-md-11 fs-xxl-7">Spider Plant</h3>
                            <p class="text-dark fs-10 fs-md-9 fs-xl-8 text-capitalize lh-xl mb-0 line-clamp-3">The fast-growing shoots produce little &quot;babies&quot; that you can re-pot for added greenery elsewhere. Just stick to well-lit spots, water weekly. </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="slider-nav">
                      <button class="btn prev-button" data-slider="slider-1"><span class="uil uil-angle-left-b"></span></button>
                      <button class="btn next-button" data-slider="slider-1"><span class="uil uil-angle-right-b"></span></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mb-6 mb-lg-7 mb-xl-10" id="slider-2">
                <h1 class="fs-5 fs-md-3 fs-xxl-2 text-secondary text-capitalize text-md-end fw-light mb-13 mb-lg-7"> <span class="fw-bold">Popular</span><br class="d-sm-none" />little plants</h1>
                <div class="mb-4 mb-lg-0">
                  <div class="swiper-theme-container position-relative">
                    <div class="swiper-container theme-sliderdiv" data-swiper='{"spaceBetween":32,"loop":true,"loopedSlides":5,"breakpoints":{"0":{"slidesPerView":1},"768":{"slidesPerView":2},"1024":{"slidesPerView":3}}}'>
                      <div class="swiper-wrapper">
                        <div class="product-card swiper-slide">
                          <div class="product-card-top" style="background-image: url('assets/img/products/products/4.png')">
                            <div class="add-section"><a class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center" href="#!"><span class="uil uil-file-heart me-1 align-middle"></span>add to wishlist </a><a class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center text-success fw-bold" href="#!"><span class="uil uil-shopping-cart me-1 align-middle"></span>add to cart</a></div>
                          </div>
                          <div class="d-flex flex-column gap-x1 p-x1 pb-5 product-card-body">
                            <h3 class="text-success fw-semi-bold text-center line-clamp-1 fs-8 fs-md-11 fs-xxl-7">Snake/Sansevieria</h3>
                            <p class="text-dark fs-10 fs-md-9 fs-xl-8 text-capitalize lh-xl mb-0 line-clamp-3">Sansevierias are succulent plants. they have strong, stiff, succulent leaves that store water. these plants release oxygen in the night</p>
                          </div>
                        </div>
                        <div class="product-card swiper-slide">
                          <div class="product-card-top" style="background-image: url('assets/img/products/products/5.png')">
                            <div class="add-section"><a class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center" href="#!"><span class="uil uil-file-heart me-1 align-middle"></span>add to wishlist </a><a class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center text-success fw-bold" href="#!"><span class="uil uil-shopping-cart me-1 align-middle"></span>add to cart</a></div>
                          </div>
                          <div class="d-flex flex-column gap-x1 p-x1 pb-5 product-card-body">
                            <h3 class="text-success fw-semi-bold text-center line-clamp-1 fs-8 fs-md-11 fs-xxl-7">Bromeliad Aechmea Pink</h3>
                            <p class="text-dark fs-10 fs-md-9 fs-xl-8 text-capitalize lh-xl mb-0 line-clamp-3">Featuring colorful, long-lasting blooms, the Bromeliad Aechmea Pink is a unique flowering plant to add a touch of tropics With lasting blooms</p>
                          </div>
                        </div>
                        <div class="product-card swiper-slide">
                          <div class="product-card-top" style="background-image: url('assets/img/products/products/6.png')">
                            <div class="add-section"><a class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center" href="#!"><span class="uil uil-file-heart me-1 align-middle"></span>add to wishlist </a><a class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center text-success fw-bold" href="#!"><span class="uil uil-shopping-cart me-1 align-middle"></span>add to cart</a></div>
                          </div>
                          <div class="d-flex flex-column gap-x1 p-x1 pb-5 product-card-body">
                            <h3 class="text-success fw-semi-bold text-center line-clamp-1 fs-8 fs-md-11 fs-xxl-7">Parlor Palm</h3>
                            <p class="text-dark fs-10 fs-md-9 fs-xl-8 text-capitalize lh-xl mb-0 line-clamp-3">The parlor palm (Chamaedorea elegans) has long been used as an indoor plant. NASA gave this plant a high purifying score.</p>
                          </div>
                        </div>
                        <div class="product-card swiper-slide">
                          <div class="product-card-top" style="background-image: url('assets/img/products/products/2.png')">
                            <div class="add-section"><a class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center" href="#!"><span class="uil uil-file-heart me-1 align-middle"></span>add to wishlist </a><a class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center text-success fw-bold" href="#!"><span class="uil uil-shopping-cart me-1 align-middle"></span>add to cart</a></div>
                          </div>
                          <div class="d-flex flex-column gap-x1 p-x1 pb-5 product-card-body">
                            <h3 class="text-success fw-semi-bold text-center line-clamp-1 fs-8 fs-md-11 fs-xxl-7">Monstera Obliqua Peruvian</h3>
                            <p class="text-dark fs-10 fs-md-9 fs-xl-8 text-capitalize lh-xl mb-0 line-clamp-3">aS it is a small species, Monstera Obliqua is uncommon. Another reason for its scarcity is that it grows slowly and has short selling seasons</p>
                          </div>
                        </div>
                        <div class="product-card swiper-slide">
                          <div class="product-card-top" style="background-image: url('assets/img/products/products/1.png')">
                            <div class="add-section"><a class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center" href="#!"><span class="uil uil-file-heart me-1 align-middle"></span>add to wishlist </a><a class="fs-10 fs-md-9 d-flex flex-column flex-xl-row align-items-center text-success fw-bold" href="#!"><span class="uil uil-shopping-cart me-1 align-middle"></span>add to cart</a></div>
                          </div>
                          <div class="d-flex flex-column gap-x1 p-x1 pb-5 product-card-body">
                            <h3 class="text-success fw-semi-bold text-center line-clamp-1 fs-8 fs-md-11 fs-xxl-7">Monstera Obliqua Peruvian</h3>
                            <p class="text-dark fs-10 fs-md-9 fs-xl-8 text-capitalize lh-xl mb-0 line-clamp-3">aS it is a small species, Monstera Obliqua is uncommon. Another reason for its scarcity is that it grows slowly and has short selling seasons</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="slider-nav">
                      <button class="btn prev-button" data-slider="slider-2"><span class="uil uil-angle-left-b"></span></button>
                      <button class="btn next-button" data-slider="slider-2"><span class="uil uil-angle-right-b"></span></button>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>

      
          <button class="btn scroll-to-top" data-scroll-top="data-scroll-top"><span class="uil uil-angle-up text-white"></span></button>



          <!--Pie de Pagina-->
          <?php
            include("templeate/Pie_dePagina.php");
          ?>
        </div>
      </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/popper/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="vendors/countup/countUp.umd.js"></script>
    <script src="vendors/swiper/swiper-bundle.min.js"></script>
    <script src="vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/list.js/list.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>

  </body>

</html>