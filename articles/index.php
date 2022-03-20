<!-- 
|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
||||                 ||||                  ||||                  ||||                ||||     |||||||||  ||||
|||| ||||||||||||||| ||||||||||||  ||||||||||||||||||||||||||||  ||||  ||||||||||||||||||  ||   |||||||  ||||
|||| ||||||||||||||| ||||||||||||  |||||||||||||||||||||||||  |||||||  ||||||||||||||||||  |||   ||||||  ||||
|||| ||||||||||||||| ||||||||||||  ||||||||||||||||||||||  ||||||||||  ||||||||||||||||||  ||||   |||||  ||||
|||| |||||||         ||||||||||||  ||||||||||||||||||||  ||||||||||||                ||||  |||||   ||||  ||||
|||| ||||||||  ||||||||||||||||||  |||||||||||||||||  |||||||||||||||  ||||||||||||||||||  ||||||   |||  ||||
|||| ||||||||||  ||||||||||||||||  ||||||||||||||  ||||||||||||||||||  ||||||||||||||||||  |||||||   ||  ||||
|||| ||||||||||||  ||||||||||||||  ||||||||||||  ||||||||||||||||||||  ||||||||||||||||||  ||||||||   |  ||||
|||| ||||||||||||||  ||||                  ||||                  ||||                ||||  |||||||||     ||||
|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||
                                 ||||      |||      |||     ||||       ||||
                                 |||| |||||||| |||| ||| |||| ||| ||||||||||
                                 |||| |||||||| |||| ||| |||| |||       ||||
                                 |||| |||||||| |||| ||| |||| ||| ||||||||||
                                 ||||      |||      |||     ||||       ||||
                                 ||||||||||||||||||||||||||||||||||||||||||
                                 <----------------- 100% ----------------->
<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: http://ryzencode/articles/accueil/");
						die;
					}
				}
			}
			
			echo "Identifiant ou mot de passe incorrecte";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>
<!doctype html>
    <html class="no-js" lang="fr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Ryzen Code: Admin</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="images/icons/icon_logo2.png">
        <link rel="stylesheet" href="assets/css/style.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
<body>
<?php 
if (isset($_SESSION['email']))
{
    echo "Vous êtes connecté en tant que : " . $_SESSION['email'];
}
else
{
  ?>
  <section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
          <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img
                src="assets/img/lion.jpg"
                alt=""
                class="img-fluid" style="border-radius: 1rem 0 0 1rem;display:flex;height:100%;"
              />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form method="POST" action="">
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <img src="">
                    <span class="h1 fw-bold mb-0 m-3">ADMIN</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Gestion articles</h5>
                  <label class="form-label" for="form2Example17">Identifiant</label>
                  <div class="form-outline mb-4">
                    <input type="text" id="form2Example17" name="user_name" placeholder="Entrez votre identifiant" class="form-control form-control-lg" />
                  </div>

                  <label class="form-label" for="form2Example27" style="letter-spacing: 1px;">Mot de passe</label>
                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example27" name="password" class="form-control form-control-lg" />
                    
                  </div>

                  <div class="pt-1 mb-4">
                    <button value="Login" class="btn btn-dark btn-lg btn-block" type="submit">Se connecter</button>
                  </div>

                  <a class="small text-muted" href="#!">Mot de passe oublié?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Pas de compte? <a href="#!" style="color: #393f81;">Contactez notre Développeur</a></p>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <?php
}
?>

</body>

</html>