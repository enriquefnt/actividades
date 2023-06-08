<?php


include __DIR__ . '/../includes/conect.php';


session_start();

	if(isset($_POST['login'])) {

		$errMsg = '';



		// Get data from FORM

		$NomUsuario = $_POST['usuario'];

		//$Contraseña = password_hash($_POST['password'], PASSWORD_DEFAULT);

		$Contraseña = $_POST['password'];



		if($NomUsuario == '')

			$errMsg = 'Ingrese nombre de usuario';

		if($Contraseña == '')

			$errMsg = 'Ingrese la Contraseña';



		if($errMsg == '') {

			try {

			$stmt = $pdo->prepare('SELECT * FROM act_usuarios 

				inner join act_aop on `AOP` = `idaop`

				WHERE usuario = :NomUsuario');

				$stmt->execute(array(

					':NomUsuario' => $NomUsuario

					));

				$data = $stmt->fetch(PDO::FETCH_ASSOC);



				if($data == false){

					$errMsg = "El usuario $NomUsuario no existe.";

				}

				else {



						if (password_verify($Contraseña, $data['password']))

					 {

						$_SESSION['apellido'] = $data['apellido'];



						$_SESSION['nombre'] = $data['nombre'];



						$_SESSION['AOP'] = $data['AOP'];



						$_SESSION['AreaOperativa'] = $data['areaoperativa'];



						$_SESSION['tipo'] = $data['tipo'];



						$_SESSION['idUser'] = $data['id'];





					

						header('Location: /actividades/includes/inicio.php');

						



						exit;

					}

					else

						$errMsg = 'Contraseña erronea';

				}

			}

			catch(PDOException $e) {

				$errMsg = $e->getMessage();

			}

		}

	}

?>



<html>

<head>

	<title>Login</title>

	<link rel="stylesheet" type="text/css" href="../estilos/estilo_login.css">

	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

</head>

<header class="login-header">

Actividades Promoción

</header>



<body>

		

<div class="login">

  <div class="login-triangle"></div>

  

  <h2 class="login-header">Ingresar Usuario y contraseña</h2>



  <form class="login-container" action="" method="post">

    <p><input type="text" name="usuario" value="<?php if(isset($_POST['usuario'])) echo $_POST['usuario'] ?>"placeholder="Usuario" autocomplete="on"></p>

    <p><input type="password" name="password" value="<?php if(isset($_POST['password'])) echo $_POST['password'] ?>" placeholder="Contraseña"></p>

    <p><input type="submit" name='login' value="Ingreso"></p>

  </form>





</div>

<?php

				if(isset($errMsg)){

					echo '<div class="error-msg">' .$errMsg .'</div>';

				}

			?>



</body>

</html>