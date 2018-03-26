<?php
	$submitted=array_key_exists('submitted',$_POST)&&$_POST['submitted']?$_POST['submitted']:null;
	$rememberUser=array_key_exists('rememberUser',$_POST)&&$_POST['rememberUser']?$_POST['rememberUser']:null;

	function validoMail() {
		$usuarios = json_decode(file_get_contents('usuarios.json'),true);
		$existe = false;
		if(!is_null($usuarios)&&array_key_exists('email', $_POST)&&$_POST['email']) {
			foreach ($usuarios as $key => $usuarioEnArchivo) {
				if ($usuarioEnArchivo['email'] == $_POST['email']) {
					return $existe = true;
				}
			}
		}
		return $existe;
	}
	function validoPassword(){
		$usuarios = json_decode(file_get_contents('usuarios.json'),true);
		$existe = false;
		if(!is_null($usuarios)&&array_key_exists('password', $_POST)&&$_POST['password']) {
			foreach ($usuarios as $key => $usuarioEnArchivo) {
				if (password_verify($_POST('password'),$usuarios['password'])) {
					return $existe = true;
				}
			}
		}
		return $existe;
	}
	function traerUsuario(){
		$resul=null;
		$usuarios = json_decode(file_get_contents('usuarios.json'),true);
		foreach ($usuarios as $key => $usuarioEnArchivo) {
			if ($usuarioEnArchivo['email'] == $_POST['email']) {
				return $resul=$usuarioEnArchivo;
			}			
		}
	return $resul;
	}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Login Avecino</title>
  </head>
  <body>
    <div class="container">
        <div class="navegacion">
          <header>
            <nav>
              <ul>
                <!-- <li><a href="login.hmtl">Ingresar</a></li> -->
                <li><a href="registration.html">Registrarse</a></li>
                <li><a href="index.html">Busqueda</a></li>
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="mailto:lautarogonzalez@outlook.com?Subject=Hola-Avecino">Contactar</a></li>
              </ul>
            </nav>
          </header>
        </div>
      <div class="login">
        <h1><img src="./images/logo.png" alt="Logo" longdesc="Login <Avecino>"></a><h1>
        <div class="divLogin">
          <h2>Ingresá tus datos</h2>
          <form class="formLogin" action= method="post">
            <label>Email</label>
            <input type="email" name="email" required>
            <label>Contraseña</label>
            <input type="password" name="password" required>
            <div class="recordarme">
              <input type="checkbox" name="rememberUser" >
              <label>Recordarme</label>
            </div>
            <input type="hidden" name="submitted" value="1">
            <button type="submit" name="Login">Ingresar</button>
            <?php if ($submitted&&(!validoMail()||!validoPassword())) : ?>
				<span> Datos ingresados erroneos</span>
        		<a href="registration.html">Registrarse</a>
        	<?php else: ?>
        		<?php
        		$usuario=traerUsuario();
        		$_SESSION['email']=$_POST['email'];
        		$_SESSION['nombre']=array_key_exists('nombre',$usuario)&&$usuario['nombre']?$usuario['nombre']:null;
        		$_SESSION['telephone']=array_key_exists('telephone',$usuario)&&$usuario['telephone']?$usuario['telephone']:null;
        		$_SESSION['nacimiento']=array_key_exists('nacimiento',$usuario)&&$usuario['nacimiento']?$usuario['nacimiento']:null;
        		header("Location: perfil.php");
        		?>        		
        	<?php endif  ?>
          </form>
          <a href="#">¿Olvidó su contraseña?</a>
        </div>
      </div>
    </div>
  </body>
</html>
