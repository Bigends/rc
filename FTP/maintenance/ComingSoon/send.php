<?php
if(isset($_POST['submit']))
{
  if(!empty($_POST['nom']) AND !empty($_POST['tel']) AND !empty($_POST['mail']) AND !empty($_POST['objet']) AND !empty($_POST['message']))
  {
    $header="MIME-Version: 1.0\r\n";
    $header.='From:"CXC.COM"<contact@chrixcode.com>'."\n";
    $header.='Content-Type:text/html; charset="uft-8"'."\n";
    $header.='Content-Transfer-Encoding: 8bit';

    $message='
    <html>
    <head><meta charset="utf-8" />
     </head>
      <body>
      <meta charset="utf-8" />
        <div align="center">
          <img src="https://alphamonetique.com/assets/images/mail/mail.png"/>
          <br />
          <u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
          <u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
          <u>Objet de l\'expéditeur :</u>'.$_POST['objet'].'<br />
          <u>Numéro de téléphone de l\'expéditeur :</u>'.$_POST['tel'].'<br />
          <br />
          '.nl2br($_POST['message']).'
          <br />
          <img src="https://alphamonetique.com/assets/images/mail/mail2.png"/>
        </div>
      </body>
    </html>
    ';

    mail("contact@chrixcode.com", "CONTACT - .CXC", $message, $header);
    $msg="Votre message a bien été envoyé !";
  }
}
?>
<html>
<head>
        <title>CXC: Vérification</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="https://alphamonetique.com/assets/css/send.css" rel="stylesheet" type="text/css" media="screen" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="assets/img/icon.png" rel="icon">
        <script type="text/javascript"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenLite.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineLite.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/CSSPlugin.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
		<link rel="stylesheet" media="screen and (max-width: 800px)" href="styleindex.css" />
        <meta name="identifier-url" content="https://chrixcode.com/"/>
        <meta property="og:url" content="https://chrixcode.com/"/>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </head>
<body>

<!-- Top Header Start -->
<div class="card text-center">
  <div class="card-header">
    ENVOYÉ!
  </div>
  <div class="card-body">
    <img src="https://alphamonetique.com/assets/images/verification.png" alt=""><br><br>
    <a href="https://chrixcode.com/ComingSoon/" class="btn btn-primary">Retour au site</a>
  </div>
</div>
<!-- Top Header Done -->

</body>
</html>