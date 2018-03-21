<?PHP
    $paises = ['Argentina', "Peru", "Uruguay", "Brasil"];

    echo '<pre>';var_dump($_GET);echo '</pre>';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Contact us</title>
</head>
<body>

    <div id='fg_membersite'>
        <form id='register' action='' method='get'>
            <fieldset >
                <legend>Registrate</legend>

                <input type='hidden' name='submitted' id='submitted' value='1'/>

                <div class='short_explanation'>* campos requeridos</div>

                <br>

                <div class='container'>
                    <label for='name' >Nombre completo: </label><br/>
                    <input type='text' name='name' id='name' value='' maxlength="50" /><br/>
                    <span id='register_name_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='email' >Email:</label><br/>
                    <input type='text' name='email' id='email' value='' maxlength="50" /><br/>
                    <span id='register_email_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='username' >Nombre de usuario*:</label><br/>
                    <input type='text' name='username' id='username' value='' maxlength="50" /><br/>
                    <span id='register_username_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='password' >Contaseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='password' id='password' maxlength="50" />
                    <div id='register_password_errorloc' class='error' style='clear:both'></div>
                </div>
                <?php if( !array_key_exists('versionCorta', $_GET) || array_key_exists('versionCorta', $_GET) &&  !$_GET['versionCorta']): ?>
                <div class='container'>
                    <label for='repassword' >Confirme Contaseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='rethepwddiv' ></div>
                    <input type='password' name='repassword' id='repassword' maxlength="50" />
                    <div id='register_repassword_errorloc' class='error' style='clear:both'></div>
                </div>
                <?php endif; ?>

                <div class='container'>
                    <label for='pais' >Nacionalidad:</label><br/>
                    <div class='pwdwidgetdivpais' id='thepwddivpais' ></div>
                    <select name="pais">
                        <?php foreach ($paises as $indice => $nombrePais): ?>
                            <option value="<?= $nombrePais ?>"><?= $nombrePais?></option>
                        <?php endforeach; ?>
                    </select>
                    <div id='register_pais_errorloc' class='error' style='clear:both'></div>
                </div>


                <br>

                <div class='container'>
                    <input type='submit' name='Submit' value='Enviar' />
                </div>

            </fieldset>
        </form>

    </body>
</html>
