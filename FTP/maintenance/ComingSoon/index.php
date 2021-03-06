<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>CHRIXCODE : Bientôt Disponible</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/icon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/form.css" rel="stylesheet">

  <!-- Google Absence -->
  <meta name="google-site-verification" content="M6r_mNTtbWB9kYRgfkp5vwtq9jXqQD0guwj-GuW05vA" />

</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center">

      <img src="assets/img/test.png" height="150px" width="400px" alt=""><br /><br />
      <h2>Une solution Web pour tous!</h2>
      <h1>Bientôt Disponible!</h1>
      <div class="countdown d-flex justify-content-center" data-count="2022/04/13">
        <div>
          <h3>%d</h3>
          <h4>Jours</h4>
        </div>
        <div>
          <h3>%h</h3>
          <h4>Heures</h4>
        </div>
        <div>
          <h3>%m</h3>
          <h4>Minutes</h4>
        </div>
        <div>
          <h3>%s</h3>
          <h4>Secondes</h4>
        </div>
      </div>

      <div class="subscribe">
        <h4>Abonnez-vous maintenant pour recevoir les dernières mises à jour!</h4>
        <form action="forms/notify.php" method="post" role="form" class="php-email-form">
          <div class="subscribe-form">
            <input type="email" name="email"><input type="submit" value="Abonnez-vous">
          </div>
          <div class="mt-2">
            <div class="loading">Chargement</div>
            <div class="error-message"></div>
            <div class="sent-message">Envoyé. CXC vous remercie!</div>
          </div>
        </form>
      </div>

      <div class="social-links text-center">
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>

    </div>
  </header><!-- End #header -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <h2>À propos</h2>
            <h3>Une équipe de développeurs et commerciale, vous accompagne vers votre création web.</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Vous souhaitez ouvrir votre entreprise ? On se charge de vous localiser sur le Web! Nous mettons on place
              des stratégies de référence afin de vous rendre visible au mieux!
            </p>
            <ul>
              <li><i class="bi bi-check"></i> Offre Jeune</li>
              <li><i class="bi bi-check"></i> Particuliers et Professionnels</li>
              <li><i class="bi bi-check"></i> Active sur les communes éloignées</li>
            </ul>
            <p class="fst-italic">
              Nos proposons des sites de gestions pour toutes sociétés qui souhaitent gérer activement leur recette.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Votre demande</h2>
        </div>

        <div class="row justify-content-center">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Localisation:</h4>
                  <p>Guyane Française<br>97300 Cayenne</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-envelope"></i>
                  <h4>Adresse mail:</h4>
                  <p>contact@chrixcode.com</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-phone"></i>
                  <h4>Téléphone:</h4>
                  <p>+594 694 48 29 48</p>
                </div>
              </div>
              <hr>
            </div>
          
          </div>

        </div>

        <div class="row justify-content-center">
          <div class="col-lg-10">
            <form action="send.php" method="post">
              <div class="row">
                <div class="col">
                  <input type="text" name="nom" id="nom" class="nameform" placeholder=" Nom*" required>
                </div>
                <div class="col">
                  <input type="email" name="mail" class="mailform" placeholder=" Adresse mail*"
                    required>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <hr>
                  <input type="text" name="tel" class="telform" placeholder=" Numéro de téléphone*" required>
                </div>
                <div class="col">
                  <hr>
                  <input type="text" name="objet" class="objetform" placeholder=" Objet*" required>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="form-group mt-3">
                  <textarea name="message" cols="40" rows="10"
                    class="messageform" aria-required="true"
                    aria-invalid="false" placeholder=" Votre demande*" required></textarea>
                </div>
              </div>
              <div class="contact-submit">
                <center><input type="submit" name="submit" value="Envoyer" class="envoi"></center>
              </div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>| 2022 - 2023</span></strong> Tous droits réservés.
      </div>
      <div class="credits">
        Développé par <a href="https://cxcode.com/twit">.CXC</a>
      </div>
    </div>
  </footer><!-- End #footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main2.js"></script>

</body>

</html>