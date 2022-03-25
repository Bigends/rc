<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- color of address bar in mobile browser -->
  <meta name="theme-color" content="#2B2B35">
  <!-- favicon  -->
  <link href="assets/img/icon.png" rel="icon">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css">
  <!-- font awesome css -->
  <link rel="stylesheet" href="assets/css/plugins/font-awesome.min.css">
  <!-- swiper css -->
  <link rel="stylesheet" href="assets/css/plugins/swiper.min.css">
  <!-- fancybox css -->
  <link rel="stylesheet" href="assets/css/plugins/fancybox.min.css">
  <!-- main css -->
  <link rel="stylesheet" href="assets/css/style9.css">

  <title>CHRIXCODE: Site de gestion et logiciel</title>
</head>

<body>

  <!-- app -->
  <div class="art-app">

    <!-- mobile top bar -->
    <div class="art-mobile-top-bar"></div>

    <!-- app wrapper -->
    <div class="art-app-wrapper">

      <!-- app container end -->
      <div class="art-app-container">

        <!-- HEADER GAUCHE-->
        <?php include 'includes/header.php' ?>

        <!-- content -->
        <div class="art-content">

          <!-- curtain -->
          <div class="art-curtain"></div>

          <!-- top background -->
          <div class="art-top-bg" style="background-image: url(assets/img/bg.jpg)">
            <!-- overlay -->
            <div class="art-top-bg-overlay"></div>
            <!-- overlay end -->
          </div>
          <!-- top background end -->

          <!-- swup container -->
          <div class="transition-fade" id="swup">

            <!-- scroll frame -->
            <div id="scrollbar" class="art-scroll-frame">

              <!-- container -->
              <div class="container-fluid">

                <!-- row -->
                <div class="row p-30-0">

                  <!-- col -->
                  <div class="col-lg-12">

                    <!-- section title -->
                    <div class="art-section-title">
                      <!-- title frame -->
                      <div class="art-title-frame">
                        <!-- title -->
                        <h4>Site de gestion et Logiciel</h4>
                      </div>
                      <!-- title frame end -->
                    </div>
                    <!-- section title end -->

                  </div>
                  <!-- col end -->

                  <!-- Début de l'article -->
                  <?php
                                            require_once("articles/accueil/gestion/includes/database.php");
                                            $req=$db->prepare('SELECT *FROM gestion');
                                            $req->execute();
                                            while ($reponse=$req->fetch(PDO::FETCH_OBJ)) {?>

                  <!-- col -->
                  <div class="col-lg-6">

                    <!-- blog post card -->
                    <div class="art-a art-blog-card">
                      <!-- post cover -->
                      <a href="/blog-post.html" class="art-port-cover">
                        <!-- img -->
                        <img src="https://ryzencode/articles/accueil/gestion/assets/img/<?php echo $reponse->images_name; ?>"
                          alt="">
                      </a>
                      <!-- post cover end -->
                      <!-- post description -->
                      <div class="art-post-description">
                        <!-- title -->
                        <a href="/blog-post.html">
                          <h4 class="mb-15"><?php echo $reponse->titre; ?></h4>
                        </a>
                         <!-- Date -->
                         <div class="mb-15"><i>
                            <p><?php echo $reponse->plus; ?></p>
                          </i></div>
                        <!-- text -->
                        <div class="mb-15"><?php echo substr($reponse->contenu, 0,2500); ?></div>
                        <!-- link -->
                        <a href="/blog-post.html" class="art-link art-color-link art-w-chevron">Découvrir</a>
                      </div>
                      <!-- post description end -->
                    </div>
                    <!-- blog post card end -->

                  </div>
                  <!-- col end -->
                  <?php }

                  ?>

                </div>
                <!-- row end -->

              </div>
              <!-- container end -->

              <!-- container -->
              <div class="container-fluid">

                <!-- footer -->
                <?php include 'includes/footer.php' ?>
                <!-- footer end -->

              </div>
              <!-- container end -->

            </div>
            <!-- scroll frame end -->

          </div>
          <!-- swup container end -->

        </div>
        <!-- content end -->

        <!-- Menu de Droite -->
        <?php include 'includes/menu.php' ?>

      </div>
      <!-- app container end -->

    </div>
    <!-- app wrapper end -->

    <!-- preloader -->
    <?php include 'includes/preloader.php' ?>
    <!-- preloader end -->
  </div>
  <!-- preloader end -->

  </div>
  <!-- app end -->

  <!-- jquery js -->
  <script src="assets/js/plugins/jquery.min.js"></script>
  <!-- anime js -->
  <script src="assets/js/plugins/anime.min.js"></script>
  <!-- swiper js -->
  <script src="assets/js/plugins/swiper.min.js"></script>
  <!-- progressbar js -->
  <script src="assets/js/plugins/progressbar.min.js"></script>
  <!-- smooth scrollbar js -->
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <!-- overscroll js -->
  <script src="assets/js/plugins/overscroll.min.js"></script>
  <!-- typing js -->
  <script src="assets/js/plugins/typing.min.js"></script>
  <!-- isotope js -->
  <script src="assets/js/plugins/isotope.min.js"></script>
  <!-- fancybox js -->
  <script src="assets/js/plugins/fancybox.min.js"></script>
  <!-- swup js -->
  <script src="assets/js/plugins/swup.min.js"></script>

  <!-- main js -->
  <script src="assets/js/main.js"></script>

</body>

</html>