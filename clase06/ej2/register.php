<?PHP
  $paises = ['Argentina', "Peru", "Uruguay", "Brasil"];
  $nombre= array_key_exists('name',$_POST)&& $_POST['name']?$_POST['name']:null;
  $email= array_key_exists('email',$_POST)&& $_POST['email']?$_POST['email']:null;
  $username=array_key_exists('username',$_POST)&&$_POST['username']?$_POST['username']:null;
  $pais=array_key_exists('pais',$_POST)&&$_POST['pais']?$_POST['pais']:'Seleccione';
  $submitted=array_key_exists('submitted',$_POST)&&$_POST['submitted']?$_POST['submitted']:null;
  $password=array_key_exists('password',$_POST)&&$_POST['password']? $_POST['password']:null;
  $confPassword=array_key_exists('confPass',$_POST)&&$_POST['confPass']? $_POST['confPass']:null;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Contact us</title>
</head>
<body>

    <div id='fg_membersite'>
        <form id='register' action='' method='post'>
            <fieldset >
                <legend>Registrate</legend>
                <input type='hidden' name='submitted' id='submitted' value='1'/>
                <div class='short_explanation'>* campos requeridos</div>
                <div class='container'>
                    <label for='name' >Nombre completo: </label><br/>
                    <input type='text' name='name' id='name' value='<?= $nombre?>' maxlength="50" /><br/>
                    <?php if ($submitted&&!$nombre): ?>
                      <span id='register_name_errorloc' class='error'>* Error, ingrese</span>
                    <?php endif; ?>
                </div>
                <div class='container'>
                    <label for='email' >Email:</label><br/>
                    <input type='text' name='email' id='email' value='<?= $email?>' maxlength="50" /><br/>
                    <?php if ($submitted&&!$email): ?>
                      <span id='register_email_errorloc' class='error'>* Error, ingrese</span>
                    <?php endif; ?>
                </div>
                <div class='container'>
                    <label for='username' >Nombre de usuario*:</label><br/>
                    <input type='text' name='username' id='username' value='<?= $username?>' maxlength="50" /><br/>

                    <?php if ($submitted&&!$username): ?>
                      <span id='register_username_errorloc' class='error'>* Error, ingrese</span>
                    <?php endif; ?>
                </div>
                <div class='container'>
                    <label for='username' >pais*:</label><br/>
                    <div class='pwdwidgetdivpais' id='thepwddivpais' ></div>
                    <select  name="pais">
                      <option selected value="<?= $pais ?>"><?= $pais ?></option>
                      <?php foreach ($paises as $key => $value): ?>
                        <option value="<?= $value?>"><?= $value?></option>
                      <?php endforeach; ?>
                    </select>
                    <?php if ($submitted&&$pais=='Seleccione'): ?>
                      <span id='register_username_errorloc' class='error'>Seleccione</span>
                    <?php endif; ?>
                </div>
                <div class='container' style='height:80px;'>
                    <label for='password' >Contaseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='password' id='password' maxlength="50" />
                    <?php if ($submitted&&!$password): ?>
                      <div id='register_password_errorloc' class='error' style='clear:both'>Ingrese contraseña</div>
                    <?php endif; ?>
                </div>

                <?php if( !array_key_exists('versionCorta', $_GET) || array_key_exists('versionCorta', $_GET) &&  !$_GET['versionCorta']): ?>
                  <div class='container' style='height:80px;'>
                    <label for='password' >Confirmar Contraseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='confPass' id='confpass' maxlength="50" />
                    <?php if ($submitted&&!$confPassword): ?>
                      <div id='register_password_errorloc' class='error' style='clear:both'>Confirme contraseña</div>
                    <?php endif; ?>
                    <?php if ($password!==$confPassword): ?>
                      <div id='register_password_errorloc' class='error' style='clear:both'>No coincide con la original</div>
                    <?php endif; ?>
                  </div>
                <?php endif; ?>


                <div class='container'>
                  <input type='submit' name='Submit' value='Enviar' />
              </div>
            </fieldset>
      </form>
  </body>
</html>
<?php
  if (!is_null($nombre)&&!is_null($username)&&!is_null($email)&&
    !is_null($password)&&$password==$confPassword&&$pais!=='Seleccione') {
      $nombreFichero="usuarios.txt";
      $fp=fopen('usuarios.txt','r');
      $tamanio=filesize($nombreFichero);
      $contenido=fread($fp,$tamanio);
      fclose($fp);
      $archivo=json_decode($contenido,true);

      $usuario=[
          'nombre' => $nombre,
          'usuario'=>$username,
          'email'=>$email,
          'pais'=>$pais,
          'password'=>password_hash($password,PASSWORD_DEFAULT)
      ];
      $archivo["usuarios"][]=$usuario;
      $userJason=json_encode($archivo);
      $fp=fopen('usuarios.txt','w');
      fwrite($fp,$userJason);
      fclose($fp);
      header('Location:http://www.google.com/');
  }


 ?>
